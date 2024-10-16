<?php
vc_map(array(
    'name' => 'Pricing',
    'base' => 'ct_pricing',
    'class' => 'ct-icon-element',
    'description' => esc_html__( 'Pricing Displayed', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        
        /* Template */
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            'shortcode' => 'ct_pricing',
            'heading' => esc_html__('Shortcode Template', 'induxe'),
            'group' => esc_html__('Template', 'induxe'),
        ), 

        /* Layout Classic */
        array(
            'type' => 'textfield',
            'heading' => __ ( 'Title', 'induxe' ),
            'param_name' => 'title',
            'value' => '',
            'group' => esc_html__('Source Settings', 'induxe'),
            'admin_label' => true,
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Title Color', 'induxe'),
            'param_name' => 'title_color',
            'value' => '',
            'group' => esc_html__('Source Settings', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => __ ( 'Price', 'induxe' ),
            'param_name' => 'price',
            'value' => '',
            'group' => esc_html__('Source Settings', 'induxe'),
        ),
        array(
            'type' => 'textfield',
            'heading' => __ ( 'Time', 'induxe' ),
            'param_name' => 'pricing_time',
            'value' => '',
            'group' => esc_html__('Source Settings', 'induxe'),
        ),
        array(
            'type' => 'textarea',
            'heading' => esc_html__( 'Description', 'induxe' ),
            'param_name' => 'prc_description',
            'value' => '',
            'group' => esc_html__('Source Settings', 'induxe'),
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
            'param_name' => 'link_button',
            'value' => '',
            'group' => esc_html__('Button', 'induxe')
        ),
        /* Extra */
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Chose Active", 'induxe'),
            'param_name' => 'chose_active',
            'value' => array(
                'Item Show Normal' => '',
                'Item Show Active' => 'ct-pri-item-active',
            ),
            'group'    => esc_html__('Extra', 'induxe')
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

class WPBakeryShortCode_ct_pricing extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>