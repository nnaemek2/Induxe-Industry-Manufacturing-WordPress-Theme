<?php
extract(shortcode_atts(array(
    'single_image' => '',
    'max_height_image' => '',
    'margin_bottom_image' => '',
    'box_shadow_on' => '',
    'button_link' => '',
    'position_custom' => '',
    'textbox_align' => 'text-left',

), $atts));
$uqid = uniqid();

$link = vc_build_link($button_link);
$a_href = '';
$a_target = '';
if ( strlen( $link['url'] ) > 0 ) {
    $a_href = $link['url'];
    $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
}

$single_image_url = '';
if (!empty($single_image)) {
    $attachment_image = wp_get_attachment_image_src($single_image, 'full');
    $single_image_url = $attachment_image[0];
}

$style_image = array(
    'max-height'    => $max_height_image.'px',
    'margin-bottom'    => $margin_bottom_image.'px',
);
$styles = '';
foreach ($style_image as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $styles .= $key . ':' . $value . ';';
    }
}
$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );

?>
<div id="ct-image-single-<?php echo esc_attr($uqid);?>" class="ct-image-single <?php echo esc_attr($textbox_align);?>">
    <?php if(!empty($single_image_url) ) { ?>
        <div class="ct-image <?php echo esc_attr( $position_custom.' '.$box_shadow_on );?> clearfix">
            <?php if(!empty($a_href)) : ?><a href="<?php echo esc_url($a_href);?>" target="<?php  echo esc_attr($a_target); ?>"><?php endif; ?>
                <img <?php echo !empty($styles) ? 'style="' . esc_attr($styles) . '"' : '' ?>  src="<?php echo esc_url( $single_image_url ); ?>" alt="<?php echo esc_attr(get_post_meta( $single_image, '_wp_attachment_image_alt', true )) ?>"/>
            <?php if(!empty($a_href)) : ?></a><?php endif; ?>
        </div>
    <?php } ?>
</div>