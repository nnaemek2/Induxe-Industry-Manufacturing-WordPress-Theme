<?php
vc_map(array(
    'name' => 'Button',
    'base' => 'ct_button',
    'class'    => 'ct-icon-element',
    'description' => esc_html__( 'Button Displayed', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_button',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'admin_label' => true,
            'std' => 'ct_button.php',
            'group' => esc_html__('Template', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Text', 'induxe' ),
            'param_name' => 'button_text',
            'value' => '',
            'admin_label' => true,
            'group' => esc_html__('Button Settings', 'induxe')
        ),
        array(
            'type' => 'vc_link',
            'class' => '',
            'heading' => esc_html__('Link', 'induxe'),
            'param_name' => 'button_link',
            'value' => '',
            'group' => esc_html__('Button Settings', 'induxe')
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
                'Modern White' => 'btn-default btn-modern-white',
                'Background White Color' => 'btn-default btn-white',
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
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Align Large', 'induxe'),
            'param_name' => 'align_lg',
            'value' => array(
                'Left' => 'align-left',
                'Center' => 'align-center',
                'Right' => 'align-right',
            ),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Align Medium', 'induxe'),
            'param_name' => 'align_md',
            'value' => array(
                'Left' => 'align-left-md',
                'Center' => 'align-center-md',
                'Right' => 'align-right-md',
            ),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Align Small', 'induxe'),
            'param_name' => 'align_sm',
            'value' => array(
                'Left' => 'align-left-sm',
                'Center' => 'align-center-sm',
                'Right' => 'align-right-sm',
            ),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Align Mini', 'induxe'),
            'param_name' => 'align_xs',
            'value' => array(
                'Left' => 'align-left-xs',
                'Center' => 'align-center-xs',
                'Right' => 'align-right-xs',
            ),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
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
                    'ct_button.php',
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
                    'ct_button.php',
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
                    'ct_button.php',
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
                    'ct_button.php',
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
                    'ct_button.php',
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
                    'ct_button.php',
                )
            ),
            'group' => esc_html__('Button Settings', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Icon Library', 'induxe' ),
            'value' => array(
                esc_html__( 'Font Awesome 4', 'induxe' ) => 'fontawesome',
                esc_html__( 'Font Awesome 5', 'induxe' ) => 'fontawesome5',
                esc_html__( 'Material Design', 'induxe' ) => 'material_design',
                esc_html__( 'ET Line', 'induxe' ) => 'etline',
                esc_html__( 'Themify', 'induxe' ) => 'themify',
            ),
            'param_name' => 'icon_list',
            'description' => esc_html__( 'Select icon library.', 'induxe' ),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_button.php',
                )
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
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Themify', 'induxe' ),
            'param_name' => 'icon_themify',
            'settings' => array(
                'emptyIcon' => true,
                'type' => 'themify',
                'iconsPerPage' => 200,
            ),
            'dependency' => array(
                'element' => 'icon_list',
                'value' => 'themify',
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
            'type' => 'textfield',
            'heading' => esc_html__( 'Icon Font Size', 'induxe' ),
            'param_name' => 'icon_font_size',
            'description' => esc_html__( 'Enter number.', 'induxe' ),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_button.php',
                )
            ),
            'group' => esc_html__('Icon', 'induxe'),
        ),      
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Extra class name', 'induxe' ),
            'param_name' => 'el_class',
            'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in Custom CSS.', 'induxe' ),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_button.php',
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

class WPBakeryShortCode_ct_button extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>