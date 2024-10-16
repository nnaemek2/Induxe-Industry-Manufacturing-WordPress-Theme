<?php
if (!class_exists('ReduxFramework')) {
    return;
}
if (class_exists('ReduxFrameworkPlugin')) {
    remove_action('admin_notices', array(ReduxFrameworkPlugin::instance(), 'admin_notices'));
}

if(class_exists('Newsletter')) {
    $forms = array_filter( (array) get_option( 'newsletter_forms', array() ) );

    $newsletter_forms = array(
        'default' => esc_html__( 'Default Form', 'induxe' )
    );

    if ( $forms )
    {
        $index = 1;
        foreach ( $forms as $key => $form )
        {
            $newsletter_forms[ $key ] = sprintf( esc_html__( 'Form %s', 'induxe' ), $index );
            $index ++;
        }
    }
} else {
    $newsletter_forms = '';
}

$opt_name =induxe_get_opt_name();
$theme = wp_get_theme();

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name'             => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name'         => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version'      => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type'            => class_exists('CaseThemeCore') ? 'submenu' : '',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu'       => true,
    // Show the sections below the admin menu item or not
    'menu_title'           => esc_html__('Theme Options', 'induxe'),
    'page_title'           => esc_html__('Theme Options', 'induxe'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: //developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key'       => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography'     => false,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar'            => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon'       => 'dashicons-admin-generic',
    // Choose an icon for the admin bar menu
    'admin_bar_priority'   => 50,
    // Choose an priority for the admin bar menu
    'global_variable'      => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode'             => true,
    // Show the time the page took to load, etc
    'update_notice'        => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer'           => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
    'show_options_object' => false,
    // OPTIONAL -> Give you extra features
    'page_priority'        => null,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent'          => class_exists('CaseThemeCore') ? $theme->get('TextDomain') : '',
    // For a full list of options, visit: //codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions'     => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon'            => '',
    // Specify a custom URL to an icon
    'last_tab'             => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon'            => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug'            => 'theme-options',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults'        => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show'         => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark'         => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export'   => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag'           => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database'             => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn'              => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    // HINTS
    'hints'                => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'   => 'red',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ),
            'hide' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ),
        ),
    ),
    'templates_path'       => class_exists('CaseThemeCore') ? casethemescore()->path('APP_DIR') . '/templates/redux/' : '',
);

Redux::SetArgs($opt_name, $args);

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/

Redux::setSection($opt_name, array(
    'title'  => esc_html__('General', 'induxe'),
    'icon'   => 'el-icon-home',
    'fields' => array(
        array(
            'id'       => 'show_page_loading',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Page Loading', 'induxe'),
            'subtitle' => esc_html__('Enable page loading effect when you load site.', 'induxe'),
            'default'  => false
        ),
        array(
            'id'       => 'loading_type',
            'type'     => 'select',
            'title'    => esc_html__('Loading Style', 'induxe'),
            'options'  => array(
                'style1'  => esc_html__('Style 1', 'induxe'),
                'style2'  => esc_html__('Style 2', 'induxe'),
                'style3'  => esc_html__('Style 3', 'induxe'),
                'style4'  => esc_html__('Style 4', 'induxe'),
                'style5'  => esc_html__('Style 5', 'induxe'),
                'style6'  => esc_html__('Style 6', 'induxe'),
                'style7'  => esc_html__('Style 7', 'induxe'),
                'style8'  => esc_html__('Style 8', 'induxe'),
            ),
            'default'  => 'style1',
            'required' => array( 0 => 'show_page_loading', 1 => 'equals', 2 => '1' ),
            'force_output' => true
        ),
        array(
            'id'       => 'smoothscroll',
            'type'     => 'switch',
            'title'    => esc_html__('Smooth Scroll', 'induxe'),
            'default'  => false
        ),
        array(
            'id'       => 'body_background',
            'type'     => 'background',
            'title'    => esc_html__('Body Boxed Background', 'induxe'),
            'required' => array( 0 => 'layout_boxed', 1 => 'equals', 2 => '1' ),
            'force_output' => true
        ),
        array(
            'id'       => 'dev_mode',
            'type'     => 'switch',
            'title'    => esc_html__('Dev Mode (not recommended)', 'induxe'),
            'description' => esc_html__('no minimize , generate css over time...', 'induxe'),
            'default'  => false
        ),
        array(
            'id'       => 'favicon',
            'type'     => 'media',
            'title'    => esc_html__('Favicon', 'induxe'),
            'default' => ''
        ),
    )
));

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/

