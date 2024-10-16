<?php
extract(shortcode_atts(array(
    'fancybox_item' => '',
    'title_color' => '',
    'title_font_size' => '',
    'title_line_height' => '',
    
    'icon_color' => '',
    'icon_font_size' => '',

    'line_color' => '',

), $atts));

wp_enqueue_script( 'owl-carousel' );
wp_enqueue_script( 'induxe-carousel' );
$html_id = cmsHtmlID('ct-fancybox-carousel');
extract(induxe_get_param_carousel($atts));
$fancyboxs = (array) vc_param_group_parse_atts($fancybox_item);
wp_enqueue_script( 'waypoints' );
wp_enqueue_script( 'vc_waypoints' );
wp_enqueue_style( 'vc_animate-css' );

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
<div id="<?php echo esc_attr($html_id);?>" class="ct-fancybox-carousel layout1 owl-carousel" <?php echo !empty($carousel_data) ?  esc_attr($carousel_data) : '' ?>>
    <?php foreach ($fancyboxs as $key => $value) {
        $title = isset($value['title']) ? $value['title'] : '';
        $icon_flaticon = isset($value['icon_flaticon']) ? $value['icon_flaticon'] : '';
        $item_link = isset($value['item_link']) ? $value['item_link'] : '';
        $link = vc_build_link($item_link);
        $a_href = '';
        $a_target = '';
        if ( strlen( $link['url'] ) > 0 ) {
            $a_href = $link['url'];
            $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
        }

        ?>
        <div class="ct-fancybox-item">
            <div class="grid-item-inner ct-grid-inner">
                <?php if($icon_flaticon):?>
                    <span class="ct-fcb-icon" <?php echo !empty($icon_styles) ? 'style="' . esc_attr($icon_styles) . '"' : '' ?>>
                        <i class="<?php echo esc_attr($icon_flaticon); ?> <?php if(!empty($icon_weight)) { echo esc_attr($icon_weight); } ?>"></i>
                    </span>
                <?php endif;?>
                <div class="fancybox-holder">
                    <?php if(!empty($title)) : ?>
                        <h3 class="fancybox-title" style="<?php if(!empty($title_color)) { echo 'color:'.esc_attr($title_color).';'; } if(!empty($title_font_size)) { echo 'font-size:'.esc_attr($title_font_size).'px;'; } if(!empty($title_line_height)) { echo 'line-height:'.esc_attr($title_line_height).'px;'; } ?>">
                                <?php echo esc_attr($title); ?>
                        </h3>
                    <?php endif;?>
                </div>
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