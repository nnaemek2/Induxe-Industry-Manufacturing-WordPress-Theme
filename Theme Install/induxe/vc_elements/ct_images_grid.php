<?php
vc_map(
    array(
        'name'     => esc_html__('Images Grid', 'induxe'),
        'base'     => 'ct_images_grid',
        'class'    => 'ct-icon-element',
        'description' => esc_html__( 'Images Displayed', 'induxe' ),
        'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
        'params'   => array(
            array(
                'type' => 'cms_template_img',
                'param_name' => 'cms_template',
                'shortcode' => 'ct_images_grid',
                'heading' => esc_html__('Shortcode Template', 'induxe'),
                'admin_label' => true,
                'std' => 'ct_images_grid.php',
                'group' => esc_html__('Template', 'induxe'),
            ),

            array(
                'type' => 'param_group',
                'heading' => esc_html__( 'Content', 'induxe' ),
                'param_name' => 'content_list',
                'description' => esc_html__( 'Enter values for images item', 'induxe' ),
                'value' => '',
                'dependency' => array(
                    'element'=>'cms_template',
                    'value'=>array(
                        'ct_images_grid.php',
                    )
                ),
                'group' => esc_html__('Source Settings', 'induxe'),
                'params' => array(
                    array(
                        'type' => 'attach_image',
                        'heading' => esc_html__( 'Image', 'induxe' ),
                        'param_name' => 'image',
                        'value' => '',
                        'description' => esc_html__( 'Select image from media library.', 'induxe' ),
                        'group' => esc_html__('Source Settings', 'induxe'),
                    ),
                ),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Image size', 'induxe' ),
                'param_name' => 'img_size',
                'value' => '',
                'description' => esc_html__( "Enter image size (Example: 'thumbnail', 'medium', 'large', 'full' or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)).", 'induxe' ),
                'group'      => esc_html__('Source Settings', 'induxe')
            ),
            array(
                "type"             => "dropdown",
                "heading"          => esc_html__( "Columns XS", 'induxe' ),
                "param_name"       => "col_xs",
                "edit_field_class" => "ct-col-5",
                "value"            => array( 1, 2, 3, 4 ),
                "std"              => 1,
                "group"            => 'Column Settings',
            ),
            array(
                "type"             => "dropdown",
                "heading"          => esc_html__( "Columns SM", 'induxe' ),
                "param_name"       => "col_sm",
                "edit_field_class" => "ct-col-5",
                "value"            => array( 1, 2, 3, 4 ),
                "std"              => 2,
                "group"            => 'Column Settings',
            ),
            array(
                "type"             => "dropdown",
                "heading"          => esc_html__( "Columns MD", 'induxe' ),
                "param_name"       => "col_md",
                "edit_field_class" => "ct-col-5",
                "value"            => array( 1, 2, 3, 4, 5 ),
                "std"              => 3,
                "group"            => 'Column Settings',
            ),
            array(
                "type"             => "dropdown",
                "heading"          => esc_html__( "Columns LG", 'induxe' ),
                "param_name"       => "col_lg",
                "edit_field_class" => "ct-col-5",
                "value"            => array( 1, 2, 3, 4, 5, 6 ),
                "std"              => 4,
                "group"            => 'Column Settings',
            ),
            array(
                "type"             => "dropdown",
                "heading"          => esc_html__( "Columns XL", 'induxe' ),
                "param_name"       => "col_xl",
                "edit_field_class" => "ct-col-5",
                "value"            => array( 1, 2, 3, 4, 5, 6 ),
                "std"              => 4,
                "group"            => 'Column Settings',
            ),
        )
    )
);

class WPBakeryShortCode_ct_images_grid extends CmsShortCode
{
    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('ct-grid-images');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>