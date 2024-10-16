<?php
vc_map(array(
    'name' => 'Heading',
    'base' => 'ct_heading',
    'class'    => 'ct-icon-element',
    'description' => esc_html__( 'Heading Displayed', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            "shortcode" => "ct_heading",
            "heading" => esc_html__("Shortcode Template", 'induxe'),
            "admin_label" => true,
            'std' => 'ct_heading.php',
            "group" => esc_html__("Template", 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Text Source', 'induxe'),
            'param_name' => 'text_source',
            'value' => array(
                'Custom Text' => 'custom-text',
                'Post or Page Title' => 'post-page-title',
            ),
            'admin_label' => true,
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textarea',
            'heading' => esc_html__( 'Text', 'induxe' ),
            'param_name' => 'text',
            'value' => '',
            'admin_label' => true,
            'dependency' => array(
                'element'=>'text_source',
                'value'=>array(
                    'custom-text',
                )
            ),
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Element tag', 'induxe'),
            'param_name' => 'tag',
            'value' => array(
                'h1' => 'h1',
                'h2' => 'h2',
                'h3' => 'h3',
                'h4' => 'h4',
                'h5' => 'h5',
                'h6' => 'h6',
                'p' => 'p',
                'div' => 'div',
            ),
            'std' => 'h3',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Text align large', 'induxe'),
            'param_name' => 'align_lg',
            'value' => array(
                esc_html__( 'Left', 'induxe') => 'align-left',
                esc_html__( 'Right', 'induxe') => 'align-right',
                esc_html__( 'Center', 'induxe') => 'align-center',
            ),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Text align medium', 'induxe'),
            'param_name' => 'align_md',
            'value' => array(
                esc_html__( 'Left', 'induxe') => 'left',
                esc_html__( 'Right', 'induxe') => 'right',
                esc_html__( 'Center', 'induxe') => 'center',
            ),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Text align small', 'induxe'),
            'param_name' => 'align_sm',
            'value' => array(
                esc_html__( 'Left', 'induxe') => 'align-left-sm',
                esc_html__( 'Right', 'induxe') => 'align-right-sm',
                esc_html__( 'Center', 'induxe') => 'align-center-sm',
            ),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Text align mini', 'induxe'),
            'param_name' => 'align_xs',
            'value' => array(
                esc_html__( 'Left', 'induxe') => 'align-left-xs',
                esc_html__( 'Right', 'induxe') => 'align-right-xs',
                esc_html__( 'Center', 'induxe') => 'align-center-xs',
            ),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Margin top', 'induxe'),
            'param_name' => 'margin_top',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Margin right', 'induxe'),
            'param_name' => 'margin_right',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Margin bottom', 'induxe'),
            'param_name' => 'margin_bottom',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Margin left', 'induxe'),
            'param_name' => 'margin_left',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Font size large', 'induxe' ),
            'param_name' => 'font_size',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Font size medium', 'induxe' ),
            'param_name' => 'font_size_md',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Font size small', 'induxe' ),
            'param_name' => 'font_size_sm',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Font size mini', 'induxe' ),
            'param_name' => 'font_size_xs',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Line height large', 'induxe' ),
            'param_name' => 'line_height',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Line height medium', 'induxe' ),
            'param_name' => 'line_height_md',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Line height small', 'induxe' ),
            'param_name' => 'line_height_sm',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Line height mini', 'induxe' ),
            'param_name' => 'line_height_xs',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Text Transform', 'induxe'),
            'param_name' => 'text_transform',
            'value' => array(
                esc_html__( 'None', 'induxe') => 'none',
                esc_html__('Inherit', 'induxe') => 'inherit',
                esc_html__('Uppercase', 'induxe') => 'uppercase',
                esc_html__('Capitalize', 'induxe') => 'capitalize',
                esc_html__('Lowercase', 'induxe') => 'lowercase',
            ),
            'std' => 'none',
            'group' => esc_html__( 'Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Font Weight', 'induxe'),
            'param_name' => 'font_weight',
            'value' => array(
                esc_html__( 'Default', 'induxe') => '',
                esc_html__( 'Bold 700', 'induxe') => '700',
                esc_html__( 'Bold 800', 'induxe') => '800',
                esc_html__( 'SemiBold', 'induxe') => '600',
                esc_html__( 'Medium', 'induxe') => '500',
                esc_html__( 'Normal', 'induxe') => '400',
            ),
            'std' => 'none',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Font Style', 'induxe'),
            'param_name' => 'font_style',
            'value' => array(
                esc_html__('Normal', 'induxe') => '',
                esc_html__('Italic', 'induxe') => 'italic',
            ),
            'std' => 'none',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Letter Spacing', 'induxe' ),
            'param_name' => 'letter_spacing',
            'value' => '',
            'description' => esc_html__('Enter ..px, ..em', 'induxe' ),
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text Color', 'induxe'),
            'param_name' => 'text_color',
            'value' => '',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Theme Custom Fonts', 'induxe'),
            'param_name' => 'theme_custom_fonts',
            'value' => array(
                'Normal' => 'poppin-normal',
                'Poppins Light'          => 'poppin-light',
                'Poppins Light Italic'   => 'poppin-light-i',
                'Poppins Regular'        => 'poppin-regular',
                'Poppins Regular Italic' => 'poppin-regular-i',
                'Poppins Medium'         => 'poppin-medium',
                'Poppins Medium Italic'  => 'poppin-medium-i',
                'Poppins SemiBold'       => 'poppin-semibold',
                'Poppins SemiBold Italic'=> 'poppin-semibold-i',
                'Poppins Bold'           => 'poppin-bold',
                'Poppins Bold Italic'    => 'poppin-bold-i',
            ),
            'std' => 'poppin-normal',
            'group' => esc_html__('Title', 'induxe'),
        ),

        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Custom Google Fonts', 'induxe'),
            'param_name' => 'custom_fonts',
            'value' => array(
                'No' => 'false',
                'Yes' => 'true',
            ),
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'google_fonts',
            'param_name' => 'google_fonts',
            'value' => 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
            'settings' => array(
                'fields' => array(
                    'font_family_description' => esc_html__( 'Select font family.', 'induxe' ),
                    'font_style_description' => esc_html__( 'Select font styling.', 'induxe' ),
                ),
            ),
            'dependency' => array(
                'element'=>'custom_fonts',
                'value'=>array(
                    'true',
                )
            ),
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'vc_link',
            'heading' => esc_html__( 'Link for title', 'induxe' ),
            'param_name' => 'title_link',
            'value' => '',
            'group' => esc_html__('Title', 'induxe'),
        ),
        
        /* Sub Title */
        array(
            'type' => 'textarea',
            'heading' => esc_html__( 'Sub Title', 'induxe' ),
            'param_name' => 'subtitle',
            'value' => '',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_heading.php',
                )
            ),
            'group'      => esc_html__('Sub Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Font Size', 'induxe' ),
            'param_name' => 'subtitle_font_size',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_heading.php',
                )
            ),
            'group'      => esc_html__('Sub Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Line Height', 'induxe' ),
            'param_name' => 'subtitle_line_height',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_heading.php',
                )
            ),
            'group'      => esc_html__('Sub Title', 'induxe'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Color', 'induxe'),
            'param_name' => 'subtitle_color',
            'value' => '',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_heading.php',
                )
            ),
            'group'      => esc_html__('Sub Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Margin bottom', 'induxe'),
            'param_name' => 'sub_margin_bottom',
            'description' => esc_html__('Enter number.', 'induxe'),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_heading.php',
                )
            ),
            'group'      => esc_html__('Sub Title', 'induxe'),
        ),
        /* Description */
        array(
            'type' => 'textarea',
            'heading' => esc_html__( 'Description', 'induxe' ),
            'param_name' => 'description',
            'value' => '',
            'group'      => esc_html__('Description', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Font Size', 'induxe' ),
            'param_name' => 'description_font_size',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group'      => esc_html__('Description', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Line Height', 'induxe' ),
            'param_name' => 'description_line_height',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group'      => esc_html__('Description', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Font Weight', 'induxe'),
            'param_name' => 'des_font_weight',
            'value' => array(
                esc_html__( 'Default', 'induxe') => '',
                esc_html__( 'Bold 700', 'induxe') => '700',
                esc_html__( 'Bold 800', 'induxe') => '800',
                esc_html__( 'SemiBold', 'induxe') => '600',
                esc_html__( 'Medium', 'induxe') => '500',
                esc_html__( 'Normal', 'induxe') => '400',
            ),
            'std' => 'none',
            'group'      => esc_html__('Description', 'induxe'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Color', 'induxe'),
            'param_name' => 'description_color',
            'value' => '',
            'group'      => esc_html__('Description', 'induxe'),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon FontAwesome 5', 'induxe' ),
            'param_name' => 'icon_fontawesome5',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true,
                'type' => 'awesome5',
                'iconsPerPage' => 200,
            ),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_heading--layout3.php',
                )
            ),
            'description' => esc_html__( 'Select icon from library.', 'induxe' ),
            'group' => esc_html__('Icon', 'induxe'),
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
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_heading--layout3.php',
                )
            ),
            'group' => esc_html__('Icon', 'induxe'),
        ),

        /* Extra */
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

class WPBakeryShortCode_ct_heading extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('ct-heading');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>