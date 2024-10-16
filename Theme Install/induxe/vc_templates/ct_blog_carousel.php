<?php
$atts_extra = shortcode_atts(array(
    'source'               => '',
    'orderby'              => 'date',
    'order'                => 'DESC',
    'limit'                => '6',
    'post_ids'             => '',
    'img_size'             => '700x500',
    'length_excerpt'             => '18',
    'readmore_text'             => '',
    'meta_color' => '',

    'title_color'  => '',
    'meta_color'   => '',
    'button_color' => '',   
), $atts);
$atts = array_merge($atts_extra, $atts);
extract($atts);
extract(cms_get_posts_of_grid('post', $atts));
extract(induxe_get_param_carousel($atts));
wp_enqueue_script( 'owl-carousel' );
wp_enqueue_script( 'induxe-carousel' );
wp_enqueue_script( 'waypoints' );
wp_enqueue_style( 'animate-css' );
?>

<div id="<?php echo esc_attr($html_id) ?>" class="ct-blog-carousel layout1 owl-carousel" <?php echo !empty($carousel_data) ?  esc_attr($carousel_data) : '' ?>>
    <div class="ct-inline-css"  data-css="
        <?php if( !empty($meta_color)) : ?>
            #<?php echo esc_attr($html_id) ?>.ct-blog-carousel.layout1 .item-meta:after {
               background-color: <?php echo esc_attr($meta_color); ?>!important;
            }
        <?php endif; ?>">
    </div>

    <?php
    if (is_array($posts)):
        foreach ($posts as $key => $post) {
            the_post(); 
            $img_id = get_post_thumbnail_id($post->ID);
            $img = wpb_getImageBySize( array(
                'attach_id'  => $img_id,
                'thumb_size' => $img_size,
                'class'      => '',
            ));
            $thumbnail = $img['thumbnail'];
            ?>
            <div class="ct-carousel-item">
                <div class="grid-item-inner">
                    <?php if (has_post_thumbnail($post->ID) && wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), false)) { ?>
                        <div class="item-featured">
                            <a  href="<?php echo esc_url(get_permalink( $post->ID )); ?>">
                                <?php echo wp_kses_post($thumbnail); ?>
                            </a>
                            <?php
                            if(has_post_format('video') && !empty($video_url)) : ?>
                                <a class="btn-video" href="<?php echo esc_url($video_url); ?>"><i class="fa fa-play"></i></a>
                            <?php endif; ?>
                        </div>
                    <?php } ?>
                    <div class="item-body">
                        <ul class="item-meta">
                            <li class="item-author" <?php if(!empty( $meta_color )) { ?> style="color: <?php echo esc_attr( $meta_color );?>" <?php } ?>>
                                <?php echo esc_html__( 'By', 'induxe' ) ?>
                                <?php the_author_posts_link(); ?>
                            </li>
                            <li class="item-date" <?php if(!empty( $meta_color )) { ?> style="color: <?php echo esc_attr( $meta_color );?>" <?php } ?>>
                                <?php $date_formart = get_option('date_format'); echo get_the_date($date_formart, $post->ID); ?>
                            </li>
                        </ul>
                        <h3 class="item-title" style="<?php if(!empty($title_color)) { echo 'color:'.esc_attr($title_color).';'; } ?>">
                            <a href="<?php echo esc_url(get_permalink( $post->ID )); ?>"><?php echo esc_attr(get_the_title($post->ID)); ?></a>
                        </h3>
                        <div class="item-footer">
                            <a <?php if(!empty( $button_color )) { ?> style="background-color: <?php echo esc_attr( $button_color );?>" <?php } ?> class="btn btn-aylen" href="<?php echo esc_url(get_permalink( $post->ID )); ?>"><?php if(!empty($readmore_text)) { echo esc_attr($readmore_text); } else { echo esc_html__('Read More', 'induxe'); }  ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    endif; ?>
    
</div>