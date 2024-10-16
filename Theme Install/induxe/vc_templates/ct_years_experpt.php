<?php
extract(shortcode_atts(array(
    'title' => '',
    'title_color' => '',
    'font_size' => '',

    'des_contact'  => '',
    'des_color'    => '',
    'des_font_size'=> '',

    'color_hover' => '',
    'color' => '',

    'animation'  => '',
), $atts));
$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );

$styles_title = array(
    'color'  	 => $title_color,
    'font-size'  => $font_size,
);
$title_styles = '';
foreach ($styles_title as $key => $value) {
    if (!empty($value)) {
        $title_styles .= $key . ':' . $value . ';';
    }
}

?>
<div id="<?php echo esc_attr($atts['html_id']);?>" class="ct-year-experpt <?php echo esc_attr( $animation_classes );?>">
    <div class="ct-inline-css"  data-css="<?php if( !empty($color_hover)) : ?>
            #<?php echo esc_attr($atts['html_id']);?>.ct-contact-info .ct-contact-info-content a:hover, 
            #<?php echo esc_attr($atts['html_id']);?>.ct-contact-info .ct-contact-info-content a:hover i {
               color: <?php echo esc_attr($color_hover); ?>!important;
            }
        <?php endif; ?>">    
    </div>

    <div class="ct-inner-layout">
        <?php if(!empty($title)) : ?>
            <div class="ct-about-year" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
                <span><?php echo wp_kses_post( $title ); ?></span>
            </div>
        <?php endif;?>
        <?php if(!empty($des_contact)) : ?>
            <div class="ct-excerpt" <?php echo !empty($des_styles) ? 'style="' . esc_attr($des_styles) . '"' : '' ?>>
                <?php echo wp_kses_post( $des_contact ); ?>
            </div>
        <?php endif;?>
	</div>
</div>