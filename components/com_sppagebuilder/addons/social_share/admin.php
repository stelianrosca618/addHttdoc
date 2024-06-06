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

SpAddonsConfig::addonConfig([
    'type'       => 'content',
    'addon_name' => 'social_share',
    'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_SHARE'),
    'desc'       => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_SHARE_DESC'),
    'category'   => 'Media',
    'icon'       => '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M24.5 2a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM19 5.5a5.5 5.5 0 1111 0 5.5 5.5 0 01-11 0zM6.5 12.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM1 16a5.5 5.5 0 1111 0 5.5 5.5 0 01-11 0zM24.5 23a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM19 26.5a5.5 5.5 0 1111 0 5.5 5.5 0 01-11 0z" fill="currentColor"/><path opacity=".5" fill-rule="evenodd" clip-rule="evenodd" d="M9.521 17.762a1 1 0 011.367-.361l10.246 5.97a1 1 0 01-1.007 1.728l-10.245-5.97a1 1 0 01-.361-1.367zM21.479 7.261a1 1 0 01-.36 1.368l-10.23 5.97a1 1 0 01-1.008-1.728l10.23-5.97a1 1 0 011.368.36z" fill="currentColor"/></svg>',
    'inline'     => [
        'buttons' => [
            'social_share_general_options' => [
                'action'   => 'dropdown',
                'icon'     => 'addon::social_share',
                'tooltip'  => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_SHARE'),
                'fieldset' => [
                    'tab_groups' => [
                        'social' => [
                            'fields' => [
                                [
                                    'show_socials' => [
                                        'type'   => 'select',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA'),
                                        'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_DESC'),
                                        'values' => [
                                            'facebook'  => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_FACEBOOK'),
                                            'twitter'   => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_TWITTER'),
                                            'linkedin'  => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_LINKEDIN'),
                                            'pinterest' => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_PINTEREST'),
                                            'thumblr'   => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_THUMBLR'),
                                            'getpocket' => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_GETPOCKET'),
                                            'reddit'    => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_REDDIT'),
                                            'vk'        => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_VK'),
                                            'xing'      => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_XING'),
                                            'whatsapp'  => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_WHATSAPP'),
                                        ],
                                        'multiple' => true,
                                        'std'      => [
                                            'facebook',
                                            'twitter',
                                            'linkedin',
                                            'pinterest',
                                            'thumblr',
                                            'getpocket',
                                            'reddit',
                                            'vk',
                                        ],
                                    ],
            
                                    'show_social_names' => [
                                        'type'   => 'select',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_SHOW_NAME'),
                                        'values' => [
                                            0 => Text::_('COM_SPPAGEBUILDER_NO'),
                                            2 => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_MEDIA_MAJOR_SITES'),
                                            1 => Text::_('COM_SPPAGEBUILDER_ALL'),
                                        ],
                                        'std' => 0,
                                        'inline' => true,
                                    ],
            
                                    'social_style' => [
                                        'type'   => 'select',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_STYLE'),
                                        'values' => [
                                            'simple'  => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_STYLE_SIMPLE'),
                                            'solid'   => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_STYLE_SOLID'),
                                            'colored' => Text::_('COM_SPPAGEBUILDER_ADDON_SOCIAL_STYLE_COLORED'),
                                            'custom'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_CUSTOM'),
                                        ],
                                        'std' => 'solid',
                                        'inline' => true,
                                    ],

                                    'social_border_radius' => [
                                        'type'  => 'slider',
                                        'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_RADIUS'),
                                        'std'   => ['xxl' => 4, 'xl' => 4, 'lg' => 4, 'md' => 4, 'sm' => 4, 'xs' => 4],
                                        'depends' => [
                                            ['social_style', '!=', 'simple'],
                                            ['social_style', '!=', 'colored'],
                                        ]
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
                                        'inline' => true,
                                    ],
                                ],

                                'typography' => [
                                    'title_typography' => [
										'type'     => 'typography',
										'fallbacks'   => [
											'font' => 'title_font_family',
											'size' => 'title_fontsize',
											'line_height' => 'title_lineheight',
											'letter_spacing' => 'title_letterspace',
											'uppercase' => 'title_font_style.uppercase',
											'italic' => 'title_font_style.italic',
											'underline' => 'title_font_style.underline',
											'weight' => 'title_font_style.weight',
										],
									],
                                ],
                            ],
                        ],
                    ],
                ],
            ],

            'social_share_color_options' => [
                'action'      => 'dropdown',
                'type'        => 'placeholder',
                'tooltip'     => Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
                'default'     => '#4378f8',
                'depends'     => [['social_style', '=', 'custom']],
                'placeholder' => [
                    'type'      => 'HTMLElement',
                    'element'   => 'div',
                    'selector'  => '.builder-color-picker',
                    'attribute' => [
                        'type'     => 'style',        // or text
                        'property' => 'background',
                    ],
                    'display_field' => 'background_color',
                ],
                'fieldset' => [
                    'tab_groups' => [
                        'normal' => [
                            'fields' => [
                                [
                                    'background_color' => [
                                        'type'   => 'color',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND'),
                                        'std'    => '#4378f8',
                                    ],

                                    'icon_color' => [
                                        'type'   => 'color',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_ICON'),
                                        'std'    => '#FFFFFF',
                                    ],

                                    'social_border_width' => [
                                        'type'    => 'slider',
                                        'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_WIDTH'),
                                        'std'     => 0,
                                    ],

                                    'social_border_color' => [
                                        'type'    => 'color',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR'),
                                    ],
                                ],
                            ],
                        ],

                        'hover' => [
                            'fields' => [
                                [
                                    'background_hover_color' => [
                                        'type'   => 'color',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND'),
                                        'std'    => '#2055d4',
                                    ],

                                    'icon_hover_color' => [
                                        'type'   => 'color',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_ICON'),
                                        'std'    => '#FFFFFF',
                                    ],

                                    'social_border_hover_color' => [
                                        'type'    => 'color',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR'),
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],

            'social_share_alignment_separator' => [
                'action' => 'separator',
            ],

            'social_share_alignment_options' => [
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
                    'display_field' => 'icon_align',
                ],
                'fieldset' => [
                    [
                        'icon_align' => [
                            'type'              => 'alignment',
                            'inline'            => true,
                            'responsive'        => true,
                            'available_options' => ['left', 'center', 'right'],
                            'std'				=> ['xxl' => '', 'xl' => 'left', 'lg' => '', 'md' => '', 'sm' => '', 'xs' => ''],
                        ],
                    ],
                ],
            ],
        ],
    ],

    'attr' => [],
]);
