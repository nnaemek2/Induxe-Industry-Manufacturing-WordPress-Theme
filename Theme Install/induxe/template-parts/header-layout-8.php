<?php
/**
 * Template part for displaying default header layout
 */
$h_social_of = induxe_get_opt( 'h_social_of', false );

$sticky_on =induxe_get_opt( 'sticky_on', false );
$search_on =induxe_get_opt( 'search_on', false );

$h_btn_text =induxe_get_opt( 'h_btn_text' );

$h_btn_link_type =induxe_get_opt( 'h_btn_link_type', 'page' );
$h_btn_link =induxe_get_opt( 'h_btn_link' );
$h_btn_link_custom =induxe_get_opt( 'h_btn_link_custom' );
$h_btn_target =induxe_get_opt( 'h_btn_target', '_self' );
if($h_btn_link_type == 'page') {
    $h_btn_url = get_permalink($h_btn_link);
} else {
    $h_btn_url = $h_btn_link_custom;
}
?>
<header id="masthead" class="header-main">
    <div id="header-wrap" class="header-layout8 header-transparent <?php if($sticky_on == 1) { echo 'is-sticky'; } else { echo 'no-sticky'; } ?>">
        <?php if (class_exists('ReduxFramework')) { ?>
            <div id="topbar">
                <div class="container">
                    <?php if ( has_nav_menu( 'topbar_menu' ) ) { ?>
                        <?php $attr_menu = array(
                            'theme_location' => 'topbar_menu',
                            'container'  => '',
                            'menu_id'    => 'topbar-menu',
                            'menu_class' => 'topbar-menu',
                            'walker'         => class_exists( 'EFramework_Mega_Menu_Walker' ) ? new EFramework_Mega_Menu_Walker : '',
                        );
                        wp_nav_menu( $attr_menu ); ?>
                    <?php } ?>
                    <?php if($h_social_of) : ?>

                        <ul class="ct-socials topbar-social">
                            <li class="li-label"><span><?php echo esc_html__('Follow Us:', 'induxe');?></span></li> <?php get_template_part('template-parts/topbar-social');?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        <?php } ?>
        <div id="header-main" class="header-main">
            <div class="container">
                <div class="row">
                    <div class="inner-row">
                        <div class="header-branding">
                            <?php get_template_part( 'template-parts/header-branding' ); ?>
                        </div>
                        <div class="header-navigation">
                            <nav class="main-navigation">
                                <div class="main-navigation-inner">
                                    <div class="menu-mobile-close"><i class="zmdi zmdi-close"></i></div>
                                    <?php induxe_header_mobile_search(); ?>
                                    <?php get_template_part( 'template-parts/header-menu' ); ?>
                                </div>
                            </nav>
                            <div class="site-menu-right">
                                <?php if(!empty($h_btn_text)) : ?>
                                    <div class="header-button-group">
                                        <?php if(!empty($h_btn_text)) : ?>
                                            <a class="btn-topbar btn-effect" href="<?php echo esc_url( $h_btn_url ); ?>" target="<?php echo esc_attr($h_btn_target); ?>">
                                                <?php echo esc_attr( $h_btn_text ); ?>
                                                </a>
                                        <?php endif; ?>                        
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="menu-mobile-overlay"></div>
                    </div>
                </div>
            </div>
            <div id="main-menu-mobile">
                <span class="btn-nav-mobile open-menu">
                    <span></span>
                </span>
            </div>
        </div>
    </div>
</header>