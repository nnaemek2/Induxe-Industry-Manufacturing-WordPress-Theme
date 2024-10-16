<?php
if ( ! class_exists( 'ReduxFrameworkInstances' ) )
{
    return;
}

/*
 * Convert HEX to GRBA
 */
if(!function_exists('induxe_rgba')){
    function induxe_rgba($hex,$opacity = 1) {
        $hex = str_replace("#",null, $hex);
        $color = array();
        if(strlen($hex) == 3) {
            $color['r'] = hexdec(substr($hex,0,1).substr($hex,0,1));
            $color['g'] = hexdec(substr($hex,1,1).substr($hex,1,1));
            $color['b'] = hexdec(substr($hex,2,1).substr($hex,2,1));
            $color['a'] = $opacity;
        }
        else if(strlen($hex) == 6) {
            $color['r'] = hexdec(substr($hex, 0, 2));
            $color['g'] = hexdec(substr($hex, 2, 2));
            $color['b'] = hexdec(substr($hex, 4, 2));
            $color['a'] = $opacity;
        }
        $color = "rgba(".implode(', ', $color).")";
        return $color;
    }
}

/*
 * Convert HEX to Dark & Lighten
 */
function induxe_lighten( $hex, $percent ) {
    
    // validate hex string
    
    $hex = preg_replace( '/[^0-9a-f]/i', '', $hex );
    $new_hex = '#';
    
    if ( strlen( $hex ) < 6 ) {
        $hex = $hex[0] + $hex[0] + $hex[1] + $hex[1] + $hex[2] + $hex[2];
    }
    
    // convert to decimal and change luminosity
    for ($i = 0; $i < 3; $i++) {
        $dec = hexdec( substr( $hex, $i*2, 2 ) );
        $dec = min( max( 0, $dec + $dec * $percent ), 255 ); 
        $new_hex .= str_pad( dechex( $dec ) , 2, 0, STR_PAD_LEFT );
    }       
    
    return $new_hex;
}

class CSS_Generator
{
    /**
     * scssc class instance
     *
     * @access protected
     * @var scssc
     */
    protected $scssc = null;

    /**
     * ReduxFramework class instance
     *
     * @access protected
     * @var ReduxFramework
     */
    protected $redux = null;

    /**
     * Debug mode is turn on or not
     *
     * @access protected
     * @var boolean
     */
    protected $dev_mode = true;

    /**
     * opt_name of ReduxFramework
     *
     * @access protected
     * @var string
     */
    protected $opt_name = '';


    /**
     * Constructor
     */
    function __construct() {
        $this->opt_name =induxe_get_opt_name();

        if ( empty( $this->opt_name ) ) {
            return;
        }
        $this->dev_mode =induxe_get_opt( 'dev_mode', '0' ) === '1' ? true : false;
        add_filter( 'cms_scssc_on', '__return_true' );
        add_action( 'init', array( $this, 'init' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ), 20 );
    }

    /**
     * init hook - 10
     */
    function init() {
        if ( ! class_exists( 'scssc' ) ) {
            return;
        }

        $this->redux = ReduxFrameworkInstances::get_instance( $this->opt_name );

        if ( empty( $this->redux ) || ! $this->redux instanceof ReduxFramework ) {
            return;
        }
        add_action( 'wp', array( $this, 'generate_with_dev_mode' ) );
        add_action( "redux/options/{$this->opt_name}/saved", function () {
            $this->generate_file();
        } );
    }

    function generate_with_dev_mode() {
        if ( $this->dev_mode === true ) {
            $this->generate_file();
        }
    }

