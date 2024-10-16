<?php
extract(shortcode_atts(array(
    'title' => '',
    'title_color' => '',
    'title_font_size' => '',

    'video_link' => '',
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

$styles_title = array(
    'color'     => $title_color,
    'font-size' => $title_font_size.'px',
);
$title_styles = '';
foreach ($styles_title as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $title_styles .= $key . ':' . $value . ';';
    }
}


$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp ); ?>

<div id="<?php echo esc_attr($html_id);?>" class="ct-video-wrapper layout2 <?php echo 'intro-added' ?> <?php echo esc_attr( $play_style.' '.$play_fixed_center.' '.$el_class.' '.$animation_classes ); ?>">
    <div class="ct-video-inner">
        <a class="ct-video-button" href="<?php echo esc_url($a_href);?>">
            <i class="fa fa-play"></i>
        </a>
        <?php if(!empty($title)) : ?>
            <span class="ct-fancybox-title" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
                <?php echo wp_kses_post( $title ); ?>
            </span>
        <?php endif;?>
    </div>
</div>