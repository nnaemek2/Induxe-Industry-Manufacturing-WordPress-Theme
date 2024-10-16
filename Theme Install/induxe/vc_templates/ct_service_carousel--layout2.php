<?php
$atts_extra = shortcode_atts(array(
    'source'               => '',
    'orderby'              => 'date',
    'order'                => 'DESC',
    'limit'                => '6',
    'post_ids'             => '',
    'img_size'             => '700x500',
    'button_color' => '',    
), $atts);
$atts = array_merge($atts_extra, $atts);
extract($atts);
extract(cms_get_posts_of_grid('service', $atts));
extract(induxe_get_param_carousel($atts));
wp_enqueue_script( 'owl-carousel' );
wp_enqueue_script( 'induxe-carousel' );
wp_enqueue_script( 'waypoints' );
wp_enqueue_script( 'vc_waypoints' );
wp_enqueue_style( 'vc_animate-css' );
?>
<div id="<?php echo esc_attr($html_id) ?>" class="ct-carousel ct-service-carousel layout2 owl-carousel" <?php echo !empty($carousel_data) ?  esc_attr($carousel_data) : '' ?>>
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
                    <?php if (has_post_thumbnail($post->ID) && wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), false)) { ?>
                        <div class="item-featured">
                            <?php echo wp_kses_post($thumbnail); ?>
                        </div>
                        <div class="item-body">
                            <h3 class="item-title">
                                <a href="<?php echo esc_url(get_permalink( $post->ID )); ?>">
                                    <?php echo esc_attr(get_the_title($post->ID)); ?>
                                </a>
                            </h3>
                            <div class="item-content">
                                <?php echo wp_trim_words( $post->post_excerpt, $num_words = 20, $more = null ); ?>
                            </div>
                            <a <?php if(!empty( $button_color )) { ?> style="background-color: <?php echo esc_attr( $button_color );?>" <?php } ?> class="btn-learmore" href="<?php echo esc_url(get_permalink( $post->ID )); ?>"><?php if(!empty($readmore_text)) { echo esc_attr($readmore_text); } else { echo esc_html__('Learn More', 'induxe'); }  ?>
                                
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php }
        endif; 
    ?>
</div>