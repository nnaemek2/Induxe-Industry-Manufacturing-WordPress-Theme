<?php
extract(shortcode_atts(array(
    'title' => '',
    'title_color' => '',
    'price' => '',
    'pricing_time' => '',
    'prc_description' => '',
    
    'button_text' => '',
    'link_button' => '',

    'chose_active'=> '',
    'animation' => '',
), $atts));

$link = vc_build_link($link_button);
$a_href = '';
$a_target = '_self';
if ( strlen( $link['url'] ) > 0 ) {
    $a_href = $link['url'];
    $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
} 

$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );
?>

<div class="ct-pricing-wrapper  <?php echo esc_attr( $animation_classes ); ?>">
    <div class="ct-pricing-inner <?php echo esc_attr( $chose_active );?>">
        <?php if(!empty($title)) : ?>
            <h3 class="ct-pricing-title ct-subtitle" style="<?php if(!empty($title_color)) { echo 'color:'.esc_attr($title_color).';'; } ?>"><?php echo esc_attr($title);?>
            </h3> 
        <?php endif;?>
        <div class="ct-pricing-meta">
            <?php if(!empty($price)) : ?>
                <span class="ct-pricing-price">
                    <?php echo esc_attr($price);?>  
                </span>
            <?php endif; ?>
            <?php if($pricing_time): ?>
                <span class="ct-pricing-time" style="<?php if(!empty($title_color)) { echo 'color:'.esc_attr($title_color).';'; } ?>">
                    <?php if($pricing_time): ?>
                        <?php echo esc_attr('/ '.$pricing_time);?>  
                    <?php endif; ?>
                </span>
            <?php endif; ?>
        </div>

        <?php if(!empty($prc_description)) : ?>
            <div class="ct-pricing-content">
                <?php echo esc_html($prc_description); ?>
            </div>
        <?php endif;?>
        <?php if(!empty($a_href || $button_text)) : ?>
            <div class="wp-prc-btn">
                <a class="ct-pricing-button" href="<?php echo esc_url($a_href);?>" target="<?php echo esc_attr( $a_target ); ?>">
                    <?php echo wp_kses_post( $button_text );?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>