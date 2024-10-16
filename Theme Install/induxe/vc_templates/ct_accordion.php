<?php
extract(shortcode_atts(array(
    'ct_accordion' => '',
    'active_section' => '1',
    
    'title_color' => '',
    'font_size' => '',
    'font_weight' => '',
    'theme_custom_fonts' => '',
    
    'content_font_size' => '',
    'content_color' => '',

    'style' => 'style1',
    'custom_fonts' => 'false',
    'google_fonts' => '',
    'animation' => '',
), $atts));

$accordion = array();
$accordion = (array) vc_param_group_parse_atts($ct_accordion);
$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );
$html_id = cmsHtmlID('ct-accordion');
$key_id = cmsHtmlID('key');

$styles_title = array(
    'color'         => $title_color,
    'font-size'     => $font_size.'px',
    'font-weight'   => $font_weight,
);
$title_styles = '';
foreach ($styles_title as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $title_styles .= $key . ':' . $value . ';';
    }
}

$styles_des = array(
    'color'         => $content_color,
    'font-size'     => $content_font_size.'px',
);
$des_styles = '';
foreach ($styles_des as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $des_styles .= $key . ':' . $value . ';';
    }
}

if(!empty($accordion)) : ?>
    <div id="<?php echo esc_attr($html_id); ?>" class="ct-accordion-layout1 <?php echo esc_attr($style.' '.$animation_classes); ?>">
        <div class="ct-accordion-body">
            <?php foreach ($accordion as $key => $value) {
                $ac_title = isset($value['ac_title']) ? $value['ac_title'] : '';
                $ac_content = isset($value['ac_content']) ? $value['ac_content'] : '';
                ?>
                <div class="card">
                    <div class="card-header" id="heading-<?php echo esc_attr($key_id.$key) ?>">
                        <h3 class="card-title  <?php echo esc_attr( $theme_custom_fonts ); ?>" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . ' '. $inline_style .'"' : '' ?>>
                            <a data-toggle="collapse" data-target="#collapse-<?php echo esc_attr($key_id.$key) ?>" aria-expanded="<?php if($key == ($active_section - 1)) { echo 'true'; } else { echo 'false'; } ?>" aria-controls="collapse-<?php echo esc_attr($key_id.$key) ?>" <?php if(!empty( $title_color )) { ?> style="color: <?php echo esc_attr( $title_color);?>" <?php } ?>>
                                <?php echo esc_attr($ac_title); ?>
                                <i class="fal fa-plus"></i>
                            </a>
                        </h3>
                    </div>
                    <div id="collapse-<?php echo esc_attr($key_id.$key) ?>" class="collapse  <?php if($key == ($active_section - 1)) { echo 'show'; } ?>" aria-labelledby="heading-<?php echo esc_attr($key_id.$key) ?>" data-parent="#<?php echo esc_attr($html_id); ?>">
                        <div class="card-body" <?php echo !empty($des_styles) ? 'style="' . esc_attr($des_styles) . '"' : '' ?>>
                            <?php echo wp_kses_post($ac_content); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php endif; ?>