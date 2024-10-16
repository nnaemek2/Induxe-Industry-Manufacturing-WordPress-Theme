<?php
vc_map(array(
    "name" => 'Banner',
    "base" => "ct_banner",

    'class'    => 'ct-icon-element',
    "category" => esc_html__('CaseThemes Shortcodes', 'induxe'),
    "params" => array(

        /* Template */
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            "shortcode" => "ct_banner",
            "heading" => esc_html__("Shortcode Template", 'induxe'),
            "admin_label" => true,
            "group" => esc_html__("Template", 'induxe'),
        ),
        array(
            'type' => 'attach_image',
            'heading' => esc_html__( 'Image', 'induxe' ),
            'param_name' => 'image_feature',
            'value' => '',
            'description' => esc_html__( 'Select icon image from media library.', 'induxe' ),
            "group"      => esc_html__("Image", "induxe"),
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Image size', 'induxe' ),
            'param_name' => 'img_size',
            'value' => '',
            'description' => __( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height). Enter multiple sizes (Example: 100x100,200x200,300x300)).', 'induxe' ),
            "group"      => esc_html__("Image", "induxe"),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Image alignment small', 'induxe' ),
            'param_name' => 'ct_image_align',
            "value" => array(
                'Inherit' => 'inherit',
                'Left' => 'image_align_xs_left',
                'Center' => 'image_align_xs_center',
                'Right' => 'image_align_xs_right',
            ),
            "group"      => esc_html__("Image", "induxe"),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Style', 'induxe' ),
            'param_name' => 'hover_style',
            "value" => array(
                'no-boder' => 'Default',
                'have-border' => 'hover-border',
            ),
            "group"      => esc_html__("Image", "induxe"),
        ),
        array(
            'type' => 'animation_style',
            'heading' => esc_html__( 'Animation Style', 'induxe' ),
            'param_name' => 'animation',
            'description' => esc_html__( 'Choose your animation style', 'induxe' ),
            'admin_label' => false,
            'weight' => 0,
            "group" => esc_html__("Extra", 'induxe'),
        ),
    )
));

class WPBakeryShortCode_ct_banner extends CmsShortCode
{
    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}
?>