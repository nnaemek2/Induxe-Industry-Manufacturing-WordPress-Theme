<?php
extract(shortcode_atts(array(
    'testimonial_item' => '',
    'name_color' => '',
    'position_color' => '',
    'content_color' => '',
    'bg_content_color' => '',

), $atts));

wp_enqueue_script( 'owl-carousel' );
wp_enqueue_script( 'induxe-carousel' );
$html_id = cmsHtmlID('ct-testimonial-carousel');
extract(induxe_get_param_carousel($atts));
$testimonials = (array) vc_param_group_parse_atts($testimonial_item);
wp_enqueue_script( 'waypoints' );
wp_enqueue_script( 'vc_waypoints' );
wp_enqueue_style( 'vc_animate-css' );

$styles_content = array(
    'color'               => $content_color,
    'background-color'    => $bg_content_color,
);
$content_styles = '';
foreach ($styles_content as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $content_styles .= $key . ':' . $value . ';';
    }
}

if(!empty($testimonials)) : ?>

    <div id="<?php echo esc_attr($html_id);?>" class="ct-testimonial ct-testimonial-layout8 owl-carousel" <?php echo !empty($carousel_data) ?  esc_attr($carousel_data) : '' ?>>
        <?php foreach ($testimonials as $key => $value) {
            $title = isset($value['title']) ? $value['title'] : '';
            $content = isset($value['content']) ? $value['content'] : '';
            $position = isset($value['position']) ? $value['position'] : '';
            $image = isset($value['image']) ? $value['image'] : '';
            ?>
            <div class="ct-testimonial-item">
                <div class="grid-item-inner">
                    <div class="item-content" <?php echo !empty($content_styles) ? 'style="' . esc_attr($content_styles) . '"' : '' ?>>
                        <?php echo wp_kses_post( $content ); ?>
                    </div>
                    <div class="item-holder">
                        <?php if(!empty($image)) :
                            $img_size = isset($value['img_size']) ? $value['img_size'] : '100x100';
                            $img = wpb_getImageBySize( array(
                                'attach_id'  => $image,
                                'thumb_size' => $img_size,
                                'class'      => '',
                            ));
                            $thumbnail = $img['thumbnail'];
                         ?>
                            <div class="item-featured">
                                <?php echo wp_kses_post($thumbnail); ?>
                            </div>
                        <?php endif; ?>
                        <div class="item-info">
                            <?php if(!empty($title)) : ?>
                                <h4 class="item-title" <?php if(!empty( $name_color )) { ?> style="color: <?php echo esc_attr( $name_color);?>" <?php } ?>>
                                    <?php echo esc_attr($title); ?>
                                </h4>
                            <?php endif; ?>
                            <?php if(!empty($position)) : ?>
                                <div class="item-position">
                                    <?php echo esc_attr($position); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

<?php endif;?>