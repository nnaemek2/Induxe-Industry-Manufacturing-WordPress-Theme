<?php
extract(shortcode_atts(array(
    'el_title' => '',
    'el_title_color' => '',
    'el_font_size' => '',
    'el_font_weight' => '',
    'el_text_transform'    => '',
    'el_text_transform'    => '',
    'line_height'    => '',
    'margin_botton'  => '',

    'item_post_color' => '',
    'style_display' => 'style-1',
    'text_align' => 'left',
    'quick' => '',
    'animation' => '',
), $atts));
$uqid = uniqid();

$styles_title = array(
    'color'          => $el_title_color,
    'font-size'      => $el_font_size.'px',
    'text-transform' => $el_text_transform,
    'font-weight'    => $el_font_weight,
    'line-height'    => $line_height.'px',
    'margin-bottom'  => $margin_botton.'px',
);
$title_styles = '';
foreach ($styles_title as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $title_styles .= $key . ':' . $value . ';';
    }
}

$quick = (array) vc_param_group_parse_atts($quick);
$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );
?>
<div id="ct-dowload-<?php echo esc_attr($uqid);?>" class="ct-dowload <?php echo esc_attr($style_display);?>" style="text-align: <?php echo esc_attr( $text_align);?>">
    <?php if(!empty($el_title)) : ?>
        <h3 class="ct-post-title" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
            <?php echo wp_kses_post( $el_title ); ?>
        </h3>
    <?php endif;?>
    <ul>
        <?php foreach ($quick as $key => $value) { 
            $item_title = isset($value['item_title']) ? $value['item_title'] : '';
            $item_link = isset($value['item_link']) ? $value['item_link'] : '';
            $link = vc_build_link($item_link);
            $a_href = '';
            $a_target = '';
            if ( strlen( $link['url'] ) > 0 ) {
                $a_href = $link['url'];
                $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
            }
            if(!empty($item_title)) :?>
                <li class="ct-dowload-item" <?php if( !empty($item_post_color) ) { ?>  style="color: <?php echo esc_attr( $item_post_color );?>" <?php } ?>>
                    <?php if(!empty($a_href)) : ?><a <?php if( !empty($item_post_color) ) { ?>  style="color: <?php echo esc_attr( $item_post_color );?>" <?php } ?> href="<?php echo esc_url($a_href);?>" target="<?php  echo esc_attr($a_target); ?>"><?php endif; ?>
                        <?php echo esc_attr( $item_title ); ?>
                        <i class="fa fa-download"></i>
                    <?php if(!empty($a_href)) : ?></a><?php endif; ?>
                </li>
        <?php endif; } ?>
    </ul>
</div>