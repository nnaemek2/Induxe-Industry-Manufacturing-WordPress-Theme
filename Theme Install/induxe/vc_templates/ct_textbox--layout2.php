<?php
extract(shortcode_atts(array(                     
    'text_box' => '',              
    'text_box_color' => '',
    'font_size' =>'',
    'font_weight' => '',
    'textbox_align' => 'text-left',
    'textbox_mg_button' =>'',
    'line_height' => '',
    
    'font_style'  =>'normal',   
    'custom_fonts' => 'false',
    'google_fonts' => '',
    'text_transform' => '',    

    'button_text'      => '',       
    'button_link'      => '',
    'link_color'      => '',
    'link_color_hv'   => '',

), $atts));
$uqid = uniqid();


$link = vc_build_link($button_link);
$a_href = '';
$a_target = '';
if ( strlen( $link['url'] ) > 0 ) {
    $a_href = $link['url'];
    $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
}

$inline_style = '';
if($custom_fonts == 'true') {
    // Build the data array
    $googleFontsParam = new Vc_Google_Fonts();      
    $fieldSettings = array();
    $text_font_data = strlen( $google_fonts ) > 0 ? $googleFontsParam->_vc_google_fonts_parse_attributes( $fieldSettings, $google_fonts ) : '';
     
    // Build the inline style
    if(isset($text_font_data['values']['font_family'])) {
        $fontFamily = explode( ':', $text_font_data['values']['font_family'] );
        $styles[] = 'font-family:' . $fontFamily[0];
    }
    if(isset($text_font_data['values']['font_style'])) {
        $fontStyles = explode( ':', $text_font_data['values']['font_style'] );
        $styles[] = 'font-weight:' . $fontStyles[1];
        $styles[] = 'font-style:' . $fontStyles[2];  
    }
    if(isset($text_font_data['values']['font_family']) || isset($text_font_data['values']['font_style'])) {
        foreach( $styles as $attribute ){           
            $inline_style .= $attribute.'; ';       
        } 
    }
             
    // Enqueue the right font   
    $settings = get_option( 'wpb_js_google_fonts_subsets' );
    if ( is_array( $settings ) && ! empty( $settings ) ) {
        $subsets = '&subset=' . implode( ',', $settings );
    } else {
        $subsets = '';
    }
     
    // We also need to enqueue font from googleapis
    if ( isset( $text_font_data['values']['font_family'] ) ) {
        wp_enqueue_style( 
            'vc_google_fonts_' . vc_build_safe_css_class( $text_font_data['values']['font_family'] ), 
            '//fonts.googleapis.com/css?family=' . $text_font_data['values']['font_family'] . $subsets
        );
    }
} else {
    $inline_style = '';
}


$styles_title = array(
    'color'   => $text_box_color,
    'font-weight'   => $font_weight,
    'font-style'  => $font_style,
    'font-size' => $font_size.'px',
    'line-height' => $line_height.'px',
    'text-transform' => $text_transform,
    'margin-bottom' => $textbox_mg_button.'px',
);
$title_styles = '';
foreach ($styles_title as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $title_styles .= $key . ':' . $value . ';';
    }
}

?>

<div id="ct-textbox-<?php echo esc_attr($uqid);?>" class="ct-textbox layout2 <?php echo esc_attr($textbox_align);?>">
    <div class="ct-inline-css"  data-css="<?php if( !empty($link_color_hv)) : ?>
                #ct-textbox-<?php echo esc_attr($uqid);?>.ct-textbox .ct-textbox-content a:hover {
                   color: <?php echo esc_attr($link_color_hv); ?>!important;
                }
                <?php endif; ?>
        ">
    </div>
    <?php if($text_box) : ?>
        <div class="ct-textbox-content" <?php echo !empty($title_styles || $inline_style) ? 'style="' . esc_attr($title_styles) . ' '. $inline_style .'"' : '' ?>>
            <?php echo wp_kses_post( $text_box ); ?>
            <?php if(!empty($a_href)) : ?><a <?php if( !empty( $link_color )) { ?> style="color: <?php echo esc_attr( $link_color );?>" <?php } ?> href="<?php echo esc_url($a_href);?>" target="<?php  echo esc_attr($a_target); ?>"><?php endif; ?>
                <?php echo esc_attr($button_text); ?>
            <?php if(!empty($a_href)) : ?></a><?php endif; ?>
        </div>
    <?php endif; ?>
</div>