Redux::setSection($opt_name, array(
    'title'  => esc_html__('Header', 'induxe'),
    'icon'   => 'el-icon-website',
    'fields' => array(
        array(
            'id'       => 'header_layout',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout', 'induxe'),
            'subtitle' => esc_html__('Select a layout for header.', 'induxe'),
            'options'  => array(
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
            'default'  => '1'
        ),
        array(
            'id'       => 'search_on',
            'type'     => 'switch',
            'title'    => esc_html__('Search Icon', 'induxe'),
            'default'  => false
        ),
        array(
            'id'       => 'cart_on',
            'type'     => 'switch',
            'title'    => esc_html__('Cart Icon', 'induxe'),
            'default'  => false
        ),
        array(
            'id'       => 'sticky_on',
            'type'     => 'switch',
            'title'    => esc_html__('Sticky Header', 'induxe'),
            'subtitle' => esc_html__('Header will be sticked when applicable.', 'induxe'),
            'default'  => false
        ),
        array(
            'id'       => 'h_social_of',
            'type'     => 'switch',
            'title'    => esc_html__('Social Icon', 'induxe'),
            'default'  => true
        ),
        array(
            'id'       => 'search_background_color',
            'type'     => 'color_rgba',
            'title'    => esc_html__('Search Background Color Overlay', 'induxe'),
            'output' => array('background-color' => '.ct-modal.ct-search-popup'),
        ),
    )
));
Redux::setSection($opt_name, array(
    'title'      => esc_html__('Top Bar', 'induxe'),
    'icon'       => 'el-icon-circle-arrow-right',
    'subsection' => true,
    'fields'     => array(
        array(
            'title' => esc_html__('Phone Section', 'induxe'),
            'type'  => 'section',
            'id' => 'phone_section',
            'indent' => true,
        ),
        array(
            'id'       => 'topbar_phone_lb',
            'type'     => 'text',
            'title'    => esc_html__('Phone Label', 'induxe'),
            'desc'     => esc_html__('Enter Text.','induxe'),
            'default'  => esc_html__('Free Call', 'induxe'),
        ),
        array(
            'id'       => 'topbar_phone',
            'type'     => 'text',
            'title'    => esc_html__('Phone Number', 'induxe'),
            'desc'     => esc_html__('Enter Number phone.','induxe'),
            'default'  => esc_html__('+8 12 3456897', 'induxe'),
        ),
        array(
            'id'       => 'topbar_phone_link',
            'type'     => 'text',
            'title'    => esc_html__('Phone Link', 'induxe'),
            'desc'     => esc_html__('Add Link','induxe'),
            'default'  => "#",
        ),
        array(
            'title' => esc_html__('Slogan Section', 'induxe'),
            'type'  => 'section',
            'id' => 'slogan_section',
            'indent' => true,
        ),
        array(
            'id' => 'top_bar_slogan',
            'type' => 'text',
            'title' => esc_html__('Text', 'induxe'),
            'default' => esc_html__('Welcome to our Plantry.We are 25 years of experience', 'induxe'),
        ),
        array(
            'title' => esc_html__('Email Section', 'induxe'),
            'type'  => 'section',
            'id' => 'email_section',
            'indent' => true,
        ),
        array(
            'id' => 'top_bar_email_lb',
            'type' => 'text',
            'title' => esc_html__('Email Label', 'induxe'),
            'default' => esc_html__('Email', 'induxe'),
        ),
        array(
            'id' => 'top_bar_email',
            'type' => 'text',
            'title' => esc_html__('Email', 'induxe'),
            'default' => esc_html__('info@contact.com', 'induxe'),
        ),
        array(
            'title' => esc_html__('Time Section', 'induxe'),
            'type'  => 'section',
            'id' => 'time_section',
            'indent' => true,
        ),
        array(
            'id' => 'top_bar_timework_lb',
            'type' => 'text',
            'title' => esc_html__('Time Label', 'induxe'),
            'default' => esc_html__( 'Monday - Friday', 'induxe'),
        ),
        array(
            'id' => 'top_bar_timework',
            'type' => 'text',
            'title' => esc_html__('Work Time', 'induxe'),
            'default' => esc_html__( 'Mon-Fri: 8am - 7pm', 'induxe'),
        ),
        array(
            'title' => esc_html__('Address Section', 'induxe'),
            'type'  => 'section',
            'id' => 'address_section',
            'indent' => true,
        ),
        array(
            'id' => 'top_bar_address_lb',
            'type' => 'text',
            'title' => esc_html__('Address Label', 'induxe'),
            'default' => esc_html__( 'CA, United State', 'induxe'),
        ),
        array(
            'id' => 'top_bar_address',
            'type' => 'text',
            'title' => esc_html__('Address', 'induxe'),
            'default' => esc_html__( '185, Los Angeles, USA', 'induxe'),
        ),
        array(
            'id'       => 'hidden_sidebar_on',
            'type'     => 'switch',
            'title'    => esc_html__('Hidden Sidebar Icon', 'induxe'),
            'default'  => true
        ),
        array(
            'id'      => 'top_bar_social',
            'type'    => 'sorter',
            'title' => esc_html__('Social', 'induxe'),
            'desc'    => esc_html__( 'Choose which social networks are displayed and edit where they link to.', 'induxe'),
            'options' => array(
                'enabled'  => array(
                    'facebook'  => esc_html__('Facebook', 'induxe'),
                    'twitter'   => esc_html__('Twitter', 'induxe'),
                    'google'    => esc_html__('Google','induxe'),
                    'linkedin'  => esc_html__('Linkedin','induxe'),
                ),
                'disabled' => array(
                    'tripadvisor'     => esc_html__('Tripadvisor','induxe'),
                    'skype'     => esc_html__('Skype','induxe'),
                    'instagram' => esc_html__('Instagram','induxe'),
                    'youtube'   => esc_html__('Youtube', 'induxe'),
                    'vimeo'     => esc_html__('Vimeo', 'induxe'),
                    'tumblr'    => esc_html__('Tumblr','induxe'),
                    'pinterest' => esc_html__('Pinterest','induxe'),
                    'yelp'      => esc_html__('Yelp','induxe'),
                )
            ),
        ),
    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Logo', 'induxe'),
    'icon'       => 'el el-picture',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'logo',
            'type'     => 'media',
            'title'    => esc_html__('Logo Dark', 'induxe'),
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/logo-dark.png'
            )
        ),
        array(
            'id'       => 'logo_light',
            'type'     => 'media',
            'title'    => esc_html__('Logo Light', 'induxe'),
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/logo-light.png'
            )
        ),
        array(
            'id'       => 'logo_maxh',
            'type'     => 'dimensions',
            'title'    => esc_html__('Logo Max height', 'induxe'),
            'subtitle' => esc_html__('Set maximum height for your logo.', 'induxe'),
            'width'    => false,
            'unit'     => 'px'
        ),
    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Navigation', 'induxe'),
    'icon'       => 'el el-lines',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'          => 'font_menu',
            'type'        => 'typography',
            'title'       => esc_html__('Custom Google Font', 'induxe'),
            'google'      => true,
            'font-backup' => true,
            'all_styles'  => true,
            'font-style'  => false,
            'font-weight'  => false,
            'text-align'  => false,
            'font-size'  => false,
            'line-height'  => false,
            'color'  => false,
            'output'      => array('.primary-menu li a'),
            'units'       => 'px',
        ),
        array(
            'id'       => 'menu_font_size',
            'type'     => 'text',
            'title'    => esc_html__('Font Size', 'induxe'),
            'validate' => 'numeric',
            'desc'     => esc_html__('Enter number', 'induxe'),
            'msg'      => esc_html__('Please enter number', 'induxe'),
            'default'  => ''
        ),
        array(
            'id'       => 'menu_letter_spacing',
            'type'     => 'text',
            'title'    => esc_html__('Letter Spacing', 'induxe'),
            'validate' => 'numeric',
            'desc'     => esc_html__('Enter number', 'induxe'),
            'msg'      => esc_html__('Please enter number', 'induxe'),
            'default'  => ''
        ),
        array(
            'id'       => 'menu_text_transform',
            'type'     => 'select',
            'title'    => esc_html__('Text Transform', 'induxe'),
            'options'  => array(
                ''  => esc_html__('Capitalize', 'induxe'),
                'uppercase' => esc_html__('Uppercase', 'induxe'),
                'lowercase'  => esc_html__('Lowercase', 'induxe'),
                'initial'  => esc_html__('Initial', 'induxe'),
                'inherit'  => esc_html__('Inherit', 'induxe'),
                'none'  => esc_html__('None', 'induxe'),
            ),
            'default'  => ''
        ),
        array(
            'id'      => 'main_menu_color',
            'type'    => 'link_color',
            'title'   => esc_html__('Menu Item Color - First Level ( Main Menu )', 'induxe'),
            'default' => array(
                'regular' => '',
                'hover'   => '',
                'active'   => '',
            ),
        ),
        array(
            'id'      => 'main_menu_color_sticky',
            'type'    => 'link_color',
            'title'   => esc_html__('Menu Item Color - First Level ( Sticky Menu )', 'induxe'),
            'default' => array(
                'regular' => '',
                'hover'   => '',
                'active'   => '',
            ),
        ),
        array(
            'id'      => 'main_menu_color_sub',
            'type'    => 'link_color',
            'title'   => esc_html__('Menu Item Color - Sub Level', 'induxe'),
            'default' => array(
                'regular' => '',
                'hover'   => '',
                'active'   => '',
            ),
        ),
        array(
            'title' => esc_html__('Button Navigation', 'induxe'),
            'type'  => 'section',
            'id' => 'button_navigation',
            'indent' => true,
        ),
        array(
            'id' => 'h_btn_text',
            'type' => 'text',
            'title' => esc_html__('Button Text', 'induxe'),
            'default' => '',
        ),
        array(
            'id'       => 'h_btn_link_type',
            'type'     => 'button_set',
            'title'    => esc_html__('Button Link Type', 'induxe'),
            'options'  => array(
                'page'  => esc_html__('Page', 'induxe'),
                'custom'  => esc_html__('Custom', 'induxe')
            ),
            'default'  => 'page',
        ),
        array(
            'id'    => 'h_btn_link',
            'type'  => 'select',
            'title' => esc_html__( 'Page Link', 'induxe' ), 
            'data'  => 'page',
            'args'  => array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC',
            ),
            'required' => array( 0 => 'h_btn_link_type', 1 => 'equals', 2 => 'page' ),
            'force_output' => true
        ),
        array(
            'id' => 'h_btn_link_custom',
            'type' => 'text',
            'title' => esc_html__('Custom Link', 'induxe'),
            'default' => '',
            'required' => array( 0 => 'h_btn_link_type', 1 => 'equals', 2 => 'custom' ),
            'force_output' => true
        ),
        array(
            'id'       => 'h_btn_target',
            'type'     => 'button_set',
            'title'    => esc_html__('Button Target', 'induxe'),
            'options'  => array(
                '_self'  => esc_html__('Self', 'induxe'),
                '_blank'  => esc_html__('Blank', 'induxe')
            ),
            'default'  => '_self',
        ),
    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Mobile', 'induxe'),
    'icon'       => 'el el-iphone-home',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'          => 'mobile_header_bgcolor',
            'type'        => 'color',
            'title'       => esc_html__('Header Background Color', 'induxe'),
            'transparent' => false,
            'default'     => ''
        ),
        array(
            'id'          => 'mobile_icon_menu_color',
            'type'        => 'color',
            'title'       => esc_html__('Header Icon Menu Color', 'induxe'),
            'transparent' => false,
            'default'     => ''
        ),
        array(
            'id'          => 'header_menu_bgcolor',
            'type'        => 'color',
            'title'       => esc_html__('Menu Background Color', 'induxe'),
            'transparent' => false,
            'default'     => ''
        ),
        array(
            'id'      => 'main_menu_color_mobile',
            'type'    => 'link_color',
            'title'   => esc_html__('Menu Item Color', 'induxe'),
            'default' => array(
                'regular' => '',
                'hover'   => '',
                'active'   => '',
            ),
        ),
        array(
            'id'       => 'search_on_mobile',
            'type'     => 'switch',
            'title'    => esc_html__('Search Icon', 'induxe'),
            'default'  => true
        ),
        array(
            'id'       => 'cart_on_mobile',
            'type'     => 'switch',
            'title'    => esc_html__('Cart Icon', 'induxe'),
            'default'  => false
        ),
    )
));

