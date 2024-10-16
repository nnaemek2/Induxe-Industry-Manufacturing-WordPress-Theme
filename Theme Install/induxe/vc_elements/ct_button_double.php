<?php
vc_map(array(
    'name' => 'Double Button',
    'base' => 'ct_button_double',
    'class'    => 'ct-icon-element',
    'description' => esc_html__( 'Button Displayed', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_button_double',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'admin_label' => true,
            'std' => 'ct_button_double.php',
            'group' => esc_html__('Template', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Text', 'induxe' ),
            'param_name' => 'button_text',
            'value' => '',
            'admin_label' => true,
            'group' => esc_html__('Button 1', 'induxe')
        ),
        array(
            'type' => 'vc_link',
            'class' => '',
            'heading' => esc_html__('Link', 'induxe'),
            'param_name' => 'button_link',
            'value' => '',
            'group' => esc_html__('Button 1', 'induxe')
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Text', 'induxe' ),
            'param_name' => 'button_text2',
            'value' => '',
            'admin_label' => true,
            'group' => esc_html__('Button 2', 'induxe')
        ),
        array(
            'type' => 'vc_link',
            'class' => '',
            'heading' => esc_html__('Link', 'induxe'),
            'param_name' => 'button_link2',
            'value' => '',
            'group' => esc_html__('Button 2', 'induxe')
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Button Style', 'induxe'),
            'param_name' => 'button_style',
            'value' => array(
                'Primary' => 'btn-default',
                'Secondary' => 'btn-secondary',
                'Aylen' => 'btn-aylen',
                'Moema' => 'btn-moema',
                'Black' => 'btn-black',
                'Modern White' => 'btn-default btn-modern-white',
            ),
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Button Size', 'induxe'),
            'param_name' => 'button_size',
            'value' => array(
                'Default' => 'size-default',
                'Large' => 'size-lg',
            ),
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        /* Padding */
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Padding Top', 'induxe'),
            'param_name' => 'padding_top',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Padding Right', 'induxe'),
            'param_name' => 'padding_right',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_button_double.php',
                )
            ),
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Padding Bottom', 'induxe'),
            'param_name' => 'padding_bottom',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Padding Left', 'induxe'),
            'param_name' => 'padding_left',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_button_double.php',
                )
            ),
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        /* Border radius */
        /* Padding */
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Border Radius Top', 'induxe'),
            'param_name' => 'br_top',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_button_double.php',
                )
            ),
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Border Radius Right', 'induxe'),
            'param_name' => 'br_right',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_button_double.php',
                )
            ),
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Border Radius Bottom', 'induxe'),
            'param_name' => 'br_bottom',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_button_double.php',
                )
            ),
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Border Radius Left', 'induxe'),
            'param_name' => 'br_left',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_button_double.php',
                )
            ),
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Extra class name', 'induxe' ),
            'param_name' => 'el_class',
            'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in Custom CSS.', 'induxe' ),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_button_double.php',
                )
            ),
            'group'            => esc_html__('Button Settings', 'induxe')
        ),
        array(
            'type' => 'animation_style',
            'heading' => esc_html__( 'Animation Style', 'induxe' ),
            'param_name' => 'animation',
            'description' => esc_html__( 'Choose your animation style', 'induxe' ),
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
    )
));

class WPBakeryShortCode_ct_button_double extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>