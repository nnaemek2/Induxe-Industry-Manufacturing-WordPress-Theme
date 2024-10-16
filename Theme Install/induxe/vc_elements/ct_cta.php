<?php
vc_map(array(
    'name' => 'Call To Action',
    'base' => 'ct_cta',
    'class'    => 'ct-icon-element',
    'description' => esc_html__( 'Call To Action Displayed', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            "shortcode" => "ct_cta",
            "heading" => esc_html__("Shortcode Template", 'induxe'),
            "admin_label" => true,
            'std' => 'ct_cta.php',
            "group" => esc_html__("Template", 'induxe'),
        ),
        
        array(
            'type' => 'textarea',
            'heading' => esc_html__( 'Text', 'induxe' ),
            'param_name' => 'text',
            'value' => '',
            'admin_label' => true,
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
                'left' => 'align-left',
                'right' => 'align-right',
                'center' => 'align-center',
            ),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Text align medium', 'induxe'),
            'param_name' => 'align_md',
            'value' => array(
                'left' => 'align-left-md',
                'right' => 'align-right-md',
                'center' => 'align-center-md',
            ),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Text align small', 'induxe'),
            'param_name' => 'align_sm',
            'value' => array(
                'left' => 'align-left-sm',
                'right' => 'align-right-sm',
                'center' => 'align-center-sm',
            ),
            'edit_field_class' => 'vc_col-sm-3 vc_column',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Text align mini', 'induxe'),
            'param_name' => 'align_xs',
            'value' => array(
                'left' => 'align-left-xs',
                'right' => 'align-right-xs',
                'center' => 'align-center-xs',
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
                'None' => 'none',
                'Inherit' => 'inherit',
                'Uppercase' => 'uppercase',
                'Capitalize' => 'capitalize',
                'Lowercase' => 'lowercase',
            ),
            'std' => 'none',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Font Weight', 'induxe'),
            'param_name' => 'font_weight',
            'value' => array(
                'Default' => '',
                'Bold 700' => '700',
                'Bold 800' => '800',
                'SemiBold' => '600',
                'Medium' => '500',
                'Normal' => '400',
            ),
            'std' => 'none',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Font Style', 'induxe'),
            'param_name' => 'font_style',
            'value' => array(
                'Normal' => '',
                'Italic' => 'italic',
            ),
            'std' => 'none',
            'group' => esc_html__('Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Letter Spacing', 'induxe' ),
            'param_name' => 'letter_spacing',
            'value' => '',
            'description' => 'Enter ..px, ..em',
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
            'type' => 'textarea',
            'heading' => esc_html__( 'Sub Title', 'induxe' ),
            'param_name' => 'subtitle',
            'value' => '',
            'group'      => esc_html__('Sub Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Font Size', 'induxe' ),
            'param_name' => 'subtitle_font_size',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group'      => esc_html__('Sub Title', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Line Height', 'induxe' ),
            'param_name' => 'subtitle_line_height',
            'value' => '',
            'description' => esc_html__('Enter number.', 'induxe'),
            'group'      => esc_html__('Sub Title', 'induxe'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Color', 'induxe'),
            'param_name' => 'subtitle_color',
            'value' => '',
            'group'      => esc_html__('Sub Title', 'induxe'),
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

        //Button
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Text', 'induxe' ),
            'param_name' => 'button_text',
            'value' => '',
            'admin_label' => true,
            'group' => esc_html__('Button', 'induxe')
        ),
        array(
            'type' => 'vc_link',
            'heading' => esc_html__( 'Link for title', 'induxe' ),
            'param_name' => 'title_link',
            'value' => '',
            'group' => esc_html__('Button', 'induxe')
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Color', 'induxe'),
            'param_name' => 'btn_color',
            'value' => '',
            'group' => esc_html__('Button', 'induxe'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Button background Color', 'induxe'),
            'param_name' => 'bg_btn_color',
            'value' => '',
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_cta--layout2.php',
                )
            ),
            'group' => esc_html__('Button', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Button Style', 'induxe'),
            'param_name' => 'button_style',
            'value' => array(
                'Primary' => 'btn-default',
                'Primary Rounder' => 'btn-default btn-round',
                'Primary Square Color' => 'btn-default-square-color',
                'Primary Rounder Color' => 'btn-default-square-color btn-round',
                
                'Secondary Square ' => 'btn-secondary-square',
                'Secondary Rounder' => 'btn-secondary-round btn-round',
                'Secondary Square Color ' => 'btn-secondary-square-color',
                'Secondary Rounder Color ' => 'btn-secondary-square-color btn-round',

                'White Square' => 'btn-white-square',
                'White Rounder' => 'btn-white-square btn-round',
                'White Square Color' => 'btn-white-square-color',
                'White Rounder Color' => 'btn-white-square-color btn-round',
                
                'Black Square' => 'btn-black-square',
                'Black Rounder' => 'btn-black-square btn-round',
                'Black Square Color' => 'btn-black-square-color',
                'Black Rounder Color' => 'btn-black-square-color btn-round',
            ),
            'dependency' => array(
                'element'=>'cms_template',
                'value'=>array(
                    'ct_cta.php',
                )
            ),
            'group' => esc_html__('Button', 'induxe'),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Text Transform', 'induxe'),
            'param_name' => 'btn_text_transform',
            'value' => array(
                esc_html__( 'None', 'induxe') => 'none',
                esc_html__('Inherit', 'induxe') => 'inherit',
                esc_html__('Uppercase', 'induxe') => 'uppercase',
                esc_html__('Capitalize', 'induxe') => 'capitalize',
                esc_html__('Lowercase', 'induxe') => 'lowercase',
            ),
            'std' => 'none',
            'group' => esc_html__( 'Button', 'induxe'),
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

class WPBakeryShortCode_ct_cta extends CmsShortCode
{
    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('ct-cta');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}
?>