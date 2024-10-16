<?php
extract(shortcode_atts(array(              
    //Image Feature
    'image_feature' => '',
    'img_size'      => '849x530',
    'hover_style'      => '',
    'animation' => '',
    'ct_image_align' => 'image_align_xs_left',
), $atts));
$uqid = uniqid();

$img = wpb_getImageBySize( array(
    'attach_id'  => $image_feature,
    'thumb_size' => $img_size,
    'class'      => '',
));
$thumbnail = $img['thumbnail'];

$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );
?>

<div id="ct-banner-<?php echo esc_attr($uqid);?>" class="ct-banner layout1 <?php echo esc_attr( $hover_style.' '.$ct_image_align.' '.$animation_classes ); ?>">
	<div class="ct-banner-inner clearfix">
        <?php if( !empty($thumbnail) ) { ?>
            <div class="ct-image">
                <?php echo wp_kses_post( $thumbnail ); ?>
            </div>
        <?php } ?>
	</div>
</div>