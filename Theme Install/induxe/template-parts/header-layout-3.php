<?php
/**
 * Template part for displaying default header layout
 */
$sticky_on =induxe_get_opt( 'sticky_on', false );
$search_on =induxe_get_opt( 'search_on', false );
$hidden_sidebar_on = induxe_get_opt( 'hidden_sidebar_on', false );

?>
<header id="masthead" class="header-main">
    <div id="header-wrap" class="header-layout3 <?php if($sticky_on == 1) { echo 'is-sticky'; } else { echo 'no-sticky'; } ?>">
        <div id="header-main" class="header-main">
            <div class="container">
                <div class="site-header-inner">
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
                            <?php if($search_on) : ?>
                                <span class="menu-right-item h-btn-search"><i class="fa fa-search"></i></span>
                            <?php endif; ?>
                            <?php if($hidden_sidebar_on) : ?>
                                <span class="menu-right-item h-btn-sidebar">
                                    <i class="fal fa-bars"></i>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="menu-mobile-overlay"></div>
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