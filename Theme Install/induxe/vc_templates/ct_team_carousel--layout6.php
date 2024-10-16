<?php
extract(shortcode_atts(array(
    'team_item' => '',
    'name_color' => '',
    'position_color' => '',
    'content_color' => '',
    'bg_content_color' => '',

), $atts));

wp_enqueue_script( 'owl-carousel' );
wp_enqueue_script( 'induxe-carousel' );
$html_id = cmsHtmlID('ct-team-carousel');
extract(induxe_get_param_carousel($atts));
$teams = (array) vc_param_group_parse_atts($team_item);
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

if(!empty($teams)) : ?>

    <div id="<?php echo esc_attr($html_id);?>" class="ct-team ct-team-carousel-layout6 owl-carousel" <?php echo !empty($carousel_data) ?  esc_attr($carousel_data) : '' ?>>
        <?php foreach ($teams as $key => $value) {
            $title = isset($value['title']) ? $value['title'] : '';
            $content = isset($value['content']) ? $value['content'] : '';
            $position = isset($value['position']) ? $value['position'] : '';

            $social = isset($value['social']) ? $value['social'] : '';
            $el_social = (array) vc_param_group_parse_atts( $social );

            $image = isset($value['image']) ? $value['image'] : '';
            ?>
            <div class="ct-team-item">
                <div class="grid-item-inner">
                    <?php if(!empty($image)) :
                        $img_size = isset($value['img_size']) ? $value['img_size'] : '300x400';
                        $img = wpb_getImageBySize( array(
                            'attach_id'  => $image,
                            'thumb_size' => $img_size,
                            'class'      => '',
                        ));
                        $thumbnail = $img['thumbnail'];
                     ?>
                        <div class="item-featured">
                            <?php echo wp_kses_post($thumbnail); ?>
                            <?php if(isset($el_social) && !empty($el_social) && count($el_social)): ?>
                                <div class="item-social pxl-empty">
                                    <?php foreach ($el_social as $key => $value) {
                                        $social_link = isset($value['social_link']) ? $value['social_link'] : '';
                                        $icon_class = isset($value['icon']) ? $value['icon'] : '';
                                        if(!empty($social_link) && !empty($icon_class)) : ?>
                                            <a href="<?php echo esc_url($social_link); ?>" target="_blank"><i class="<?php echo esc_attr( $icon_class ); ?>"></i></a>
                                        <?php endif; ?>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="item-info">
                        <?php if( !empty($content) ) { ?>
                            <div class="item-content" <?php echo !empty($content_styles) ? 'style="' . esc_attr($content_styles) . '"' : '' ?>>
                                <?php echo wp_kses_post( $content ); ?>
                            </div>
                        <?php } ?>
                        <?php if(!empty($title)) : ?>
                            <h4 class="item-name" <?php if(!empty( $name_color )) { ?> style="color: <?php echo esc_attr( $name_color);?>" <?php } ?>>
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
        <?php } ?>
    </div>

<?php endif;?>