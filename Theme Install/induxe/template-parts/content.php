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
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-hentry archive clearfix'); ?>>
    <?php if (has_post_format('gallery')) : 
        $light_box =induxe_get_post_format_value('post-gallery-lightbox', '0');
        $gallery_list = explode(',',induxe_get_post_format_value('post-gallery-images', ''));
        wp_enqueue_script( 'owl-carousel' );
        wp_enqueue_script( 'induxe-carousel' );
        if(!empty($gallery_list)) :?>
            <div class="entry-featured entry-gallery">
                <div class="ct-carousel owl-carousel featured-active <?php if($light_box) {echo 'images-light-box-carousel';} ?>" data-item-xs="1" data-item-sm="1" data-item-md="1" data-item-lg="1" data-item-xl="1" data-margin="30" data-loop="true" data-autoplay="false" data-autoplaytimeout="5000" data-smartspeed="250" data-center="false" data-arrows="true" data-bullets="false" data-stagepadding="0" data-stagepadding-lg="0" data-stagepadding-xl="0" data-rtl="<?php echo esc_attr( $carousel_rtl ); ?>">
                    <?php foreach ($gallery_list as $img_id):
                        ?>
                        <div class="ct-carousel-item">
                            <a class="light-box" href="<?php echo esc_url(wp_get_attachment_image_url($img_id, 'full'));?>"><img src="<?php echo esc_url(wp_get_attachment_image_url($img_id, 'induxe-blog'));?>" alt="<?php echo esc_attr(get_post_meta( $img_id, '_wp_attachment_image_alt', true )) ?>"></a>
                        </div>
                        <?php
                    endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="entry-body">
            <div class="entry-body-inner">
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
                <a class="btn-readmore" href="<?php echo esc_url( get_permalink()); ?>"><?php echo esc_html__('Read More', 'induxe'); ?><i class="fa fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    <?php elseif (has_post_format('quote')) : 
        $quote_text =induxe_get_post_format_value('post-quote-cite', '');
        if(!empty($quote_text)) : ?>
            <div class="entry-quote">
                <div class="entry-body">
                    <div class="entry-quote-inner">
                        <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 91.674 91.674" style="enable-background:new 0 0 91.674 91.674;" xml:space="preserve">
                            <g>
                                <path d="M38.157,0.003c-8.398,0.373-15.895,3.722-21.68,9.685C1.141,25.498,1.436,55.3,1.52,58.596l0.001,31.078
                                    c0,1.104,0.896,2,2,2h30.691c1.104,0,2-0.896,2-2V58.981c0-1.104-0.896-2-2-2H18.527c0.003-2.562,0.313-25.309,10.186-35.455
                                    c2.672-2.747,5.836-4.214,9.674-4.485c1.048-0.074,1.859-0.945,1.859-1.995V2.002c0-0.546-0.223-1.068-0.617-1.445
                                    C39.234,0.179,38.71-0.031,38.157,0.003z"/>
                                <path d="M89.553,0.556c-0.395-0.377-0.906-0.587-1.472-0.553C79.684,0.375,72.186,3.725,66.4,9.688
                                    C51.065,25.498,51.359,55.3,51.443,58.596l0.001,31.078c0,1.104,0.896,2,2,2h30.69c1.104,0,2-0.896,2-2V58.981
                                    c0-1.104-0.896-2-2-2H68.452c0.003-2.562,0.313-25.309,10.185-35.455c2.673-2.747,5.837-4.214,9.675-4.485
                                    c1.048-0.074,1.858-0.945,1.858-1.995V2.002C90.17,1.457,89.947,0.935,89.553,0.556z"/>
                            </g>
                        </svg>
                        <h2 class="entry-title">
                            <?php echo esc_attr($quote_text); ?>
                        </h2>
                        <?php induxe_archive_meta(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php elseif (has_post_format('video')) : ?>
        <?php if (has_post_thumbnail()) : ?>
            <div class="entry-featured">
                <div class="entry-video">
                    <?php
                    $video_url =induxe_get_post_format_value('post-video-url', '');
                    the_post_thumbnail('large'); ?>
                    <?php if(!empty($video_url)) : ?>
                        <a class="btn-video" href="<?php echo esc_url($video_url); ?>"><i class="fa fa-play"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="entry-body">
                <div class="entry-holder">
                    <?php induxe_archive_meta(); ?>
                    <h2 class="entry-title">
                        <?php if(is_sticky()) { ?>
                            <i class="fa fa-thumb-tack"></i>
                        <?php } ?>
                        <a href="<?php echo esc_url( get_permalink()); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
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
                <a class="btn-readmore" href="<?php echo esc_url( get_permalink()); ?>"><?php echo esc_html__('Read More', 'induxe'); ?><i class="ti-arrow-right"></i></a>
        </div>
    <?php elseif (has_post_format('audio')) : 
        $audio_url =induxe_get_post_format_value('post-audio-url', '');
        if(!empty($audio_url)) : ?>
            <div class="entry-featured entry-audio">
                <iframe width="100%" height="auto" scrolling="no" frameborder="no" src="//w.soundcloud.com/player/?url=<?php echo esc_url($audio_url); ?>&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
            </div>
        <?php endif; ?>
        <div class="entry-body">
                <div class="entry-holder">
                    <?php induxe_archive_meta(); ?>
                    <h2 class="entry-title">
                        <?php if(is_sticky()) { ?>
                            <i class="fa fa-thumb-tack"></i>
                        <?php } ?>
                        <a href="<?php echo esc_url( get_permalink()); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
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
                <a class="btn-readmore" href="<?php echo esc_url( get_permalink()); ?>"><?php echo esc_html__('Read More', 'induxe'); ?><i class="ti-arrow-right"></i></a>
        </div>
    <?php else :
        if (has_post_thumbnail()) {
            echo '<div class="entry-featured"><div class="post-image">'; ?>
                <a href="<?php echo esc_url( get_permalink()); ?>"><?php the_post_thumbnail('induxe-blog'); ?></a>
            <?php echo '</div></div>';
        } ?>
        <div class="entry-body">
                <div class="entry-holder">
                    <?php induxe_archive_meta(); ?>
                    <h2 class="entry-title">
                        <?php if(is_sticky()) { ?>
                            <i class="fa fa-thumb-tack"></i>
                        <?php } ?>
                        <a href="<?php echo esc_url( get_permalink()); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
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

                <a class="btn-readmore" href="<?php echo esc_url( get_permalink()); ?>"><?php echo esc_html__('Read More', 'induxe'); ?><i class="ti-arrow-right"></i></a>
        </div>
    <?php endif; ?>
</article>