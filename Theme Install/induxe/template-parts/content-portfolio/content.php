<?php
/**
 * Template part for displaying posts in loop
 *
 * @package Induxe
 */
if (is_rtl()) {
    $carousel_rtl = 'true';
} else {
    $carousel_rtl = 'false';
}
$portfolio_feature_image_on = induxe_get_opt( 'portfolio_feature_image_on', true );
// $post_portfolio_feature_image_on =induxe_get_page_opt( 'portfolio_feature_image_on', 'themeoption');
// if(is_page() && !empty($post_portfolio_feature_image_on) && $post_portfolio_feature_image_on != 'themeoption') {
//     $portfolio_feature_image_on = $post_portfolio_feature_image_on;
// }

$portfolio_sub_title = induxe_get_page_opt( 'portfolio_sub_title' );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-type-inner">
        <div class="post-type-content">
            <?php if (has_post_thumbnail() && $portfolio_feature_image_on == 'true') {?>
                <div class="entry-featured">
                    <?php the_post_thumbnail('induxe-portfolio1'); ?>
                </div><!-- .entry-featured -->
            <?php } ?>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <?php if(!empty($portfolio_sub_title)) { ?>
                        <h2 class="port-sub-title"><?php echo wp_kses_post( $portfolio_sub_title );?></h2>
                    <?php } ?>
                    <?php the_content(); ?>        
                </div>    
            </div>
            
        </div>
    </div>
</article><!-- #post -->