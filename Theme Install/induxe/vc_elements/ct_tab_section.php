<?php
	vc_map( array(
		"name"                    => 'Tab Section',
		"base"                    => "ct_tab_section",
		'class'    => 'ct-icon-element',
	    'description' => esc_html__( 'Tab Section Displayed', 'induxe' ),
	    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
		"as_parent"               => array( 'except' => 'ct_tab_section' ),
		"content_element"         => true,
		"js_view"                 => 'VcColumnView',
		"show_settings_on_create" => true,
		"params"                  => array(
			array(
	            'type' => 'iconpicker',
	            'heading' => esc_html__( 'Flaticon', 'induxe' ),
	            'param_name' => 'icon_flaticon',
	            'settings' => array(
	                'emptyIcon' => true,
	                'type' => 'flaticon',
	                'iconsPerPage' => 200,
	            ),
	            'description' => esc_html__( 'Select icon from library.', 'induxe' ),
	        ),
			array(
	            'type' => 'textfield',
	            'heading' => esc_html__( 'Title', 'induxe' ),
	            'param_name' => 'title',
	        ),
		)
	) );
	
	class WPBakeryShortCode_ct_tab_section extends WPBakeryShortCodesContainer {
		
		protected function content( $atts, $content = null ) {
			return parent::content( $atts, $content );
		}
	}
