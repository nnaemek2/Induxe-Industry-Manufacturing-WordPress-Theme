<?php
extract(shortcode_atts(array(
    'fancybox_item2' => '',

    'title_color' => '',
    'title_font_size' => '',
    'title_line_height' => '',

    'description_color' => '',
    'description_font_size' => '',
    'description_line_height' => '',

    'icon_color' => '',
    'icon_font_size' => '',

    'line_color' => '',

), $atts));

wp_enqueue_script( 'owl-carousel' );
wp_enqueue_script( 'induxe-carousel' );
$html_id = cmsHtmlID('ct-fancybox-carousel');
extract(induxe_get_param_carousel($atts));
$fancyboxs = (array) vc_param_group_parse_atts($fancybox_item2);
wp_enqueue_script( 'waypoints' );
wp_enqueue_script( 'vc_waypoints' );
wp_enqueue_style( 'vc_animate-css' );

$styles_title = array(
    'color'          => $title_color,
    'font-size'      => $title_font_size.'px',
    'line-height'    => $title_line_height,
);
$title_styles = '';
foreach ($styles_title as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $title_styles .= $key . ':' . $value . ';';
    }
}

$styles_description = array(
    'color'   => $description_color,
    'font-size'   => $description_font_size.'px',
    'line-height'   => $description_line_height.'px',
);
$description_styles = '';
foreach ($styles_description as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $description_styles .= $key . ':' . $value . ';';
    }
}

$styles_icon = array(
    'color'          => $icon_color,
    'font-size'      => $icon_font_size.'px',
);
$icon_styles = '';
foreach ($styles_icon as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $icon_styles .= $key . ':' . $value . ';';
    }
}

if(!empty($fancyboxs)) : ?>
<div id="<?php echo esc_attr($html_id);?>" class="ct-fancybox-carousel layout2 owl-carousel" <?php echo !empty($carousel_data) ?  esc_attr($carousel_data) : '' ?>>
    <?php foreach ($fancyboxs as $key => $value) {
        $title = isset($value['title']) ? $value['title'] : '';
        $fcb_content = isset($value['fcb_content']) ? $value['fcb_content'] : '';

        $icon_flaticon = isset($value['icon_flaticon']) ? $value['icon_flaticon'] : '';
        $item_link = isset($value['item_link']) ? $value['item_link'] : '';
        $link = vc_build_link($item_link);
        $a_href = '';
        $a_target = '';
        if ( strlen( $link['url'] ) > 0 ) {
            $a_href = $link['url'];
            $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
        }
        $image = isset($value['image']) ? $value['image'] : '';
        ?>
        <div class="ct-fancybox-item">
            <div class="grid-item-inner ct-grid-inner">
                <?php if(!empty($image)) : 
                    $img_size = isset($value['img_size']) ? $value['img_size'] : '500x500';
                    $img = wpb_getImageBySize( array(
                        'attach_id'  => $image,
                        'thumb_size' => $img_size,
                        'class'      => '',
                    ));
                    $thumbnail = $img['thumbnail'];
                    ?>
                    <div class="item-featured">
                        <?php echo wp_kses_post($thumbnail); ?>
                        <?php if($icon_flaticon):?>
                            <span class="ct-fcb-icon" <?php echo !empty($icon_styles) ? 'style="' . esc_attr($icon_styles) . '"' : '' ?>>
                                <i class="<?php echo esc_attr($icon_flaticon); ?> <?php if(!empty($icon_weight)) { echo esc_attr($icon_weight); } ?>"></i>
                            </span>
                        <?php endif;?>
                    </div>
                <?php endif; ?>
                
                <?php if(!empty( $title ) || !empty( $fcb_content )) : ?>
                    <div class="fancybox-holder">
                        <h3 class="fancybox-title" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
                            <?php echo esc_attr($title); ?>
                        </h3>
                        <div class="fancybox-content" <?php echo !empty($description_styles) ? 'style="' . esc_attr($description_styles) . '"' : '' ?>>
                            <?php echo esc_attr($fcb_content); ?>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    <?php } ?>
    <div class="ct-inline-css"  data-css="
        <?php if(!empty($line_color)) : ?>
            #<?php echo esc_attr($atts['html_id']);?> .grid-item-inner:after {
                <?php if(!empty($line_color)) : ?>
                    background-color: <?php echo esc_attr($line_color).'px'; ?> !important;
                <?php endif; ?>
            }
        <?php endif; ?>
        ">
    </div>

</div>
<?php endif;?>