<?php
vc_map(array(
    "name" => 'Lists',
    "base" => "ct_list",
    'class'    => 'ct-icon-element',
    "category" => esc_html__('CaseThemes Shortcodes', 'induxe'),
    "params" => array(
        /* Template */
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_list',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'admin_label' => true,
            'std' => 'ct_list.php',
            'group' => esc_html__('Template', 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Text align", 'induxe'),
            'param_name' => 'align_list',
            'value' => array(  
                'Left'   => 'text-left',
                'Center' => 'text-center',
                'Right'  => 'text-right',
                'Right (Center Small Devices < 991px)' => 'text-right text-991px',
                'Right (Center Small Devices < 767px)' => 'text-right text-767px',
                'Right (Left Small Devices < 991px)' => 'text-right text-991px-left',
                'Right (Left Small Devices < 767px)' => 'text-right text-767px-left',
            ),
            'std' => 'text-left',
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "ct_list.php",
                )
            ),
            'group' => esc_html__('Template', 'induxe'),
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
            "description" => esc_html__( "Enter Number..", 'induxe' ),
            "group" => esc_html__("Title", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Font Weight", 'induxe'),
            'param_name' => 'el_font_weight',
            'value' => array(
                'SemiBold' => '600',
                'Light' => '300',
                'Regullar' => '400',
                'Medium' => '500',
                'Bold' => '700',
            ),
            'std' => '700',
            "group"      => esc_html__("Title", "induxe"),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Text Transform", 'induxe'),
            'param_name' => 'el_text_transform',
            'value' => array(
                esc_html__('Normal', "induxe") => 'none',
                esc_html__('Uppercase', "induxe") => 'uppercase',
                esc_html__('Lowercase', "induxe") => 'lowercase',
                esc_html__('Capitalize', "induxe") => 'capitalize',
                esc_html__('Unset', "induxe") => 'unset'
            ),
            'tsd' => 'capitalize',
            "group"      => esc_html__("Title", "induxe"),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Margin Bottom", 'induxe'),
            "param_name" => "margin_button",
            "description" => esc_html__( "Enter Number ..", 'induxe' ),
            "group" => esc_html__("Title", 'induxe'),
        ),

        // List
        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Lists', 'induxe' ),
            'param_name' => 'ct_list',
            'description' => esc_html__( 'Enter values for list item', 'induxe' ),
            'value' => '',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" =>esc_html__("List item", 'induxe'),
                    "param_name" => "ct_list_item",
                    'admin_label' => true,
                ),
                array(
                    'type' => 'vc_link',
                    'class' => '',
                    'heading' => esc_html__('Social Link', 'induxe'),
                    'param_name' => 'item_link',
                    'value' => '',
                ),
            ),
            'group' => esc_html__('Items', 'induxe'),
        ),
        array(
            "type" => "colorpicker",
            "heading" =>esc_html__("Text Color", 'induxe'),
            "param_name" => "ct_list_color",
            'value' => '',
            'group' => esc_html__('Items', 'induxe'),
        ),
        array(
            "type" => "colorpicker",
            "heading" =>esc_html__("Text Color Hover", 'induxe'),
            "param_name" => "ct_list_color_hv",
            'value' => '',
            'group' => esc_html__('Items', 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" =>esc_html__("Font Size", 'induxe'),
            "param_name" => "ct_list_fontsize",
            'value' => '',
            "description" => esc_html__("Enter Number: ...", 'induxe'),
            'group' => esc_html__('Items', 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" =>esc_html__("Line Height", 'induxe'),
            "param_name" => "ct_list_lineheight",
            'value' => '',
            "description" => esc_html__("Enter Number: ...", 'induxe'),
            'group' => esc_html__('Items', 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" =>esc_html__("Margin Bottom", 'induxe'),
            "param_name" => "margin_li_bottom",
            'value' => '',
            "description" => esc_html__("Enter Number: ...", 'induxe'),
            'group' => esc_html__('Items', 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Font Weight", 'induxe'),
            'param_name' => 'font_weight',
            'value' => array(
                'Light' => '300',
                'Regular' => '400',
                'Medium' => '500',
                'SemiBold' => '600',
                'Bold' => '700',
            ),
            'std' => '400',
            'group' => esc_html__('Items', 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Text Transform", 'induxe'),
            'param_name' => 'text_transform',
            'value' => array(
                esc_html__('Normal', "induxe") => 'none',
                esc_html__('Uppercase', "induxe") => 'uppercase',
                esc_html__('Lowercase', "induxe") => 'lowercase',
                esc_html__('Capitalize', "induxe") => 'capitalize',
                esc_html__('Unset', "induxe") => 'unset'
            ),
            'tsd' => 'capitalize',
            'group' => esc_html__('Items', 'induxe'),
        ),
        array(
            "type" => "colorpicker",
            "heading" =>esc_html__("Dotted Color", 'induxe'),
            "param_name" => "dotted_list_color",
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "ct_list--layout2.php",
                )
            ),
            'group' => esc_html__('Items', 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Display", 'induxe'),
            'param_name' => 'display_item',
            'value' => array(  
                'Default'      => '',
                'Inlien Block' => 'style-1',
                'Block'        => 'style-2',
            ),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "ct_list.php",
                )
            ),
            'group' => esc_html__('Items', 'induxe'),
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__("Margin Bottom", 'induxe'),
            'param_name' => 'ct_list_mr_botton',
            "description" => esc_html__("Enter number: ..px",'induxe'),
            "group"      => esc_html__("Extra", "induxe"),
        ),
    )
));

class WPBakeryShortCode_ct_list extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}
?>