/*--------------------------------------------------------------
# Page Title area
--------------------------------------------------------------*/

Redux::setSection($opt_name, array(
    'title'  => esc_html__('Page Title', 'induxe'),
    'icon'   => 'el-icon-map-marker',
    'fields' => array(
        array(
            'id'       => 'ptitle_on',
            'type'     => 'button_set',
            'title'    => esc_html__('Displayed', 'induxe'),
            'options'  => array(
                'show'  => esc_html__('Show', 'induxe'),
                'hidden'  => esc_html__('Hidden', 'induxe'),
            ),
            'default'  => 'show'
        ),
        array(
            'id'       => 'ptitle_layout',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout', 'induxe'),
            'subtitle' => esc_html__('Select a layout for page title.', 'induxe'),
            'options'  => array(
                '1' => get_template_directory_uri() . '/assets/images/page-title/p1.jpg',
            ),
            'default'  => '1',
            'required' => array( 0 => 'ptitle_on', 1 => 'equals', 2 => 'show' ),
            'force_output' => true
        ),
        array(
            'id'       => 'ptitle_bg',
            'type'     => 'background',
            'title'    => esc_html__('Background', 'induxe'),
            'subtitle' => esc_html__('Page title background color.', 'induxe'),
            'output'   => array('#pagetitle'),
            'required' => array( 0 => 'ptitle_on', 1 => 'equals', 2 => 'show' ),
            'force_output' => true
        ),
        array(
            'id'       => 'pagetitle_bg_color',
            'type'     => 'color_rgba',
            'title'    => esc_html__('Background Color Overlay', 'induxe'),
            'output' => array('background-color' => '#pagetitle.bg-overlay:before'),
            'required' => array( 0 => 'ptitle_on', 1 => 'equals', 2 => 'show' ),
            'force_output' => true
        ),
        array(
            'id'       => 'ptitle_color',
            'type'     => 'color',
            'title'    => esc_html__('Title Color', 'induxe'),
            'subtitle' => esc_html__('Page title color.', 'induxe'),
            'output'   => array('#pagetitle h1.page-title, #pagetitle h6.page-subtitle'),
            'default'  => '',
            'transparent' => false,
            'required' => array( 0 => 'ptitle_on', 1 => 'equals', 2 => 'show' ),
            'force_output' => true
        ),
        array(
            'id'       => 'ptitle_breadcrumb_on',
            'type'     => 'button_set',
            'title'    => esc_html__('Breadcrumb', 'induxe'),
            'options'  => array(
                'show'  => esc_html__('Show', 'induxe'),
                'hidden'  => esc_html__('Hidden', 'induxe'),
            ),
            'default'  => 'show',
            'required' => array( 0 => 'ptitle_on', 1 => 'equals', 2 => 'show' ),
            'force_output' => true
        ),
    )
));

