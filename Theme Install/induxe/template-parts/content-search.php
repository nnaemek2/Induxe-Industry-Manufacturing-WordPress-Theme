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
wp_enqueue_script('blog-isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '3.0.6', true);
wp_enqueue_script('imagesloaded');
wp_enqueue_script('induxe-isotope', get_template_directory_uri() . '/assets/js/isotope.ct.js', array('jquery'), '1.0.0', true);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-hentry archive grid-item'); ?>>
    <?php if (has_post_format('gallery')) : ?>
        <div class="entry-featured entry-gallery">
            <?php
            $light_box =induxe_get_post_format_value('post-gallery-lightbox', '0');
            $gallery_list = explode(',',induxe_get_post_format_value('post-gallery-images', ''));
            wp_enqueue_script( 'owl-carousel' );
            wp_enqueue_script( 'induxe-carousel' );
            ?>
            <div class="ct-carousel owl-carousel featured-active <?php if($light_box) {echo 'images-light-box-carousel';} ?>" data-item-xs="1" data-item-sm="1" data-item-md="1" data-item-lg="1" data-margin="30" data-loop="true" data-autoplay="false" data-autoplaytimeout="5000" data-smartspeed="250" data-center="false" data-arrows="true" data-bullets="false" data-stagepadding="0" data-stagepaddingsm="0" data-rtl="<?php echo esc_attr( $carousel_rtl ); ?>">
                <?php
                foreach ($gallery_list as $img_id):
                    ?>
                    <div class="ct-carousel-item">
                        <a class="light-box" href="<?php echo esc_url(wp_get_attachment_image_url($img_id, 'full'));?>"><img src="<?php echo esc_url(wp_get_attachment_image_url($img_id, 'large'));?>" alt="<?php echo esc_attr(get_post_meta( $img_id, '_wp_attachment_image_alt', true )) ?>"></a>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
        </div>
    <?php elseif (has_post_format('quote')) : ?>
        <div class="entry-featured">
            <?php
                $quote_text =induxe_get_post_format_value('post-quote-cite', '');
                echo esc_attr($quote_text);
            ?>
        </div>
    <?php elseif (has_post_format('link')) : ?>
        <div class="entry-featured">
            <?php
                $link_pf =induxe_get_post_format_value('post-link-url', '#');
                echo esc_url($link_pf);
            ?>
        </div>
    <?php elseif (has_post_format('video')) : ?>
        <div class="entry-featured">
            <div class="entry-video">
                <?php
                $video_url =induxe_get_post_format_value('post-video-url', '#');
                $video_file =induxe_get_post_format_value('post-video-file', '');
                $video_html =induxe_get_post_format_value('post-video-html', '');
                $video = '';
                if (!empty($video_url)) {
                    global $wp_embed;
                    echo ' '.$wp_embed->run_shortcode('[embed]' . $video_url . '[/embed]');
                } elseif (!empty($video_file)) {
                    if (strpos('[embed', $video_file)) {
                        global $wp_embed;
                        echo esc_html($wp_embed->run_shortcode($video_file));
                    } else {
                        echo do_shortcode($video_file);
                    }
                } else {
                    if ('' != $video_html) {
                        echo esc_html($video_html);
                    }
                }
                ?>
            </div>
        </div>
    <?php elseif (has_post_format('audio')) : ?>
        <div class="entry-featured">
            <?php
                $audio_url =induxe_get_post_format_value('post-audio-url', '#');
                echo esc_url($audio_url);
            ?>
        </div>
    <?php else :
        if (has_post_thumbnail()) {
            echo '<div class="entry-featured"><div class="post-image">'; ?>
                <?php the_post_thumbnail('induxe-blog'); ?>
                <a class="entry-more" href="<?php echo esc_url( get_permalink()); ?>"><i class="fa fa-link"></i></a>
            <?php echo '</div></div>';
        } ?>
    <?php endif; ?>
    <div class="entry-body">
        <div class="entry-holder">
            <h2 class="entry-title">
                <?php if(is_sticky()) { ?>
                    <i class="fa fa-thumb-tack"></i>
                <?php } ?>
                <a href="<?php echo esc_url( get_permalink()); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <?php induxe_archive_meta(); ?>
        </div>
        <div class="entry-content">
            <?php
               induxe_entry_excerpt();
                wp_link_pages( array(
                    'before'      => '<div class="page-links">',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ) );
            ?>
        </div>
        <div class="entry-readmore">
            <a class="btn btn-secondary" href="<?php echo esc_url( get_permalink()); ?>" ><?php echo esc_html__( 'Reading', 'induxe' ) ?></a>
        </div>
    </div>
</article>