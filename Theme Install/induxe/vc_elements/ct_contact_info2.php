<?php
vc_map(array(
    'name' => 'Contact Info 2',
    'base' => 'ct_contact_info2',
    'class'    => 'ct-icon-element',
    'description' => esc_html__( 'Fancy Box Displayed', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(

        /* Template */
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_contact_info2',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'std' => 'ct_contact_info2.php',
            'group' => esc_html__('Template', 'induxe'),
        ),

        /* Title */
        array(
            'type' => 'textarea',
            'heading' => esc_html__('Title', 'induxe'),
            'param_name' => 'title',
            'description' => esc_html__('Enter title.', 'induxe'),
            'group' => esc_html__('Address', 'induxe'),
            'admin_label' => true,
        ),

        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text Color', 'induxe'),
            'param_name' => 'title_color',
            'value' => '',
            'group' => esc_html__('Address', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Font Size', 'induxe'),
            'param_name' => 'title_font_size',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Address', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Line Height', 'induxe'),
            'param_name' => 'title_line_height',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Address', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
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
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Address', 'induxe'),
        ),
        /* Description */

        array(
            'type' => 'textarea',
            'heading' => esc_html__('Description', 'induxe'),
            'param_name' => 'description',
            'description' => esc_html__('Enter description.', 'induxe'),
            'group' => esc_html__('Address', 'induxe'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Description Color', 'induxe'),
            'param_name' => 'description_color',
            'value' => '',
            'edit_field_class' => 'vc_col-sm-4 vc_column',
            'group' => esc_html__('Address', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Description Font Size', 'induxe'),
            'param_name' => 'des_font_size',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Address', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Description Line Height', 'induxe'),
            'param_name' => 'des_title_line_height',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Address', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        /* Title */
        array(
            'type' => 'textarea',
            'heading' => esc_html__('Title', 'induxe'),
            'param_name' => 'title2',
            'description' => esc_html__('Enter title.', 'induxe'),
            'group' => esc_html__('Work Time', 'induxe'),
            'admin_label' => true,
        ),

        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text Color', 'induxe'),
            'param_name' => 'title_color2',
            'value' => '',
           'group' => esc_html__('Work Time', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Font Size', 'induxe'),
            'param_name' => 'title_font_size2',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Work Time', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Line Height', 'induxe'),
            'param_name' => 'title_line_height2',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Work Time', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Font Weight", 'induxe'),
            'param_name' => 'title_font_weight2',
            'value' => array(
                'SemiBold' => '600',
                'Light' => '300',
                'Regullar' => '400',
                'Medium' => '500',
                'Bold' => '700',
            ),
            'std' => '400',
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Work Time', 'induxe'),
        ),
        /* Description */

        array(
            'type' => 'textarea',
            'heading' => esc_html__('Description', 'induxe'),
            'param_name' => 'description2',
            'description' => esc_html__('Enter description.', 'induxe'),
            'group' => esc_html__('Work Time', 'induxe'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text Color', 'induxe'),
            'param_name' => 'description_color2',
            'value' => '',
            'edit_field_class' => 'vc_col-sm-4 vc_column',
            'group' => esc_html__('Work Time', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Description Font Size', 'induxe'),
            'param_name' => 'des_font_size2',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
            'group' => esc_html__('Work Time', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Description Line Height', 'induxe'),
            'param_name' => 'des_title_line_height2',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
            'group' => esc_html__('Work Time', 'induxe'),
        ),
        /* Extra */
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

class WPBakeryShortCode_ct_contact_info2 extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>