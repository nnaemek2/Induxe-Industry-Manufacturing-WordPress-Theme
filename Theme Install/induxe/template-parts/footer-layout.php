<?php

$footer_bottom_logo = induxe_get_opt( 'footer_bottom_logo' );
$page_footer_bottom_logo = induxe_get_page_opt( 'footer_bottom_logo' );
if(!empty($page_footer_bottom_logo['url'])) {
    $footer_bottom_logo = $page_footer_bottom_logo;
}

$f_social_of       = induxe_get_opt( 'f_social_of', false );


$footer_address_lb    =induxe_get_opt('footer_address_lb', esc_html__('Address', 'induxe')); 
$footer_address    =induxe_get_opt('footer_address', esc_html__('185, Los Angeles, USA', 'induxe')); 
$footer_phone_lb      =induxe_get_opt('footer_phone_lb', esc_html__('Phone', 'induxe')); 
$footer_phone      =induxe_get_opt('footer_phone', esc_html__('+8 12 3456897', 'induxe')); 
$footer_phone_link =induxe_get_opt('footer_phone_link', esc_html__('+8123456897', 'induxe')); 
$footer_email_lb      =induxe_get_opt('footer_email_lb', esc_html__('Email Contact', 'induxe')); 
$footer_email      =induxe_get_opt('footer_email', esc_html__('info@contact.com', 'induxe')); 
$footer_copyright  =induxe_get_opt('footer_copyright'); 

$footer_info_on =induxe_get_page_opt( 'footer_info_on', 'show');
?>

<footer id="colophon" class="site-footer footer-layout1">
    <?php if($footer_info_on == 'show') : ?>
        <?php if(!empty($footer_address) || !empty($footer_address_lb) || !empty($footer_phone) || !empty($footer_phone_lb) || !empty($footer_email) || !empty($footer_email_lb)) : ?>
            <div class="top-footer-info">
                <div class="container">
                    <div class="ft-contact">
                        <?php if(!empty($footer_address) || !empty($footer_address_lb)):?>
                            <div class="ft-contact-bx" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/icons/icon1.png') ?>);">
                                <h4 class="footer-title-info">
                                    <?php echo wp_kses_post( $footer_address_lb );?>
                                </h4>
                                <p><?php echo wp_kses_post( $footer_address );?></p>
                            </div>
                        <?php endif;?>
                        <?php if(!empty($footer_phone) || !empty($footer_phone_lb)):?>
                            <div class="ft-contact-bx" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/icons/icon2.png') ?>);">
                                <h4 class="footer-title-info">
                                    <?php echo wp_kses_post( $footer_phone_lb );?>
                                </h4>
                                <p><a href="tel:<?php echo wp_kses_post( $footer_phone );?>">
                                    <?php echo wp_kses_post( $footer_phone );?>
                                </a></p>
                            </div>
                        <?php endif;?>
                        <?php if(!empty($footer_email) || !empty($footer_email_lb) ):?>
                            <div class="ft-contact-bx" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/icons/icon3.png') ?>);">
                                <h4 class="footer-title-info">
                                    <?php echo wp_kses_post( $footer_email_lb );?>
                                </h4>
                                <p><a href="mailto:<?php echo wp_kses_post( $footer_email );?>">
                                        <?php echo wp_kses_post( $footer_email );?>
                                </a></p>
                            </div>
                        <?php endif;?>
                    </div>
                </div>        
            </div>
        <?php endif;?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'sidebar-footer-1' ) || is_active_sidebar( 'sidebar-footer-2' ) || is_active_sidebar( 'sidebar-footer-3' ) || is_active_sidebar( 'sidebar-footer-4' ) ) : ?>
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <?php induxe_footer_top(); ?>
                </div>
            </div>
            <div class="ft-gap"></div>
        </div>
    <?php endif; ?>
    
    <div class="bottom-footer">
        <div class="container">
            <div class="bottom-footer-inner">
                <?php if(!empty($footer_bottom_logo)) : ?>
                    <div class="bottom-footer-logo">
                        <a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo esc_url($footer_bottom_logo['url']); ?>" alt="<?php echo esc_attr( 'Logo White' )?>"/></a>
                    </div>
                <?php endif; ?>
                <?php if ($f_social_of) :?>
                    <ul class="ct-socials footer-social">
                        <?php get_template_part('template-parts/footer-social');?>
                    </ul>
                <?php endif;?>
            </div>
        </div>
    </div>
</footer>