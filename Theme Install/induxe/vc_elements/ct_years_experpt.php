<?php
vc_map(array(
    'name' => 'Year Experpt',
    'base' => 'ct_years_experpt',
    'class' => 'ct-icon-element',
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_years_experpt',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'std'        => 'ct_years_experpt.php',
            'admin_label' => true,
            'group' => esc_html__('Template', 'induxe'),
        ),
        //Title
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Year Number', 'induxe'),
            'param_name' => 'title',
            'description' => 'Enter Year Number.',
            'group' => esc_html__('Year', 'induxe'),
        ),

        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Year Color", 'induxe'),
            "param_name" => "el_title_color",
            "value" => "",
            "group" => esc_html__("Year", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Font Size", 'induxe'),
            "param_name" => "el_font_size",
            "description" => esc_html__( "Enter Number ..", 'induxe' ),
            "group" => esc_html__("Year", 'induxe'),
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
            "group"      => esc_html__("Year", "induxe"),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( 'Line Height', 'induxe' ),
            "param_name" => "line_height",
            "value" => '',
            "description" => esc_html__("Enter number: ..px or em",'induxe'),
            "group"      => esc_html__("Year", "induxe"),
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
            "group"      => esc_html__("Year", "induxe"),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Margin Bottom", 'induxe'),
            "param_name" => "margin_botton",
            "description" => esc_html__( "Enter Number:..", 'induxe' ),
            "group" => esc_html__("Year", 'induxe'),
        ),
        //Description
        array(
            'type' => 'textarea',
            'heading' => esc_html__('Content', 'induxe'),
            'param_name' => 'des_contact',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_years_experpt.php',
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
                    'ct_years_experpt.php',
                )
            ),
            'group' => esc_html__('Excerpt', 'induxe'),
        ),

  
        /* Extra */
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
                    'ct_years_experpt.php',
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

class WPBakeryShortCode_ct_years_experpt extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('cms-years-experpt');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>