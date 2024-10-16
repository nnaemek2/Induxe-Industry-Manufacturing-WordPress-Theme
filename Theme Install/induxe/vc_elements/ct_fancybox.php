<?php
vc_map(array(
    'name' => 'Fancybox Single',
    'base' => 'ct_fancybox',
    'class'    => 'ct-icon-element',
    'description' => esc_html__( 'Fancy Box Displayed', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(

        /* Template */
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_fancybox',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'std' => 'ct_fancybox.php',
            'group' => esc_html__('Template', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Box Background Color', 'induxe'),
            'param_name' => 'box_bg_color',
            'value' => array(
                'Default' => 'box-default',
                'Primary' => 'box-primary',
                'Secondary' => 'box-secondary',
            ),
            'group' => esc_html__('Template', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox--layout4.php',
                )
            ),
        ),

        /* Title */
        array(
            'type' => 'textarea',
            'heading' => esc_html__('Title', 'induxe'),
            'param_name' => 'title',
            'description' => esc_html__('Enter title.', 'induxe'),
            'group' => esc_html__('Title', 'induxe'),
            'admin_label' => true,
        ),

        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text Color', 'induxe'),
            'param_name' => 'title_color',
            'value' => '',
            'group' => esc_html__('Title', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Font Size', 'induxe'),
            'param_name' => 'title_font_size',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Title', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Line Height', 'induxe'),
            'param_name' => 'title_line_height',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Title', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Font Weight", 'induxe'),
            'param_name' => 'title_font_weight',
            'value' => array(
                'SemiBold' => '600',
                'Light' => '300',
                'Regullar' => '400',
                'Medium' => '500',
                'Bold' => '700',
            ),
            'std' => '400',
            "group"      => esc_html__("Title", "induxe"),
        ),
        /* Description */
    

        array(
            'type' => 'textarea',
            'heading' => esc_html__('Description', 'induxe'),
            'param_name' => 'description',
            'description' => esc_html__('Enter description.', 'induxe'),
            'group' => esc_html__('Description', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox.php',
                    'ct_fancybox--layout2.php',
                    'ct_fancybox--layout4.php',
                    'ct_fancybox--layout5.php',
                    'ct_fancybox--layout6.php',
                    'ct_fancybox--layout7.php',
                    'ct_fancybox--layout8.php',
                )
            ),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text Color', 'induxe'),
            'param_name' => 'description_color',
            'value' => '',
            'group' => esc_html__('Description', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox.php',
                    'ct_fancybox--layout2.php',
                    'ct_fancybox--layout4.php',
                    'ct_fancybox--layout5.php',
                )
            ),
        ),
        array(
            'type' => 'attach_image',
            'heading' => esc_html__( 'Image', 'induxe' ),
            'param_name' => 'image_feature',
            'value' => '',
            'description' => esc_html__( 'Select icon image from media library.', 'induxe' ),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox.php',
                )
            ),
            "group"      => esc_html__("Image", "induxe"),
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Image size', 'induxe' ),
            'param_name' => 'img_size',
            'value' => '',
            'description' => __( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height). Enter multiple sizes (Example: 100x100,200x200,300x300)).', 'induxe' ),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox.php',
                )
            ),
            "group"      => esc_html__("Image", "induxe"),
        ),
        /* Icon */
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Icon Type', 'induxe'),
            'param_name' => 'icon_type',
            'value' => array(
                'Icon' => 'icon',
                'Image' => 'image',
            ),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox--layout2.php',
                    'ct_fancybox--layout3.php',
                    'ct_fancybox--layout4.php',
                    'ct_fancybox--layout5.php',
                    'ct_fancybox--layout6.php',
                    'ct_fancybox--layout7.php',
                    'ct_fancybox--layout8.php',
                )
            ),
            'group' => esc_html__('Icon', 'induxe'),
        ),
        array(
            'type' => 'attach_image',
            'heading' => esc_html__( 'Icon Image', 'induxe' ),
            'param_name' => 'icon_image',
            'value' => '',
            'description' => esc_html__( 'Select icon image from media library.', 'induxe' ),
            'dependency' => array(
                'element'=>'icon_type',
                'value'=>array(
                    'image',
                )
            ),
            'group' => esc_html__('Icon', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Icon Library', 'induxe' ),
            'value' => array(
                esc_html__( 'Font Awesome 4', 'induxe' ) => 'fontawesome',
                esc_html__( 'Font Awesome 5', 'induxe' ) => 'fontawesome5',
                esc_html__( 'Material Design', 'induxe' ) => 'material_design',
                esc_html__( 'Flaticon', 'induxe' ) => 'flaticon',
                esc_html__( 'ET Line', 'induxe' ) => 'etline',
            ),
            'param_name' => 'icon_list',
            'description' => esc_html__( 'Select icon library.', 'induxe' ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'icon',
            ),
            'group' => esc_html__('Icon', 'induxe'),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Material', 'induxe' ),
            'param_name' => 'icon_material_design',
            'settings' => array(
                'emptyIcon' => true,
                'type' => 'material-design',
                'iconsPerPage' => 200,
            ),
            'dependency' => array(
                'element' => 'icon_list',
                'value' => 'material_design',
            ),
            'description' => esc_html__( 'Select icon from library.', 'induxe' ),
            'group' => esc_html__('Icon', 'induxe'),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon FontAwesome 4', 'induxe' ),
            'param_name' => 'icon_fontawesome',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true,
                'type' => 'fontawesome',
                'iconsPerPage' => 200,
            ),
            'dependency' => array(
                'element' => 'icon_list',
                'value' => 'fontawesome',
            ),
            'description' => esc_html__( 'Select icon from library.', 'induxe' ),
            'group' => esc_html__('Icon', 'induxe'),
        ),  

        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon FontAwesome 5', 'induxe' ),
            'param_name' => 'icon_fontawesome5',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true,
                'type' => 'awesome5',
                'iconsPerPage' => 200,
            ),
            'dependency' => array(
                'element' => 'icon_list',
                'value' => 'fontawesome5',
            ),
            'description' => esc_html__( 'Select icon from library.', 'induxe' ),
            'group' => esc_html__('Icon', 'induxe'),
        ),  

        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Icon Weight', 'induxe'),
            'param_name' => 'icon_weight',
            'value' => array(
                'Solid' => '',
                'Regular' => 'icon-far',
                'Light' => 'icon-fal',
                'Brands' => 'icon-fab',
            ),
            'group' => esc_html__('Icon', 'induxe'),
            'dependency' => array(
                'element' => 'icon_list',
                'value' => 'fontawesome5',
            ),
        ),

        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Flaticon', 'induxe' ),
            'param_name' => 'icon_flaticon',
            'settings' => array(
                'emptyIcon' => true,
                'type' => 'flaticon',
                'iconsPerPage' => 200,
            ),
            'dependency' => array(
                'element' => 'icon_list',
                'value' => 'flaticon',
            ),
            'description' => esc_html__( 'Select icon from library.', 'induxe' ),
            'group' => esc_html__('Icon', 'induxe'),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon ET Line', 'induxe' ),
            'param_name' => 'icon_etline',
            'settings' => array(
                'emptyIcon' => true,
                'type' => 'etline',
                'iconsPerPage' => 200,
            ),
            'dependency' => array(
                'element' => 'icon_list',
                'value' => 'etline',
            ),
            'description' => esc_html__( 'Select icon from library.', 'induxe' ),
            'group' => esc_html__('Icon', 'induxe'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Icon Color', 'induxe'),
            'param_name' => 'icon_color',
            'value' => '',
            'group' => esc_html__('Icon', 'induxe'),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'icon',
            ),
            'edit_field_class' => 'vc_col-sm-6 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Icon Font Size', 'induxe'),
            'param_name' => 'icon_font_size',
            'group' => esc_html__('Icon', 'induxe'),
            'description' => esc_html__('Enter number.', 'induxe'),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'icon',
            ),
            'edit_field_class' => 'vc_col-sm-6 vc_column',
        ),

        array(
            'type' => 'textfield',
            'heading' => __ ( 'Text Button', 'induxe' ),
            'param_name' => 'text_button',
            'value' => '',
            'group' => esc_html__('Button', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox--layout3.php',
                    'ct_fancybox--layout6.php',
                    'ct_fancybox--layout7.php',
                )
            ),
        ),
        array(
            'type' => 'vc_link',
            'heading' => __ ( 'Link Button', 'induxe' ),
            'param_name' => 'link_button',
            'value' => '',
            'group' => esc_html__('Button', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_fancybox--layout3.php',
                    'ct_fancybox--layout6.php',
                    'ct_fancybox--layout7.php',
                )
            ),
        ),

        /* Extra */
        array(
            "type" => "textfield",
            "heading" => esc_html__("Margin Bottom", 'induxe'),
            "param_name" => "margin_button",
            "description" => esc_html__( "Enter Number ..", 'induxe' ),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    'ct_fancybox--layout2.php',
                    'ct_fancybox--layout4.php',
                    'ct_fancybox--layout5.php',
                )
            ),
            'group' => esc_html__('Extra', 'induxe')
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Extra class name', 'induxe' ),
            'param_name' => 'el_class',
            'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in Custom CSS.', 'induxe' ),
            'group' => esc_html__('Extra', 'induxe')
        ),
        array(
            'type' => 'animation_style',
            'heading' => esc_html__( 'Animation Style', 'induxe' ),
            'param_name' => 'animation',
            'description' => esc_html__( 'Choose your animation style', 'induxe' ),
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('Extra', 'induxe'),
        ),
    )
));

class WPBakeryShortCode_ct_fancybox extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>