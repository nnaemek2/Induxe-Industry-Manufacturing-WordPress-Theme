<?php
vc_map(
	array(
		'name' => esc_html__('Progress Bar', 'induxe'),
	    'base' => 'ct_progressbar',
	    'class'    => 'ct-icon-element',
	    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
	    'params' => array(
	    	array(
                'type' => 'cms_template_img',
                'param_name' => 'cms_template',
                'shortcode' => 'ct_progressbar',
                'heading' => esc_html__('Shortcode Template', 'induxe'),
                'admin_label' => true,
                'std' => 'ct_progressbar.php',
                'group' => esc_html__('Template', 'induxe'),
            ),
	        array(
	            'type' => 'param_group',
	            'heading' => esc_html__( 'Progress Bar Lists', 'induxe' ),
	            'param_name' => 'ct_progressbar_list',
	            'value' => '',
	            'params' => array(
	                array(
			            'type' => 'textfield',
			            'heading' => esc_html__('Item Title','induxe'),
			            'param_name' => 'item_title',
			            'value' => '',
			            'group' => esc_html__('Progress Bar Settings', 'induxe'),
			            'admin_label' => true,
			        ),
					array(
						'type' => 'textfield',
						'class' => '',
						'value' => '',
						'heading' => esc_html__( 'Value', 'induxe' ),
						'param_name' => 'value',
						'description' => esc_html__('Enter number only 1 to 100', 'induxe'),
						'group' => esc_html__('Progress Bar Settings', 'induxe'),
						'admin_label' => true,
					),
	            ),
	        ),
	        array(
	            "type" => "colorpicker",
	            "heading" => esc_html__("Text Color", 'induxe'),
	            "param_name" => "text_color",
	            "value" => "",
	            'group' => esc_html__('Progress Bar Settings', 'induxe'),
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => esc_html__("Font Size", 'induxe'),
	            "param_name" => "font_size",
	            "description" => esc_html__("Enter number ...", 'induxe'),
	            'group' => esc_html__('Progress Bar Settings', 'induxe'),
	        ),
	        array(    
	            'type' => 'dropdown',
	            'heading' => esc_html__("Font Weight", 'induxe'),
	            'param_name' => 'font_weight',
	            "description" => esc_html__("Apply for title", 'induxe'),
	            'value' => array(
	            	'Normal' => '400',
	            	'Medium' => '500',
	                'SemiBold' => '600',
	                'Bold' => '700',
	            ),
	            'std' => '300',
	            'group' => esc_html__('Progress Bar Settings', 'induxe'),
	        ),
	        array(
	            "type" => "colorpicker",
	            "heading" => esc_html__("Value Color", 'induxe'),
	            "param_name" => "value_color",
	            "value" => "",
	            'group' => esc_html__('Progress Bar Settings', 'induxe'),
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => esc_html__("Value Font Size", 'induxe'),
	            "param_name" => "value_font_size",
	            "description" => esc_html__("Enter number ...", 'induxe'),
	            'group' => esc_html__('Progress Bar Settings', 'induxe'),
	        ),
	        array(
	            "type" => "colorpicker",
	            "heading" => esc_html__("Background Content Progress Bar", 'induxe'),
	            "param_name" => "bg_inner_color",
	            'group' => esc_html__('Progress Bar Settings', 'induxe'),
	        ),
	        array(
	            "type" => "colorpicker",
	            "heading" => esc_html__("Background Progress Bar", 'induxe'),
	            "param_name" => "bg_color",
	            'group' => esc_html__('Progress Bar Settings', 'induxe'),
	        ),

            array(
	            'type' => 'textfield',
	            'heading' => esc_html__('Extra Class','induxe'),
	            'param_name' => 'el_class',
	            'value' => '',
	            'group' => esc_html__('Template', 'induxe')
	        ),
	    )
	)
);
class WPBakeryShortCode_ct_progressbar extends CmsShortCode{
	protected function content($atts, $content = null){
	    /* JS */
        wp_enqueue_script('waypoints');
	    wp_enqueue_script('progressbar', get_template_directory_uri() . '/assets/js/progressbar.min.js', array( 'jquery' ), '0.7.1', true);
	    wp_enqueue_script('ct-progressbar', get_template_directory_uri() . '/assets/js/progressbar.ct.js', array( 'jquery' ), 'all', true);
		return parent::content($atts, $content);
	}
}

?>