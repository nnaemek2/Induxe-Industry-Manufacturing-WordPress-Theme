<?php
$atts_extra = shortcode_atts(array(
    'source'               => '',
    'orderby'              => 'date',
    'order'                => 'DESC',
    'limit'                => '6',
    'post_ids'             => '',
    'bg_color'             => '',

    'img_size'             => '600x722',
), $atts);
$atts = array_merge($atts_extra, $atts);
extract($atts);
extract(cms_get_posts_of_grid('portfolio', $atts));
extract(induxe_get_param_carousel($atts));
wp_enqueue_script( 'owl-carousel' );
wp_enqueue_script( 'induxe-carousel' );
wp_enqueue_script( 'waypoints' );
wp_enqueue_script( 'vc_waypoints' );
wp_enqueue_style( 'vc_animate-css' );
?>
<div id="<?php echo esc_attr($html_id) ?>" class="ct-carousel ct-portfolio-gallery-carousel layout1 owl-carousel" <?php echo !empty($carousel_data) ?  esc_attr($carousel_data) : '' ?>>
    <div class="ct-inline-css"  data-css="<?php if( !empty($bg_color)) : ?>
                #<?php echo esc_attr($html_id) ?>.ct-portfolio-gallery-carousel:after {
                   background-color: <?php echo esc_attr($bg_color); ?>!important;
                }
        <?php endif; ?>
        ">
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
                    <?php if (has_post_thumbnail($post->ID) && wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), false)) { ?>
                        <div class="item-featured">
                                <?php echo wp_kses_post($thumbnail); ?>
                        </div>
                    <?php } ?>
                </div>
            <?php }
        endif; 
    ?>
</div>