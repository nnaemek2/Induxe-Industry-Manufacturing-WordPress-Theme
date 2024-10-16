<?php
$args = array(
    'name' => 'Team Carousel',
    'base' => 'ct_team_carousel',
    'class'    => 'ct-icon-element',
    'description' => esc_html__( 'Testimonial Displayed', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(

        /* Template */
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_team_carousel',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'admin_label' => true,
            'group' => esc_html__('Template', 'induxe'),
            'std' => 'ct_team_carousel.php'
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
            'param_name' => 'team_item',
            'params' => array(
                array(
                    'type' => 'attach_image',
                    'heading' => esc_html__( 'Image', 'induxe' ),
                    'param_name' => 'image',
                    'value' => '',
                    'description' => esc_html__( 'Select image from media library.', 'induxe' ),
                    'group' => esc_html__('Source Settings', 'induxe'),
                ),
                array(
                    'type' => 'textfield',
                    'heading' =>esc_html__('Name', 'induxe'),
                    'param_name' => 'title',
                    'admin_label' => true,
                    'group' => esc_html__('Source Settings', 'induxe'),
                ),
                array(
                    'type' => 'textfield',
                    'heading' =>esc_html__('Position', 'induxe'),
                    'param_name' => 'position',
                    'admin_label' => true,
                    'group' => esc_html__('Source Settings', 'induxe'),
                ),
                array(
                    'type' => 'vc_link',
                    'class' => '',
                    'heading' => esc_html__('Link', 'induxe'),
                    'param_name' => 'item_link',
                    'value' => '',
                    'group' => esc_html__('Source Settings', 'induxe')
                ),
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__( 'Social', 'induxe' ),
                    'param_name' => 'social',
                    'description' => esc_html__( 'Enter values for team social', 'induxe' ),
                    'value' => '',
                    'group' => esc_html__('Source Settings', 'induxe'),
                    'params' => array(
                        array(
                            'type' => 'iconpicker',
                            'heading' => esc_html__( 'Icon', 'induxe' ),
                            'param_name' => 'icon',
                            'value' => '',
                            'settings' => array(
                                'emptyIcon' => true,
                                'type' => 'fontawesome',
                                'iconsPerPage' => 200,
                            ),
                            'description' => esc_html__( 'Select icon from library.', 'induxe' ),
                            'admin_label' => true,
                        ),
                        array(
                            'type' => 'textfield',
                            'heading' =>esc_html__('Link', 'induxe'),
                            'param_name' => 'social_link',
                            'admin_label' => true,
                        ),
                    ),
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Image size', 'induxe' ),
            'param_name' => 'img_size',
            'value' => '',
            'description' => esc_html__( "Enter image size (Example: 'thumbnail', 'medium', 'large', 'full' or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)).", 'induxe' ),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Name Color', 'induxe'),
            'param_name' => 'name_color',
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

class WPBakeryShortCode_ct_team_carousel extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>