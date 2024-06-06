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

SpAddonsConfig::addonConfig(
	[
		'type'       => 'content',
		'addon_name' => 'animated_heading',
		'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_HEADING'),
		'desc'       => Text::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_HEADING_DESC'),
		'category'   => 'General',
		'icon'       => '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path opacity=".5" d="M18.2 12c-2.1.3-4.1 2.1-5.5 4.4C10.8 11.3 7.1 7 2.5 7c-.4 0-.8 0-1.1.1-.8.1-1.4.8-1.4 1.6 0 1 .9 1.7 1.9 1.6.2-.1.4-.1.6-.1 4.3 0 8.2 7 8.2 13.1 0 .8.6 1.5 1.3 1.6 1.1.2 2-.6 2-1.6 0-3.1 2.3-7.3 4.3-8-.1-.6-.2-1.2-.2-1.8 0-.6 0-1 .1-1.5z" fill="currentColor"/><path d="M26.3 19.3c3.2 0 5.7-2.6 5.7-5.7s-2.6-5.7-5.7-5.7-5.7 2.6-5.7 5.7 2.5 5.7 5.7 5.7z" fill="currentColor"/></svg>',
		'inline'     => [
            'contenteditable' => true,
            'buttons'         => [
				'animated_heading_general_options' => [
					'action'   => 'dropdown',
					'icon'     => 'addon::animated_heading',
					'tooltip'  => Text::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_HEADING'),
					'fieldset' => [
						'tab_groups' => [
							'content' => [
								'fields' => [
									[
										'heading_style' => [
											'type'   => 'select',
											'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_STYLE'),
											'values' => ['highlighted' => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_STYLE_HIGH'), 'text-animation' => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_STYLE_ANI_TEXT')],
											'std'    => 'text-animation',
										],
			
										'heading_before_part' => [
											'type'  => 'text',
											'title' => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_BEFORE_TEXT'),
											'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_BEFORE_TEXT_DESC'),
											'std'   => 'This heading is'
										],
			
										'animated_text' => [
											'type'    => 'textarea',
											'title'   => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_ANIMATED_TEXT'),
											'desc'    => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_ANIMATED_TEXT_DESC'),
											'std'     => "awesome\nnice\ncool",
											'depends' => [['heading_style', '=', 'text-animation']],
										],
			
										'highlighted_text' => [
											'type'    => 'text',
											'title'   => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_TEXT'),
											'desc'    => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_TEXT_DESC'),
											'std'     => 'awesome',
											'depends' => [['heading_style', '=', 'highlighted']]
										],
						
										'heading_after_part' => [
											'type'  => 'text',
											'title' => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_AFTER_TEXT'),
											'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_AFTER_TEXT_DESC'),
											'std'   => 'from the beginning.'
										],
			
										'heading_selector' => [
											'type'  => 'headings',
											'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_HTML_ELEMENT'),
											'std'   => 'h3'
										],

										'heading_margin'=> [
											'type'       => 'margin',
											'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN'),
											'desc'       => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_DESC'),
											'std'        => '',
											'responsive' => true
										],
						
										'heading_padding'=> [
											'type'       => 'padding',
											'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING'),
											'desc'       => Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING_DESC'),
											'std'        => '',
											'responsive' => true
										],
									],
								],
							],

							'animation' => [
								'fields' => [
									[
										'text_animation_name' => [
											'type'    => 'select',
											'title'   => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_TEXT_ANI'),
											'desc'    => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_TEXT_ANI_DESC'),
											'values'  => ['blinds' => 'Blinds', 'clip' => 'Clip', 'delete-typing' => 'Typing', 'flip' => 'Flip', 'fade-in' => 'Fade In', 'loading-bar' => 'Loading Bar', 'scale' => 'Scale', 'slide' => 'Swirl', 'push' => 'Push', 'wave' => 'Twist'],
											'std'     => 'clip',
											'depends' => [['heading_style', '=', 'text-animation'], ['animated_text', '!=', '']],
										],
										
										'shape_width' => [
											'type'    => 'slider',
											'title'   => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_ANIMATED_SHAP_WIDTH'),
											'std'     => '',
											'max'     => 200,
											'depends' => [['heading_style', '=', 'highlighted'], ['highlighted_shape', '!=', '']]
										],
						
										'shape_radius' => [
											'type'    => 'checkbox',
											'title'   => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_ANIMATED_SHAP_RADIUS'),
											'std'     => 0,
											'depends' => [['heading_style', '=', 'highlighted'], ['highlighted_shape', '!=', '']]
										],
			
										'highlighted_shape' => [
											'type'    => 'select',
											'title'   => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_SHAPE'),
											'desc'    => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_HEADING_SHAPE_DESC'),
											'values'  => ['bg-fill' => 'Background Fill', 'circle' => 'Circle', 'cross' => 'Cross(X)', 'diagonal' => 'Diagonal', 'strikethrough' => 'Strikethrough', 'square' => 'Rectangle', 'top-botm-line' => 'Top Bottom Line', 'underline' => 'Underline', 'dubl-underline' => 'Dubble Underline', 'zigzag-underline' => 'Scribble Underline', 'sharpe-zigzag' => 'Sharpe Zigzag Underline', 'wave' => 'Wave'],
											'std'     => 'circle',
											'depends' => [['heading_style', '=', 'highlighted'], ['highlighted_text', '!=', '']],
										],
									],
								],
							],
						],
					],
				],

				'animated_heading_typography_options' => [
					'type'     => 'icon',
					'icon'     => 'typography',
					'action'   => 'dropdown',
					'tooltip'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_TYPOGRAPHY'),
					'fieldset' => [
						'tab_groups' => [
							'normal' => [
								'fields' => [
									[
										'heading_typography' => [
											'type'     => 'typography',
											'fallbacks'   => [
												'font' => 'heading_font_family',
												'size' => 'heading_fontsize',
												'line_height' => 'heading_lineheight',
												'letter_spacing' => 'heading_letterspace',
												'uppercase' => 'heading_font_style.uppercase',
												'italic' => 'heading_font_style.italic',
												'underline' => 'heading_font_style.underline',
												'weight' => 'heading_font_style.weight',
											],
										],
									],
								],
							],

							'animated' => [
								'fields' => [
									[
										'animated_text_typography' => [
											'type'     => 'typography',
											'fallbacks'   => [
												'font' => 'animated_text_font_family',
												'size' => 'animated_text_fontsize',
												'letter_spacing' => 'animated_text_letterspace',
												'uppercase' => 'animated_text_font_style.uppercase',
												'italic' => 'animated_text_font_style.italic',
												'underline' => 'animated_text_font_style.underline',
												'weight' => 'animated_text_font_style.weight',
											],
										],
									],
								],
							],
							
							'highlighted' => [
								'fields' => [
									[
										'highlighted_typography' => [
											'type'     => 'typography',
											'fallbacks'   => [
												'font' => 'highlighted_text_font_family'
											],
										],
									],
								],
							],
						],
					],
				],

				'animated_heading_color_options' => [
                    'action'      => 'dropdown',
                    'type'        => 'placeholder',
					'tooltip'     => Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
                    'default'     => '#3366FF',
                    'placeholder' => [
                        'type'      => 'HTMLElement',
                        'element'   => 'div',
                        'selector'  => '.builder-color-picker',
                        'attribute' => [
                            'type'     => 'style',
                            'property' => 'background'
                        ],
                        'display_field' => 'animated_text_color',
                    ],

                    'fieldset' => [
						[
							'animated_text_color' => [
								'type'    => 'color',
								'title'   => Text::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_TEXT_COLOR'),
								'std'     => '#3366FF',
							],

							'heading_color' => [
								'type'    => 'color',
								'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_COLOR'),
								'std'     => '#333333',
							],

							'shape_color' => [
								'type'    => 'color',
								'title'   => Text::_('COM_SPPAGEBUILDER_ADDON_ANI_ANIMATED_SHAPE_COLOR'),
								'depends' => [['heading_style', '=', 'highlighted']]
							],
						],
                    ],
                ],

				'animated_heading_alignment_separator' => [
                    'action' => 'separator',
                ],

                'animated_heading_alignment_options' => [
                    'action'      => 'dropdown',
                    'type'        => 'placeholder',
					'tooltip'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_ALIGNMENT'),
                    'style'       => 'inline',
                    'showCaret'   => true,
                    'placeholder' => [
                        'type'    => 'list',
                        'options' => [
                            'left'   => ['icon' => 'textAlignLeft'],
                            'center' => ['icon' => 'textAlignCenter'],
                            'right'  => ['icon' => 'textAlignRight'],
                        ],
                        'display_field' => 'alignment'
                    ],
                    'fieldset' => [
                        'basic' => [
                            'alignment' => [
                                'type'              => 'alignment',
                                'inline'            => true,
                                'responsive'        => true,
                                'available_options' => ['left', 'center', 'right'],
                            ]
                        ]
                    ]
                ],
			],
		],

		// merge with global margin & padding
		'attr'=> [
			
        ],
    ]
);