/*--------------------------------------------------------------
# WordPress default content
--------------------------------------------------------------*/

Redux::setSection($opt_name, array(
    'title' => esc_html__('Content', 'induxe'),
    'icon'  => 'el-icon-pencil',
    'fields'     => array(
        array(
            'id'       => 'content_bg_color',
            'type'     => 'color_rgba',
            'title'    => esc_html__('Content Background Color', 'induxe'),
            'subtitle' => esc_html__('Content background color.', 'induxe'),
            'output' => array('background-color' => '#content, .site-layout-default .site-footer:before')
        ),
        array(
            'id'       => 'sidebar_bg_color',
            'type'     => 'color_rgba',
            'title'    => esc_html__('Sidebar Background Color', 'induxe'),
            'subtitle' => esc_html__('Sidebar background color.', 'induxe'),
            'output' => array('background-color' => '.content-row #secondary.widget-has-sidebar::before')
        ),
        array(
            'id'             => 'content_padding',
            'type'           => 'spacing',
            'output'         => array('.site-content #primary, .site-content #secondary'),
            'right'   => false,
            'left'    => false,
            'mode'           => 'padding',
            'units'          => array('px'),
            'units_extended' => 'false',
            'title'          => esc_html__('Content Padding', 'induxe'),
            'desc'           => esc_html__('Default: Top-130px, Bottom-130px', 'induxe'),
            'default'            => array(
                'padding-top'   => '',
                'padding-bottom'   => '',
                'units'          => 'px',
            )
        ),
        array(
            'id'      => 'search_field_placeholder',
            'type'    => 'text',
            'title'   => esc_html__('Search Form - Text Placeholder', 'induxe'),
            'default' => '',
            'desc'           => esc_html__('Default: Search Keywords...', 'induxe'),
        ),
    )
));


