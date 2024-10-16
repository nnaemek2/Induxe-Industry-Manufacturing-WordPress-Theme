<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Induxe
 */
$title_404 =induxe_get_opt( 'title_404', esc_html__('Something went wrong!', 'induxe'));
$content_404 =induxe_get_opt( 'content_404', esc_html__('You can go back to the Main Page by clicking the button.', 'induxe'));
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="error-404">
                <div class="container">
                    <div class="row-404-content">
                        <div class="col-404-number">
                            <?php echo esc_html__('404','induxe'); ?>
                        </div>
                        <div class="col-404-content">
                            <h2 class="title-404"><?php echo esc_attr($title_404); ?></h2>
                            <p class="excerpt-404"><?php echo wp_kses_post($content_404);; ?></p>
                            <a class="btn btn-default" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('Go To Home', 'induxe'); ?><i class="far fac-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
