<?php

if (!defined('REQUESTS_SILENCE_PSR0_DEPRECATIONS') || REQUESTS_SILENCE_PSR0_DEPRECATIONS !== true) {
	trigger_error(
		'The PSR-0 `Requests_...` class names in the Requests library are deprecated.'
		. ' Switch to the PSR-4 `WpOrg\Requests\...` class names at your earliest convenience.',
		E_USER_DEPRECATED
	);

	if (!defined('REQUESTS_SILENCE_PSR0_DEPRECATIONS')) {
		define('REQUESTS_SILENCE_PSR0_DEPRECATIONS', true);
	}
}

require_once dirname(__DIR__) . '/src/Requests.php';

class Requests extends WpOrg\Requests\Requests {

	public static function autoloader($class) {
		if (class_exists('WpOrg\Requests\Autoload') === false) {
			require_once dirname(__DIR__) . '/src/Autoload.php';
		}

		return WpOrg\Requests\Autoload::load($class);
	}

	public static function register_autoloader() {
		require_once dirname(__DIR__) . '/src/Autoload.php';
		WpOrg\Requests\Autoload::register();
	}
}