Redux::setSection($opt_name, array(
    'title'      => esc_html__('Archive', 'induxe'),
    'icon'       => 'el-icon-list',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'archive_sidebar_pos',
            'type'     => 'button_set',
            'title'    => esc_html__('Sidebar Position', 'induxe'),
            'subtitle' => esc_html__('Select a sidebar position for blog home, archive, search...', 'induxe'),
            'options'  => array(
                'left'  => esc_html__('Left', 'induxe'),
                'right' => esc_html__('Right', 'induxe'),
                'none'  => esc_html__('Disabled', 'induxe')
            ),
            'default'  => 'right'
        ),
        array(
            'id'       => 'archive_author_on',
            'title'    => esc_html__('Author', 'induxe'),
            'subtitle' => esc_html__('Show author name on each post.', 'induxe'),
            'type'     => 'switch',
            'default'  => true,
        ),
        array(
            'id'       => 'archive_date_on',
            'title'    => esc_html__('Date', 'induxe'),
            'subtitle' => esc_html__('Show date posted on each post.', 'induxe'),
            'type'     => 'switch',
            'default'  => true,
        ),
        array(
            'id'       => 'archive_categories_on',
            'title'    => esc_html__('Categories', 'induxe'),
            'subtitle' => esc_html__('Show category names on each post.', 'induxe'),
            'type'     => 'switch',
            'default'  => false,
        ),
        array(
            'id'       => 'archive_like_on',
            'title'    => esc_html__('Like Post', 'induxe'),
            'subtitle' => esc_html__('Show Like on post.', 'induxe'),
            'type'     => 'switch',
            'default'  => true
        ),
        array(
            'id'       => 'archive_comments_on',
            'title'    => esc_html__('Comments', 'induxe'),
            'subtitle' => esc_html__('Show comments count on each post.', 'induxe'),
            'type'     => 'switch',
            'default'  => false,
        ),
        array(
            'id'       => 'archive_social_share_on',
            'title'    => esc_html__('Social Share', 'induxe'),
            'subtitle' => esc_html__('Show social share on each post.', 'induxe'),
            'type'     => 'switch',
            'default'  => false,
        ),
    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Single Post', 'induxe'),
    'icon'       => 'el-icon-file-edit',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'post_sidebar_pos',
            'type'     => 'button_set',
            'title'    => esc_html__('Sidebar Position', 'induxe'),
            'subtitle' => esc_html__('Select a sidebar position', 'induxe'),
            'options'  => array(
                'left'  => esc_html__('Left', 'induxe'),
                'right' => esc_html__('Right', 'induxe'),
                'none'  => esc_html__('Disabled', 'induxe')
            ),
            'default'  => 'right'
        ),
        array(
            'id'       => 'post_text_align',
            'type'     => 'button_set',
            'title'    => esc_html__('Text Align', 'induxe'),
            'options'  => array(
                'inherit'  => esc_html__('Inherit', 'induxe'),
                'justify'  => esc_html__('Justify', 'induxe'),
            ),
            'default'  => 'inherit'
        ),
        array(
            'id'       => 'post_author_on',
            'title'    => esc_html__('Author', 'induxe'),
            'subtitle' => esc_html__('Show author name on single post.', 'induxe'),
            'type'     => 'switch',
            'default'  => true
        ),
        array(
            'id'       => 'post_date_on',
            'title'    => esc_html__('Date', 'induxe'),
            'subtitle' => esc_html__('Show date on single post.', 'induxe'),
            'type'     => 'switch',
            'default'  => true
        ),
        array(
            'id'       => 'post_categories_on',
            'title'    => esc_html__('Categories', 'induxe'),
            'subtitle' => esc_html__('Show category names on single post.', 'induxe'),
            'type'     => 'switch',
            'default'  => false
        ),
        array(
            'id'       => 'post_tags_on',
            'title'    => esc_html__('Tags', 'induxe'),
            'subtitle' => esc_html__('Show tags count on single post.', 'induxe'),
            'type'     => 'switch',
            'default'  => false
        ),
        array(
            'id'       => 'post_like_on',
            'title'    => esc_html__('Like Post', 'induxe'),
            'subtitle' => esc_html__('Show Like on single post.', 'induxe'),
            'type'     => 'switch',
            'default'  => false
        ),
        array(
            'id'       => 'post_comments_on',
            'title'    => esc_html__('Comments', 'induxe'),
            'subtitle' => esc_html__('Show comments count on single post.', 'induxe'),
            'type'     => 'switch',
            'default'  => false
        ),
        array(
            'id'       => 'post_navigation_on',
            'title'    => esc_html__('Navigation', 'induxe'),
            'subtitle' => esc_html__('Show navigation on single post.', 'induxe'),
            'type'     => 'switch',
            'default'  => false,
        ),
        array(
            'id'       => 'post_author_box_on',
            'title'    => esc_html__('Author Box', 'induxe'),
            'subtitle' => esc_html__('Show author box on single post.', 'induxe'),
            'type'     => 'switch',
            'default'  => false,
        ),
        array(
            'id'       => 'post_comments_form_on',
            'title'    => esc_html__('Comments Form', 'induxe'),
            'subtitle' => esc_html__('Show comments form on single post.', 'induxe'),
            'type'     => 'switch',
            'default'  => true
        ),
        array(
            'id'       => 'post_feature_image_on',
            'title'    => esc_html__('Feature Image', 'induxe'),
            'subtitle' => esc_html__('Show feature image on single post.', 'induxe'),
            'type'     => 'switch',
            'default'  => true
        ),
        array(
            'title' => esc_html__('Social Section', 'induxe'),
            'type'  => 'section',
            'id' => 'social_section',
            'indent' => true,
        ),
        array(
            'id'       => 'post_social_share_on',
            'title'    => esc_html__('Social Share', 'induxe'),
            'subtitle' => esc_html__('Show social share on single post.', 'induxe'),
            'type'     => 'switch',
            'default'  => false,
        ),
        array(
            'id'       => 'social_facebook',
            'title'    => esc_html__('Facebook', 'induxe'),
            'type'     => 'switch',
            'default'  => true,
            'indent' => true,
            'required' => array( 0 => 'post_social_share_on', 1 => 'equals', 2 => '1' ),
        ),
        array(
            'id'       => 'social_twitter',
            'title'    => esc_html__('Twitter', 'induxe'),
            'type'     => 'switch',
            'default'  => true,
            'indent' => true,
            'required' => array( 0 => 'post_social_share_on', 1 => 'equals', 2 => '1' ),
        ),
        array(
            'id'       => 'social_pinterest',
            'title'    => esc_html__('Pinterest', 'induxe'),
            'type'     => 'switch',
            'default'  => true,
            'indent' => true,
            'required' => array( 0 => 'post_social_share_on', 1 => 'equals', 2 => '1' ),
        ),
        array(
            'id'       => 'social_email',
            'title'    => esc_html__('Email', 'induxe'),
            'type'     => 'switch',
            'default'  => true,
            'indent' => true,
            'required' => array( 0 => 'post_social_share_on', 1 => 'equals', 2 => '1' ),
        ),
    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Single Portfolio', 'induxe'),
    'icon'       => 'el el-cog ',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'      => 'portfolio_slug',
            'type'    => 'text',
            'title'   => esc_html__('Portfolio Slug', 'induxe'),
            'default' => '',
            'desc'     => esc_html__('Default: portfolio', 'induxe'),
        ),
        array(
            'id'       => 'portfolio_feature_image_on',
            'title'    => esc_html__('Feature Image', 'induxe'),
            'subtitle' => esc_html__('Show feature image on single portfolio.', 'induxe'),
            'type'     => 'switch',
            'default'  => true
        ),
    )
));

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/

