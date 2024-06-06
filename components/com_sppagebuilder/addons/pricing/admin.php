<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http: //www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2022 JoomShaper
 * @license http: //www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct access
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Language\Text;

SpAddonsConfig::addonConfig(
	[
		'type'       => 'content',
		'addon_name' => 'pricing',
		'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING'),
		'desc'       => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_DESC'),
		'category'   => 'Content',
		'icon'       => '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path opacity=".5" fill-rule="evenodd" clip-rule="evenodd" d="M.15 9A2.85 2.85 0 013 6.15h5v1.7H3A1.15 1.15 0 001.85 9v14c0 .635.515 1.15 1.15 1.15h5v1.7H3A2.85 2.85 0 01.15 23V9zM31.85 23A2.85 2.85 0 0129 25.85h-5v-1.7h5A1.15 1.15 0 0030.15 23V9A1.15 1.15 0 0029 7.85h-5v-1.7h5A2.85 2.85 0 0131.85 9v14z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M23 1.707H9c-.22 0-.4.19-.4.426v27.734c0 .235.18.426.4.426h14c.22 0 .4-.19.4-.426V2.133c0-.235-.18-.426-.4-.426zM9 0C7.895 0 7 .955 7 2.133v27.734C7 31.045 7.895 32 9 32h14c1.105 0 2-.955 2-2.133V2.133C25 .955 24.105 0 23 0H9z" fill="currentColor"/><path d="M18.24 11.04c0 .587-.187 1.063-.56 1.43-.373.36-.86.577-1.46.65V14h-.67v-.87c-.56-.04-1.04-.197-1.44-.47a2.264 2.264 0 01-.86-1.11l1.19-.69c.213.533.583.837 1.11.91v-1.73h-.01l-.02-.01a8.986 8.986 0 01-.57-.23 4.433 4.433 0 01-.52-.29 2.134 2.134 0 01-.46-.39 2.306 2.306 0 01-.29-.53 1.979 1.979 0 01-.12-.7c0-.587.19-1.057.57-1.41.387-.353.86-.557 1.42-.61V5h.67v.89c.907.107 1.547.577 1.92 1.41l-1.16.68c-.16-.4-.413-.643-.76-.73v1.67c.62.247 1.037.443 1.25.59.513.367.77.877.77 1.53zM14.93 7.9c0 .147.047.277.14.39.093.107.253.217.48.33v-1.4c-.2.04-.353.12-.46.24a.639.639 0 00-.16.44zm1.29 3.85c.427-.093.64-.327.64-.7a.59.59 0 00-.16-.42c-.1-.113-.26-.22-.48-.32v1.44z" fill="currentColor"/><path opacity=".5" fill-rule="evenodd" clip-rule="evenodd" d="M21 16.5a.5.5 0 01-.5.5h-9a.5.5 0 010-1h9a.5.5 0 01.5.5zM19 18.5a.5.5 0 01-.5.5h-5a.5.5 0 010-1h5a.5.5 0 01.5.5z" fill="currentColor"/><rect x="11" y="24" width="10" height="3" rx="1.5" fill="currentColor"/></svg>',
		'inline'     => [
			'contenteditable' => true,
			'buttons'         => [
				'pricing_general_settings' => [
					'action'   => 'dropdown',
					'icon'     => 'addon::pricing',
					'tooltip'  => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING'),
					'fieldset' => [
						'tab_groups' => [
							'title' => [
								'fields' => [
									[
										'title' => [
											'type'  => 'text',
											'title' => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_TITLE'),
											'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_TITLE_DESC'),
											'std'   => 'Professional',
										],

										'heading_selector' => [
											'type'   => 'headings',
											'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
											'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
											'std'     => 'h3',
										],

										'title_margin_top' => [
											'type'        => 'slider',
											'title'       => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_TOP'),
											'max'         => 500,
											'std'         => ['xl' => 0],
											'responsive'  => true,
										],

										'title_margin_bottom' => [
											'type'        => 'slider',
											'title'       => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_BOTTOM'),
											'max'         => 500,
											'std'         => ['xl' => 20],
											'responsive'  => true,
										],
									],
								],
							],

							'features' => [
								'fields' => [
									[
										'pricing_content' => [
											'type'  => 'textarea',
											'title' => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_FEATURES'),
											'std'   => "10 GB Storage\n100 GB Bandwidth\nSpeed 500 Mbps\nDNS Automation\nSupport Time 24 hrs"
										],

										'pricing_content_gap' => [
											'type'       => 'slider',
											'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_FEATURES_GAP'),
											'std'        => ['xl' => 20],
											'max'        => 500,
											'responsive' => true,
										],

										'pricing_content_margin_bottom' => [
											'type'       => 'slider',
											'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_BOTTOM'),
											'std'        => ['xl' => 40],
											'max'        => 500,
											'responsive' => true,
										],
									],
								],
							],

							'price' => [
								'fields' => [
									[
										'price' => [
											'type'  => 'text',
											'title' => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_PRICE'),
											'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_PRICE_DESC'),
											'std'   => '$19.99',
											'inline' => true,
										],

										'price_symbol' => [
											'type'        => 'text',
											'title'       => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_PRICE_SYMBOL'),
											'placeholder' => '$',
											'inline' 	  => true,
										],

										'price_symbol_alignment' => [
											'type'   => 'select',
											'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_PRICE_SYMBOL_ALIGNMENT'),
											'values' => [
												'middle' => Text::_('COM_SPPAGEBUILDER_GLOBAL_MIDDLE'),
												'super'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_TOP'),
												'sub'    => Text::_('COM_SPPAGEBUILDER_GLOBAL_BOTTOM'),
											],
											'placeholder' => '$',
											'inline'      => true,
										],

										'duration' => [
											'type'  => 'text',
											'title' => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_DURATION'),
											'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_DURATION_DESC'),
											'inline' => true,
										],
									],
								],
							],
						],
					],
				],

				'pricing_typography_options' => [
					'action'   => 'dropdown',
					'icon'     => 'typography',
					'tooltip'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_TYPOGRAPHY'),
					'fieldset' => [
						'tab_groups' => [
							'title' => [
								'fields' => [
									[
										'title_typography' => [
											'type'     => 'typography',
											'fallbacks'   => [
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

							'features' => [
								'fields' => [
									[
										'pricing_content_typography' => [
											'type'     => 'typography',
											'fallbacks'   => [
												'font' => 'pricing_content_font_family',
												'size' => 'pricing_content_font_size',
											],
										],
									],
								],
							],

							'price' => [
								'fields' => [
									[
										'price_typography' => [
											'type'     => 'typography',
											'fallbacks'   => [
												'font'   => 'price_font_family',
												'size'   => 'price_font_size',
												'weight' => 'price_font_weight',
											],
										],
									],
								],
							],
						],
					],
				],

				'pricing_color_options' => [
					'action'      => 'dropdown',
					'type'        => 'placeholder',
					'tooltip'     => Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
					'default'     => '#4060FF',
					'placeholder' => [
						'type'      => 'HTMLElement',
						'element'   => 'div',
						'selector'  => '.builder-color-picker',
						'attribute' => [
							'type'     => 'style',
							'property' => 'background'
						],
						'display_field' => 'price_color',
					],
					'fieldset' => [
						[
							'title_text_color' => [
								'type'   => 'color',
								'std'	 => '#4060FF',
								'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_TITLE'),
							],

							'global_text_color' => [
								'type'   => 'color',
								'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_FEATURES'),
							],

							'price_color' => [
								'type'   => 'color',
								'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_PRICE'),
							],
						],
					],
				],

				'optin_form_button_options' => [
					'action'   => 'dropdown',
					'icon'     => 'button',
					'tooltip'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON'),
					'fieldset' => [
						'tab_groups' => [
							'basic' => [
								'fields' => [
									'button' => [
										'button_text' => [
											'type'  => 'text',
											'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LABEL'),
											'std'   => 'Subscribe',
											'inline' => true,
										],

										'button_type' => [
											'type'   => 'select',
											'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE'),
											'desc'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE_DESC'),
											'values' => [
												'default'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_DEFAULT'),
												'primary'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_PRIMARY'),
												'secondary' => Text::_('COM_SPPAGEBUILDER_GLOBAL_SECONDARY'),
												'success'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_SUCCESS'),
												'info'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_INFO'),
												'warning'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_WARNING'),
												'danger'    => Text::_('COM_SPPAGEBUILDER_GLOBAL_DANGER'),
												'dark'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_DARK'),
												'link'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
												'custom'    => Text::_('COM_SPPAGEBUILDER_GLOBAL_CUSTOM'),
											],
											'std'   => 'custom',
											'inline' => true,
										],

										'button_appearance' => [
											'type'   => 'select',
											'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE'),
											'desc'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_DESC'),
											'values' => [
												''         => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_FLAT'),
												'gradient' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_GRADIENT'),
												'outline'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_OUTLINE'),
											],
											'std'   => '',
											'inline' => true,
											'depends' => [['button_type', '!=', 'link']]
										],

										'button_shape' => [
											'type'   => 'select',
											'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE'),
											'desc'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_DESC'),
											'values' => [
												'rounded' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_ROUNDED'),
												'square'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_SQUARE'),
												'round'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_ROUND'),
											],
											'std'   => 'square',
											'inline' => true,
											'depends' => [['button_type', '!=', 'link']]
										],

										'link_button_padding_bottom' => [
											'type'    => 'slider',
											'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_PADDING_BOTTOM'),
											'max'     => 100,
											'std'     => '',
											'depends' => [['button_type', '=', 'link']]
										],
									],

									'options' => [
										'button_size' => [
											'type'   => 'select',
											'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE'),
											'desc'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DESC'),
											'values' => [
												''    => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DEFAULT'),
												'lg'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_LARGE'),
												'xlg' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_XLARGE'),
												'sm'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_SMALL'),
												'xs'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_EXTRA_SAMLL'),
												'custom' => Text::_('COM_SPPAGEBUILDER_GLOBAL_CUSTOM'),
											],
											'inline' => true,
											'std'   => '',
										],

										'button_padding' => [
											'type'    => 'padding',
											'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING'),
											'responsive' => true,
											'std' => ['xxl' => '', 'xl' => '8px 22px 10px 22px', 'lg' => '', 'md' => '', 'sm' => '', 'xs' => ''],
											'depends' => [['button_size', '=', 'custom']]
										],

										'button_block' => [
											'type'   => 'radio',
											'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BLOCK'),
											'values' => [
												''               => Text::_('JNO'),
												'sppb-btn-block' => Text::_('JYES'),
											],
											'std'     => '',
											'depends' => [['button_type', '!=', 'link']]
										],
									],
								],
							],

							'icon' => [
								'fields' => [
									[
										'button_icon' => [
											'type'  => 'icon',
											'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON'),
											'desc'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_DESC'),
										],

										'button_icon_position' => [
											'type'   => 'radio',
											'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_POSITION'),
											'values' => [
												'left'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
												'right' => Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
											],
											'std' => 'left',
										],
									],
								],
							],

							'typography' => [
								'fields' => [
									[
										'button_typography' => [
											'type'     => 'typography',
											'fallbacks' => [
												'font' => 'button_font_family',
												'letter_spacing' => 'button_letterspace',
												'weight' => 'button_fontstyle.weight',
												'italic' => 'button_fontstyle.italic',
												'underline' => 'button_fontstyle.underline',
												'uppercase' => 'button_fontstyle.uppercase',
											],
										],
									],
								],
							],

							'link' => [
								'fields' => [
									[
										'button_url' => [
											'type'  => 'link',
											'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
										],
									],
								],
							],

							'color' => [
								'fields' => [
									'normal' => [
										'button_color' => [
											'type' => 'color',
											'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_COLOR'),
											'std' => '#FFFFFF',
											'depends' => [['button_type', '=', 'custom']],
										],

										'button_background_color' => [
											'type'    => 'color',
											'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
											'std'     => '#3366FF',
											'depends' => [
												['button_appearance', '!=', 'gradient'],
												['button_type', '=', 'custom'],
											],
										],

										'button_background_gradient' => [
											'type' => 'gradient',
											'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
											'std' => [
												"color"  => "#3366FF",
												"color2" => "#0037DD",
												"deg" => "45",
												"type" => "linear"
											],
											'depends' => [
												['button_appearance', '=', 'gradient'],
												['button_type', '=', 'custom'],
											],
										],

										// link button
										'link_button_color' => [
											'type'    => 'color',
											'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_COLOR'),
											'depends' => [['button_type', '=', 'link']]
										],

										'link_button_border_width' => [
											'type'    => 'slider',
											'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_WIDTH'),
											'max'     => 30,
											'depends' => [['button_type', '=', 'link']]
										],

										'link_button_border_color' => [
											'type'    => 'color',
											'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR'),
											'std'     => '',
											'depends' => [['button_type', '=', 'link']]
										],
									],

									'hover' => [
										'button_color_hover' => [
											'type' => 'color',
											'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_COLOR'),
											'std' => '#FFFFFF',
											'depends' => [
												['button_type', '=', 'custom'],
											],
										],

										'button_background_color_hover' => [
											'type'    => 'color',
											'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
											'std'     => '#0037DD',
											'depends' => [
												['button_appearance', '!=', 'gradient'],
												['button_type', '=', 'custom'],
											],
										],

										'button_background_gradient_hover' => [
											'type' => 'gradient',
											'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
											'std' => [
												"color"  => "#0037DD",
												"color2" => "#3366FF",
												"deg" => "45",
												"type" => "linear"
											],
											'depends' => [
												['button_appearance', '=', 'gradient'],
												['button_type', '=', 'custom']
											],
										],

										'link_button_hover_color' => [
											'type'    => 'color',
											'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_COLOR'),
											'std'     => '',
											'depends' => [['button_type', '=', 'link']]
										],

										'link_button_border_hover_color' => [
											'type'    => 'color',
											'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR'),
											'std'     => '',
											'depends' => [['button_type', '=', 'link']]
										],
									],
								],
							],
						],
					],
				],

				'pricing_alignment_separator' => [
					'action' => 'separator'
				],

				'pricing_alignment_options' => [
					'action' => 'dropdown',
					'type' => 'placeholder',
					'tooltip'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_ALIGNMENT'),
					'style' => 'inline',
					'showCaret' => true,
					'placeholder' => [
						'type' => 'list',
						'options' => [
							'left' 		=> ['icon' => 'textAlignLeft'],
							'center' 	=> ['icon' => 'textAlignCenter'],
							'right' 	=> ['icon' => 'textAlignRight'],
						]
					],
					'default' => 'left',
					'fieldset' => [
						'basic' => [
							'alignment' => [
								'type' => 'alignment',
								'inline' => true,
							]
						]
					]
				],
			],
		],

		'attr'       => [
			'general' => [
				// Symbol
				'toggle_symbol' => [
					'type'  => 'header',
					'style'	=> 'toggle',
					'uuid'	=> 'toggle_symbol',
					'title'	=> Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_SYMBOL'),
					'group'	=> [
						'price_symbol_color',
						'price_symbol_font_size',
					],
					'depends' => [
						['price_symbol', '!=', '']
					],
				],

				'price_symbol_color' => [
					'type'    => 'color',
					'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
				],

				'price_symbol_font_size' => [
					'type'       => 'slider',
					'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_FONT_SIZE'),
					'max'        => 500,
					'responsive' => true,
				],

				// Duration
				'toggle_duration' => [
					'type'  => 'header',
					'style'	=> 'toggle',
					'uuid'	=> 'toggle_duration',
					'title'	=> Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_DURATION'),
					'group'	=> [
						'duration_color',
						'duration_font_size',
					],
					'depends' => [['duration', '!=', '']]
				],

				'duration_color' => [
					'type'    => 'color',
					'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
				],

				'duration_font_size' => [
					'type'       => 'slider',
					'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_FONT_SIZE'),
					'max'        => 500,
					'responsive' => true,
				],

				// Pricing
				'toggle_pricing' => [
					'type'  => 'header',
					'style'	=> 'toggle',
					'uuid'	=> 'toggle_pricing',
					'title'	=> Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_PRICING'),
					'group'	=> [
						'price_position',
						'price_margin_bottom',
						'price_padding_bottom',
						'price_border_separator',
						'price_border_bottom',
						'price_border_bottom_color',
					],
				],

				'price_position' => [
					'type'   => 'radio',
					'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_PRICE_POSITION'),
					'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_PRICE_POSITION_DESC'),
					'values' => [
						'after'  => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_PRICE_POSITION_AFTER_TITLE'),
						'before' => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_PRICE_POSITION_BEFORE_BUTTON'),
					],
					'std' => 'after',
				],

				'price_margin_bottom' => [
					'type'       => 'slider',
					'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_BOTTOM'),
					'std'        => ['xxl' => 30, 'xl' => 30, 'lg' => 30, 'md' => 30, 'sm' => 30, 'xs' => 30],
					'max'        => 500,
					'responsive' => true,
				],

				'price_padding_bottom' => [
					'type'       => 'slider',
					'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING_BOTTOM'),
					'max'        => 200,
					'responsive' => true,
				],

				'price_border_separator' => [
					'type'	=> 'separator',
				],

				'price_border_bottom' => [
					'type'    => 'slider',
					'title'   => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_PRICE_BORDER_BOTTOM'),
					'max'     => 15,
				],

				'price_border_bottom_color' => [
					'type'    => 'color',
					'title'   => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_PRICE_BORDER_BOTTOM_COLOR'),
				],

				// hover options
				'toggle_hover_options' => [
					'type'  => 'header',
					'style'	=> 'toggle',
					'uuid'	=> 'toggle_hover_options',
					'title'	=> Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_HOVER_OPTIONS'),
					'group'	=> [
						'pricing_hover_scale',
						'pricing_hover_color',
						'pricing_hover_bg',
						'pricing_hover_border_color',
						'pricing_hover_boxshadow',
					],
				],

				'pricing_hover_scale' => [
					'type'  => 'slider',
					'title' => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_SCALE'),
					'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_PRICING_SCALE_DESC'),
					'min'   => 1,
					'max'   => 3,
					'step'  => .01,
					'std'   => 1,
				],

				'pricing_hover_color' => [
					'type'  => 'color',
					'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_COLOR'),
				],

				'pricing_hover_bg' => [
					'type'  => 'color',
					'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
				],

				'pricing_hover_border_color' => [
					'type'  => 'color',
					'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR'),
				],

				'pricing_hover_boxshadow' => [
					'type'  => 'boxshadow',
					'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BOX_SHADOW_HOVER'),
					'desc'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BOX_SHADOW_HOVER_DESC'),
					'std'   => '0 0 0 0 #ffffff'
				],
			],
		],
	]
);
