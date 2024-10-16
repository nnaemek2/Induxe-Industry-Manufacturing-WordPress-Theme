<?php
vc_map(array(
    'name' => 'Accordion',
    'base' => 'ct_accordion',
    'class'    => 'ct-icon-element',
    'description' => esc_html__( 'Collapsible content panels', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        /* Template */
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            "shortcode" => "ct_accordion",
            "heading" => esc_html__("Shortcode Template", 'induxe'),
            "admin_label" => true,
            'std' => 'ct_accordion.php',
            "group" => esc_html__("Template", 'induxe'),
        ),

        array(
            'type' => 'textfield',
            'heading' =>esc_html__('Active section', 'induxe'),
            'param_name' => 'active_section',
            'description' => esc_html__('Enter active section number (Note: to have all sections closed on initial load enter non-existing number).', 'induxe'),
        ),
        // Layout1
        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Accordion Items', 'induxe' ),
            'param_name' => 'ct_accordion',
            'description' => esc_html__( 'Enter values for accordion item', 'induxe' ),
            'value' => '',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_accordion.php',
                )
            ),
            'params' => array(
                array(
                    'type' => 'textfield',
                    'heading' =>esc_html__('Title', 'induxe'),
                    'param_name' => 'ac_title',
                    'admin_label' => true,
                ),
                array(
                    'type' => 'textarea',
                    'heading' =>esc_html__('Content', 'induxe'),
                    'param_name' => 'ac_content',
                ),
            ),
        ),
        /* Extra */
        array(
            'type' => 'colorpicker',
            'heading' =>esc_html__('Title Color', 'induxe'),
            'param_name' => 'title_color',
            'admin_label' => true,
            'edit_field_class' => 'vc_col-sm-3 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Font Size', 'induxe'),
            'param_name' => 'font_size',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Font Weight", 'induxe'),
            'param_name' => 'font_weight',
            'value' => array(
                'SemiBold' => '600',
                'Light' => '300',
                'Regullar' => '400',
                'Medium' => '500',
                'Bold' => '700',
            ),
            'std' => '400',
            'edit_field_class' => 'vc_col-sm-3 vc_column',
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Theme Custom Fonts', 'induxe'),
            'param_name' => 'theme_custom_fonts',
            'value' => array(
                'Normal' => 'poppin-normal',
                'Poppins Light'          => 'poppin-light',
                'Poppins Light Italic'   => 'poppin-light-i',
                'Poppins Regular'        => 'poppin-regular',
                'Poppins Regular Italic' => 'poppin-regular-i',
                'Poppins Medium'         => 'poppin-medium',
                'Poppins Medium Italic'  => 'poppin-medium-i',
                'Poppins SemiBold'       => 'poppin-semibold',
                'Poppins SemiBold Italic'=> 'poppin-semibold-i',
                'Poppins Bold'           => 'poppin-bold',
                'Poppins Bold Italic'    => 'poppin-bold-i',
            ),
            'std' => 'poppin-normal',
            'edit_field_class' => 'vc_col-sm-3 vc_column',
        ),
        array(
            'type' => 'colorpicker',
            'heading' =>esc_html__('Content Color', 'induxe'),
            'param_name' => 'content_color',
            'admin_label' => true,
            'edit_field_class' => 'vc_col-sm-6 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Content Font Size', 'induxe'),
            'param_name' => 'content_font_size',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-6 vc_column',
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

class WPBakeryShortCode_ct_accordion extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}
?>