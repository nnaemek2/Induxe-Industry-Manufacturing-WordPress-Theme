<?php
$atts_extra = shortcode_atts(array(
    'source'               => '',
    'orderby'              => 'date',
    'order'                => 'DESC',
    'limit'                => '6',
    'post_ids'             => '',
    'img_size'             => 'full',
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
<div id="<?php echo esc_attr($html_id) ?>" class="ct-carousel ct-portfolio-carousel layout3 owl-carousel" <?php echo !empty($carousel_data) ?  esc_attr($carousel_data) : '' ?>>
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
                $portfolio_client = get_post_meta($post->ID, 'portfolio_client', true);
                $portfolio_completion = get_post_meta($post->ID, 'portfolio_completion', true);
                $portfolio_type = get_post_meta($post->ID, 'portfolio_type', true);
                $portfolio_architects = get_post_meta($post->ID, 'portfolio_architects', true);
                
                ?>
                <div class="ct-carousel-item">
                    <?php if (has_post_thumbnail($post->ID) && wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), false)) { ?>
                        <div class="item-featured">
                            <a  href="<?php echo esc_url(get_permalink( $post->ID )); ?>">
                                <?php echo wp_kses_post($thumbnail); ?>
                            </a>
                        </div>
                        <div class="project-content">
                            <ul class="list-meta">
                                <?php if(!empty($portfolio_client)) { ?>
                                    <li class="item-info">
                                        <label><?php echo esc_html__('Clients: ', 'induxe'); ?></label>
                                        <?php echo wp_kses_post($portfolio_client);?>
                                    </li>
                                <?php } ?>
                                <?php if(!empty($portfolio_completion)) { ?>
                                    <li class="item-info">
                                        <label><?php echo esc_html__('Completion:', 'induxe'); ?></label>
                                        <?php echo wp_kses_post($portfolio_completion);?>
                                    </li>
                                <?php } ?>
                                <?php if(!empty($portfolio_type)) { ?>
                                    <li class="item-info">
                                        <label><?php echo esc_html__('Project Type:', 'induxe'); ?></label>
                                        <?php echo wp_kses_post($portfolio_type);?>
                                    </li>
                                <?php } ?>
                                <?php if(!empty($portfolio_architects)) { ?>
                                    <li class="item-info">
                                        <label><?php echo esc_html__('Architects:', 'induxe'); ?></label>
                                        <?php echo wp_kses_post($portfolio_architects);?>
                                    </li>
                                <?php } ?>
                                <li class="item-buttom">
                                    <a href="<?php echo esc_url(get_permalink( $post->ID )); ?>">
                                        <?php echo esc_html('View Project', 'yorks');?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            <?php }
        endif; 
    ?>
</div>