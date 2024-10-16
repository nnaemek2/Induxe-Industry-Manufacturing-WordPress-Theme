<?php
$args = array(
    'name' => 'Testimonial Carousel',
    'base' => 'ct_testimonial_carousel',
    'class'    => 'ct-icon-element',
    'description' => esc_html__( 'Testimonial Displayed', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(

        /* Template */
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_testimonial_carousel',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'admin_label' => true,
            'group' => esc_html__('Template', 'induxe'),
            'std' => 'ct_testimonial_carousel.php'
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
            'heading' =>esc_html__('Sub Title', 'induxe'),
            'param_name' => 'el_sub_title',
            'admin_label' => true,
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Sub Color', 'induxe'),
            'param_name' => 'sub_color',
            'value' => '',
            'group'      => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Testimonial Item', 'induxe' ),
            'value' => '',
            'param_name' => 'testimonial_item',
            'params' => array(
                array(
                    'type' => 'textfield',
                    'heading' =>esc_html__('Name', 'induxe'),
                    'param_name' => 'title',
                    'admin_label' => true,
                ),
                array(
                    'type' => 'textfield',
                    'heading' =>esc_html__('Position', 'induxe'),
                    'param_name' => 'position',

                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Content', 'induxe'),
                    'param_name' => 'content',
                ),
                array(
                    'type' => 'attach_image',
                    'heading' => esc_html__( 'Image', 'induxe' ),
                    'param_name' => 'image',
                    'value' => '',
                    'description' => esc_html__( 'Select image from media library.', 'induxe' ),
                ),
            ),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Name Color', 'induxe'),
            'param_name' => 'name_color',
            'value' => '',
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Content Color', 'induxe'),
            'param_name' => 'content_color',
            'value' => '',
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Position Color', 'induxe'),
            'param_name' => 'position_color',
            'value' => '',
        ),
    ));

$args = induxe_add_vc_extra_param($args);
vc_map($args);

class WPBakeryShortCode_ct_testimonial_carousel extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>