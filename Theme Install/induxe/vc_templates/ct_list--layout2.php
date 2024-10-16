<?php
extract(shortcode_atts(array(
    'el_title' => '',
    'el_title_color' => '',
    'el_font_size' => '',
    'el_font_weight' => '',
    'el_text_transform'    => '',
    'margin_button'=> '',

    'ct_list_fontsize' => '',
    'ct_list_lineheight' => '',
    'ct_list_color' => '',
    'ct_list_color_hv' => '',

    'font_weight' => '',

    'ct_list' => '',
    'ct_list_item' => '',
    'margin_li_bottom' => '',
    'text_transform' => '',
    'ct_list_mr_botton' => '',

), $atts));
$uqid = uniqid();

$ct_lists = array();
$ct_lists = (array) vc_param_group_parse_atts($ct_list);

$styles_list = array(
    'color'         => $ct_list_color,
    'font-size'     => $ct_list_fontsize.'px',
    'line-height'   => $ct_list_lineheight.'px',
    'font-weight'   => $font_weight,
    'margin-bottom' => $margin_li_bottom.'px',
    'text-transform' => $text_transform,
);
$list_styles = '';
foreach ($styles_list as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $list_styles .= $key . ':' . $value . ';';
    }
}

$styles_title = array(
    'color'          => $el_title_color,
    'font-size'      => $el_font_size.'px',
    'text-transform' => $el_text_transform,
    'font-weight'    => $el_font_weight,
    'margin-bottom'  => $margin_button.'px',
);
$title_styles = '';
foreach ($styles_title as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $title_styles .= $key . ':' . $value . ';';
    }
}
?>
<div id="ct-list-<?php echo esc_attr($uqid);?>" class="ct-lists layout2" <?php if( !empty( $ct_list_mr_botton.'px'  )) { ?> style="margin-bottom: <?php echo esc_attr( $ct_list_mr_botton.'px' );?>" <?php } ?>>
    <div class="ct-inline-css"  data-css="<?php if( !empty($ct_list_color_hv)) : ?>
                #ct-list-<?php echo esc_attr($uqid);?>.ct-lists ul li a:hover {
                   color: <?php echo esc_attr($ct_list_color_hv); ?>!important;
                }
                <?php endif; ?>
        ">
    </div>
    <div class="ct-list-inner">
        <?php if(!empty($el_title)) : ?>
            <h3 class="ct-list-title" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
                <?php echo wp_kses_post( $el_title ); ?>
            </h3>
        <?php endif; ?>

        <ul>
            <?php foreach ($ct_lists as $key => $value) { 
                $item_link = isset($value['item_link']) ? $value['item_link'] : '';

                $link = vc_build_link($item_link);
                $a_href     = '';
                $a_target   = '';
                if ( strlen( $link['url'] ) > 0 ) {
                    $a_href = $link['url'];
                    $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
                } ?>
                <li <?php echo !empty($list_styles) ? 'style="' . esc_attr($list_styles) . '"' : '' ?>>
                    <?php if(!empty( $a_href )):?><a href="<?php echo esc_url($a_href);?>" <?php if(!empty( $a_target )):?> target="<?php  echo esc_attr($a_target); ?>" <?php endif;?> <?php if( !empty( $ct_list_color  )) { ?> style="color: <?php echo esc_attr( $ct_list_color );?>" <?php } ?>><?php endif;?>
                        <i class="zmdi zmdi-check"></i>
                        <?php echo esc_html($value['ct_list_item']); ?>
                    <?php if(!empty($a_href)) : ?></a><?php endif; ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>