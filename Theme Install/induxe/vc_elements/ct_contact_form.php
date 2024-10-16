<?php
    if(class_exists('WPCF7')) {
        $cf7 = get_posts( 'post_type="wpcf7_contact_form"&numberposts=-1' );

        $contact_forms = array();
        if ( $cf7 ) {
            foreach ( $cf7 as $cform ) {
                $contact_forms[ $cform->post_title ] = $cform->ID;
            }
        } else {
            $contact_forms[ esc_html__( 'No contact forms found', 'induxe' ) ] = 0;
        }

        vc_map(array(
            'name' => 'Contact Form',
            'base' => 'ct_contact_form',
            'class'    => 'ct-icon-element',
            'description' => esc_html__( 'Contact Form 7', 'induxe' ),
            'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
            'params' => array(
                 /* Template */
                array(
                    'type' => 'cms_template_img',
                    'param_name' => 'cms_template',
                    'shortcode' => 'ct_contact_form',
                    'heading' => esc_html__('Shortcode Template', 'induxe'),
                    'admin_label' => true,
                    'group' => esc_html__('Template', 'induxe'),
                    'std' => 'ct_contact_form.php'
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Positon Config', 'induxe'),
                    'param_name' => 'postion_setting',
                    'value' => array(
                        'Defatult' => '',
                        'Top -55px' => 'ct-position-top',
                    ),
                    'group' => esc_html__('Template', 'induxe'),
                ),

                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Box Shadow', 'induxe'),
                    'param_name' => 'box_shadow_layout',
                    'value' => array(
                        'Hidden' => '',
                        'Show' => 'ct-box-shadow',
                    ),
                    'group' => esc_html__('Template', 'induxe'),
                ),
                array(
                    'type' => 'textfield',
                    'heading' =>esc_html__('Title', 'induxe'),
                    'param_name' => 'el_title',
                    'admin_label' => true,
                    'group' => esc_html__('Title', 'induxe'),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Title Color', 'induxe'),
                    'param_name' => 'title_color',
                    'value' => '',
                    'group'      => esc_html__('Title', 'induxe'),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__( 'Font Size', 'induxe' ),
                    'param_name' => 'font_size',
                    'value' => '',
                    'description' => esc_html__('Enter number..', 'induxe'),
                    'group'      => esc_html__('Title', 'induxe'),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Line Height', 'induxe'),
                    'param_name' => 'title_line_height',
                    'description' => esc_html__('Enter number.', 'induxe'),
                    'group' => esc_html__('Title', 'induxe'),
                ),

                array(
                    'type' => 'textarea',
                    'heading' =>esc_html__('Sub Title', 'induxe'),
                    'param_name' => 'el_sub_title',
                    'admin_label' => true,
                    'dependency' => array(
                        'element'=>'cms_template',
                        'value'=>array(
                            'ct_contact_form--layout2.php',
                        )
                    ),
                    'group' => esc_html__('Title', 'induxe'),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Sub Color', 'induxe'),
                    'param_name' => 'sub_color',
                    'value' => '',
                    'dependency' => array(
                        'element'=>'cms_template',
                        'value'=>array(
                            'ct_contact_form--layout2.php',
                        )
                    ),
                    'group'      => esc_html__('Title', 'induxe'),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => __( 'Select Contact Form', 'induxe' ),
                    'param_name' => 'id',
                    'value' => $contact_forms,
                    'save_always' => true,
                    'admin_label' => true,
                    'description' => __( 'Choose previously created contact form from the drop down list.', 'induxe' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__( 'Extra class name', 'induxe' ),
                    'param_name' => 'el_class',
                    'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in Custom CSS.', 'induxe' ),
                    'group'      => esc_html__('Extra', 'induxe')
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
            )
        ));

        class WPBakeryShortCode_ct_contact_form extends CmsShortCode
        {

            protected function content($atts, $content = null)
            {
                return parent::content($atts, $content);
            }
        }
    }
?>