    /**
     * Generate options and css files
     */
    function generate_file() {
        $scss_dir = get_template_directory() . '/assets/scss/';
        $css_dir  = get_template_directory() . '/assets/css/';

        $this->scssc = new scssc();
        $this->scssc->setImportPaths( $scss_dir );

        $_options = $scss_dir . 'variables.scss';

        $this->redux->filesystem->execute( 'put_contents', $_options, array(
            'content' => preg_replace( "/(?<=[^\r]|^)\n/", "\r\n", $this->options_output() )
        ) );
        $css_file = $css_dir . 'theme.css';

        $this->scssc->setFormatter( 'scss_formatter' );
        $this->redux->filesystem->execute( 'put_contents', $css_file, array(
            'content' => preg_replace( "/(?<=[^\r]|^)\n/", "\r\n", $this->scssc->compile( '@import "theme.scss"' ) )
        ) );
    }

    /**
     * Output options to _variables.scss
     *
     * @access protected
     * @return string
     */
    protected function options_output()
    {
        ob_start();
        
        //Primary Color
        $primary_color =induxe_get_opt( 'primary_color', '#ff5e14' );
        if ( !induxe_is_valid_color( $primary_color ) )
        {
            $primary_color = '#ff5e14';
        }
        printf( '$primary_color: %s;', esc_attr( $primary_color ) );

        //Secondary Color
        $secondary_color =induxe_get_opt( 'secondary_color', '#232323' );
        if ( !induxe_is_valid_color( $secondary_color ) )
        {
            $secondary_color = '#232323';
        }
        printf( '$secondary_color: %s;', esc_attr( $secondary_color ) );
        
        //Body Color
        $body_color1 =induxe_get_opt( 'body_color1', '#999999' );
        if ( !induxe_is_valid_color( $body_color1 ) )
        {
            $body_color1 = '#999999';
        }
        printf( '$body_color1: %s;', esc_attr( $body_color1 ) );


        $background_section_color =induxe_get_opt( 'background_section_color', '#191f23' );
        if ( !induxe_is_valid_color( $background_section_color ) )
        {
            $background_section_color = '#191f23';
        }
        printf( '$background_section_color: %s;', esc_attr( $background_section_color ) );

        $line_color =induxe_get_opt( 'line_color', '#303639' );
        if ( !induxe_is_valid_color( $line_color ) )
        {
            $line_color = '#303639';
        }
        printf( '$line_color: %s;', esc_attr( $line_color ) );

        $link_color =induxe_get_opt( 'link_color', '#ff5e14' );
        if ( !empty($link_color['regular']) && isset($link_color['regular']) )
        {
            printf( '$link_color: %s;', esc_attr( $link_color['regular'] ) );
        } else {
            echo '$link_color: #ff5e14;';
        }

        $link_color_hover =induxe_get_opt( 'link_color', '#e06909' );
        if ( !empty($link_color['hover']) && isset($link_color['hover']) )
        {
            printf( '$link_color_hover: %s;', esc_attr( $link_color['hover'] ) );
        } else {
            echo '$link_color_hover: #e06909;';
        }

        $link_color_active =induxe_get_opt( 'link_color', '#e06909' );
        if ( !empty($link_color['active']) && isset($link_color['active']) )
        {
            printf( '$link_color_active: %s;', esc_attr( $link_color['active'] ) );
        } else {
            echo '$link_color_active: #e06909;';
        }

        /* Font */
        $body_default_font =induxe_get_opt( 'body_default_font', 'Roboto' );
        if (isset($body_default_font)) {
            echo '
                $body_default_font: '.esc_attr( $body_default_font ).';
            ';
        }

        $heading_default_font =induxe_get_opt( 'heading_default_font', 'Roboto' );
        if (isset($heading_default_font)) {
            echo '
                $heading_default_font: '.esc_attr( $heading_default_font ).';
            ';
        }

        return ob_get_clean();
    }

    /**
     * Hooked wp_enqueue_scripts - 20
     * Make sure that the handle is enqueued from earlier wp_enqueue_scripts hook.
     */
    function enqueue()
    {
        $css = $this->inline_css();
        if ( !empty($css) )
        {
            wp_add_inline_style( 'induxe-theme', $this->dev_mode ? $css :induxe_css_minifier( $css ) );
        }
    }

