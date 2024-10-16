<?php
/**
 * Newsletter form for VC
 * Require Newsletter plugin to be installed
 *
 * @package Autosmart
 * @since   Autosmart 1.0
 */

if(class_exists('Newsletter')) {
    $forms = array_filter( (array) get_option( 'newsletter_forms', array() ) );

    $forms_list = array(
        esc_html__( 'Default Form', 'induxe' ) => 'default'
    );

    if ( $forms )
    {
        $index = 1;
        foreach ( $forms as $key => $form )
        {
            $forms_list[ sprintf( esc_html__( 'Form %s', 'induxe' ), $index ) ] = $key;
            $index ++;
        }
    }

    vc_map(array(
        "name" => 'Newsletter Form',
        "base" => "ct_newsletter",
        'class'    => 'ct-icon-element',
        'description' => esc_html__( 'Newsletter Form', 'induxe' ),
        "category" => esc_html__('CaseThemes Shortcodes', 'induxe'),
        "params" => array(
            array(
                'type' => 'cms_template_img',
                'param_name' => 'cms_template',
                'shortcode' => 'ct_newsletter',
                'heading' => esc_html__('Shortcode Template', 'induxe'),
                'admin_label' => true,
                'std' => 'ct_newsletter.php',
                'group' => esc_html__('Template', 'induxe'),
            ),
            array(
                'type'        => 'dropdown',
                'heading'     => esc_html__( 'Newsletter Form', 'induxe' ),
                'description' => esc_html__( 'Pick default or custom forms from Newsletter Plugin.', 'induxe' ),
                'value'       => $forms_list,
                'admin_label' => true,
                'param_name'  => 'form',
                'group' => esc_html__('Form', 'induxe'),
            ),

            //Title
            array(
                'type'       => 'textarea',
                'heading'    => esc_html__('Title', 'induxe'),
                'param_name' => 'el_title',
                'value'      => '',
                "group" => esc_html__("Title", 'induxe'),
            ),
            array(
                "type" => "colorpicker",
                "heading" => esc_html__("Color", 'induxe'),
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
            //Sub title
            array(
                "type" => "textarea",
                "heading" => esc_html__( 'Description', 'induxe' ),
                "param_name" => "introduction",
                "value" => '',
                "group" => esc_html__("Description", 'induxe'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Font Size", 'induxe'),
                "param_name" => "sub_font_size",
                "description" => esc_html__( "Enter Number ..", 'induxe' ),
                "group" => esc_html__("Description", 'induxe'),
            ),
            array(
                "type" => "colorpicker",
                "heading" => esc_html__("Color", 'induxe'),
                "param_name" => "sub_title_color",
                "value" => "",
                "group" => esc_html__("Description", 'induxe'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( 'Line Height', 'induxe' ),
                "param_name" => "sub_line_height",
                "value" => '',
                "description" => esc_html__("Enter: ..",'induxe'),
                "group"      => esc_html__("Description", "induxe"),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Margin Bottom", 'induxe'),
                "param_name" => "sub_margin_botton",
                "description" => esc_html__( "Enter Number ..", 'induxe' ),
                "group" => esc_html__("Description", 'induxe'),
            ),
            //Extra
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
                'group' => esc_html__('Extra', 'induxe'),
            ),
            array(    
                'type' => 'dropdown',
                'heading' => esc_html__("Width Form", 'induxe'),
                'param_name' => 'width_form',
                'value' => array(
                    'Full width' => 'new-full-width',
                    'Max width 570px' => 'new-width-570',
                    'Max width 870px' => 'new-width-870',
                ),
                'tsd' => 'new-width-570',
                'group' => esc_html__('Extra', 'induxe'),
            ),
            array(    
                'type' => 'dropdown',
                'heading' => esc_html__("Text Align", 'induxe'),
                'param_name' => 'el_text_align',
                'value' => array(
                    'Normal' => 'none',
                    'Left' => 'newsletter-left',
                    'Center' => 'newsletter-center',
                ),
                'tsd' => 'newsletter-center',
                'group' => esc_html__('Extra', 'induxe'),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Parallax Speed', 'induxe' ),
                'param_name' => 'el_parallax_speed',
                'value' => '',
                'description' => esc_html__( 'Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)', 'induxe' ),
                'dependency' => array(
                    'element'=>'el_parallax',
                    'value'=>array(
                        'true',
                    )
                ),
                'group' => esc_html__('Extra', 'induxe'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Extra class name", "induxe" ),
                "param_name" => "el_class",
                "description" => esc_html__( "Style particular content element differently - add a class name and refer to it in Custom CSS.", "induxe" ),
                'group' => esc_html__('Extra', 'induxe'),
            ),
        )
    ));

    class WPBakeryShortCode_ct_newsletter extends CmsShortCode
    {

        protected function content($atts, $content = null)
        {
            return parent::content($atts, $content);
        }
    }
} ?>