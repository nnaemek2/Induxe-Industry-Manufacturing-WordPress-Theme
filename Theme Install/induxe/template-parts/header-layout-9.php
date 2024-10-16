<?php
/**
 * Template part for displaying default header layout
 */
$h_social_of = induxe_get_opt( 'h_social_of', false );
$search_on =induxe_get_opt( 'search_on', false );

$sticky_on =induxe_get_opt( 'sticky_on', false );

$topbar_phone =induxe_get_opt( 'topbar_phone', esc_html__('+8 12 3456897', 'induxe'));
$topbar_phone_link =induxe_get_opt( 'topbar_phone_link');

$topbar_phone_lb =induxe_get_opt( 'topbar_phone_lb', esc_html__('Free Call', 'induxe'));

$top_bar_timework =induxe_get_opt( 'top_bar_timework', esc_html__('08:00 AM - 06:00 PM', 'induxe'));
$top_bar_timework_lb =induxe_get_opt( 'top_bar_timework_lb', esc_html__('Monday - Friday', 'induxe'));

$top_bar_address =induxe_get_opt( 'top_bar_address', esc_html__('183 Donato Parkways', 'induxe'));
$top_bar_address_lb =induxe_get_opt( 'top_bar_address_lb', esc_html__('CA, United State', 'induxe'));

?>
<header id="masthead" class="header-main">
    <div id="header-wrap" class="header-layout9 <?php if($sticky_on == 1) { echo 'is-sticky'; } else { echo 'no-sticky'; } ?>">
        <?php if (class_exists('ReduxFramework')) { ?>
            <div id="topbar">
                <div class="container">
                    <div class="header-branding">
                        <div class="inner-branding">
                            <?php get_template_part( 'template-parts/header-branding' ); ?>
                        </div>
                    </div>
                    <div class="header-info">
                        <?php if(!empty($topbar_phone) || !empty( $topbar_phone_lb )) : ?>
                            <div class="box-info box-phone">
                                <i class="fa fa-phone"></i>
                                <?php if(!empty($topbar_phone)) : ?>
                                    <div class="title-info">
                                        <?php if(!empty($topbar_phone_link)) : ?><a href="tel:<?php echo esc_attr( $topbar_phone_link ); ?>"><?php endif; ?>
                                            <?php echo esc_attr( $topbar_phone ); ?>
                                        <?php if(!empty($topbar_phone_link)) : ?></a><?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if(!empty($topbar_phone_lb)) : ?>
                                    <label>
                                        <?php echo esc_attr( $topbar_phone_lb ); ?>
                                    </label>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($top_bar_timework) || !empty( $top_bar_timework_lb )) : ?>
                            <div class="box-info box-worktime">
                                <i class="fa fa-clock-o"></i>
                                <?php if(!empty($top_bar_timework)) : ?>
                                    <div class="title-info">
                                        <?php echo esc_attr( $top_bar_timework ); ?>
                                    </div>
                                <?php endif; ?>  
                                <?php if(!empty($top_bar_timework_lb)) : ?>
                                    <label><?php echo esc_attr( $top_bar_timework_lb ); ?></label>
                                <?php endif; ?>  
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($top_bar_address) || !empty( $top_bar_address_lb )) : ?>
                            <div class="box-info box-address">
                                <i class="fa fa-map-o"></i>
                                <?php if(!empty($top_bar_address)) : ?>
                                    <div class="title-info">
                                        <?php echo esc_attr( $top_bar_address ); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if(!empty($top_bar_address_lb)) : ?>
                                    <label>
                                        <?php echo esc_attr( $top_bar_address_lb ); ?>                  
                                    </label>
                                <?php endif; ?>          
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div id="header-main" class="header-main">
            <div class="container">
                <div class="row">
                    <div class="header-branding-mobile">
                        <div class="inner-branding">
                            <?php get_template_part( 'template-parts/header-branding' ); ?>
                        </div>
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
                            <?php if($h_social_of) : ?>
                                <ul class="ct-socials header-main-social">
                                    <?php get_template_part('template-parts/topbar-social');?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="menu-mobile-overlay"></div>
                </div>
            </div>
            <div id="main-menu-mobile">
                <?php if($h_social_of) : ?>
                    <ul class="ct-socials header-main-social-mobile">
                        <?php get_template_part('template-parts/topbar-social');?>
                    </ul>
                <?php endif; ?>
                <span class="btn-nav-mobile open-menu">
                    <span></span>
                </span>
            </div>
        </div>
    </div>
</header>