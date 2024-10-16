<?php
vc_map(array(
    'name' => 'Contact Info',
    'base' => 'ct_contact_info',
    'class' => 'ct-icon-element',
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_contact_info',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'std'        => 'ct_contact_info.php',
            'admin_label' => true,
            'group' => esc_html__('Template', 'induxe'),
        ),
        //Title
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Title', 'induxe'),
            'param_name' => 'title',
            'description' => 'Enter title.',
            'group' => esc_html__('Title', 'induxe'),
        ),

        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Title Color", 'induxe'),
            "param_name" => "el_title_color",
            "value" => "",
            "group" => esc_html__("Title", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Font Size", 'induxe'),
            "param_name" => "el_font_size",
            "description" => esc_html__( "Enter Number ..", 'induxe' ),
            "group" => esc_html__("Title", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Font Weight", 'induxe'),
            'param_name' => 'el_font_weight',
            'value' => array(
                'SemiBold' => '600',
                'Light' => '300',
                'Regular' => '400',
                'Medium' => '500',
                'Bold' => '700',
            ),
            'std' => '700',
            "group"      => esc_html__("Title", "induxe"),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( 'Line Height', 'induxe' ),
            "param_name" => "line_height",
            "value" => '',
            "description" => esc_html__("Enter number: ..px or em",'induxe'),
            "group"      => esc_html__("Title", "induxe"),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Text Transform", 'induxe'),
            'param_name' => 'el_text_transform',
            'value' => array(
                'Normal' => 'none',
                'Uppercase' => 'uppercase',
                'Lowercase' => 'lowercase',
                'Capitalize' => 'capitalize',
                'Unset' => 'unset'
            ),
            'tsd' => 'capitalize',
            "group"      => esc_html__("Title", "induxe"),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Margin Bottom", 'induxe'),
            "param_name" => "margin_botton",
            "description" => esc_html__( "Enter Number:..", 'induxe' ),
            "group" => esc_html__("Title", 'induxe'),
        ),
        //Description
        array(
            'type' => 'textarea',
            'heading' => esc_html__('Content', 'induxe'),
            'param_name' => 'des_contact',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_contact_info--layout2.php',
                    'ct_contact_info--layout4.php',
                )
            ),
            'group' => esc_html__('Excerpt', 'induxe'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text Color', 'induxe'),
            'param_name' => 'des_color',
            'value' => '',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_contact_info--layout2.php',
                    'ct_contact_info--layout4.php',
                )
            ),
            'group' => esc_html__('Excerpt', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Font Size', 'induxe'),
            'param_name' => 'des_font_size',
            'description' => esc_html__('Enter number:..','induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_contact_info--layout2.php',
                    'ct_contact_info--layout4.php',
                )
            ),
            'group' => esc_html__('Excerpt', 'induxe'),
        ),
        //Row Info 1
        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Contact List', 'induxe' ),
            'param_name' => 'ctf_items',
            'value' => '',
            'group' => esc_html__('Item Info', 'induxe'),
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Label", 'induxe'),
                    "param_name" => "label",
                    'description' => esc_html__('Only show for layout 1 & 4.','induxe'),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__( 'Content', 'induxe' ),
                    'param_name' => 'ctf_content',
                    'admin_label' => true,
                    'value' => '',
                ),
                array(
                    'type'       => 'dropdown',
                    'heading'    => esc_html__('Type', 'induxe'),
                    'param_name' => 'ctf_type',
                    'value'      => array(
                        'Text'   => 'text',
                        'Phone'   => 'phone',
                        'Email'   => 'email',
                        'Address'   => 'address',
                    ),
                ),
            ),
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
                    'ct_contact_info--layout2.php',
                    'ct_contact_info--layout3.php',
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

        //Setting
        array(
            "type" => "textfield",
            "heading" => esc_html__("Font Size", 'induxe'),
            "param_name" => "font_size",
            "description" => esc_html__("Enter, ...px or em",'induxe'),
            'group' => esc_html__('Item Info', 'induxe'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text Color', 'induxe'),
            'param_name' => 'color',
            'value' => '',
            'group' => esc_html__('Item Info', 'induxe'),
        ),
        //Socials
        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Social', 'induxe' ),
            'param_name' => 'cms_social',
            'description' => esc_html__( 'Enter values for list item', 'induxe' ),
            'value' => '',
            'params' => array(
                array(
                    'type' => 'iconpicker',
                    'heading' =>esc_html__('Icons', 'induxe'),
                    'param_name' => 'cms_list_item_icon',
                    'settings' => array(
                        'emptyIcon'=>true,
                        'type'=>'fontawesome',
                        'iconPerPage'=>200
                    ),
                    "group" => esc_html__("Socials", 'induxe'),
                    'admin_label' => true,
                ), 
                array(
                    'type' => 'vc_link',
                    'class' => '',
                    'heading' => esc_html__('Icon Link', 'induxe'),
                    'param_name' => 'icon_link',
                    "group" => esc_html__("Socials", 'induxe'),
                    'value' => '#',
                ),
            ),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_contact_info--layout4.php',
                )
            ),
            "group" => esc_html__("Socials", 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' =>esc_html__('Font Size', 'induxe'),
            'param_name' => 'icon_size',
            'value' => '',
            "description" => esc_html__("Enter, ...px", 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_contact_info--layout4.php',
                )
            ),
            "group" => esc_html__("Socials", 'induxe'),
        ),
        /* Extra */
        array(
            "type" => "textfield",
            "heading" => esc_html__("Padding Box", 'induxe'),
            "param_name" => "padding_box",
            "description" => esc_html__("Enter padding, ...px", 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_contact_info.php',
                )
            ),
            'group' => esc_html__('Setting', 'induxe'),
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
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Element Parallax', 'induxe'),
            'param_name' => 'el_parallax',
            'value' => array(
                'No' => 'false',
                'Yes' => 'true',
            ),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_contact_info.php',
                )
            ),
            'group' => esc_html__('Extra', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Parallax Speed', 'induxe' ),
            'param_name' => 'el_parallax_speed',
            'value' => '',
            'description' => esc_html__( 'Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)', 'induxe' ),
            'group' => esc_html__('Extra', 'induxe'),
            'dependency' => array(
                'element'=>'el_parallax',
                'value'=>array(
                    'true',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Extra class name', 'induxe' ),
            'param_name' => 'el_class',
            'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in Custom CSS.', 'induxe' ),
            'group'      => esc_html__('Extra', 'induxe'),
        ),
    )
));

class WPBakeryShortCode_ct_contact_info extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('cms-contact-info');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>