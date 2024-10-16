<?php
vc_map(array(
    'name' => 'Video Player',
    'base' => 'ct_video_player',
    'class'    => 'ct-icon-element',
    'description' => 'Embed Youtube/Vimeo player',
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        
        /* Template */
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_video_player',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'std' => 'ct_video_player.php',
            'group' => esc_html__('Template', 'induxe'),
        ),
        /* Title */
        array(
            'type' => 'textarea',
            'heading' => esc_html__('Title', 'induxe'),
            'param_name' => 'title',
            'description' => esc_html__('Enter title.', 'induxe'),
            'group' => esc_html__('Title', 'induxe'),
            'admin_label' => true,
        ),

        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text Color', 'induxe'),
            'param_name' => 'title_color',
            'value' => '',
            'group' => esc_html__('Title', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Font Size', 'induxe'),
            'param_name' => 'title_font_size',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group' => esc_html__('Title', 'induxe'),
            'edit_field_class' => 'vc_col-sm-4 vc_column',
        ),
        array(
            'type' => 'vc_link',
            'heading' => esc_html__( 'Video Url', 'induxe' ),
            'param_name' => 'video_link',
            'value' => 'https://www.youtube.com/watch?v=SF4aHwxHtZ0',
            'description' => 'Video url on Youtube, Vimeo'
        ),

        array(
            'type' => 'attach_image',
            'heading' => esc_html__( 'Video Image', 'induxe' ),
            'param_name' => 'video_image',
            'value' => '',
            'description' => esc_html__( 'Select icon image from media library.', 'induxe' ),
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Image size', 'induxe' ),
            'param_name' => 'img_size',
            'value' => '',
            'description' => __( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height). Enter multiple sizes (Example: 100x100,200x200,300x300)).', 'induxe' ),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Button Play Fixed Center', 'induxe'),
            'param_name' => 'play_fixed_center',
            'value' => array(
                'No' => 'play-no-fixed',
                'Yes' => 'play-fixed',
            ),
        ),

        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Button Play Style', 'induxe'),
            'param_name' => 'play_style',
            'value' => array(
                'Style 1' => 'style1',
                'Style 2' => 'style2',
            ),
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Extra class name', 'induxe' ),
            'param_name' => 'el_class',
            'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in Custom CSS.', 'induxe' ),
            'group'            => esc_html__('Extra', 'induxe')
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

class WPBakeryShortCode_ct_video_player extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>