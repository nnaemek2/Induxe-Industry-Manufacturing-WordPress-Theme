<?php
extract(shortcode_atts(array(
    'image_feature' => '',
    'img_size'      => '500x350',

    'title' => '',
    'title_color' => '',
    'title_font_size' => '',
    'title_line_height' => '',

    'description' => '',
    'description_color' => '',

    'animation' => '',
    'el_class' => '',
), $atts));

$img = wpb_getImageBySize( array(
    'attach_id'  => $image_feature,
    'thumb_size' => $img_size,
    'class'      => '',
));
$thumbnail = $img['thumbnail'];

$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );
?>
<div class="ct-fancybox-layout1 <?php echo esc_attr($el_class.' '.$animation_classes); ?>">
    <div class="ct-fancybox-inner">
        <?php if( !empty($thumbnail) ) { ?>
            <div class="image-feature">
                <?php echo wp_kses_post( $thumbnail ); ?>    
            </div>
        <?php } ?>
        <?php if(!empty($title)) : ?>
            <h3 class="ct-fancybox-title">
                <?php echo wp_kses_post( $title ); ?>
            </h3>
        <?php endif;?>
        <?php if(!empty($description)) : ?>
            <div class="ct-fancybox-content" style="<?php if(!empty($description_color)) { echo 'color:'.esc_attr($description_color).';'; } ?>">
                <?php echo wp_kses_post( $description ); ?>
            </div>
        <?php endif;?>
    </div>
</div>