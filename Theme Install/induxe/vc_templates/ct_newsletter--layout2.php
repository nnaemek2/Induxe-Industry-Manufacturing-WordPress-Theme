<?php
extract(shortcode_atts(array(
    'form' => '',
    //Title
    'el_title' => '',
    'el_title_color' => '',
    'el_font_size' => '',
    'el_font_weight' => '',
    'el_text_transform'    => '',
    'el_text_transform'    => '',
    'line_height'    => '',
    'margin_botton'  => '',

    //Description
    'introduction' => '',
    'sub_title_color' => '',
    'sub_font_size' => '',
    'sub_margin_botton' => '',
    'sub_line_height' => '',

    //Extra
    'width_form' => '',
    'el_text_align'    => 'newsletter-center',
    'animation'   => '',
    'el_class'   => '',
    'el_parallax'   => 'false',
    'el_parallax_speed'   => '1.5',
), $atts));
$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );
$el_parallax_class = '';
$parallax_speed = '';
if(isset($el_parallax) && $el_parallax == 'true') {
    wp_enqueue_script('induxe-parallax');
    $el_parallax_class = 'el-parallax';
    $parallax_speed = 'data-speed='.$el_parallax_speed.'';
}


$styles_title = array(
    'color'          => $el_title_color,
    'font-size'      => $el_font_size.'px',
    'text-transform' => $el_text_transform,
    'font-weight'    => $el_font_weight,
    'line-height'    => $line_height,
    'margin-bottom'  => $margin_botton.'px',
);
$title_styles = '';
foreach ($styles_title as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $title_styles .= $key . ':' . $value . ';';
    }
}

$styles_sub = array(
    'color'          => $sub_title_color,
    'font-size'      => $sub_font_size.'px',
    'line-height'    => $sub_line_height,
    'margin-bottom'  => $sub_margin_botton.'px',
);
$sub_styles = '';
foreach ($styles_sub as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $sub_styles .= $key . ':' . $value . ';';
    }
}

$defined_forms = array( 'form_1', 'form_2', 'form_3', 'form_4', 'form_5', 'form_6', 'form_7', 'form_8', 'form_9', 'form_10' );
if(class_exists('Newsletter')) { ?>
    <div class="ct-newsletter layout2 <?php echo esc_attr( $el_class.' '.$el_parallax_class.' '.$animation_classes ); ?>" <?php echo esc_attr($parallax_speed); ?>>
        <div class="ct-newsletter-inner <?php echo esc_attr( $el_text_align.' '.$width_form ); ?>">
            <?php if(!empty($el_title)) : ?>
                <h3 class="ct-newsletter-title" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
                    <?php echo wp_kses_post( $el_title ); ?>
                </h3>
            <?php endif; ?>
            <?php if(!empty($introduction)) : ?>
                <div class="ct-newsletter-introduction" <?php echo !empty($sub_styles) ? 'style="' . esc_attr($sub_styles) . '"' : '' ?>>
                    <?php echo wp_kses_post( $introduction ); ?>
                </div>
            <?php endif; ?>
            <div class="newsletter-width">
                <?php
                if ( in_array( $form, $defined_forms ) ) {
                    $form = str_replace( 'form_', '', $form );
                    echo do_shortcode( '[newsletter_form form="' . esc_attr( $form ) . '"]' );
                } else {
                    echo NewsletterSubscription::instance()->get_subscription_form();
                } ?>
            </div>
        </div>
    </div>
<?php } ?>