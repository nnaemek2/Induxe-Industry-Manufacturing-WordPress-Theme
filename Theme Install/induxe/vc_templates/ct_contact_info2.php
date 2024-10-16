<?php
extract(shortcode_atts(array(
    'title' => '',
    'title_color' => '',
    'title_font_size' => '',
    'title_line_height' => '',
    'title_font_weight' => '',

    'description' => '',
    'description_color' => '',
    'des_font_size' => '',
    'des_title_line_height' => '',


    'title2' => '',
    'title_color2' => '',
    'title_font_size2' => '',
    'title_line_height2' => '',
    'title_font_weight2' => '',

    'description2' => '',
    'description_color2' => '',
    'des_font_size2' => '',
    'des_title_line_height2' => '',

    'animation' => '',
    'el_class' => '',
), $atts));

$styles_title = array(
    'color'          => $title_color,
    'font-size'      => $title_font_size.'px',
    'line-height'    => $title_line_height,
    'font-weight'    => $title_font_weight,
);
$title_styles = '';
foreach ($styles_title as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $title_styles .= $key . ':' . $value . ';';
    }
}

$styles_des = array(
    'color'          => $description_color,
    'font-size'      => $des_font_size.'px',
    'line-height'    => $des_title_line_height,
);
$des_styles = '';
foreach ($styles_des as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $des_styles .= $key . ':' . $value . ';';
    }
}

$styles_title2 = array(
    'color'          => $title_color2,
    'font-size'      => $title_font_size2.'px',
    'line-height'    => $title_line_height2,
    'font-weight'    => $title_font_weight2,
);
$title2_styles = '';
foreach ($styles_title2 as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $title2_styles .= $key . ':' . $value . ';';
    }
}

$styles_des2 = array(
    'color'          => $description_color2,
    'font-size'      => $des_font_size.'px',
    'line-height'    => $des_title_line_height2,
);
$des2_styles = '';
foreach ($styles_des2 as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $des2_styles .= $key . ':' . $value . ';';
    }
}


$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );
?>
<div class="ct-contact-info2 <?php echo esc_attr($el_class.' '.$animation_classes); ?>">
    <div class="ct-fancybox-inner">
        <?php if(!empty($title) || !empty($description)) : ?>
            <div class="info-row info-row1">
                <?php if(!empty($title)) : ?>
                    <label <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
                        <i class="ti-location-pin"> </i>
                        <?php echo wp_kses_post( $title ); ?>    
                    </label>
                <?php endif;?>    
                <?php if(!empty($description)) : ?>
                    <div class="ct-content" <?php echo !empty($des_styles) ? 'style="' . esc_attr($des_styles) . '"' : '' ?>>
                        <?php echo wp_kses_post( $description ); ?>
                    </div>
                <?php endif;?>
            </div>
        <?php endif;?>
        <?php if(!empty($title2) || !empty($description2)) : ?>
            <div class="info-row info-row2">
                <?php if(!empty($title2)) : ?>
                    <label <?php echo !empty($title2_styles) ? 'style="' . esc_attr($title2_styles) . '"' : '' ?>>
                        <i class="ti-alarm-clock"> </i>
                        <?php echo wp_kses_post( $title2 ); ?>    
                    </label>
                <?php endif;?>    
                <?php if(!empty($description2)) : ?>
                    <div class="ct-content" <?php echo !empty($des2_styles) ? 'style="' . esc_attr($des2_styles) . '"' : '' ?>>
                        <?php echo wp_kses_post( $description2 ); ?>
                    </div>
                <?php endif;?>
            </div>
        <?php endif;?>
    </div>
</div>