    /**
     * Generate inline css based on theme options
     */
    protected function inline_css()
    {
        ob_start();
        /* BG Body */
        $body_background =induxe_get_opt( 'body_background' );
        $layout_boxed =induxe_get_opt( 'layout_boxed', false );
        $layout_boxed_page =induxe_get_page_opt( 'layout_boxed', false );
        if($layout_boxed_page) {
            $layout_boxed = $layout_boxed_page;
        }
        if($layout_boxed && isset($body_background)) {
            echo 'body {
                background-color: '.esc_attr( $body_background['background-color'] ).';
                background-size: '.esc_attr( $body_background['background-size'] ).';
                background-attachment: '.esc_attr( $body_background['background-attachment'] ).';
                background-repeat: '.esc_attr( $body_background['background-repeat'] ).';
                background-position: '.esc_attr( $body_background['background-position'] ).';
                background-image: url('.esc_attr( $body_background['background-image'] ).');
            }';
        }

        /* Header */
        $h_bg_color =induxe_get_opt( 'h_bg_color' );
        $h_bg_top_color =induxe_get_opt( 'h_bg_top_color' );
        $h_text_top_color =induxe_get_opt( 'h_text_top_color' );
        $h_link_top_color =induxe_get_opt( 'h_link_top_color' );
        if(!empty($h_bg_top_color)) {
            echo '#header-wrap #header-topbar {
                background-color: '.esc_attr( $h_bg_top_color ).' !important;
            }';
        }
        if(!empty($h_text_top_color)) {
            echo '#header-wrap #header-topbar, #header-wrap #header-topbar .header-contact i, #header-wrap #header-topbar .header-contact label {
                color: '.esc_attr( $h_text_top_color ).' !important;
            }';
        }
        if(!empty($h_link_top_color)) {
            echo '#header-wrap #header-topbar a {
                color: '.esc_attr( $h_link_top_color ).' !important;
            }';
        }
        if(!empty($h_bg_color)) {
            echo '#header-wrap #header-main.header-main {
                background-color: '.esc_attr( $h_bg_color ).';
            }';
        }

        /* Logo */
        $logo_maxh =induxe_get_opt( 'logo_maxh' );

        if (!empty($logo_maxh['height']) && $logo_maxh['height'] != 'px')
        {
            printf( '#header-wrap .header-branding a img { max-height: %s; }', esc_attr($logo_maxh['height']) );
        }

        /* Menu */
        $menu_text_transform =induxe_get_opt( 'menu_text_transform' );
        if ( !empty( $menu_text_transform ) ) {
            printf( '.primary-menu > li > a { text-transform: %s !important; }', esc_attr($menu_text_transform) );
        }
        $menu_font_size =induxe_get_opt( 'menu_font_size' );
        if ( !empty( $menu_font_size ) ) {
            printf( '.primary-menu > li > a { font-size: %s'.'px !important; }', esc_attr($menu_font_size) );
        }
        $menu_letter_spacing =induxe_get_opt( 'menu_letter_spacing' );
        if ( !empty( $menu_letter_spacing ) || $menu_letter_spacing == '0' ) {
            printf( '.primary-menu > li > a { letter-spacing: %s'.'px !important; }', esc_attr($menu_letter_spacing) );
        }

        echo '@media screen and (min-width: 992px) {';
            $main_menu_color =induxe_get_opt( 'main_menu_color' );
            if ( !empty( $main_menu_color['regular'] ) ) {
                printf( '.header-main:not(.h-fixed) .primary-menu > li > a { color: %s !important; }', esc_attr($main_menu_color['regular']) );
            }
            if ( !empty( $main_menu_color['hover'] ) ) {
                printf( '.header-main:not(.h-fixed) .primary-menu > li > a:hover { color: %s !important; }', esc_attr($main_menu_color['hover']) );
            }
            if ( !empty( $main_menu_color['active'] ) ) {
                printf( '.header-main:not(.h-fixed) .primary-menu > li > a.current, .header-main:not(.h-fixed) .primary-menu > li.current_page_item > a, .header-main:not(.h-fixed) .primary-menu > li.current-menu-item > a, .header-main:not(.h-fixed) .primary-menu > li.current_page_ancestor > a, .header-main:not(.h-fixed) .primary-menu > li.current-menu-ancestor > a { color: %s !important; }', esc_attr($main_menu_color['active']) );
            }
            $main_menu_color_sticky =induxe_get_opt( 'main_menu_color_sticky' );
            if ( !empty( $main_menu_color_sticky['regular'] ) ) {
                printf( '.header-main.h-fixed .primary-menu > li > a { color: %s !important; }', esc_attr($main_menu_color_sticky['regular']) );
            }
            if ( !empty( $main_menu_color_sticky['hover'] ) ) {
                printf( '.header-main.h-fixed .primary-menu > li > a:hover { color: %s !important; }', esc_attr($main_menu_color_sticky['hover']) );
            }
            if ( !empty( $main_menu_color_sticky['active'] ) ) {
                printf( '.header-main.h-fixed .primary-menu > li > a.current, .header-main.h-fixed .primary-menu > li.current_page_item > a, .header-main.h-fixed .primary-menu > li.current-menu-item > a, .header-main.h-fixed .primary-menu > li.current_page_ancestor > a, .header-main.h-fixed .primary-menu > li.current-menu-ancestor > a { color: %s !important; }', esc_attr($main_menu_color_sticky['active']) );
            }
            $main_menu_color_sub =induxe_get_opt( 'main_menu_color_sub' );
            if ( !empty( $main_menu_color_sub['regular'] ) ) {
                printf( '.primary-menu .sub-menu li a { color: %s !important; }', esc_attr($main_menu_color_sub['regular']) );
            }
            if ( !empty( $main_menu_color_sub['hover'] ) ) {
                printf( '.primary-menu .sub-menu li > a:hover { color: %s !important; }', esc_attr($main_menu_color_sub['hover']) );
            }
            if ( !empty( $main_menu_color_sub['active'] ) ) {
                printf( '.primary-menu .sub-menu li.current_page_item > a, .primary-menu .sub-menu li.current-menu-item > a, .primary-menu .sub-menu li.current_page_ancestor > a, .primary-menu .sub-menu li.current-menu-ancestor > a, .primary-menu .sub-menu li.current-menu-parent > a { color: %s !important; }', esc_attr($main_menu_color_sub['active']) );
            }
        echo '}';

        /* Menu Mobile */
        $mobile_header_bgcolor =induxe_get_opt( 'mobile_header_bgcolor' );
        if(!empty($mobile_header_bgcolor)) {
            echo '@media screen and (max-width: 991px) {';
                echo 'body #header-wrap #header-main {
                    background-color: '.esc_attr( $mobile_header_bgcolor ).' !important;
                }';
            echo '}';
        }

        $mobile_icon_menu_color =induxe_get_opt( 'mobile_icon_menu_color' );
        if(!empty($mobile_icon_menu_color)) {
            echo '@media screen and (max-width: 991px) {';
                echo '#main-menu-mobile .btn-nav-mobile::before, #main-menu-mobile .btn-nav-mobile::after, #main-menu-mobile .btn-nav-mobile span {
                    background-color: '.esc_attr( $mobile_icon_menu_color ).' !important;
                }';
            echo '}';
        }

        $header_menu_bgcolor =induxe_get_opt( 'header_menu_bgcolor' );
        if(!empty($header_menu_bgcolor)) {
            echo '@media screen and (max-width: 991px) {';
                echo '.header-navigation .main-navigation {
                    background-color: '.esc_attr( $header_menu_bgcolor ).' !important;
                }';
                echo '.primary-menu > li > a:hover, .primary-menu > li > a.current {
                    background-color: transparent;
                }';
            echo '}';
        }

        $main_menu_color_mobile =induxe_get_opt( 'main_menu_color_mobile' );
        if(!empty($main_menu_color_mobile["regular"])) {
            echo '@media screen and (max-width: 991px) {';
                echo '.primary-menu li a, .main-menu-toggle::before {
                    color: '.esc_attr( $main_menu_color_mobile["regular"] ).' !important;
                }';
            echo '}';
        }
        if(!empty($main_menu_color_mobile["hover"])) {
            echo '@media screen and (max-width: 991px) {';
                echo '.primary-menu li a:hover {
                    color: '.esc_attr( $main_menu_color_mobile["hover"] ).' !important;
                }';
            echo '}';
        }
        if(!empty($main_menu_color_mobile["active"])) {
            echo '@media screen and (max-width: 991px) {';
                echo '.primary-menu > li.current-menu-item > a, , .primary-menu > li.current_page_item > a, .primary-menu > li.current_page_ancestor > a, .primary-menu > li.current-menu-ancestor > a {
                    color: '.esc_attr( $main_menu_color_mobile["active"] ).' !important;
                }';
            echo '}';
        }

        /* Page Title */
        $ptitle_font_size =induxe_get_page_opt( 'ptitle_font_size' );
        if(!empty($ptitle_font_size)) {
            echo 'body #pagetitle h1.page-title {
                font-size: '.esc_attr( $ptitle_font_size ).'px;
            }';
        }

        /* Footer */
        $footer_bg =induxe_get_opt( 'footer_bg' );
        $footer_bg_color_top =induxe_get_opt( 'footer_bg_color_top' );
        $footer_top_heading_color =induxe_get_opt( 'footer_top_heading_color' );
        $footer_top_heading_fs =induxe_get_opt( 'footer_top_heading_fs' );
        $footer_top_paddings =induxe_get_opt( 'footer_top_paddings' );
        if(!empty($footer_bg['background-color'])) {
            echo '.site-layout-default .site-footer {
                margin-top: 0px;
            }';
            echo '.site-layout-default .site-footer:before {
                display: none;
            }';
        }
        if(!empty($footer_bg_color_top)) {
            echo '.site-footer:before {
                background-color: '.esc_attr( $footer_bg_color_top['rgba'] ).' !important;
            }';
        }
        if(!empty($footer_top_heading_color)) {
            echo '.top-footer .footer-widget-title {
                color: '.esc_attr( $footer_top_heading_color ).' !important;
            }';
        }
        if(!empty($footer_top_heading_fs)) {
            echo '.top-footer .footer-widget-title {
                font-size: '.esc_attr( $footer_top_heading_fs ).'px !important;
            }';
        }
        if ( isset($footer_top_paddings) && !empty($footer_top_paddings) ) {
            if(!empty($footer_top_paddings['padding-top'])) {
                echo ".site-footer {
                    padding-top:" .esc_attr($footer_top_paddings['padding-top']). " !important;
                }";
            }
            if(!empty($footer_top_paddings['padding-bottom'])) {
                echo ".site-footer .top-footer {
                    padding-bottom:" .esc_attr($footer_top_paddings['padding-bottom']). " !important;
                }";
            }
        }

        $footer_logo_maxh =induxe_get_opt( 'footer_logo_maxh' );

        if (!empty($footer_logo_maxh['height']) && $footer_logo_maxh['height'] != 'px')
        {
            printf( 'body .site-footer.footer-layout1 .footer-logo img { max-height: %s; }', esc_attr($footer_logo_maxh['height']) );
        }

        /* Content */
        $post_text_align =induxe_get_opt( 'post_text_align', 'inherit' );
        if($post_text_align == 'justify') {
            echo '.single-post .content-area .entry-content p {
                text-align: justify;
            }';
        }
        $single_content_max_width =induxe_get_opt( 'single_content_max_width' );
        $single_content_max_width_page =induxe_get_page_opt( 'single_content_max_width' );
        if(!empty($single_content_max_width_page)) {
            $single_content_max_width = $single_content_max_width_page;
        }
        if(!empty($single_content_max_width)) {
            echo '.single-post #primary.content-full-width {
                max-width: '.esc_attr( $single_content_max_width ).'px;
                margin: auto;
            }';
            echo '.single-post #primary.content-has-sidebar {
                max-width: '.esc_attr( $single_content_max_width ).'px;
            }';
            echo '.single-post .row.content-row {
                justify-content: center;
                -webkit-justify-content: center;
                -ms-justify-content: center;
                -o-justify-content: center;
            }';
        }

        /* Footer */
        $footer_top_link_color =induxe_get_page_opt( 'footer_top_link_color' );
        if(!empty($footer_top_link_color['hover'])) {

            echo '.contact-info ul li i, .site-footer .top-footer ul.menu li a::before,
            .site-footer .bottom-footer .footer-social a:hover,
            .site-footer .top-footer #ctf.ctf .ctf-author-name::before,
            .site-footer .top-footer #ctf.ctf .ctf-author-name:hover {
                color: '.esc_attr( $footer_top_link_color['hover'] ).';
            }';
        }

        $primary_color = induxe_get_page_opt( 'primary_color' );
        if ( ! empty( $primary_color ) )
        {
            printf( '.cms-search-popup .cms-search-form, .cms-grid .grid-filter-wrap .filter-item.active, 

                .grid-filter-wrap span.active, .cms-register-popup .cms-modal-content .field-group .input:focus, 
                .ct-grid-portfolio-gallery .grid-filter-inner .filter-item,
                .ct-testimonial-layout4 .grid-item-inner,
                .ct-testimonial-layout4 .grid-item-inner .item-test-meta:after, .ct-testimonial-layout4 .grid-item-inner .item-test-meta:before,
                .ct-fancybox-carousel.layout2 .item-featured:hover img,
                .ct-year-experpt .ct-about-year,
                .ct-banner.layout1 .ct-banner-inner .ct-image:before,
                .cms-login-popup .cms-modal-content .field-group .input:focus { border-color: %s!important; }', esc_attr($primary_color) );

            printf( '.meta-carousel .owl-item:hover .item-content:after, .ct-testimonial-layout1 .owl-item:hover .item-content:after, .ct-portfolio-carousel.layout2 .owl-item:hover .item-content:after, .meta-carousel .owl-item.center .item-content:after, 
                .ct-testimonial-layout1 .owl-item.center ,
                .item-content:after, .ct-portfolio-carousel.layout2 .owl-item.center .item-content:after { border-top-color: %s!important; }', esc_attr($primary_color) );

            printf( '.meta-carousel .owl-item:hover .item-content:after, .ct-testimonial-layout1 .owl-item:hover .item-content:after, .ct-portfolio-carousel.layout2 .owl-item:hover .item-content:after, .meta-carousel .owl-item.center .item-content:after, 
                .ct-testimonial-layout1 .owl-item.center ,
                .ct-grid-portfolio-layout2 .grid-filter-wrap .filter-item:hover,
                .item-content:after, .ct-portfolio-carousel.layout2 .owl-item.center .item-content:after { border-bottom-color: %s!important; }', esc_attr($primary_color) );

            
            printf( '.filter-item.active, .filter-item:hover,
                .grapper-medium .col-topbar-info .innerbox i,
                .ct-blog-carousel .item-title a:hover,
                .ct-heading .ct-heading-tag cite,
                .ct-grid-portfolio-gallery .grid-filter-inner .filter-item,
                .header-layout9 .header-info .box-info i,
                .ct-testimonial-layout4 .grid-item-inner .item-icon-left,
                .primary-menu .sub-menu li > a:hover, .primary-menu .sub-menu li.current_page_item > a, .primary-menu .sub-menu li.current-menu-item > a, .primary-menu .sub-menu li.current_page_ancestor > a, .primary-menu .sub-menu li.current-menu-ancestor > a, .primary-menu .sub-menu li.current-menu-parent > a,
                .ct-fancybox-carousel.layout2 .item-featured .ct-fcb-icon i,
                .ct-testimonial-layout7:hover .owl-nav .owl-prev i,
                .ct-fancybox-carousel.layout1 .fancybox-title:hover,
                .ct-blog-carousel.layout3 .item-meta li,
                .ct-textbox-content a,
                .ct-fancybox-carousel .owl-nav .owl-prev i, .ct-fancybox-carousel .owl-nav .owl-next i,
                .ct-service-carousel.layout2 .item-body .item-title a:hover,
                .ct-portfolio-carousel.layout2 .ct-carousel-item:hover .item-holder a,
                .ct-grid-fancybox.layout7 .ct-fancybox-icon,
                .ct-grid-portfolio-layout2 .port-up .item-category a,
                .ct-grid-portfolio-layout2 .item-title a:hover,
                .ct-grid-portfolio-layout2 .grid-filter-wrap .filter-item:before,
                .ct-service-carousel.layout3 .ct-carousel-item:hover .item-title a,
                .ct-testimonial-layout11 .grid-item-inner .item-content .item-position,
                .text-footer-custom a,
                .cms-field-checkbox .icon-check:before { color: %s!important; }', esc_attr($primary_color) );
            printf( '.owl-dots .owl-dot.active,
                .scroll-top,
                ct-testimonial .owl-nav .owl-prev, ct-testimonial .owl-nav .owl-next,
                .ct-testimonial-layout3 .owl-nav .owl-prev, .ct-testimonial-layout3 .owl-nav .owl-next,
                .ct-newsletter.layout2 .tnp-subscription form .tnp-field.tnp-field-button .tnp-submit,
                .ct-grid-team3 .wp-team-title .team-title,
                .ct-grid-team3 .team-social,
                .ct-tabs .nav-tabs .nav-item a.active,
                .ct-tabs.layout1 .nav-tabs .nav-item a:after,
                .ct-testimonial-layout11 .owl-nav .owl-prev, .ct-testimonial-layout11 .owl-nav .owl-next,
                #main-menu-mobile .btn-nav-mobile,
                .cms-register-popup .cms-modal-content .field-group .button, 
                .cms-login-popup .cms-modal-content .field-group .button,
                .cms-register-popup .cms-modal-footer a, 
                .cms-login-popup .cms-modal-footer a,
                .wpcf7 .wpcf7-form .wpcf7-submit,
                .posts-pagination .page-numbers.current, 
                .woocommerce-pagination ul.page-numbers .page-numbers.current,
                #main-menu-mobile #search-mobile,
                .ct-newsletter.layout1 .tnp-subscription form .tnp-field.tnp-field-button .tnp-submit,
                .header-layout2 .primary-menu > li:hover > a, 
                .header-layout2 .primary-menu > li.current_page_item > a, 
                .header-layout2 .primary-menu > li.current-menu-item > a, 
                .header-layout2 .primary-menu > li.current_page_ancestor > a, 
                .header-layout2 .primary-menu > li.current-menu-ancestor > a,
                .header-layout3 #header-main, 
                #header-wrap.header-layout5 #header-main,
                #header-wrap.header-layout10 #header-main,
                .header-layout2 .primary-menu > li > a:before, 
                .header-layout4 .primary-menu > li > a:before,
                .ct-counter-single.layout1 .ct-separator,
                .btn.btn-default,
                .ct-testimonial-layout4 .owl-prev, .ct-testimonial-layout4 .owl-next,
                .ct-testimonial-layout4 .grid-item-inner .item-test-meta,
                #header-wrap #topbar .btn-topbar,
                .ct-portfolio-gallery-carousel:after,
                .ct-grid-service.layout2 .grid-item:nth-child(3n+1) .grid-item-inner .item-body,
                .ct-grid-service.layout2 .grid-item:nth-child(3n+3) .grid-item-inner .item-body,
                .ct-grid-blog-layout1 .item-meta:after,
                .ct-grid-portfolio-gallery .grid-filter-inner .filter-item.active,
                .meta-carousel .owl-dots .owl-dot, .ct-testimonial-layout1 .owl-dots .owl-dot, .ct-portfolio-carousel.layout2 .owl-dots .owl-dot,
                .meta-carousel .owl-item:hover .item-content, .ct-testimonial-layout1 .owl-item:hover .item-content, .ct-portfolio-carousel.layout2 .owl-item:hover .item-content, .meta-carousel .owl-item.center .item-content, .ct-testimonial-layout1 .owl-item.center .item-content, .ct-portfolio-carousel.layout2 .owl-item.center .item-content,
                .ct-video-wrapper.style1 .ct-video-button,
                .ct-grid-fancybox.layout1 .grid-item-inner:after,
                .ct-blog-carousel.layout2 .item-meta:after,
                .ct-counter-single.layout1 .ct-counter-inner:after, 
                .ct-service-carousel.layout2 .ct-carousel-item:after,
                .ct-service-carousel.layout2 .item-body .btn-learmore,
                .ct-counter-single.layout3 .ct-counter-inner:after,
                .ct-grid-team4 .grid-item-inner .dlab-info:before, .ct-grid-team4 .grid-item-inner .dlab-info:after,
                .ct-grid-team4 .grid-item-inner .dlab-info .dlab-position,
                .ct-grid-team4 .grid-item-inner .dlab-info .dlab-title:before, 
                .ct-grid-team4 .grid-item-inner .dlab-info .dlab-title:after,
                .ct-grid-service.layout1 .grid-item-inner .btn-leanmore:after,
                #header-wrap.header-layout8 .header-main .inner-row .site-menu-right .header-button-group a, #header-wrap.header-layout11 .header-main .inner-row .site-menu-right .header-button-group a,
                #header-wrap.header-layout8 .header-main .inner-row .site-menu-right .header-button-group a:after, 
                #header-wrap.header-layout11 .header-main .inner-row .site-menu-right .header-button-group a:after,
                #header-wrap.header-layout11 .header-main .inner-row .primary-menu > li > a:before,
                .ct-blog-carousel .item-footer a.btn-aylen,
                .ct-blog-carousel .item-footer a.btn-aylen:after,
                .ct-fancybox-carousel.layout1 .grid-item-inner:after,
                .ct-team-carousel-layout5 .dlab-border-left:before, .ct-team-carousel-layout5 .dlab-border-right:before, .ct-team-carousel-layout5 .dlab-border-left:after, .ct-team-carousel-layout5 .dlab-border-right:after,
                .ct-testimonial-layout10 .grid-item-inner .item-content,
                .ct-grid-portfolio-layout2 .port-down,
                .ct-portfolio-carousel.layout3 .list-meta .item-buttom a,
                .site-footer.footer-layout1 .top-footer-info .ft-contact,
                .site-footer.footer-layout1 .widget_newsletterwidget form:after,
                .header-layout12 .primary-menu > li > a:before,
                .ct-service-carousel.layout3 .btn-learmore,
                .ct-fancybox-carousel.layout4 .item-featured .ct-fcb-icon,
                .ct-fancybox-carousel.layout4 .ct-fcb-more,
                .ct-fancybox-carousel.layout4 .item-featured .ct-fcb-icon:after,
                .ct-grid-blog-layout1 .item-footer a.btn-aylen:after
                 { background-color: %s!important; }', esc_attr($primary_color) );
        }
        /* Custom Css */
        $custom_css =induxe_get_opt( 'site_css' );
        if(!empty($custom_css)) { echo esc_attr($custom_css); }

        return ob_get_clean();
    }
}

new CSS_Generator();