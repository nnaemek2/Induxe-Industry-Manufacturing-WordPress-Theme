<?php
$atts_extra = shortcode_atts(array(
    'icon_color' => '',
    'icon_font_size' => '',

    'title_color' => '',
    'title_font_size' => '',
    'title_line_height' => '',

    'description_color' => '',
    'description_font_size' => '',
    'description_line_height' => '',

    'content_list'                  => '',
    'col_xl'               => 4,
    'col_lg'               => 4,
    'col_md'               => 3,
    'col_sm'               => 2,
    'col_xs'               => 1,
), $atts);
$atts = array_merge($atts_extra, $atts);
extract($atts);

$col_xl = 12 / $col_xl;
$col_lg = 12 / $col_lg;
$col_md = 12 / $col_md;
$col_sm = 12 / $col_sm;
$col_xs = 12 / $col_xs;
wp_enqueue_script('isotope');
wp_enqueue_script('imagesloaded');
wp_enqueue_script('induxe-isotope', get_template_directory_uri() . '/assets/js/isotope.ct.js', array('jquery'), '1.0.0', true);
$fancybox_content_list = (array) vc_param_group_parse_atts( $content_list );

$styles_title = array(
    'color'          => $title_color,
    'font-size'      => $title_font_size.'px',
    'line-height'    => $title_line_height.'px',
);

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


wp_enqueue_script( 'waypoints' );
wp_enqueue_script( 'vc_waypoints' );
wp_enqueue_style( 'vc_animate-css' );
?>

<div id="<?php echo esc_attr($html_id) ?>" class="ct-grid ct-grid-fancybox layout1">
    <div class="ct-grid-inner row" data-gutter="15">
        <?php foreach ($fancybox_content_list as $key => $value) {
            $title = isset($value['title']) ? $value['title'] : '';
            $number_title = isset($value['number_title']) ? $value['number_title'] : '';

            $fcb_content = isset($value['fcb_content']) ? $value['fcb_content'] : '';

            $icon_flaticon = isset($value['icon_flaticon']) ? $value['icon_flaticon'] : '';
            $icon_weight = isset($value['icon_weight']) ? $value['icon_weight'] : '';

            $item_link = isset($value['item_link']) ? $value['item_link'] : '';
            $link = vc_build_link($item_link);
            $a_href = '';
            $a_target = '';
            if ( strlen( $link['url'] ) > 0 ) {
                $a_href = $link['url'];
                $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
            }
            $item_class = "grid-item col-xl-{$col_xl} col-lg-{$col_lg} col-md-{$col_md} col-sm-{$col_sm} col-{$col_xs}";
            ?>
            <div class="<?php echo esc_attr($item_class); ?>">
                <div class="grid-item-inner">
                    <?php if($icon_flaticon):?>
                        <div class="ct-fancybox-icon">
                            <?php if(!empty($a_href)) : ?><a href="<?php echo esc_url($a_href);?>" target="<?php  echo esc_attr($a_target); ?>"><?php endif; ?>
                                <i class="<?php echo esc_attr($icon_flaticon); ?> <?php if(!empty($icon_weight)) { echo esc_attr($icon_weight); } ?>" <?php echo !empty($icon_styles) ? 'style="' . esc_attr($icon_styles) . '"' : '' ?>></i>
                            <?php if(!empty($a_href)) : ?></a><?php endif;?>
                        </div>
                    <?php endif;?>
                    <?php if($number_title):?>
                        <span class="fcb-number">
                            <?php echo esc_attr( $number_title); ?>
                        </span>
                    <?php endif; ?>
                    <div class="fancybox-holder">
                        <h3 class="fancybox-title" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
                            <?php if(!empty($a_href)) : ?><a href="<?php echo esc_url($a_href);?>" target="<?php  echo esc_attr($a_target); ?>"><?php endif; ?>
                                <?php echo esc_attr($title); ?>
                            <?php if(!empty($a_href)) : ?></a><?php endif;?>
                        </h3>
                        <div class="ct-fcb-content" <?php echo !empty($description_styles) ? 'style="' . esc_attr($description_styles) . '"' : '' ?>>
                            <?php echo esc_attr($fcb_content); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>