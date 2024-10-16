<?php
/**
 * Register metabox for posts based on Redux Framework. Supported methods:
 *     isset_args( $post_type )
 *     set_args( $post_type, $redux_args, $metabox_args )
 *     add_section( $post_type, $sections )
 * Each post type can contains only one metabox. Pease note that each field id
 * leads by an underscore sign ( _ ) in order to not show that into Custom Field
 * Metabox from WordPress core feature.
 *
 * @param induxe_Post_Metabox $metabox
 */

/**
 * Get list menu.
 * @return array
 */
function induxe_get_nav_menu(){

    $menus = array(
        '' => esc_html__('Default', 'induxe')
    );

    $obj_menus = wp_get_nav_menus();

    foreach ($obj_menus as $obj_menu){
        $menus[$obj_menu->term_id] = $obj_menu->name;
    }

    return $menus;
}

function induxe_page_options_register( $metabox ) {
	if ( ! $metabox->isset_args( 'post' ) ) {
		$metabox->set_args( 'post', array(
			'opt_name'            => 'post_option',
			'display_name'        => esc_html__( 'Post Settings', 'induxe' ),
			'show_options_object' => false,
		), array(
			'context'  => 'advanced',
			'priority' => 'default'
		) );
	}

	if ( ! $metabox->isset_args( 'page' ) ) {
		$metabox->set_args( 'page', array(
			'opt_name'            =>induxe_get_page_opt_name(),
			'display_name'        => esc_html__( 'Page Settings', 'induxe' ),
			'show_options_object' => false,
		), array(
			'context'  => 'advanced',
			'priority' => 'default'
		) );
	}

	if ( ! $metabox->isset_args( 'cms_pf_audio' ) ) {
		$metabox->set_args( 'cms_pf_audio', array(
			'opt_name'     => 'post_format_audio',
			'display_name' => esc_html__( 'Audio', 'induxe' ),
			'class'        => 'fully-expanded',
		), array(
			'context'  => 'advanced',
			'priority' => 'default'
		) );
	}

	if ( ! $metabox->isset_args( 'cms_pf_link' ) ) {
		$metabox->set_args( 'cms_pf_link', array(
			'opt_name'     => 'post_format_link',
			'display_name' => esc_html__( 'Link', 'induxe' )
		), array(
			'context'  => 'advanced',
			'priority' => 'default'
		) );
	}

	if ( ! $metabox->isset_args( 'cms_pf_quote' ) ) {
		$metabox->set_args( 'cms_pf_quote', array(
			'opt_name'     => 'post_format_quote',
			'display_name' => esc_html__( 'Quote', 'induxe' )
		), array(
			'context'  => 'advanced',
			'priority' => 'default'
		) );
	}

	if ( ! $metabox->isset_args( 'cms_pf_video' ) ) {
		$metabox->set_args( 'cms_pf_video', array(
			'opt_name'     => 'post_format_video',
			'display_name' => esc_html__( 'Video', 'induxe' ),
			'class'        => 'fully-expanded',
		), array(
			'context'  => 'advanced',
			'priority' => 'default'
		) );
	}

	if ( ! $metabox->isset_args( 'cms_pf_gallery' ) ) {
		$metabox->set_args( 'cms_pf_gallery', array(
			'opt_name'     => 'post_format_gallery',
			'display_name' => esc_html__( 'Gallery', 'induxe' ),
			'class'        => 'fully-expanded',
		), array(
			'context'  => 'advanced',
			'priority' => 'default'
		) );
	}
	$revslider_options = [];
	if(class_exists('RevSliderSlider')){
		$revSliderSlider = new RevSliderSlider();
		foreach ($revSliderSlider->get_sliders_short_list() as $slider) {
			$revslider_options[$slider->alias] = $slider->title;
		}
	}
	/* Extra Post Type */
	if ( ! $metabox->isset_args( 'portfolio' ) ) {
		$metabox->set_args( 'portfolio', array(
			'opt_name'            => 'portfolio_option',
			'display_name'        => esc_html__( 'Portfolio Settings', 'induxe' ),
			'show_options_object' => false,
		), array(
			'context'  => 'advanced',
			'priority' => 'default'
		) );
	}

	/* Extra Post Type */
	if ( ! $metabox->isset_args( 'post' ) ) {
		$metabox->set_args( 'post', array(
			'opt_name'            => 'post_option',
			'display_name'        => esc_html__( 'Post Settings', 'induxe' ),
			'show_options_object' => false,
		), array(
			'context'  => 'advanced',
			'priority' => 'default'
		) );
	}


	/* Extra Post Type */
	if ( ! $metabox->isset_args( 'service' ) ) {
		$metabox->set_args( 'service', array(
			'opt_name'            => 'service_option',
			'display_name'        => esc_html__( 'Service Settings', 'induxe' ),
			'show_options_object' => false,
		), array(
			'context'  => 'advanced',
			'priority' => 'default'
		) );
	}

	/* Extra Post Type */
	if ( ! $metabox->isset_args( 'product' ) ) {
		$metabox->set_args( 'product', array(
			'opt_name'            => 'product_option',
			'display_name'        => esc_html__( 'Product Settings', 'induxe' ),
			'show_options_object' => false,
		), array(
			'context'  => 'advanced',
			'priority' => 'default'
		) );
	}


	/**
	 * Config product meta options
	 *
	 */
	$metabox->add_section( 'product', array(
		'title'  => esc_html__( 'Product Settings', 'induxe' ),
		'icon'   => 'el-icon-website',
		'fields' => array(
			array(
                'id'       => 'custom_pagetitle',
                'type'     => 'switch',
                'title'    => esc_html__('Custom Layout', 'induxe'),
                'default'  => false,
                'indent' => true
            ),
            array(
                'id'       => 'ptitle_layout',
                'type'     => 'image_select',
                'title'    => esc_html__('Layout', 'induxe'),
                'subtitle' => esc_html__('Select a layout for page title.', 'induxe'),
                'options'  => array(
                    '0' => get_template_directory_uri() . '/assets/images/page-title/p0.jpg',
                    '1' => get_template_directory_uri() . '/assets/images/page-title/p1.jpg',
                ),
                'default'  => induxe_get_option_of_theme_options('ptitle_layout'),
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
            ),
	        array(
				'id'           => 'custom_title',
				'type'         => 'text',
				'title'        => esc_html__( 'Title', 'induxe' ),
				'subtitle'     => esc_html__( 'Use custom title for this page. The default title will be used on document title.', 'induxe' ),
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
			),
			array(
	            'id'       => 'ptitle_font_size',
	            'type'     => 'text',
	            'title'    => esc_html__('Font Size', 'induxe'),
	            'validate' => 'numeric',
	            'desc'     => esc_html__('Enter number (Default 70px)','induxe'),
	            'msg'      => esc_html__('Please enter number','induxe'),
	            'default'  => '',
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
	        ),
            array(
                'id'    => 'post_subtitle',
                'type'  => 'textarea',
                'title' => esc_html__('Subtitle', 'induxe'),
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
            ),
	        array(
	            'id'       => 'ptitle_bg',
	            'type'     => 'background',
	            'title'    => esc_html__('Background', 'induxe'),
	            'subtitle' => esc_html__('Page title background color.', 'induxe'),
	            'output'   => array('body #pagetitle'),
	            'background-color' => false,
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
	        ),
            array(
                'id'       => 'page_title_align',
                'type'     => 'button_set',
                'title'    => esc_html__('Content Align', 'induxe'),
                'options' => array(
                    '' => 'Default', 
                    'left' => 'Left', 
                    'center' => 'Center',
                    'right' => 'Right',
                 ), 
                'std' => 'Center',
                'output'   => array('#pagetitle .page-title-content'),
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
            ),
		)
	) );


	/**
	 * Config portfolio meta options
	 *
	 */
	$metabox->add_section( 'service', array(
		'title'  => esc_html__( 'General', 'induxe' ),
		'icon'   => 'el-icon-website',
		'fields' => array(
			array(
				'id'             => 'content_padding',
				'type'           => 'spacing',
				'output'         => array( '.site-content #primary' ),
				'right'          => false,
				'left'           => false,
				'mode'           => 'padding',
				'units'          => array( 'px' ),
				'units_extended' => 'false',
				'title'          => esc_html__( 'Content Padding', 'induxe' ),
				'desc'           => esc_html__( 'Default: Theme Option.', 'induxe' ),
				'default'        => array(
					'padding-top'    => '',
					'padding-bottom' => '',
					'units'          => 'px',
				)
			),
		)
	) );
	$metabox->add_section( 'portfolio', array(
		'title'  => esc_html__( 'General', 'induxe' ),
		'icon'   => 'el-icon-website',
		'fields' => array(
			array(
				'id'             => 'content_padding',
				'type'           => 'spacing',
				'output'         => array( '.single-portfolio .site-content #primary, .single-portfolio .site-content #secondary' ),
				'right'          => false,
				'left'           => false,
				'mode'           => 'padding',
				'units'          => array( 'px' ),
				'units_extended' => 'false',
				'title'          => esc_html__( 'Content Padding', 'induxe' ),
				'desc'           => esc_html__( 'Default: Theme Option.', 'induxe' ),
				'default'        => array(
					'padding-top'    => '',
					'padding-bottom' => '',
					'units'          => 'px',
				)
			),

            array(
                'id'    => 'portfolio_sub_title',
                'type'  => 'textarea',
                'title' => esc_html__( 'Sub Title', 'induxe' ),
            ),
		)
	) );

	$metabox->add_section( 'portfolio', array(
		'title'  => esc_html__( 'Meta', 'induxe' ),
		'icon'   => 'el-icon-website',
		'fields' => array(
            array(
                'id'    => 'portfolio_client',
                'type'  => 'text',
                'title' => esc_html__( 'Client', 'induxe' ),
            ),
            array(
                'id'    => 'portfolio_completion',
                'type'  => 'text',
                'title' => esc_html__( 'Completion', 'induxe' ),
            ),
            array(
                'id'    => 'portfolio_type',
                'type'  => 'text',
                'title' => esc_html__( 'Project Type', 'induxe' ),
            ),
            array(
                'id'    => 'portfolio_architects',
                'type'  => 'text',
                'title' => esc_html__( 'Architects', 'induxe' ),
            ),
		)
	) );

	/**
	 * Config post blog meta options
	 *
	 */
	$metabox->add_section( 'post', array(
		'title'  => esc_html__( 'General', 'induxe' ),
		'icon'   => 'el-icon-website',
		'fields' => array(
			array(
                'id'       => 'custom_pagetitle',
                'type'     => 'switch',
                'title'    => esc_html__('Custom Page Titlee Layout', 'induxe'),
                'default'  => false,
                'indent' => true
            ),
            array(
                'id'       => 'ptitle_layout',
                'type'     => 'image_select',
                'title'    => esc_html__('Layout', 'induxe'),
                'subtitle' => esc_html__('Select a layout for page title.', 'induxe'),
                'options'  => array(
                    '0' => get_template_directory_uri() . '/assets/images/page-title/p0.jpg',
                    '1' => get_template_directory_uri() . '/assets/images/page-title/p1.jpg',
                ),
                'default'  => induxe_get_option_of_theme_options('ptitle_layout'),
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
            ),
	        array(
				'id'           => 'custom_title',
				'type'         => 'text',
				'title'        => esc_html__( 'Title', 'induxe' ),
				'subtitle'     => esc_html__( 'Use custom title for this page. The default title will be used on document title.', 'induxe' ),
				'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
			),
            array(
                'id'    => 'post_subtitle',
                'type'  => 'textarea',
                'title' => esc_html__('Subtitle', 'induxe'),
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
            ),
	        array(
	            'id'       => 'ptitle_bg',
	            'type'     => 'background',
	            'title'    => esc_html__('Background', 'induxe'),
	            'subtitle' => esc_html__('Page title background color.', 'induxe'),
	            'output'   => array('body #pagetitle'),
	            'background-color' => false,
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
	        ),
			array(
				'id'             => 'content_padding',
				'type'           => 'spacing',
				'output'         => array( '.site-content #primary, .site-content #secondary' ),
				'right'          => false,
				'left'           => false,
				'mode'           => 'padding',
				'units'          => array( 'px' ),
				'units_extended' => 'false',
				'title'          => esc_html__( 'Content Padding', 'induxe' ),
				'desc'           => esc_html__( 'Default: Theme Option.', 'induxe' ),
				'default'        => array(
					'padding-top'    => '',
					'padding-bottom' => '',
					'units'          => 'px',
				)
			),
			array(
				'id'      => 'show_sidebar_post',
				'type'    => 'switch',
				'title'   => esc_html__( 'Custom Sidebar', 'induxe' ),
				'default' => false,
				'indent'  => true
			),
			array(
				'id'           => 'sidebar_post_pos',
				'type'         => 'button_set',
				'title'        => esc_html__( 'Sidebar Position', 'induxe' ),
				'options'      => array(
					'left'  => esc_html__('Left', 'induxe'),
	                'right' => esc_html__('Right', 'induxe'),
	                'none'  => esc_html__('Disabled', 'induxe')
				),
				'default'      => 'right',
				'required'     => array( 0 => 'show_sidebar_post', 1 => '=', 2 => '1' ),
				'force_output' => true
			),
		)
	) );


	/**
	 * Config page meta options
	 *
	 */

	$metabox->add_section( 'page', array(
		'title'  => esc_html__( 'Header', 'induxe' ),
		'desc'   => esc_html__( 'Header settings for the page.', 'induxe' ),
		'icon'   => 'el-icon-website',
		'fields' => array(
	        array(
	            'id'          => 'primary_color',
	            'type'        => 'color',
	            'title'       => esc_html__('Primary Color', 'induxe'),
	            'transparent' => false,
	            'default'     => '#ff5e14'
	        ),
			array(
				'id'      => 'custom_header',
				'type'    => 'switch',
				'title'   => esc_html__( 'Custom Header', 'induxe' ),
				'default' => false,
				'indent'  => true
			),
			array(
				'id'           => 'header_layout',
				'type'         => 'image_select',
				'title'        => esc_html__( 'Layout', 'induxe' ),
				'subtitle'     => esc_html__( 'Select a layout for header.', 'induxe' ),
				'options'      => array(
					'0' => get_template_directory_uri() . '/assets/images/header-layout/h0.jpg',
					'1' => get_template_directory_uri() . '/assets/images/header-layout/h1.jpg',
					'2' => get_template_directory_uri() . '/assets/images/header-layout/h2.jpg',
					'3' => get_template_directory_uri() . '/assets/images/header-layout/h3.jpg',
					'4' => get_template_directory_uri() . '/assets/images/header-layout/h4.jpg',
					'5' => get_template_directory_uri() . '/assets/images/header-layout/h5.jpg',
					'6' => get_template_directory_uri() . '/assets/images/header-layout/h6.jpg',
					'7' => get_template_directory_uri() . '/assets/images/header-layout/h7.jpg',
					'8' => get_template_directory_uri() . '/assets/images/header-layout/h8.jpg',
					'9' => get_template_directory_uri() . '/assets/images/header-layout/h9.jpg',
					'10' => get_template_directory_uri() . '/assets/images/header-layout/h10.jpg',
					'11' => get_template_directory_uri() . '/assets/images/header-layout/h11.jpg',
					'12' => get_template_directory_uri() . '/assets/images/header-layout/h12.jpg',
					'13' => get_template_directory_uri() . '/assets/images/header-layout/h13.jpg',
				),
				'default'      =>induxe_get_option_of_theme_options( 'header_layout' ),
				'required'     => array( 0 => 'custom_header', 1 => 'equals', 2 => '1' ),
				'force_output' => true
			),
            array(
                'id'       => 'logo',
                'type'     => 'media',
                'title'    => esc_html__('Logo', 'induxe'),
            ),

            array(
                'id'       => 'logo_light',
                'type'     => 'media',
                'title'    => esc_html__('Logo Light', 'induxe'),
                'desc'           => esc_html__('Apply for Header Transparent', 'induxe'),
            ),
            array(
                'id'       => 'logo_mobile',
                'type'     => 'media',
                'title'    => esc_html__('Logo Mobile & Tablet', 'induxe'),
            ),
            array(
                'id'       => 'logo_maxh',
                'type'     => 'dimensions',
                'title'    => esc_html__('Logo Max height', 'induxe'),
                'subtitle' => esc_html__('Set maximum height for your logo, just in case the logo is too large.', 'induxe'),
                'width'    => false,
                'unit'     => 'px'
            ),
            array(
	            'id'          => 'revslider',
	            'type'        => 'select',
	            'title'       => esc_html__('RevSlider', 'induxe'),
	            'desc'        => esc_html__('Make sure you have at least 1 slider from revolution slider.', 'induxe'),
	            'options'     => $revslider_options,
	            'default'     => '',
	        ),
		)
	) );

	$metabox->add_section( 'page', array(
		'title'  => esc_html__( 'Page Title', 'induxe' ),
		'icon'   => 'el-icon-map-marker',
		'fields' => array(
            array(
                'id'       => 'custom_pagetitle',
                'type'     => 'switch',
                'title'    => esc_html__('Custom Layout', 'induxe'),
                'default'  => false,
                'indent' => true
            ),
            array(
                'id'       => 'ptitle_layout',
                'type'     => 'image_select',
                'title'    => esc_html__('Layout', 'induxe'),
                'subtitle' => esc_html__('Select a layout for page title.', 'induxe'),
                'options'  => array(
                    '0' => get_template_directory_uri() . '/assets/images/page-title/p0.jpg',
                    '1' => get_template_directory_uri() . '/assets/images/page-title/p1.jpg',
                ),
                'default'  => induxe_get_option_of_theme_options('ptitle_layout'),
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
            ),
	        array(
				'id'           => 'custom_title',
				'type'         => 'text',
				'title'        => esc_html__( 'Title', 'induxe' ),
				'subtitle'     => esc_html__( 'Use custom title for this page. The default title will be used on document title.', 'induxe' ),
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
			),
			array(
	            'id'       => 'ptitle_font_size',
	            'type'     => 'text',
	            'title'    => esc_html__('Font Size', 'induxe'),
	            'validate' => 'numeric',
	            'desc'     => esc_html__('Enter number (Default 70px)','induxe'),
	            'msg'      => esc_html__('Please enter number','induxe'),
	            'default'  => '',
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
	        ),
            array(
                'id'    => 'post_subtitle',
                'type'  => 'textarea',
                'title' => esc_html__('Subtitle', 'induxe'),
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
            ),
	        array(
	            'id'       => 'ptitle_bg',
	            'type'     => 'background',
	            'title'    => esc_html__('Background', 'induxe'),
	            'subtitle' => esc_html__('Page title background color.', 'induxe'),
	            'output'   => array('body #pagetitle'),
	            'background-color' => false,
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
	        ),
            array(
                'id'       => 'page_title_align',
                'type'     => 'button_set',
                'title'    => esc_html__('Content Align', 'induxe'),
                'options' => array(
                    '' => 'Default', 
                    'left' => 'Left', 
                    'center' => 'Center',
                    'right' => 'Right',
                 ), 
                'std' => 'Center',
                'output'   => array('#pagetitle .page-title-content'),
                'required' => array( 0 => 'custom_pagetitle', 1 => '=', 2 => '1' ),
                'force_output' => true
            ),
		)
	) );

	$metabox->add_section( 'page', array(
		'title'  => esc_html__( 'Content', 'induxe' ),
		'desc'   => esc_html__( 'Settings for content area.', 'induxe' ),
		'icon'   => 'el-icon-pencil',
		'fields' => array(
			array(
				'id'       => 'content_bg_color',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Background Color', 'induxe' ),
				'subtitle' => esc_html__( 'Content background color.', 'induxe' ),
				'output'   => array( 'background-color' => '#content, .site-layout-default .site-footer:before' )
			),
			array(
				'id'             => 'content_padding',
				'type'           => 'spacing',
				'output'         => array( '.site-content #primary, .site-content #secondary' ),
				'right'          => false,
				'left'           => false,
				'mode'           => 'padding',
				'units'          => array( 'px' ),
				'units_extended' => 'false',
				'title'          => esc_html__( 'Content Padding', 'induxe' ),
				'desc'           => esc_html__( 'Default: Theme Option.', 'induxe' ),
				'default'        => array(
					'padding-top'    => '',
					'padding-bottom' => '',
					'units'          => 'px',
				)
			),
			array(
				'id'      => 'show_sidebar_page',
				'type'    => 'switch',
				'title'   => esc_html__( 'Show Sidebar', 'induxe' ),
				'default' => false,
				'indent'  => true
			),
			array(
				'id'           => 'sidebar_page_pos',
				'type'         => 'button_set',
				'title'        => esc_html__( 'Sidebar Position', 'induxe' ),
				'options'      => array(
					'left'  => esc_html__( 'Left', 'induxe' ),
					'right' => esc_html__( 'Right', 'induxe' ),
				),
				'default'      => 'right',
				'required'     => array( 0 => 'show_sidebar_page', 1 => '=', 2 => '1' ),
				'force_output' => true
			),
		)
	) );

	$metabox->add_section( 'page', array(
		'title'  => esc_html__( 'Footer', 'induxe' ),
		'desc'   => esc_html__( 'Settings for footer area.', 'induxe' ),
		'icon'   => 'el el-website',
		'fields' => array(
			array(
				'id'      => 'custom_footer',
				'type'    => 'switch',
				'title'   => esc_html__( 'Custom Footer', 'induxe' ),
				'default' => false,
				'indent'  => true
			),
			array(
            	'id'       => 'footer_layout',
	            'type'     => 'image_select',
	            'title'    => esc_html__('Layout', 'induxe'),
	            'subtitle' => esc_html__('Select a layout for footer.', 'induxe'),
	            'options'  => array(
	                '1' => get_template_directory_uri() . '/assets/images/footer-layout/f1.jpg',
	                'custom' => get_template_directory_uri() . '/assets/images/footer-layout/custom.jpg',
	            ),
	            'default'  => '1',
	            'required' => array( 0 => 'custom_footer', 1 => 'equals', 2 => '1' ),
	            'force_output' => true
	        ),
	        array(
	            'id'       => 'footer_info_on',
	            'type'     => 'button_set',
	            'title'    => esc_html__('Footer Info', 'induxe'),
	            'options'  => array(
	                'show'  => esc_html__('Show', 'induxe'),
	                'hidden'  => esc_html__('Hidden', 'induxe'),
	            ),
	            'default'  => 'show'
	        ),
			array(
	            'id'       => 'footer_top_logo',
	            'type'     => 'media',
	            'title'    => esc_html__('Logo', 'induxe'),
	            'default' => ''
	        ),
	        array(
	            'id'          => 'footer_layout_custom',
	            'type'        => 'select',
	            'title'       => esc_html__('Custom Layout', 'induxe'),
	            'desc'        => sprintf(esc_html__('To use this Option please %sClick Here%s to add your custom footer layout first.','induxe'),'<a href="' . esc_url( admin_url( 'edit.php?post_type=footer' ) ) . '">','</a>'),
	            'options'     =>induxe_list_post('footer'),
	            'default'     => '',
	            'required' => array( 0 => 'footer_layout', 1 => 'equals', 2 => 'custom' ),
	            'force_output' => true
	        ),
	    )
	) );

	/**
	 * Config post format meta options
	 *
	 */

	$metabox->add_section( 'cms_pf_video', array(
		'title'  => esc_html__( 'Video', 'induxe' ),
		'fields' => array(
			array(
				'id'    => 'post-video-url',
				'type'  => 'text',
				'title' => esc_html__( 'Video URL', 'induxe' ),
				'desc'  => esc_html__( 'YouTube or Vimeo video URL', 'induxe' )
			),
		)
	) );

	$metabox->add_section( 'cms_pf_gallery', array(
		'title'  => esc_html__( 'Gallery', 'induxe' ),
		'fields' => array(
			array(
				'id'       => 'post-gallery-lightbox',
				'type'     => 'switch',
				'title'    => esc_html__( 'Lightbox?', 'induxe' ),
				'subtitle' => esc_html__( 'Enable lightbox for gallery images.', 'induxe' ),
				'default'  => true
			),
			array(
				'id'       => 'post-gallery-images',
				'type'     => 'gallery',
				'title'    => esc_html__( 'Gallery Images ', 'induxe' ),
				'subtitle' => esc_html__( 'Upload images or add from media library.', 'induxe' )
			)
		)
	) );

	$metabox->add_section( 'cms_pf_audio', array(
		'title'  => esc_html__( 'Audio', 'induxe' ),
		'fields' => array(
			array(
				'id'          => 'post-audio-url',
				'type'        => 'text',
				'title'       => esc_html__( 'SoundCloud URL', 'induxe' ),
				'validate'    => 'url',
				'msg'         => 'Url error!'
			)
		)
	) );

	$metabox->add_section( 'cms_pf_link', array(
		'title'  => esc_html__( 'Link', 'induxe' ),
		'fields' => array(
			array(
				'id'       => 'post-link-url',
				'type'     => 'text',
				'title'    => esc_html__( 'URL', 'induxe' ),
				'validate' => 'url',
				'msg'      => 'Url error!'
			)
		)
	) );

	$metabox->add_section( 'cms_pf_quote', array(
		'title'  => esc_html__( 'Quote Settings', 'induxe' ),
		'fields' => array(
			array(
				'id'    => 'post-quote',
				'type'  => 'textarea',
				'title' => esc_html__( 'Quote', 'induxe' )
			)
		)
	) );

}


add_action( 'cms_post_metabox_register', 'induxe_page_options_register' );

function induxe_get_option_of_theme_options( $key, $default = '' ) {
	if ( empty( $key ) ) {
		return '';
	}
	$options = get_option(induxe_get_opt_name(), array() );
	$value   = isset( $options[ $key ] ) ? $options[ $key ] : $default;

	return $value;
}