Redux::setSection($opt_name, array(
    'title'  => esc_html__('Footer', 'induxe'),
    'icon'   => 'el el-website',
    'fields' => array(
        array(
            'id'       => 'footer_layout',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout', 'induxe'),
            'subtitle' => esc_html__('Select a layout for footer.', 'induxe'),
            'options'  => array(
                '1' => get_template_directory_uri() . '/assets/images/footer-layout/f1.jpg',
                'custom' => get_template_directory_uri() . '/assets/images/footer-layout/custom.jpg',
            ),
            'default'  => '1'
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
        array(
            'id'       => 'footer_address_lb',
            'type'     => 'text',
            'title'    => esc_html__('Address Label', 'induxe'),
            'default'  => '',
        ),
        array(
            'id'       => 'footer_address',
            'type'     => 'textarea',
            'title'    => esc_html__('Address Info', 'induxe'),
            'default'  => '',
        ),
        array(
            'id'       => 'footer_phone_lb',
            'type'     => 'text',
            'title'    => esc_html__('Phone Label', 'induxe'),
            'desc'     => esc_html__('Enter Label phone.','induxe'),
            'default'  => '',
        ),
        array(
            'id'       => 'footer_phone',
            'type'     => 'text',
            'title'    => esc_html__('Phone', 'induxe'),
            'desc'     => esc_html__('Enter Number phone.','induxe'),
            'default'  => '',
        ),
        array(
            'id'       => 'footer_phone_link',
            'type'     => 'text',
            'title'    => esc_html__('Phone Link', 'induxe'),
            'default'  => '',
        ),
        array(
            'id'       => 'footer_email_lb',
            'type'     => 'text',
            'title'    => esc_html__('Email Label', 'induxe'),
            'default'  => '',
        ),
        array(
            'id'       => 'footer_email',
            'type'     => 'text',
            'title'    => esc_html__('Email Address', 'induxe'),
            'default'  => '',
        ),
        array(
            'id'       => 'footer_top_column',
            'type'     => 'button_set',
            'title'    => esc_html__('Footer Top Columns', 'induxe'),
            'options'  => array(
                '1'  => esc_html__('1 Column', 'induxe'),
                '2'  => esc_html__('2 Column', 'induxe'),
                '3'  => esc_html__('3 Column', 'induxe'),
                '4'  => esc_html__('4 Column', 'induxe'),
            ),
            'default'  => '3',
            'required' => array('footer_layout', '!=', 'custom'),
            'force_output' => true
        ),
        array(
            'id'       => 'footer_bottom_logo',
            'type'     => 'media',
            'title'    => esc_html__('Bottom footer Logo', 'induxe'),
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/logo-white.png'
            )
        ),
        array(
            'id'=>'footer_copyright',
            'type' => 'textarea',
            'title' => esc_html__('Footer Bottom Copyright', 'induxe'),
            'validate' => 'html_custom',
            'default' => '',
            'subtitle' => esc_html__('Custom HTML Allowed: a,br,em,strong,span,p,div,h1->h6,[ct_year]', 'induxe'),
            'allowed_html' => array(
                'a' => array(
                    'href' => array(),
                    'title' => array(),
                    'class' => array(),
                ),
                'br' => array(),
                'em' => array(),
                'strong' => array(),
                'span' => array(),
                'p' => array(),
                'div' => array(
                    'class' => array()
                ),
                'h1' => array(
                    'class' => array()
                ),
                'h2' => array(
                    'class' => array()
                ),
                'h3' => array(
                    'class' => array()
                ),
                'h4' => array(
                    'class' => array()
                ),
                'h5' => array(
                    'class' => array()
                ),
                'h6' => array(
                    'class' => array()
                ),
                'ul' => array(
                    'class' => array()
                ),
                'li' => array(),
            ),
            'required' => array('footer_layout', '!=', 'custom'),
            'force_output' => true
        ),
        array(
            'id'       => 'back_totop_on',
            'type'     => 'switch',
            'title'    => esc_html__('Back to Top Button', 'induxe'),
            'subtitle' => esc_html__('Show back to top button when scrolled down.', 'induxe'),
            'default'  => true,
        ),
        array(
            'id'       => 'newsletter',
            'type'     => 'button_set',
            'title'    => esc_html__('Newsletter', 'induxe'),
            'options'  => array(
                'show'  => esc_html__('Show', 'induxe'),
                'hide'  => esc_html__('Hide', 'induxe'),
            ),
            'default'  => 'show',
            'required' => array( 0 => 'footer_layout', 1 => 'equals', 2 => '1' ),
            'force_output' => true
        ),
        array(
            'id'      => 'newsletter_title',
            'type'    => 'text',
            'title'   => esc_html__('Newsletter Title', 'induxe'),
            'default' => '',
            'required' => array( 0 => 'newsletter', 1 => 'equals', 2 => 'show' ),
            'force_output' => true
        ),
        array(
            'id'       => 'f_social_of',
            'type'     => 'switch',
            'title'    => esc_html__('Social Icon', 'induxe'),
            'default'  => true
        ),
        array(
            'id'      => 'footer_social',
            'type'    => 'sorter',
            'title' => esc_html__('Social', 'induxe'),
            'desc'    => 'Choose which social networks are displayed and edit where they link to.',
            'options' => array(
                'enabled'  => array(
                    'facebook'  => 'Facebook', 
                    'twitter'   => 'Twitter', 
                    'linkedin'  => 'Linkedin',
                    'instagram' => 'Instagram',
                ),
                'disabled' => array(
                    'google'    => 'Google',
                    'tripadvisor'     => 'Tripadvisor',
                    'skype'     => 'Skype',
                    'youtube'   => 'Youtube', 
                    'vimeo'     => 'Vimeo', 
                    'tumblr'    => 'Tumblr',
                    'pinterest' => 'Pinterest',
                    'yelp'      => 'Yelp',
                )
            ),
        ),
    )
));
/* Social Media */
Redux::setSection($opt_name, array(
    'title'      => esc_html__('Social Media', 'induxe'),
    'icon'       => 'el el-twitter',
    'subsection' => false,
    'fields'     => array(
        array(
            'id'      => 'social_facebook_url',
            'type'    => 'text',
            'title'   => esc_html__('Facebook URL', 'induxe'),
            'default' => '',
        ),
        array(
            'id'      => 'social_twitter_url',
            'type'    => 'text',
            'title'   => esc_html__('Twitter URL', 'induxe'),
            'default' => '',
        ),
        array(
            'id'      => 'social_inkedin_url',
            'type'    => 'text',
            'title'   => esc_html__('Inkedin URL', 'induxe'),
            'default' => '',
        ),
        array(
            'id'      => 'social_rss_url',
            'type'    => 'text',
            'title'   => esc_html__('Rss URL', 'induxe'),
            'default' => '',
        ),
        array(
            'id'      => 'social_instagram_url',
            'type'    => 'text',
            'title'   => esc_html__('Instagram URL', 'induxe'),
            'default' => '',
        ),
        array(
            'id'      => 'social_google_url',
            'type'    => 'text',
            'title'   => esc_html__('Google URL', 'induxe'),
            'default' => '',
        ),
        array(
            'id'      => 'social_skype_url',
            'type'    => 'text',
            'title'   => esc_html__('Skype URL', 'induxe'),
            'default' => '',
        ),
        array(
            'id'      => 'social_pinterest_url',
            'type'    => 'text',
            'title'   => esc_html__('Pinterest URL', 'induxe'),
            'default' => '',
        ),
        array(
            'id'      => 'social_vimeo_url',
            'type'    => 'text',
            'title'   => esc_html__('Vimeo URL', 'induxe'),
            'default' => '',
        ),
        array(
            'id'      => 'social_youtube_url',
            'type'    => 'text',
            'title'   => esc_html__('Youtube URL', 'induxe'),
            'default' => '',
        ),
        array(
            'id'      => 'social_yelp_url',
            'type'    => 'text',
            'title'   => esc_html__('Yelp URL', 'induxe'),
            'default' => '',
        ),
        array(
            'id'      => 'social_tumblr_url',
            'type'    => 'text',
            'title'   => esc_html__('Tumblr URL', 'induxe'),
            'default' => '',
        ),
        array(
            'id'      => 'social_tripadvisor_url',
            'type'    => 'text',
            'title'   => esc_html__('Tripadvisor URL', 'induxe'),
            'default' => '',
        ),
    )
));

/*--------------------------------------------------------------
# 404 Page
--------------------------------------------------------------*/

