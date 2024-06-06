<?php

namespace WpOrg\Requests;

use WpOrg\Requests\Exception\InvalidArgument;
use WpOrg\Requests\Iri;
use WpOrg\Requests\Response\Headers;
use WpOrg\Requests\Utility\CaseInsensitiveDictionary;
use WpOrg\Requests\Utility\InputValidator;

class Cookie {
	public $name;

	public $value;

	public $attributes = [];

	public $flags = [];

	public $reference_time = 0;

	public function __construct($name, $value, $attributes = [], $flags = [], $reference_time = null) {
		if (is_string($name) === false) {
			throw InvalidArgument::create(1, '$name', 'string', gettype($name));
		}

		if (is_string($value) === false) {
			throw InvalidArgument::create(2, '$value', 'string', gettype($value));
		}

		if (InputValidator::has_array_access($attributes) === false || InputValidator::is_iterable($attributes) === false) {
			throw InvalidArgument::create(3, '$attributes', 'array|ArrayAccess&Traversable', gettype($attributes));
		}

		if (is_array($flags) === false) {
			throw InvalidArgument::create(4, '$flags', 'array', gettype($flags));
		}

		if ($reference_time !== null && is_int($reference_time) === false) {
			throw InvalidArgument::create(5, '$reference_time', 'integer|null', gettype($reference_time));
		}

		$this->name       = $name;
		$this->value      = $value;
		$this->attributes = $attributes;
		$default_flags    = [
			'creation'    => time(),
			'last-access' => time(),
			'persistent'  => false,
			'host-only'   => true,
		];
		$this->flags      = array_merge($default_flags, $flags);

		$this->reference_time = time();
		if ($reference_time !== null) {
			$this->reference_time = $reference_time;
		}

		$this->normalize();
	}

	public function __toString() {
		return $this->value;
	}

	public function is_expired() {
		if (isset($this->attributes['max-age'])) {
			$max_age = $this->attributes['max-age'];
			return $max_age < $this->reference_time;
		}

		if (isset($this->attributes['expires'])) {
			$expires = $this->attributes['expires'];
			return $expires < $this->reference_time;
		}

		return false;
	}

	public function uri_matches(Iri $uri) {
		if (!$this->domain_matches($uri->host)) {
			return false;
		}

		if (!$this->path_matches($uri->path)) {
			return false;
		}

		return empty($this->attributes['secure']) || $uri->scheme === 'https';
	}

	public function domain_matches($domain) {
		if (is_string($domain) === false) {
			return false;
		}

		if (!isset($this->attributes['domain'])) {
			return true;
		}

		$cookie_domain = $this->attributes['domain'];
		if ($cookie_domain === $domain) {
			return true;
		}

		if ($this->flags['host-only'] === true) {
			return false;
		}

		if (strlen($domain) <= strlen($cookie_domain)) {
			return false;
		}

		if (substr($domain, -1 * strlen($cookie_domain)) !== $cookie_domain) {
			return false;
		}

		$prefix = substr($domain, 0, strlen($domain) - strlen($cookie_domain));
		if (substr($prefix, -1) !== '.') {
			return false;
		}

		return !preg_match('#^(.+\.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$#', $domain);
	}

	public function path_matches($request_path) {
		if (empty($request_path)) {
			$request_path = '/';
		}

		if (!isset($this->attributes['path'])) {
			return true;
		}

		if (is_scalar($request_path) === false) {
			return false;
		}

		$cookie_path = $this->attributes['path'];

		if ($cookie_path === $request_path) {
			return true;
		}

		if (strlen($request_path) > strlen($cookie_path) && substr($request_path, 0, strlen($cookie_path)) === $cookie_path) {
			if (substr($cookie_path, -1) === '/') {
				return true;
			}

			if (substr($request_path, strlen($cookie_path), 1) === '/') {
				return true;
			}
		}

		return false;
	}

