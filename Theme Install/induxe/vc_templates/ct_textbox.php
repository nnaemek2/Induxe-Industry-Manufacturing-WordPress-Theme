<?php
extract(shortcode_atts(array(
    'title' => '',
    'title_color' => '',
    'title_font_size' => '',
    'title_line_height' => '',

    'text_box' => '',              
    'text_box_color' => '',
    'font_size' =>'',
    'font_weight' => '',
    'textbox_align' => 'text-left',
    'textbox_mg_button' =>'',
    'line_height' => '',
    'letter_spacing' => '',
    
    'font_style'  =>'normal',   
    'custom_fonts' => 'false',
    'google_fonts' => '',
    'text_transform' => '',    
    'el_class'   => '',
), $atts));
$uqid = uniqid();

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


$styles_des = array(
    'color'   => $text_box_color,
    'font-weight'   => $font_weight,
    'font-style'  => $font_style,
    'font-size' => $font_size.'px',
    'line-height' => $line_height.'px',
    'text-transform' => $text_transform,
    'margin-bottom' => $textbox_mg_button.'px',
    'letter-spacing' => $letter_spacing,
);
$des_styles = '';
foreach ($styles_des as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $des_styles .= $key . ':' . $value . ';';
    }
}

?>

<div id="ct-textbox-<?php echo esc_attr($uqid);?>" class="ct-textbox layout1 <?php echo esc_attr($el_class.' '.$textbox_align);?>">
        <?php if(!empty($title)) : ?>
            <h3 class="ct-title" style="<?php if(!empty($title_color)) { echo 'color:'.esc_attr($title_color).';'; } if(!empty($title_font_size)) { echo 'font-size:'.esc_attr($title_font_size).'px;'; } if(!empty($title_line_height)) { echo 'line-height:'.esc_attr($title_line_height).'px;'; } ?>">
                <?php echo wp_kses_post( $title ); ?>
            </h3>
        <?php endif;?>
        <?php if($text_box) : ?>
            <div class="ct-content" <?php echo !empty($des_styles || $inline_style) ? 'style="' . esc_attr($des_styles) . ' '. $inline_style .'"' : '' ?>>
                <?php echo wp_kses_post( $text_box ); ?>
            </div>
        <?php endif; ?>
</div>