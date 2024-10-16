<?php
extract(shortcode_atts(array(
    'video_link' => '',
    'video_image' => '',
    'img_size' => '',
    'play_fixed_center' => 'play-no-fixed',
    'play_style' => 'style1',
    'animation' => '',
    'el_class' => '',
), $atts));
$html_id = cmsHtmlID('ct-video');
$link = vc_build_link($video_link);
$a_href = 'https://www.youtube.com/watch?v=SF4aHwxHtZ0';
if ( strlen( $link['url'] ) > 0 ) {
    $a_href = $link['url'];
}

$img = wpb_getImageBySize( array(
    'attach_id'  => $video_image,
    'thumb_size' => $img_size,
    'class'      => '',
));
$thumbnail = $img['thumbnail'];

$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp ); ?>

<div id="<?php echo esc_attr($html_id);?>" class="ct-video-wrapper layout1 <?php if(!empty($image_url)) { echo 'intro-added'; } ?> <?php echo esc_attr( $play_style.' '.$play_fixed_center.' '.$el_class.' '.$animation_classes ); ?>">
    <div class="ct-video-inner">
        <?php if( !empty($thumbnail) ) { ?>
            <?php echo wp_kses_post( $thumbnail ); ?>
        <?php } ?>
        <a class="ct-video-button" href="<?php echo esc_url($a_href);?>">
            <i class="fa fa-play"></i>
        </a>
    </div>
</div>