	public function normalize() {
		foreach ($this->attributes as $key => $value) {
			$orig_value = $value;

			if (is_string($key)) {
				$value = $this->normalize_attribute($key, $value);
			}

			if ($value === null) {
				unset($this->attributes[$key]);
				continue;
			}

			if ($value !== $orig_value) {
				$this->attributes[$key] = $value;
			}
		}

		return true;
	}

	protected function normalize_attribute($name, $value) {
		switch (strtolower($name)) {
			case 'expires':
				if (is_int($value)) {
					return $value;
				}

				$expiry_time = strtotime($value);
				if ($expiry_time === false) {
					return null;
				}

				return $expiry_time;

			case 'max-age':
				if (is_int($value)) {
					return $value;
				}

				if (!preg_match('/^-?\d+$/', $value)) {
					return null;
				}

				$delta_seconds = (int) $value;
				if ($delta_seconds <= 0) {
					$expiry_time = 0;
				} else {
					$expiry_time = $this->reference_time + $delta_seconds;
				}

				return $expiry_time;

			case 'domain':
				if (empty($value)) {
					return null;
				}

				if ($value[0] === '.') {
					$value = substr($value, 1);
				}

				return $value;

			default:
				return $value;
		}
	}

	public function format_for_header() {
		return sprintf('%s=%s', $this->name, $this->value);
	}

	public function format_for_set_cookie() {
		$header_value = $this->format_for_header();
		if (!empty($this->attributes)) {
			$parts = [];
			foreach ($this->attributes as $key => $value) {
				if (is_numeric($key)) {
					$parts[] = $value;
				} else {
					$parts[] = sprintf('%s=%s', $key, $value);
				}
			}

			$header_value .= '; ' . implode('; ', $parts);
		}

		return $header_value;
	}

	public static function parse($cookie_header, $name = '', $reference_time = null) {
		if (is_string($cookie_header) === false) {
			throw InvalidArgument::create(1, '$cookie_header', 'string', gettype($cookie_header));
		}

		if (is_string($name) === false) {
			throw InvalidArgument::create(2, '$name', 'string', gettype($name));
		}

		$parts   = explode(';', $cookie_header);
		$kvparts = array_shift($parts);

		if (!empty($name)) {
			$value = $cookie_header;
		} elseif (strpos($kvparts, '=') === false) {
			$name  = '';
			$value = $kvparts;
		} else {
			list($name, $value) = explode('=', $kvparts, 2);
		}

		$name  = trim($name);
		$value = trim($value);

		$attributes = new CaseInsensitiveDictionary();

		if (!empty($parts)) {
			foreach ($parts as $part) {
				if (strpos($part, '=') === false) {
					$part_key   = $part;
					$part_value = true;
				} else {
					list($part_key, $part_value) = explode('=', $part, 2);
					$part_value                  = trim($part_value);
				}

				$part_key              = trim($part_key);
				$attributes[$part_key] = $part_value;
			}
		}

		return new static($name, $value, $attributes, [], $reference_time);
	}

	public static function parse_from_headers(Headers $headers, Iri $origin = null, $time = null) {
		$cookie_headers = $headers->getValues('Set-Cookie');
		if (empty($cookie_headers)) {
			return [];
		}

		$cookies = [];
		foreach ($cookie_headers as $header) {
			$parsed = self::parse($header, '', $time);

			if (empty($parsed->attributes['domain']) && !empty($origin)) {
				$parsed->attributes['domain'] = $origin->host;
				$parsed->flags['host-only']   = true;
			} else {
				$parsed->flags['host-only'] = false;
			}

			$path_is_valid = (!empty($parsed->attributes['path']) && $parsed->attributes['path'][0] === '/');
			if (!$path_is_valid && !empty($origin)) {
				$path = $origin->path;

				if (substr($path, 0, 1) !== '/') {
					$path = '/';
				} elseif (substr_count($path, '/') === 1) {
					$path = '/';
				} else {
					$path = substr($path, 0, strrpos($path, '/'));
				}

				$parsed->attributes['path'] = $path;
			}

			if (!empty($origin) && !$parsed->domain_matches($origin->host)) {
				continue;
			}

			$cookies[$parsed->name] = $parsed;
		}

		return $cookies;
	}
}
