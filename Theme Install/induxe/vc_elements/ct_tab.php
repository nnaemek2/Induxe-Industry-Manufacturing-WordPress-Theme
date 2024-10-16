<?php
	vc_map( 
		array(
			"name"                    => 'Tabs',
			"base"                    => "ct_tab",
			'class'    => 'ct-icon-element',
		    'description' => esc_html__( 'Tabs Displayed', 'induxe' ),
		    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
			"as_parent"               => array( 'except' => 'ct_tab' ),
			"js_view"                 => 'VcColumnView',
			"show_settings_on_create" => true,
			"content_element"         => true,
			"params"                  => array(	
				array(
		            'type' => 'dropdown',
		            'heading' => esc_html__('Layout', 'induxe'),
		            'param_name' => 'layout',
		            'value' => array(
		                'Layout 1' => 'layout1',
		                'Layout 2' => 'layout2',
		            ),
		        ),
				array(
		            'type' => 'textfield',
		            'heading' =>esc_html__('Tab Active Section', 'induxe'),
		            'param_name' => 'active_section',
		            'description' => 'Enter active section number (Note: to have all sections closed on initial load enter non-existing number).',
		        ),
		        array(
		            "type" => "colorpicker",
		            "heading" => esc_html__("Tab Color", 'induxe'),
		            "param_name" => "title_color",
		            "value" => "",
		        ),
				array(
		            'type' => 'textfield',
		            'heading' => esc_html__( 'Extra class name', 'induxe' ),
		            'param_name' => 'el_class',
		            'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in Custom CSS.', 'induxe' ),
		        ),
			)
		) 
	);
	
	class WPBakeryShortCode_ct_tab extends WPBakeryShortCodesContainer {
		
		protected function content( $atts, $content = null ) {
			return parent::content( $atts, $content );
		}
	}

?>