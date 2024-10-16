<?php
extract(shortcode_atts(array(
    'button_text' => '',
    'button_link' => '',

    'button_text2' => '',
    'button_link2' => '',
    'button_style' => 'btn-default',
    'button_size' => 'size-default',

    'padding_top'    => '',
    'padding_right'  => '',
    'padding_bottom' => '',
    'padding_left'   => '',

    'br_top'   => '',
    'br_right'   => '',
    'br_bottom'   => '',
    'br_left'   => '',

    'animation'   => '',
    'el_class'   => '',
    
), $atts));
$link = vc_build_link($button_link);
$a_href = '';
$a_target = '';
if ( strlen( $link['url'] ) > 0 ) {
    $a_href = $link['url'];
    $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
}

$link2 = vc_build_link($button_link2);
$a_href2 = '';
$a_target2 = '';
if ( strlen( $link2['url'] ) > 0 ) {
    $a_href2 = $link2['url'];
    $a_target2 = strlen( $link2['target'] ) > 0 ? $link2['target'] : '_self';
}

$style_padding = array(
    'padding-top'    => $padding_top.'px',
    'padding-right'  => $padding_right.'px',
    'padding-bottom' => $padding_bottom.'px',
    'padding-left'   => $padding_left.'px',
    'border-top-left-radius'   => $br_top.'px',
    '-webkit-border-top-left-radius'   => $br_top.'px',
    'border-top-right-radius'   => $br_right.'px',
    '-webkit-border-top-right-radius'   => $br_right.'px',
    'border-bottom-left-radius'   => $br_left.'px',
    '-webkit-border-bottom-left-radius'   => $br_left.'px',
    'border-bottom-right-radius'   => $br_bottom.'px',
    '-webkit-border-bottom-right-radius'   => $br_bottom.'px',
);
$styles = '';
foreach ($style_padding as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $styles .= $key . ':' . $value . ';';
    }
}

$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );

?>
<div class="ct-double-button <?php echo esc_attr($el_class.' '.$animation_classes); ?>">
    <a <?php echo !empty($styles) ? 'style="' . esc_attr($styles) . '"' : '' ?> href="<?php echo esc_url($a_href);?>" target="<?php  echo esc_attr($a_target); ?>" class="btn <?php echo esc_attr($button_style.' '.$button_size); ?>">
        <span><?php echo esc_attr($button_text); ?></span>
    </a>

    <a <?php echo !empty($styles) ? 'style="' . esc_attr($styles) . '"' : '' ?> href="<?php echo esc_url($a_href2);?>" target="<?php  echo esc_attr($a_target2); ?>" class="btn <?php echo esc_attr($button_style.' '.$button_size); ?>">
        <span><?php echo esc_attr($button_text2); ?></span>
    </a>
</div>