Redux::setSection($opt_name, array(
    'title'  => esc_html__('404 Page', 'induxe'),
    'icon'   => 'el el-website',
    'fields' => array(
        array(
            'id'      => 'title_404',
            'type'    => 'text',
            'title'   => esc_html__('Title', 'induxe'),
            'default' => '',
        ),
        array(
            'id'=>'content_404',
            'type' => 'textarea',
            'title' => esc_html__('Content 1', 'induxe'),
            'validate' => 'html_custom',
            'default' => '',
            'allowed_html' => array(
                'a' => array(
                    'href' => array(),
                    'title' => array(),
                    'class' => array(),
                ),
                'cite' => array(),
                'br' => array(),
                'em' => array(),
                'strong' => array(),
                'span' => array(),
                'p' => array(),
                'div' => array(
                    'class' => array()
                ),
                'h1' => array(
                    'class' => array()
                ),
                'h2' => array(
                    'class' => array()
                ),
                'h3' => array(
                    'class' => array()
                ),
                'h4' => array(
                    'class' => array()
                ),
                'h5' => array(
                    'class' => array()
                ),
                'h6' => array(
                    'class' => array()
                ),
                'ul' => array(
                    'class' => array()
                ),
                'li' => array(),
                'time' => array(),
            ),
        ),
        array(
            'id'      => 'text_button_404',
            'type'    => 'text',
            'title'   => esc_html__('Text Button', 'induxe'),
            'default' => '',
        ),
    )
));


/*--------------------------------------------------------------
# Colors
--------------------------------------------------------------*/

Redux::setSection($opt_name, array(
    'title'  => esc_html__('Colors', 'induxe'),
    'icon'   => 'el-icon-file-edit',
    'fields' => array(
        array(
            'id'          => 'primary_color',
            'type'        => 'color',
            'title'       => esc_html__('Primary Color', 'induxe'),
            'transparent' => false,
            'default'     => '#ff5e14'
        ),
        array(
            'id'          => 'secondary_color',
            'type'        => 'color',
            'title'       => esc_html__('Secondary Color', 'induxe'),
            'transparent' => false,
            'default'     => '#232323'
        ),
        array(
            'id'          => 'body_color1',
            'type'        => 'color',
            'title'       => esc_html__('Body Color', 'induxe'),
            'transparent' => false,
            'default'     => '#999'
        ),

        array(
            'id'          => 'background_section_color',
            'type'        => 'color',
            'title'       => esc_html__('Background Section Color', 'induxe'),
            'transparent' => false,
            'default'     => '#191f23'
        ),
        array(
            'id'          => 'line_color',
            'type'        => 'color',
            'title'       => esc_html__('Line Color', 'induxe'),
            'transparent' => false,
            'default'     => '#303639'
        ),
        array(
            'id'      => 'link_color',
            'type'    => 'link_color',
            'title'   => esc_html__('Link Colors', 'induxe'),
            'default' => array(
                'regular' => '#ff5e14',
                'hover'   => '#e06909',
                'active'  => '#e06909'
            ),
            'output'  => array('a')
        )
    )
));

/*--------------------------------------------------------------
# Typography
--------------------------------------------------------------*/
$custom_font_selectors_1 = Redux::get_option($opt_name, 'custom_font_selectors_1');
$custom_font_selectors_1 = !empty($custom_font_selectors_1) ? explode(',', $custom_font_selectors_1) : array();
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Typography', 'induxe'),
    'icon'   => 'el-icon-text-width',
    'fields' => array(
        array(
            'id'       => 'body_default_font',
            'type'     => 'select',
            'title'    => esc_html__('Body Default Font', 'induxe'),
            'options'  => array(
                'Roboto'  => esc_html__('Default', 'induxe'),
                'Google-Font'  => esc_html__('Google Font', 'induxe'),
            ),
            'default'  => 'Roboto',
        ),
        array(
            'id'          => 'font_main',
            'type'        => 'typography',
            'title'       => esc_html__('Body Google Font', 'induxe'),
            'subtitle'    => esc_html__('This will be the default font of your website.', 'induxe'),
            'google'      => true,
            'font-backup' => true,
            'all_styles'  => true,
            'line-height'  => true,
            'font-size'  => true,
            'text-align'  => false,
            'color'  => false,
            'output'      => array('body'),
            'units'       => 'px',
            'required' => array( 0 => 'body_default_font', 1 => 'equals', 2 => 'Google-Font' ),
            'force_output' => true
        ),
        array(
            'id'          => 'body_color',
            'type'        => 'color',
            'title'       => esc_html__('Body Color', 'induxe'),
            'transparent' => false,
            'default'     => '',
            'required' => array( 0 => 'body_default_font', 1 => 'equals', 2 => 'Google-Font' ),
            'force_output' => true,
            'output'      => array('body, .single-hentry.archive .entry-content, .single-post .content-area, .ct-related-post .item-holder .item-content'),
        ),
        array(
            'id'       => 'heading_default_font',
            'type'     => 'select',
            'title'    => esc_html__('Heading Default Font', 'induxe'),
            'options'  => array(
                'Poppins'  => esc_html__('Default', 'induxe'),
                'Google-Font'  => esc_html__('Google Font', 'induxe'),
            ),
            'default'  => 'Poppins-SemiBold',
        ),
        array(
            'id'          => 'font_h1',
            'type'        => 'typography',
            'title'       => esc_html__('H1', 'induxe'),
            'subtitle'    => esc_html__('This will be the default font for all H1 tags of your website.', 'induxe'),
            'google'      => true,
            'font-backup' => true,
            'all_styles'  => true,
            'text-align'  => false,
            'color'  => false,
            'output'      => array('h1', '.h1', '.text-heading'),
            'units'       => 'px',
            'required' => array( 0 => 'heading_default_font', 1 => 'equals', 2 => 'Google-Font' ),
            'force_output' => true
        ),
        array(
            'id'          => 'font_h2',
            'type'        => 'typography',
            'title'       => esc_html__('H2', 'induxe'),
            'subtitle'    => esc_html__('This will be the default font for all H2 tags of your website.', 'induxe'),
            'google'      => true,
            'font-backup' => true,
            'all_styles'  => true,
            'text-align'  => false,
            'color'  => false,
            'output'      => array('h2', '.h2'),
            'units'       => 'px',
            'required' => array( 0 => 'heading_default_font', 1 => 'equals', 2 => 'Google-Font' ),
            'force_output' => true
        ),
        array(
            'id'          => 'font_h3',
            'type'        => 'typography',
            'title'       => esc_html__('H3', 'induxe'),
            'subtitle'    => esc_html__('This will be the default font for all H3 tags of your website.', 'induxe'),
            'google'      => true,
            'font-backup' => true,
            'all_styles'  => true,
            'text-align'  => false,
            'color'  => false,
            'output'      => array('h3', '.h3'),
            'units'       => 'px',
            'required' => array( 0 => 'heading_default_font', 1 => 'equals', 2 => 'Google-Font' ),
            'force_output' => true
        ),
        array(
            'id'          => 'font_h4',
            'type'        => 'typography',
            'title'       => esc_html__('H4', 'induxe'),
            'subtitle'    => esc_html__('This will be the default font for all H4 tags of your website.', 'induxe'),
            'google'      => true,
            'font-backup' => true,
            'all_styles'  => true,
            'text-align'  => false,
            'color'  => false,
            'output'      => array('h4', '.h4'),
            'units'       => 'px',
            'required' => array( 0 => 'heading_default_font', 1 => 'equals', 2 => 'Google-Font' ),
            'force_output' => true
        ),
        array(
            'id'          => 'font_h5',
            'type'        => 'typography',
            'title'       => esc_html__('H5', 'induxe'),
            'subtitle'    => esc_html__('This will be the default font for all H5 tags of your website.', 'induxe'),
            'google'      => true,
            'font-backup' => true,
            'all_styles'  => true,
            'text-align'  => false,
            'color'  => false,
            'output'      => array('h5', '.h5'),
            'units'       => 'px',
            'required' => array( 0 => 'heading_default_font', 1 => 'equals', 2 => 'Google-Font' ),
            'force_output' => true
        ),
        array(
            'id'          => 'font_h6',
            'type'        => 'typography',
            'title'       => esc_html__('H6', 'induxe'),
            'subtitle'    => esc_html__('This will be the default font for all H6 tags of your website.', 'induxe'),
            'google'      => true,
            'font-backup' => true,
            'all_styles'  => true,
            'text-align'  => false,
            'color'  => false,
            'output'      => array('h6', '.h6'),
            'units'       => 'px',
            'required' => array( 0 => 'heading_default_font', 1 => 'equals', 2 => 'Google-Font' ),
            'force_output' => true
        )
    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Fonts Selectors', 'induxe'),
    'icon'       => 'el el-fontsize',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'          => 'custom_font_1',
            'type'        => 'typography',
            'title'       => esc_html__('Custom Font', 'induxe'),
            'subtitle'    => esc_html__('This will be the font that applies to the class selector.', 'induxe'),
            'google'      => true,
            'font-backup' => true,
            'all_styles'  => true,
            'text-align'  => false,
            'output'      => $custom_font_selectors_1,
            'units'       => 'px',

        ),
        array(
            'id'       => 'custom_font_selectors_1',
            'type'     => 'textarea',
            'title'    => esc_html__('CSS Selectors', 'induxe'),
            'subtitle' => esc_html__('Add class selectors to apply above font.', 'induxe'),
            'validate' => 'no_html'
        )
    )
));

