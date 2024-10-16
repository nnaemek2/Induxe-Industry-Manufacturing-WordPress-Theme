<?php
vc_map(array(
    'name' => 'Social Us',
    'base' => 'ct_social_us',
    'class'    => 'ct-icon-element',
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            "shortcode" => "ct_social_us",
            "heading" => esc_html__("Shortcode Template", 'induxe'),
            "admin_label" => true,
            "group" => esc_html__("Template", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__('Style', 'induxe'),
            'param_name' => 'style',
            'value' => array(
                'Left' => 'text-left',
                'Left (Center Small Devices < 991px)' => 'text-left text-991px',
                'Left (Center Small Devices < 767px)' => 'text-left text-767px',
                'Center' => 'text-center',        
                'Right' => 'text-right',       
                'Right (Center Small Devices < 991px)' => 'text-right text-991px',
                'Right (Center Small Devices < 767px)' => 'text-right text-767px',
                'Right (Left Small Devices < 991px)' => 'text-right text-991px-left',
                'Right (Left Small Devices < 767px)' => 'text-right text-767px-left', 
            ),
            "group" => esc_html__("Template", 'induxe'),
        ),

        /* Title */
        array(
            "type" => "textarea",
            "heading" => esc_html__("Title", 'induxe'),
            "param_name" => "title",
            "description" => esc_html__( "Enter title.", 'induxe' ),           
            "group" => esc_html__("Title", 'induxe'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Text Color", 'induxe'),
            "param_name" => "title_color",
            "value" => "",           
            "group" => esc_html__("Title", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Font Size", 'induxe'),
            "param_name" => "title_font_size",
            "description" => esc_html__( "Enter Number: ...", 'induxe' ),         
            "group" => esc_html__("Title", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Line Height", 'induxe'),
            "param_name" => "title_line_height",
            "description" => esc_html__( "Enter Number: ...px or em", 'induxe' ),           
            "group" => esc_html__("Title", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Font Weight", 'induxe'),
            'param_name' => 'font_weight',
            'value' => array(
                esc_html__('Light', 'induxe' ) => '300',
                esc_html__('Regular', 'induxe' ) => '400',
                esc_html__('Medium', 'induxe' ) => '500',
                esc_html__('SemiBold', 'induxe' ) => '600',
                esc_html__('Bold', 'induxe' ) => '700',
                esc_html__('ExtBold', 'induxe' ) => '800',
            ),
            'std' => '700',
            "group" => esc_html__("Title", "induxe"),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Text Transform", 'induxe'),
            'param_name' => 'text_transform',
            'value' => array(
                esc_html__('Normal', 'induxe' ) => 'none',
                esc_html__('Uppercase', 'induxe' ) => 'uppercase',
                esc_html__('Lowercase', 'induxe' ) => 'lowercase',
                esc_html__('Capitalize', 'induxe' ) => 'capitalize',
                esc_html__('Unset', 'induxe' ) => 'unset'
            ),
            'tsd' => 'capitalize',
            "group" => esc_html__("Title", "induxe"),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Margin Bottom", 'induxe'),
            "param_name" => "margin_botton",
            "description" => esc_html__( "Enter Number ..", 'induxe' ),
            "group" => esc_html__("Title", 'induxe'),
        ),
        // Social Item
        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Social Item', 'induxe' ),
            'param_name' => 'social_list',
            'description' => esc_html__( 'Enter values for team social', 'induxe' ),
            'value' => '',
            'group' => esc_html__('Item Social', 'induxe'),
            'params' => array(
                array(    
                    'type' => 'dropdown',
                    'heading' => esc_html__("Icon", 'induxe'),
                    'param_name' => 'icon_list',
                    'value' => array(  
                        'FaceBook'    => 'fa fa-facebook',
                        'Twiter'      => 'fa fa-twitter',
                        'Google Plus' => 'fa fa-google-plus',
                        'Skype'       => 'fa fa-skype',
                        'Instagram'   => 'fa fa-instagram',
                        'YouTube'     => 'fa fa-youtube',
                        'Dribbble'    => 'fa fa-dribbble',
                        'Vimeo'       => 'fa fa-vimeo', 
                        'Tumblr'      => 'fa fa-tumblr',
                        'Pinterest'   => 'fa fa-pinterest',
                        'Tripadvisor' => 'fa fa-tripadvisor',
                        'Yelp'        => 'fa fa-yelp',
                        'Linkedin'    => 'fa fa-linkedin',
                    ),
                    'admin_label' => true,
                    'group' => esc_html__('Template', 'induxe'),
                ),
            ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Background Icon Color", 'induxe'),
            "param_name" => "bg_icon",
            "value" => "",           
            'group' => esc_html__('Item Social', 'induxe'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Border Icon Color", 'induxe'),
            "param_name" => "border_icon",
            "value" => "",           
            "dependency" => array(
                    "element"=>"cms_template",
                    "value"=>array(
                        "ct_social_us--layout2.php",
                    )
            ),
            'group' => esc_html__('Item Social', 'induxe'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Icon Color", 'induxe'),
            "param_name" => "icon_color",
            "value" => "",           
            'group' => esc_html__('Item Social', 'induxe'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Background Icon Hover", 'induxe'),
            "param_name" => "bg_icon_hover",
            "value" => "",           
            'group' => esc_html__('Item Social', 'induxe'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Icon Color Hover", 'induxe'),
            "param_name" => "icon_color_hover",
            "value" => "",           
            'group' => esc_html__('Item Social', 'induxe'),
        ),
    )
));

class WPBakeryShortCode_ct_social_us extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}
?>