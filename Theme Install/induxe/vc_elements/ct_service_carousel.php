<?php
$term_list = cms_get_grid_term_list('service');
$args = array(
    'name'  => 'Service Carousel',
    'base'  => 'ct_service_carousel',
    'class' => 'ct-icon-element',
    'description' => esc_html__( 'Service in Carousel', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_service_carousel',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'admin_label' => true,
            'std' => 'ct_service_carousel.php',
            'group' => esc_html__('Template', 'induxe'),
        ),

        array(
            'type'       => 'checkbox',
            'heading'    => esc_html__('Custom Source', 'induxe'),
            'param_name' => 'custom_source',
            'value'      => '1',
            'description'        => 'Check here if you want custom source',
            'group'      => esc_html__('Source Settings', 'induxe')
        ),
        array(
            'type'       => 'autocomplete',
            'heading'    => esc_html__('Select Service Categories', 'induxe'),
            'param_name' => 'source',
            'description' => esc_html__('Leave blank to select all category', 'induxe'),
            'settings'   => array(
                'multiple' => true,
                'values'   => $term_list['auto_complete'],
            ),
            'dependency' => array(
                'element'=>'custom_source',
                'value'=>array(
                    'true',
                )
            ),
            'group'      => esc_html__('Source Settings', 'induxe'),
        ),
        array(
            'type'       => 'autocomplete',
            'class'      => '',
            'heading'    => esc_html__('Select Service Name', 'induxe'),
            'param_name' => 'post_ids',
            'description' => esc_html__('Leave blank to show all Service', 'induxe'),
            'settings'   => array(
                'multiple' => true,
                'values'   => cms_get_type_posts_data('service')
            ),
            'dependency' => array(
                'element'=>'custom_source',
                'value'=>array(
                    'true',
                )
            ),
            'group'      => esc_html__('Source Settings', 'induxe'),
        ),
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Order by', 'induxe'),
            'param_name' => 'orderby',
            'value'      => array(
                'Date'   => 'date',
                'ID'     => 'ID',
                'Author' => 'author',
                'Title'  => 'title',
                'Random' => 'rand',
            ),
            'std'        => 'date',
            'group'      => esc_html__('Source Settings', 'induxe')
        ),
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__('Sort order', 'induxe'),
            'param_name' => 'order',
            'value'      => array(
                'Ascending'  => 'ASC',
                'Descending' => 'DESC',
            ),
            'std'        => 'DESC',
            'group'      => esc_html__('Source Settings', 'induxe')
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__('Total items', 'induxe'),
            'param_name' => 'limit',
            'value'      => '6',
            'group'      => esc_html__('Source Settings', 'induxe'),
            'description' => esc_html__('Set max limit for items in carousel. Enter number only', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Image Size', 'induxe' ),
            'param_name' => 'img_size',
            'value' => '',
            'description' => esc_html__( "Enter image size (Example: 'thumbnail', 'medium', 'large', 'full' or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height).", 'induxe' ),
            'group'      => esc_html__('Source Settings', 'induxe')
        ),
    ));

$args = induxe_add_vc_extra_param($args);
vc_map($args);

class WPBakeryShortCode_ct_service_carousel extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('ct-service-carousel');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>