<?php
/**
 * Template part for displaying site branding
 */

$logo = induxe_get_opt( 'logo', array( 'url' => '', 'id' => '' ) );
$logo_url = $logo['url'];

$page_logo = induxe_get_page_opt( 'logo', array( 'url' => '', 'id' => '' ) );
if( !empty($page_logo['url'])) {
    $logo_url = $page_logo['url'];
}

$logo_light = induxe_get_opt( 'logo_light', array( 'url' => '', 'id' => '' ) );
$logo_light_url = $logo_light['url'];

$page_logo_light = induxe_get_page_opt( 'logo_light', array( 'url' => '', 'id' => '' ) );
if( !empty($page_logo_light['url']) ) {
    $logo_light_url = $page_logo_light['url'];
}

if ( $logo_url || $logo_light_url )
{
    printf(
        '<a class="logo-dark" href="%1$s" title="%2$s" rel="home"><img src="%3$s" alt="%4$s"/></a>',
        esc_url( home_url( '/' ) ),
        esc_attr( get_bloginfo( 'name' ) ),
        esc_url( $logo_url ),
        esc_html__("Logo Dark",'induxe')
    );

    printf(
        '<a class="logo-light" href="%1$s" title="%2$s" rel="home"><img src="%3$s" alt="%4$s"/></a>',
        esc_url( home_url( '/' ) ),
        esc_attr( get_bloginfo( 'name' ) ),
        esc_url( $logo_light_url ),
        esc_html__("Logo Light",'induxe')
    );
}
else
{
    printf(
        '<a class="logo-dark" href="%1$s" title="%2$s" rel="home"><img src="%3$s" alt="%4$s"/></a>',
        esc_url( home_url( '/' ) ),
        esc_attr( get_bloginfo( 'name' ) ),
        esc_url( get_template_directory_uri().'/assets/images/logo-dark.png' ),
        esc_html__("Logo Dark",'induxe')
    );
    printf(
        '<a class="logo-light" href="%1$s" title="%2$s" rel="home"><img src="%3$s" alt="%4$s"/></a>',
        esc_url( home_url( '/' ) ),
        esc_attr( get_bloginfo( 'name' ) ),
        esc_url( get_template_directory_uri().'/assets/images/logo-light.png' ),
        esc_html__("Logo White",'induxe')
    );
}