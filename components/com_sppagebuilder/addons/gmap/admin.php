<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http: //www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2022 JoomShaper
 * @license http: //www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct access
defined ('_JEXEC') or die ('Restricted access');

use Joomla\CMS\Language\Text;
use Joomla\CMS\Component\ComponentHelper;

$params   = ComponentHelper::getParams('com_sppagebuilder');
$gmap_api = $params->get('gmap_api', '');

SpAddonsConfig::addonConfig([
	'type'       => 'content',
	'addon_name' => 'gmap',
	'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP'),
	'desc'       => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_DESC'),
	'icon'       => '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g opacity=".5" fill="currentColor"><path d="M16.238 15.429a4.268 4.268 0 01-4.286-4.286c0-1.62.953-2.762.953-2.762l-5.62 1.524L6.3 16.7c1.238 2.762 3.367 4.92 4.89 7.014L19.5 14c-.381.381-1.643 1.429-3.262 1.429z"/><path d="M19.8.7l-6.893 2.744v4.952s1.238-1.524 3.334-1.524c2.19 0 4.285 1.81 4.285 4.286 0 1.143-.74 2.461-1.026 2.842l6.74-8.08C24.718 3.253 22.563 1.652 19.8.7z"/></g><path d="M26.238 5.905l-15.047 17.81c.952 1.237 2 2.761 2.57 3.714.668 1.238.953 2.095 1.43 3.523.285.857.57 1.048 1.142 1.048s.858-.381 1.143-1.048c.476-1.428.762-2.476 1.334-3.428 1.047-1.905 2.476-3.62 3.714-5.334.38-.476 2.666-3.238 3.714-5.333 0 0 1.238-2.38 1.238-5.714 0-3.048-1.238-5.238-1.238-5.238zM12.905 8.38L19.8.701S18.143 0 16.143 0c-4 0-6.857 2-8.572 4C6.143 5.619 5 8.19 5 11.143 5 14.286 6.3 16.7 6.3 16.7l6.605-8.319z" fill="currentColor"/></svg>',
	'inline'     => [
		'buttons' => [
			'gmap_general_options' => [
				'action'   => 'dropdown',
				'icon'     => 'addon::gmap',
				'tooltip'  => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP'),
				'fieldset' => [
					'tab_groups' => [
						'map' => [
							'fields' => [
								[
									'message' => [ // todo: not working
										'type'    => empty($gmap_api) ? 'alert' : 'hidden',
										'message' => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_APIKEY_MISSING'),
									],
			
									'map' => [
										'type'  => 'gmap',
										'title' => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_LOCATION'),
										'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_LOCATION_DESC'),
										'std'   => '23.755349,90.375961',
										'inline' => true,
									],
			
									'type' => [
										'type'   => 'select',
										'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_TYPE'),
										'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_TYPE_DESC'),
										'values' => [
											'ROADMAP'   => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_TYPE_ROADMAP'),
											'SATELLITE' => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_TYPE_SATELLITE'),
											'HYBRID'    => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_TYPE_HYBRID'),
											'TERRAIN'   => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_TYPE_TERRAIN'),
										],
										'std'     => 'ROADMAP',
										'inline'  => true,
									],
			
									'height' => [
										'type'        => 'slider',
										'title'       => Text::_('COM_SPPAGEBUILDER_GLOBAL_HEIGHT'),
										'desc'        => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_HEIGHT_DESC'),
										'std'         => ['xl' => 300],
										'max'         => 2000,
										'responsive'  => true,
									],

									'multi_location' => [
										'type'   => 'checkbox',
										'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_MULTI_LOCATION'),
										'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_MULTI_LOCATION_DESC'),
										'values' => [
											1 => Text::_('YES'),
											0 => Text::_('NO'),
										],
										'std' => 0
									],
						
									'multi_location_items' => [
										'title' => Text::_('COM_SPPAGEBUILDER_ADDON_MULTI_LOCATION_ITEMS'),
										'attr'  => [
											'location_item' => [
												'type'  => 'gmap',
												'title' => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_LOCATION'),
												'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_LOCATION_DESC'),
												'std'   => '22.3435442,91.765449',
											],
											
											'location_popup_text' => [
												'type'  => 'textarea',
												'title' => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_INFOWINDOW'),
												'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_INFOWINDOW_DESC'),
												'std'   => 'Chittagong',
											],
										],
										'depends' => [['multi_location', '!=', 0]]
									],
								],
							],
						],

						'options' => [
							'fields' => [
								[
									'infowindow' => [
										'type'  => 'textarea',
										'title' => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_INFOWINDOW'),
										'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_INFOWINDOW_DESC'),
									],

									'zoom' => [
										'type'    => 'slider',
										'title'   => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_ZOOM'),
										'desc'    => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_ZOOM_DESC'),
										'max'     => 25,
									],
						
									'mousescroll' => [
										'type'   => 'radio',
										'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_MOUSE_SCROLL'),
										'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_DISABLE_MOUSE_SCROLL_DESC'),
										'values' => [
											'false' => Text::_('JNO'),
											'true'  => Text::_('JYES'),
										],
										'std'     => 'true',
									],
									
									'show_controllers' => [
										'type'   => 'radio',
										'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_DISABLE_SHOW_CONTROLLERS'),
										'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_GMAP_DISABLE_SHOW_CONTROLLERS_DESC'),
										'values' => [
											'false' => Text::_('JYES'),
											'true'  => Text::_('JNO'),
										],
										'std'     => 'false',
									],
								],
							],
						],

						'title' => [
							'fields' => [
								'title' => [
									'title' => [
										'type'  => 'text',
										'title' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
										'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
									],
						
									'heading_selector' => [
										'type'   => 'headings',
										'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
										'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
										'std'   => 'h3',
									],
			
									'title_margin_top' => [
										'type'       => 'slider',
										'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_TOP'),
										'max'        => 400,
										'responsive' => true,
									],
								
									'title_margin_bottom' => [
										'type'       => 'slider',
										'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_BOTTOM'),
										'max'        => 400,
										'responsive' => true,
									],
								],
			
								'color' => [
									'title_text_color' => [
										'type'   => 'color',
										'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR'),
										'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR_DESC'),
										'inline' => true
									],
								],
			
								'typography' => [
									'title_typography' => [
										'type'      => 'typography',
										'fallbacks' => [
											'font'           => 'title_font_family',
											'size'           => 'title_fontsize',
											'line_height'    => 'title_lineheight',
											'letter_spacing' => 'title_letterspace',
											'uppercase'      => 'title_font_style.uppercase',
											'italic'         => 'title_font_style.italic',
											'underline'      => 'title_font_style.underline',
											'weight'         => 'title_font_style.weight',
										],
									],
								],
							],
						],
					],
				],
			],

			'gmap_add_new_multi_location' => [
				'action' => 'click',
				'type' => 'plus',
				'icon' => 'plusCircle',
				'tooltip' => Text::_('COM_SPPAGEBUILDER_GLOBAL_ADD_NEW'),
				'meta' => [
					'key' => 'multi_location_items',
					'location_item' => '22.3435442,91.765449',
					'location_popup_text' => 'Chittagong',
				],
				'depends' => [['multi_location', '!=', 0]]
			],
		],
	],

	'attr' => [
		'general' => [
			
		],
	],
]);