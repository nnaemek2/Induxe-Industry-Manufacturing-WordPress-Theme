<?php
$args = array(
    'name' => 'Fancybox Carousel',
    'base' => 'ct_fancybox_carousel',
    'class'    => 'ct-icon-element',
    'description' => esc_html__( 'Fancybox Displayed', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(

        /* Template */
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_fancybox_carousel',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'admin_label' => true,
            'group' => esc_html__('Template', 'induxe'),
            'std' => 'ct_fancybox_carousel.php'
        ),
        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Fancybox Item', 'induxe' ),
            'value' => '',
            'param_name' => 'fancybox_item',
            'group' => esc_html__('Fancybox Item', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox_carousel.php',
                    'ct_fancybox_carousel--layout3.php',
                )
            ),
            'params' => array(
                array(
                    'type' => 'textfield',
                    'heading' =>esc_html__('Title', 'induxe'),
                    'param_name' => 'title',
                    'admin_label' => true,
                    'group' => esc_html__('Source Settings', 'induxe'),
                ),
                array(
                    'type' => 'iconpicker',
                    'heading' => esc_html__( 'Flaticon', 'induxe' ),
                    'param_name' => 'icon_flaticon',
                    'value' => '',
                    'settings' => array(
                        'emptyIcon' => true,
                        'type' => 'flaticon',
                        'iconsPerPage' => 200,
                    ),
                    'description' => esc_html__( 'Select icon from library.', 'induxe' ),
                ),
                array(
                    'type' => 'vc_link',
                    'class' => '',
                    'heading' => esc_html__('Link', 'induxe'),
                    'param_name' => 'item_link',
                    'value' => '',
                    'group' => esc_html__('Source Settings', 'induxe')
                ),
            ),
        ),

        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Fancybox Item', 'induxe' ),
            'value' => '',
            'param_name' => 'fancybox_item2',
            'group' => esc_html__('Fancybox Item', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox_carousel--layout2.php',
                    'ct_fancybox_carousel--layout4.php',
                )
            ),
            'params' => array(
                array(
                    'type' => 'attach_image',
                    'heading' => esc_html__( 'Image', 'induxe' ),
                    'param_name' => 'image',
                    'value' => '',
                    'description' => esc_html__( 'Select image from media library.', 'induxe' ),
                ),
                array(
                    'type' => 'iconpicker',
                    'heading' => esc_html__( 'Flaticon', 'induxe' ),
                    'param_name' => 'icon_flaticon',
                    'value' => '',
                    'settings' => array(
                        'emptyIcon' => true,
                        'type' => 'flaticon',
                        'iconsPerPage' => 200,
                    ),
                    'description' => esc_html__( 'Select icon from library.', 'induxe' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' =>esc_html__('Title', 'induxe'),
                    'param_name' => 'title',
                    'admin_label' => true,
                    'group' => esc_html__('Source Settings', 'induxe'),
                ),
                array(
                    'type' => 'textarea',
                    'heading' =>esc_html__('Content', 'induxe'),
                    'param_name' => 'fcb_content',
                    'admin_label' => false,
                    'group' => esc_html__('Source Settings', 'induxe'),
                ),                
                array(
                    'type' => 'vc_link',
                    'class' => '',
                    'heading' => esc_html__('Link', 'induxe'),
                    'param_name' => 'item_link',
                    'value' => '',
                    'group' => esc_html__('Source Settings', 'induxe')
                ),
            ),
        ),

        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text Color', 'induxe'),
            'param_name' => 'title_color',
            'value' => '',
            'group' => esc_html__('Item Setting', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Font Size', 'induxe'),
            'param_name' => 'title_font_size',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Item Setting', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Line Height', 'induxe'),
            'param_name' => 'title_line_height',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Item Setting', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        /* Description */
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Description Color', 'induxe'),
            'param_name' => 'description_color',
            'value' => '',
            'edit_field_class' => 'vc_col-sm-4 vc_column',
            'group' => esc_html__('Item Setting', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox_carousel--layout2.php',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Description Font Size', 'induxe' ),
            'param_name' => 'description_font_size',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
            'group' => esc_html__('Item Setting', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox_carousel--layout2.php',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Description Line Height', 'induxe' ),
            'param_name' => 'description_line_height',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
            'group' => esc_html__('Item Setting', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox_carousel--layout2.php',
                )
            ),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Icon Color', 'induxe'),
            'param_name' => 'icon_color',
            'value' => '',
            'group' => esc_html__('Item Setting', 'induxe'),
            'edit_field_class' => 'vc_col-sm-6 vc_column',
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__('Font Size', 'induxe'),
            'param_name' => 'icon_font_size',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Item Setting', 'induxe'),
            'edit_field_class' => 'vc_col-sm-6 vc_column',
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Line Color', 'induxe'),
            'param_name' => 'line_color',
            'value' => '',
            'group' => esc_html__('Item Setting', 'induxe'),
            'edit_field_class' => 'vc_col-sm-12 vc_column',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox_carousel.php',
                )
            ),
        ),
    ));

$args = induxe_add_vc_extra_param($args);
vc_map($args);

class WPBakeryShortCode_ct_fancybox_carousel extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>