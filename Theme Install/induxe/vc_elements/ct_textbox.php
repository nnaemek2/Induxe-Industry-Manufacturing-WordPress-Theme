<?php
vc_map(array(
    "name" => 'TextBox',
    "base" => "ct_textbox",
    'class'    => 'ct-icon-element',
    "category" => esc_html__('CaseThemes Shortcodes', 'induxe'),
    "params" => array(
        /* Textbox Template */
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            "shortcode" => "ct_textbox",
            "heading" => esc_html__("Shortcode Template", 'induxe'),
            "admin_label" => true,
            'std' => 'ct_textbox.php',
            "group" => esc_html__("Template", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Bordr Bottom", 'induxe'),
            'param_name' => 'border_bottom',
            'value' => array(  
                'Hidden' => '',
                'Show'        => 'show-border-bottom',
            ),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "ct_textbox--layout3.php",
                )
            ),   
            "group" => esc_html__("Template", 'induxe'),    
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Extra class name', 'induxe' ),
            'param_name' => 'el_class',
            'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in Custom CSS.', 'induxe' ),
            "group" => esc_html__("Template", 'induxe'),    
        ),
        /* Title */
        array(
            'type' => 'textarea',
            'heading' => esc_html__('Title', 'induxe'),
            'param_name' => 'title',
            'description' => esc_html__('Enter title.', 'induxe'),
            'group' => esc_html__('Title', 'induxe'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "ct_textbox.php",
                    "ct_textbox--layout3.php",
                )
            ),
            'admin_label' => true,
        ),

        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text Color', 'induxe'),
            'param_name' => 'title_color',
            'value' => '',
            'group' => esc_html__('Title', 'induxe'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "ct_textbox.php",
                    "ct_textbox--layout3.php",
                )
            ),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Font Size', 'induxe'),
            'param_name' => 'title_font_size',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Title', 'induxe'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "ct_textbox.php",
                    "ct_textbox--layout3.php",
                )
            ),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Line Height', 'induxe'),
            'param_name' => 'title_line_height',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Title', 'induxe'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "ct_textbox.php",
                    "ct_textbox--layout3.php",
                )
            ),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        /* Content */
        array(
            "type" => "textarea",
            "heading" => esc_html__("Text", 'induxe'),
            "param_name" => "text_box",
            "description" => esc_html__( "Enter description.", 'induxe' ),
            "type" => "textarea",
            "heading" => esc_html__("Text", 'induxe'),
            "param_name" => "text_box",
            "group" => esc_html__("Content", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Text Transform", 'induxe'),
            'param_name' => 'text_transform',
            'value' => array(
                esc_html__('Normal', 'induxe') => 'none',
                esc_html__('Uppercase', 'induxe') => 'uppercase',
                esc_html__('Lowercase', 'induxe') => 'lowercase',
                esc_html__('Capitalize', 'induxe') => 'capitalize',
                esc_html__('Unset', 'induxe') => 'unset'
            ),
            "group" => esc_html__("Content", 'induxe'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Text Color", 'induxe'),
            "param_name" => "text_box_color",
            "value" => "",
            "group" => esc_html__("Content", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" =>esc_html__("Font Size", 'induxe'),
            "param_name" => "font_size",
            'value' => '',
            "description" => esc_html__( "Enter Number: ...", 'induxe' ),
            "group" => esc_html__("Content", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Line Height", 'induxe'),
            "param_name" => "line_height",
            "description" => esc_html__( "Enter Number: ...", 'induxe' ),
            "group" => esc_html__("Content", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" =>esc_html__("Margin Bottom", 'induxe'),
            "param_name" => "textbox_mg_button",
            'value' => '',
            "description" => esc_html__( "Enter Number: ...", 'induxe' ),
            "group" => esc_html__("Content", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( 'Letter Spacing', 'induxe' ),
            "param_name" => "letter_spacing",
            "value" => '',
            "description" => esc_html__("Enter: ...",'induxe'),
            "group" => esc_html__("Content", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Font Weight", 'induxe'),
            'param_name' => 'font_weight',
            'value' => array(
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
                '800' => '800',
            ),
            'std' => '300',
            "group" => esc_html__("Content", 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__("Text Align", 'induxe'),
            'param_name' => 'textbox_align',
            'value' => array(
                'Left' => 'text-left', 
                'Left (Center Small Devices < 991px)' => 'text-left text-991px',
                'Left (Center Small Devices < 767px)' => 'text-left text-767px',
                'Center' => 'text-center',
                'Right' => 'text-right',
                'Right (to Center Small Devices < 991px)' => 'text-right text-991px',
                'Right (to Center Small Devices < 767px)' => 'text-right text-767px',
                'Right (to Left Small Devices < 991px)'   => 'text-right text-991px-left',
                'Right (to Left Small Devices < 767px)'   => 'text-right text-767px-left',
            ),
            "group" => esc_html__("Content", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Font Style", 'induxe'),
            'param_name' => 'font_style',
            'value' => array(
                esc_html__('Normal', 'induxe') => 'normal', 
                esc_html__('Italic', 'induxe') => 'italic',
            ),
            "group" => esc_html__("Content", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Custom Google Fonts", 'induxe'),
            'param_name' => 'custom_fonts',
            'value' => array(
                'No' => 'false',       
                'Yes' => 'true',       
            ),
            "group" => esc_html__("Custom Fonts", 'induxe'),
        ),
        array(
            'type' => 'google_fonts',
            'param_name' => 'google_fonts',
            'value' => 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
            'settings' => array(
                'fields' => array(
                    'font_family_description' => esc_html__( 'Select font family.', 'induxe' ),
                    'font_style_description' => esc_html__( 'Select font styling.', 'induxe' ),
                ),
            ),
            "dependency" => array(
                "element"=>"custom_fonts",
                "value"=>array(
                    "true",
                )
            ),
            "group" => esc_html__("Custom Fonts", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( 'Link Text', 'induxe' ),
            "param_name" => "button_text",
            "value" => '',
            'admin_label' => true,
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "ct_textbox--layout2.php",
                )
            ),
            "group" => esc_html__("Link", 'induxe')
        ),
        array(
            "type" => "vc_link",
            "class" => "",
            "heading" => esc_html__("Link UrL", 'induxe'),
            "param_name" => "button_link",
            "value" => '',
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "ct_textbox--layout2.php",
                )
            ),
            "group" => esc_html__("Link", 'induxe')
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Color", 'induxe'),
            "param_name" => "link_color",
            "value" => "",
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "ct_textbox--layout2.php",
                )
            ),
            "group" => esc_html__("Link", 'induxe')
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Color Hover", 'induxe'),
            "param_name" => "link_color_hv",
            "value" => "",
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "ct_textbox--layout2.php",
                )
            ),            
            "group" => esc_html__("Link", 'induxe')
        ),

    )
));

class WPBakeryShortCode_ct_textbox extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>