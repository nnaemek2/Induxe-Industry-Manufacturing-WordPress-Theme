<?php
vc_map(
    array(
        'name'     => esc_html__('Fancybox Grid', 'induxe'),
        'base'     => 'ct_fancybox_grid',
        'class'    => 'ct-icon-element',
        'description' => esc_html__( 'Fancybox Displayed', 'induxe' ),
        'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
        'params'   => array(
            array(
                'type' => 'cms_template_img',
                'param_name' => 'cms_template',
                'shortcode' => 'ct_fancybox_grid',
                'heading' => esc_html__('Shortcode Template', 'induxe'),
                'admin_label' => true,
                'std' => 'ct_fancybox_grid.php',
                'group' => esc_html__('Template', 'induxe'),
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Has Container', 'induxe'),
                'param_name' => 'congif_container',
                'value' => array(
                    'Default' => '',
                    'Container' => 'container',
                ),
                'group' => esc_html__('Template', 'induxe'),
                'dependency' => array(
                    'element'=>'cms_template',
                    'value'=>array(
                        'ct_fancybox_grid--layout2.php',
                    )
                ),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Extra class name', 'induxe' ),
                'param_name' => 'el_class',
                'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in Custom CSS.', 'induxe' ),
                'group'            => esc_html__('Template', 'induxe')
            ),
            //List 1
            array(
                'type' => 'param_group',
                'heading' => esc_html__( 'Content', 'induxe' ),
                'param_name' => 'content_list',
                'description' => esc_html__( 'Enter values for team item', 'induxe' ),
                'value' => '',
                'group' => esc_html__('Source Settings', 'induxe'),
                'dependency' => array(
                    'element'=>'cms_template',
                    'value'=>array(
                        'ct_fancybox_grid.php',
                        'ct_fancybox_grid--layout2.php',
                    )
                ),
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' =>esc_html__('Title', 'induxe'),
                        'param_name' => 'title',
                        'admin_label' => true,
                        'group' => esc_html__('Source Settings', 'induxe'),
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' =>esc_html__('Nubmer', 'induxe'),
                        'param_name' => 'number_title',
                        'admin_label' => true,
                        'group' => esc_html__('Source Settings', 'induxe'),
                    ),
                    array(
                        'type' => 'textarea',
                        'heading' =>esc_html__('Content', 'induxe'),
                        'param_name' => 'fcb_content',
                        'admin_label' => false,
                        'group' => esc_html__('Source Settings', 'induxe'),
                    ),
                    array(
                        'type' => 'iconpicker',
                        'heading' => esc_html__( 'Flaticon', 'induxe' ),
                        'param_name' => 'icon_flaticon',
                        'value' => '',
                        'settings' => array(
                            'emptyIcon' => true,
                            'type' => 'flaticon',
                            'iconsPerPage' => 200,
                        ),
                        'description' => esc_html__( 'Select icon from library.', 'induxe' ),
                    ),
                    array(
                        'type' => 'dropdown',
                        'heading' => esc_html__('Icon Weight', 'induxe'),
                        'param_name' => 'icon_weight',
                        'value' => array(
                            'Solid' => '',
                            'Regular' => 'icon-far',
                            'Light' => 'icon-fal',
                            'Brands' => 'icon-fab',
                        ),
                    ),

                    array(
                        'type' => 'vc_link',
                        'class' => '',
                        'heading' => esc_html__('Link', 'induxe'),
                        'param_name' => 'item_link',
                        'value' => '',
                        'group' => esc_html__('Source Settings', 'induxe')
                    ),
                ),
            ),
            //List 2
            array(
                'type' => 'param_group',
                'heading' => esc_html__( 'Content', 'induxe' ),
                'param_name' => 'content_list2',
                'description' => esc_html__( 'Enter values for team item', 'induxe' ),
                'value' => '',
                'group' => esc_html__('Source Settings', 'induxe'),
                'dependency' => array(
                    'element'=>'cms_template',
                    'value'=>array(
                        'ct_fancybox_grid--layout3.php',
                        'ct_fancybox_grid--layout4.php',
                        'ct_fancybox_grid--layout5.php',
                        'ct_fancybox_grid--layout7.php',
                    )
                ),
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' =>esc_html__('Title', 'induxe'),
                        'param_name' => 'title',
                        'admin_label' => true,
                        'group' => esc_html__('Source Settings', 'induxe'),
                    ),
                    array(
                        'type' => 'textarea',
                        'heading' =>esc_html__('Content', 'induxe'),
                        'param_name' => 'fcb_content',
                        'admin_label' => false,
                        'group' => esc_html__('Source Settings', 'induxe'),
                    ),
                    array(
                        'type' => 'iconpicker',
                        'heading' => esc_html__( 'Flaticon', 'induxe' ),
                        'param_name' => 'icon_flaticon',
                        'value' => '',
                        'settings' => array(
                            'emptyIcon' => true,
                            'type' => 'flaticon',
                            'iconsPerPage' => 200,
                        ),
                        'description' => esc_html__( 'Select icon from library.', 'induxe' ),
                    ),
                    array(
                        'type' => 'dropdown',
                        'heading' => esc_html__('Icon Weight', 'induxe'),
                        'param_name' => 'icon_weight',
                        'value' => array(
                            'Solid' => '',
                            'Regular' => 'icon-far',
                            'Light' => 'icon-fal',
                            'Brands' => 'icon-fab',
                        ),
                    ),
                ),
            ),

            //List 6
            array(
                'type' => 'param_group',
                'heading' => esc_html__( 'Content', 'induxe' ),
                'param_name' => 'content_list3',
                'description' => esc_html__( 'Enter values for team item', 'induxe' ),
                'value' => '',
                'group' => esc_html__('Source Settings', 'induxe'),
                'dependency' => array(
                    'element'=>'cms_template',
                    'value'=>array(
                        'ct_fancybox_grid--layout6.php',
                    )
                ),
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
                        'heading' =>esc_html__('Title', 'induxe'),
                        'param_name' => 'title',
                        'admin_label' => true,
                        'group' => esc_html__('Source Settings', 'induxe'),
                    ),
                    array(
                        'type' => 'textarea',
                        'heading' =>esc_html__('Content', 'induxe'),
                        'param_name' => 'fcb_content',
                        'admin_label' => false,
                        'group' => esc_html__('Source Settings', 'induxe'),
                    ),
                    array(
                        'type' => 'iconpicker',
                        'heading' => esc_html__( 'Flaticon', 'induxe' ),
                        'param_name' => 'icon_flaticon',
                        'value' => '',
                        'settings' => array(
                            'emptyIcon' => true,
                            'type' => 'flaticon',
                            'iconsPerPage' => 200,
                        ),
                        'description' => esc_html__( 'Select icon from library.', 'induxe' ),
                    ),
                    array(
                        'type' => 'dropdown',
                        'heading' => esc_html__('Icon Weight', 'induxe'),
                        'param_name' => 'icon_weight',
                        'value' => array(
                            'Solid' => '',
                            'Regular' => 'icon-far',
                            'Light' => 'icon-fal',
                            'Brands' => 'icon-fab',
                        ),
                    ),
                    array(
                        'type' => 'vc_link',
                        'class' => '',
                        'heading' => esc_html__('Link', 'induxe'),
                        'param_name' => 'item_link',
                        'value' => '',
                        'group' => esc_html__('Source Settings', 'induxe')
                    ),
                ),
            ),
            array(
                'type' => 'colorpicker',
                'heading' => esc_html__('Text Color', 'induxe'),
                'param_name' => 'title_color',
                'value' => '',
                'group' => esc_html__('Item Setting', 'induxe'),
                'edit_field_class' => 'vc_col-sm-4 vc_column',
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Font Size', 'induxe'),
                'param_name' => 'title_font_size',
                'description' => esc_html__('Enter number.', 'induxe'),
                'group' => esc_html__('Item Setting', 'induxe'),
                'edit_field_class' => 'vc_col-sm-4 vc_column',
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Line Height', 'induxe'),
                'param_name' => 'title_line_height',
                'description' => esc_html__('Enter number.', 'induxe'),
                'group' => esc_html__('Item Setting', 'induxe'),
                'edit_field_class' => 'vc_col-sm-4 vc_column',
            ),
            
            /* Description */
            array(
                'type' => 'colorpicker',
                'heading' => esc_html__('Description Color', 'induxe'),
                'param_name' => 'description_color',
                'value' => '',
                'edit_field_class' => 'vc_col-sm-4 vc_column',
                'group' => esc_html__('Item Setting', 'induxe'),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Description Font Size', 'induxe' ),
                'param_name' => 'description_font_size',
                'value' => '',
                'description' => esc_html__('Enter number.', 'induxe'),
                'edit_field_class' => 'vc_col-sm-4 vc_column',
                'group' => esc_html__('Item Setting', 'induxe'),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Description Line Height', 'induxe' ),
                'param_name' => 'description_line_height',
                'value' => '',
                'description' => esc_html__('Enter number.', 'induxe'),
                'edit_field_class' => 'vc_col-sm-4 vc_column',
                'group' => esc_html__('Item Setting', 'induxe'),
            ),
            array(
                'type' => 'colorpicker',
                'heading' => esc_html__('Icon Color', 'induxe'),
                'param_name' => 'icon_color',
                'value' => '',
                'group' => esc_html__('Item Setting', 'induxe'),
                'edit_field_class' => 'vc_col-sm-4 vc_column',
            ),

            array(
                'type' => 'textfield',
                'heading' => esc_html__('Font Size', 'induxe'),
                'param_name' => 'icon_font_size',
                'description' => esc_html__('Enter number.', 'induxe'),
                'group' => esc_html__('Item Setting', 'induxe'),
                'edit_field_class' => 'vc_col-sm-4 vc_column',
            ),
            array(
                'type' => 'colorpicker',
                'heading' => esc_html__('Background Color', 'induxe'),
                'param_name' => 'bg_color',
                'value' => '',
                'group' => esc_html__('Item Setting', 'induxe'),
                'edit_field_class' => 'vc_col-sm-4 vc_column',
            ),
            array(
                "type"             => "dropdown",
                "heading"          => esc_html__( "Columns XS", 'induxe' ),
                "param_name"       => "col_xs",
                "edit_field_class" => "ct-col-5",
                "value"            => array( 1, 2, 3, 4 ),
                "std"              => 1,
                "group"            =>  esc_html__('Column Settings', 'induxe'),
            ),
            array(
                "type"             => "dropdown",
                "heading"          => esc_html__( "Columns SM", 'induxe' ),
                "param_name"       => "col_sm",
                "edit_field_class" => "ct-col-5",
                "value"            => array( 1, 2, 3, 4 ),
                "std"              => 2,
                "group"            =>  esc_html__('Column Settings', 'induxe'),
            ),
            array(
                "type"             => "dropdown",
                "heading"          => esc_html__( "Columns MD", 'induxe' ),
                "param_name"       => "col_md",
                "edit_field_class" => "ct-col-5",
                "value"            => array( 1, 2, 3, 4, 5 ),
                "std"              => 3,
                "group"            =>  esc_html__('Column Settings', 'induxe'),
            ),
            array(
                "type"             => "dropdown",
                "heading"          => esc_html__( "Columns LG", 'induxe' ),
                "param_name"       => "col_lg",
                "edit_field_class" => "ct-col-5",
                "value"            => array( 1, 2, 3, 4, 5, 6 ),
                "std"              => 4,
                "group"            =>  esc_html__('Column Settings', 'induxe'),
            ),
            array(
                "type"             => "dropdown",
                "heading"          => esc_html__( "Columns XL", 'induxe' ),
                "param_name"       => "col_xl",
                "edit_field_class" => "ct-col-5",
                "value"            => array( 1, 2, 3, 4, 5, 6 ),
                "std"              => 4,
                "group"            =>  esc_html__('Column Settings', 'induxe'),
            ),
        )
    )
);

class WPBakeryShortCode_ct_fancybox_grid extends CmsShortCode
{
    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('ct-grid-fancybox');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>