/*--------------------------------------------------------------
# Shop
--------------------------------------------------------------*/
if(class_exists('Woocommerce')) {
    Redux::setSection($opt_name, array(
        'title'  => esc_html__('Shop', 'induxe'),
        'icon'   => 'el el-shopping-cart',
        'fields' => array(
            array(
                'id'       => 'sidebar_shop',
                'type'     => 'button_set',
                'title'    => esc_html__('Sidebar Position', 'induxe'),
                'subtitle' => esc_html__('Select a sidebar position for archive shop.', 'induxe'),
                'options'  => array(
                    'left'  => esc_html__('Left', 'induxe'),
                    'right' => esc_html__('Right', 'induxe'),
                    'none'  => esc_html__('Disabled', 'induxe')
                ),
                'default'  => 'left'
            ),
            array(
                'title' => esc_html__('Products displayed per page', 'induxe'),
                'id' => 'product_per_page',
                'type' => 'slider',
                'subtitle' => esc_html__('Number product to show', 'induxe'),
                'default' => 9,
                'min'  => 6,
                'step' => 1,
                'max' => 50,
                'display_value' => 'text'
            ),
            array(
                'id'       => 'shop_content_padding',
                'type'     => 'spacing',
                'title'    => esc_html__('Content Paddings', 'induxe'),
                'subtitle' => esc_html__('Content paddings.', 'induxe'),
                'mode'     => 'padding',
                'units'    => array('em', 'px', '%'),
                'top'      => true,
                'right'    => false,
                'bottom'   => true,
                'left'     => false,
                'output'   => array('.woocommerce #content, .woocommerce-page #content'),
                'default'  => array(
                    'top'    => '',
                    'right'  => '',
                    'bottom' => '',
                    'left'   => '',
                    'units'  => 'px',
                )
            ),
            array(
                'id'       => 'product_social_share',
                'title'    => esc_html__('Product Social Share', 'induxe'),
                'type'     => 'switch',
                'default'  => false,
            ),
        )
    ));
}
/* Custom Code /--------------------------------------------------------- */
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Custom Code', 'induxe'),
    'icon'   => 'el-icon-edit',
    'fields' => array(

        array(
            'id'       => 'site_header_code',
            'type'     => 'textarea',
            'theme'    => 'chrome',
            'title'    => esc_html__('Scripts in Header', 'induxe'),
            'subtitle' => esc_html__('These scripts will be printed in the <head> section.', 'induxe'),
        ),
        array(
            'id'       => 'site_footer_code',
            'type'     => 'textarea',
            'theme'    => 'chrome',
            'title'    => esc_html__('Scripts in Footer', 'induxe'),
            'subtitle' => esc_html__('These scripts will be printed above the </body> tag.', 'induxe'),
        ),

    ),
));

/* Custom CSS /--------------------------------------------------------- */
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Custom CSS', 'induxe'),
    'icon'   => 'el-icon-adjust-alt',
    'fields' => array(

        array(
            'id'   => 'customcss',
            'type' => 'info',
            'desc' => esc_html__('Custom CSS', 'induxe')
        ),

        array(
            'id'       => 'site_css',
            'type'     => 'ace_editor',
            'title'    => esc_html__('CSS Code', 'induxe'),
            'subtitle' => esc_html__('Advanced CSS Options. You can paste your custom CSS Code here.', 'induxe'),
            'mode'     => 'css',
            'validate' => 'css',
            'theme'    => 'chrome',
            'default'  => ""
        ),

    ),
));