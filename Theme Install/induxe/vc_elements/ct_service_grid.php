<?php
$term_list = cms_get_grid_term_list('service');
vc_map(
    array(
        'name'     => esc_html__('Service Grid', 'induxe'),
        'base'     => 'ct_service_grid',
        'class'    => 'ct-icon-element',
        'description' => esc_html__( 'Service in masonry grid', 'induxe' ),
        'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
        'params'   => array(
            array(
                'type' => 'cms_template_img',
                'param_name' => 'cms_template',
                'shortcode' => 'ct_service_grid',
                'heading' => esc_html__('Shortcode Template', 'induxe'),
                'admin_label' => true,
                'std' => 'ct_service_grid.php',
                'group' => esc_html__('Template', 'induxe'),
            ),
            array(
                'type' => 'colorpicker',
                'heading' => esc_html__('Title Color', 'induxe'),
                'param_name' => 'title_color',
                'value' => '',
                'group'      => esc_html__('Item Setting', 'induxe'),
            ),
            array(
                'type' => 'colorpicker',
                'heading' => esc_html__('Background Title Color', 'induxe'),
                'param_name' => 'bg_title_color',
                'value' => '',
                'dependency' => array(
                    'element'=>'cms_template',
                    'value'=>array(
                        'ct_service_grid--layout3.php',
                    )
                ),
                'group'      => esc_html__('Item Setting', 'induxe'),
            ),
            array(
                'type' => 'colorpicker',
                'heading' => esc_html__('Meta Color', 'induxe'),
                'param_name' => 'meta_color',
                'value' => '',
                'group'      => esc_html__('Item Setting', 'induxe'),
            ),

            array(
                'type' => 'colorpicker',
                'heading' => esc_html__('Button Color', 'induxe'),
                'param_name' => 'button_color',
                'value' => '',
                'group'      => esc_html__('Item Setting', 'induxe'),
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
                'heading'    => esc_html__('Select Categories', 'induxe'),
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
                'heading'    => esc_html__('Select Post Name', 'induxe'),
                'param_name' => 'post_ids',
                'description' => esc_html__('Leave blank to show all service', 'induxe'),
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
                'description' => esc_html__('Set max limit for items in grid. Enter number only', 'induxe'),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Length of excerpt', 'induxe' ),
                'param_name' => 'length_excerpt',
                'value' => '',
                'group'      => esc_html__('Source Settings', 'induxe'),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Image size', 'induxe' ),
                'param_name' => 'img_size',
                'value' => '',
                'description' => esc_html__( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height). Enter multiple sizes (Example: 100x100,200x200,300x300)).', 'induxe' ),
                'group'      => esc_html__('Grid Settings', 'induxe'),
            ),
            array(
                'type'       => 'dropdown',
                'heading'    => esc_html__('Layout Type', 'induxe'),
                'param_name' => 'layout',
                'value'      => array(
                    'Masonry' => 'masonry',
                    'Basic'   => 'basic',
                ),
                'group'      => esc_html__('Grid Settings', 'induxe'),
            ),
            array(
                'type'       => 'dropdown',
                'heading'    => esc_html__('Filter on Masonry', 'induxe'),
                'param_name' => 'filter',
                'value'      => array(
                    'Disable' => 'false',
                    'Enable'  => 'true',
                ),
                'dependency' => array(
                    'element' => 'layout',
                    'value'   => 'masonry'
                ),
                'group'      => esc_html__('Grid Settings', 'induxe'),
            ),
            array(
                'type'       => 'dropdown',
                'heading'    => esc_html__('Pagination Type', 'induxe'),
                'param_name' => 'pagination_type',
                'value'      => array(
                    'Pagination'  => 'pagination',
                    'Loadmore' => 'loadmore',
                    'Disable' => 'false',
                ),
                'dependency' => array(
                    'element' => 'layout',
                    'value'   => 'masonry'
                ),
                'group'      => esc_html__('Grid Settings', 'induxe'),
            ),
            array(
                'type'       => 'textfield',
                'heading'    => esc_html__('Default Title', 'induxe'),
                'param_name' => 'filter_default_title',
                'value'      => 'All',
                'group'      => esc_html__('Filter', 'induxe'),
                'description' => esc_html__('Enter default title for filter option display, empty: All', 'induxe'),
                'dependency' => array(
                    'element' => 'filter',
                    'value'   => 'true'
                ),
            ),
            array(
                'type'       => 'textfield',
                'heading'    => esc_html__('Item Gap', 'induxe'),
                'param_name' => 'gap',
                'value'      => '30',
                'group'      => esc_html__('Grid Settings', 'induxe'),
                'description' => esc_html__('Select gap between grid elements. Enter number only', 'induxe'),
            ),
            array(
                'type'             => 'dropdown',
                'heading'          => esc_html__('Columns XS', 'induxe'),
                'param_name'       => 'col_xs',
                'edit_field_class' => 'vc_col-sm-1/5 vc_column',
                'value'            => array(1, 2, 3, 4, 6, 12),
                'std'              => 1,
                'group'            => esc_html__('Grid Settings', 'induxe'),
            ),
            array(
                'type'             => 'dropdown',
                'heading'          => esc_html__('Columns SM', 'induxe'),
                'param_name'       => 'col_sm',
                'edit_field_class' => 'vc_col-sm-1/5 vc_column',
                'value'            => array(1, 2, 3, 4, 6, 12),
                'std'              => 2,
                'group'            => esc_html__('Grid Settings', 'induxe'),
            ),
            array(
                'type'             => 'dropdown',
                'heading'          => esc_html__('Columns MD', 'induxe'),
                'param_name'       => 'col_md',
                'edit_field_class' => 'vc_col-sm-1/5 vc_column',
                'value'            => array(1, 2, 3, 4, 6, 12),
                'std'              => 3,
                'group'            => esc_html__('Grid Settings', 'induxe'),
            ),
            array(
                'type'             => 'dropdown',
                'heading'          => esc_html__('Columns LG', 'induxe'),
                'param_name'       => 'col_lg',
                'edit_field_class' => 'vc_col-sm-1/5 vc_column',
                'value'            => array(1, 2, 3, 4, 6, 12),
                'std'              => 4,
                'group'            => esc_html__('Grid Settings', 'induxe'),
            ),
            array(
                'type'             => 'dropdown',
                'heading'          => esc_html__('Columns XL', 'induxe'),
                'param_name'       => 'col_xl',
                'edit_field_class' => 'vc_col-sm-1/5 vc_column',
                'value'            => array(1, 2, 3, 4, 6, 12),
                'std'              => 4,
                'group'            => esc_html__('Grid Settings', 'induxe'),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Extra class name', 'induxe' ),
                'param_name' => 'el_class',
                'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in Custom CSS.', 'induxe' ),
                'group'            => esc_html__('Extra', 'induxe')
            ),
            array(
                'type'       => 'dropdown',
                'heading'    => esc_html__('Layout Type', 'induxe'),
                'param_name' => 'style_layout',
                'value'      => array(
                    'Style 1'   => 'left',
                    'Style 2' => 'center',
                ),
                "dependency" => array(
                    "element"=>"cms_template",
                    "value"=>array(
                        "ct_service_grid",
                    )
                ),
                'group'      => esc_html__('Grid Settings', 'induxe'),
            ),
        )
    )
);

class WPBakeryShortCode_ct_service_grid extends CmsShortCode
{
    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('ct-service-grid');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>