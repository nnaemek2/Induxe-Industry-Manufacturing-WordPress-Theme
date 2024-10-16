<?php
vc_map(array(
    'name' => 'Service List',
    'base' => 'ct_service_list',
    'class'    => 'ct-icon-element',
    'description' => esc_html__( 'Service List Links Displayed', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            "shortcode" => "ct_service_list",
            "heading" => esc_html__("Shortcode Template", 'induxe'),
            "admin_label" => true,
            'std' => 'ct_service_list.php',
            "group" => esc_html__("Template", 'induxe'),
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
            "description" => esc_html__( "Enter Number:...", 'induxe' ),
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
            "description" => esc_html__( "Enter Number:...", 'induxe' ),
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

        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Service List', 'induxe' ),
            'value' => '',
            'param_name' => 'quick',
            'description' => esc_html__( 'Set content for each item.', 'induxe' ),
            'params' => array(
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__( 'Title', 'induxe'),
                    'param_name' => 'item_title',
                    'description' => esc_html__( 'Enter title.', 'induxe'),
                    'admin_label' => true,
                    "group" => esc_html__("Items", 'induxe'),
                ),
                array(
                    'type' => 'vc_link',
                    'class' => '',
                    'heading' => esc_html__('Link', 'induxe'),
                    'param_name' => 'item_link',
                    'value' => '',
                    "group" => esc_html__("Items", 'induxe'),
                ),
            ),
            "group" => esc_html__("Items", 'induxe'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Color", 'induxe'),
            "param_name" => "item_post_color",
            "value" => "",
            "group" => esc_html__("Items", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Font Size", 'induxe'),
            "param_name" => "item_font_size",
            "description" => esc_html__( "Enter Number:...", 'induxe' ),
            "group" => esc_html__("Items", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( 'Line Height', 'induxe' ),
            "param_name" => "item_line_height",
            "value" => '',
            "description" => esc_html__( "Enter Number:...", 'induxe' ),
            "group" => esc_html__("Items", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Text Transform", 'induxe'),
            'param_name' => 'item_text_transform',
            'value' => array(
                'Normal' => 'none',
                'Uppercase' => 'uppercase',
                'Lowercase' => 'lowercase',
                'Capitalize' => 'capitalize',
                'Unset' => 'unset'
            ),
            'tsd' => 'capitalize',
            "group" => esc_html__("Items", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Font Weight", 'induxe'),
            'param_name' => 'item_font_weight',
            'value' => array(
                'SemiBold' => '600',
                'Light' => '300',
                'Regular' => '400',
                'Medium' => '500',
                'Bold' => '700',
            ),
            'std' => '700',
            "group" => esc_html__("Items", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Margin Bottom", 'induxe'),
            "param_name" => "item_margin_botton",
            "description" => esc_html__( "Enter Number:..", 'induxe' ),
            "group" => esc_html__("Items", 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Display Items', 'induxe'),
            'param_name' => 'style_display',
            'value' => array(
                esc_html__( 'Block', 'induxe') => 'style-1',
                esc_html__( 'Inline Block', 'induxe') => 'style-2',
            ),
            'std'=> 'style-1',
            "group" => esc_html__("Items", 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Text align', 'induxe'),
            'param_name' => 'text_align',
            'value' => array(
                esc_html__( 'Left', 'induxe') => 'left',
                esc_html__( 'Center', 'induxe') => 'center',
                esc_html__( 'Right', 'induxe') => 'right',
            ),
            "group" => esc_html__("Items", 'induxe'),
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

class WPBakeryShortCode_ct_service_list extends CmsShortCode
{
    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}
?>