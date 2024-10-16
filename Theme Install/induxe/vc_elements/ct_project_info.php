<?php
vc_map(array(
    'name' => 'Project Info',
    'base' => 'ct_project_info',
    'class' => 'ct-icon-element',
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_project_info',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'std'        => 'ct_project_info.php',
            'admin_label' => true,
            'group' => esc_html__('Template', 'induxe'),
        ),

        //Row Info 1
        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Project List', 'induxe' ),
            'param_name' => 'ctf_items',
            'value' => '',
            'group' => esc_html__('Item Info', 'induxe'),
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Label", 'induxe'),
                    "param_name" => "ct_label",
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__( 'Content', 'induxe' ),
                    'param_name' => 'ctf_content',
                    'admin_label' => true,
                    'value' => '',
                ),
            ),
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
                    'ct_project_info.php',
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

class WPBakeryShortCode_ct_project_info extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('cms-contact-info');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>