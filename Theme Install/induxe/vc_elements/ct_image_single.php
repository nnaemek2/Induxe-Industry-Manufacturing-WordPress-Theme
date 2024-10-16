<?php
vc_map(array(
    "name" => 'Single Image',
    "base" => "ct_image_single",
    "icon" => "cs_icon_for_vc",
    "category" => esc_html__('CaseThemes Shortcodes', 'induxe'),
    "params" => array(
        /* Images */
        array(
            'type' => 'attach_image',
            "heading" => esc_html__("Image", 'induxe'),
            "param_name" => "single_image",
            'description' => esc_html__( 'Select image from media library.', 'induxe' ),
            "value" => "", 
            "group" => esc_html__("Image Single", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Max Height", 'induxe'),
            "param_name" => "max_height_image",
            "description" => esc_html__( "Enter Number ..", 'induxe' ),
            "group" => esc_html__("Image Single", 'induxe'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Margin Bottom", 'induxe'),
            "param_name" => "margin_bottom_image",
            "description" => esc_html__( "Enter Number ..", 'induxe' ),
            "group" => esc_html__("Image Single", 'induxe'),
        ),
        array(
            'type' => 'vc_link',
            'class' => '',
            'heading' => esc_html__('Link', 'induxe'),
            'param_name' => 'button_link',
            'value' => '',
            "group" => esc_html__("Image Single", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Box Shadow", 'induxe'),
            'param_name' => 'box_shadow_on',
            'value' => array(
                'Disable' => '',
                'Enable' => 'has-shadow',
            ),
            "group" => esc_html__("Extra", 'induxe'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Postion Custom", 'induxe'),
            'param_name' => 'position_custom',
            'value' => array(
                'Disable' => '',
                'Enable' => 'img-position-custom',
            ),
            "group" => esc_html__("Extra", 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__("Text Align", 'induxe'),
            'param_name' => 'textbox_align',
            'value' => array(
                'Left' => 'text-left', 
                'Left (Center Small Devices < 991px)' => 'text-left text-991px',
                'Left (Center Small Devices < 767px)' => 'text-left text-767px',
                'Center' => 'text-center',
                'Right' => 'text-right',
                'Right (to Center Small Devices < 991px)' => 'text-right text-991px',
                'Right (to Center Small Devices < 767px)' => 'text-right text-767px',
                'Right (to Left Small Devices < 991px)'   => 'text-right text-991px-left',
                'Right (to Left Small Devices < 767px)'   => 'text-right text-767px-left',
            ),
            "group" => esc_html__("Extra", 'induxe'),
        ),
    )
));

class WPBakeryShortCode_ct_single_image extends CmsShortCode
{
    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>