<?php
extract(shortcode_atts(array(

    'title'         => '',
    'title_color'         => '',
    'grouping'         => '0',
    'separator'         => '',
    'digit'         => '',
    'digit_color'         => '',
    'prefix'         => '',
    'suffix'         => '',

    'el_class'         => '',
    'animation'         => '',

), $atts));
wp_enqueue_script( 'waypoints' );
wp_enqueue_script( 'induxe-counter-lib' );
wp_enqueue_script( 'induxe-counter' );

$html_id = cmsHtmlID('ct-counter');
$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );
?>
<div id="<?php echo esc_attr($html_id);?>" class="ct-counter-single layout5 <?php echo esc_attr( $animation_classes.' '.$el_class ); ?>">
    <div class="ct-counter-inner">
        <div class="ct-counter-holder">
            <span id="<?php echo esc_attr($html_id);?>-digit" class="ct-counter-digit" data-type="random" data-grouping="<?php echo esc_attr($grouping); ?>" data-separator="<?php echo esc_attr($separator); ?>" data-digit="<?php echo esc_attr($digit);?>" data-prefix="<?php echo esc_attr($prefix);?>" data-suffix="<?php echo esc_attr($suffix);?>" style="<?php if(!empty($digit_color)) { echo 'color:'.esc_attr($digit_color).';'; } ?>"></span>
            <?php if(!empty($title)) : ?>
                <div class="ct-counter-title" style="<?php if(!empty($title_color)) { echo 'color:'.esc_attr($title_color).';'; } ?>">
                    <?php echo apply_filters('the_title', $title);?>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>