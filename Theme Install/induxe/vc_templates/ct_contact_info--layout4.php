<?php
extract(shortcode_atts(array(
    'title' => '',
    'title_color' => '',
    'el_title_color' => '',
    'el_font_size' => '',
    'el_font_weight' => '',
    'el_text_transform'    => '',
    'el_text_transform'    => '',
    'line_height'    => '',
    'margin_botton'  => '',

    'des_contact'  => '',
    'des_color'    => '',
    'des_font_size'=> '',

    'color_hover' => '',
    'font_size' => '',
    'color' => '',
    'icon_color' => '',

    'cms_social' => '',
    'icon_color'       => '',
    'icon_size'        => '',

    'ctf_items'  => '',
    'animation'  => '',
    'el_class'  => '',
), $atts));
$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );
$ctf_item = array();
$ctf_item = (array) vc_param_group_parse_atts($ctf_items);


//Socail
$cms_socials = array();
$cms_socials = (array) vc_param_group_parse_atts($cms_social);

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

$styles_des = array(
    'color'      => $des_color,
    'font-size'  => $des_font_size.'px',
);
$des_styles = '';
foreach ($styles_des as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $des_styles .= $key . ':' . $value . ';';
    }
}

$styles_icon = array(
    'color'          => $icon_color,
    'font-size'      => $icon_size,
);
$icon_styles = '';
foreach ($styles_icon as $key => $value) {
    if (!empty($value)) {
        $icon_styles .= $key . ':' . $value . ';';  
   }
}

?>

<div id="<?php echo esc_attr($atts['html_id']);?>" class="ct-contact-info layout4 <?php echo esc_attr( $el_class.' '.$animation_classes )?>">
    <div class="ct-contact-info-inner">
        <?php if(!empty($title)) : ?>
            <h3 class="ct-contact-title" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
                <?php echo wp_kses_post( $title ); ?>
            </h3>
        <?php endif;?>
        <?php if(!empty($des_contact)) : ?>
            <div class="ct-excerpt" <?php echo !empty($des_styles) ? 'style="' . esc_attr($des_styles) . '"' : '' ?>>
                <?php echo wp_kses_post( $des_contact ); ?>
            </div>
        <?php endif;?>
        <?php foreach ($ctf_item as $key => $value) {
            $ctf_content = isset($value['ctf_content']) ? $value['ctf_content'] : '';
            $label = isset($value['label']) ? $value['label'] : '';
            $ctf_type = isset($value['ctf_type']) ? $value['ctf_type'] : '';
            ?>
            <div class="ct-contact-info-item type-<?php echo esc_attr($ctf_type); ?>" >
                <div class="ct-contact-info-content" <?php if(!empty($icon_color)): ?> style="color: <?php echo esc_attr( $icon_color )?>"<?php endif;?>>
                    <?php switch ( $ctf_type )
                    {
                        case 'phone': ?>
                            <label><?php if(!empty($label)) { echo esc_attr($label); } else { echo esc_html__('Phone:', 'induxe'); } ?></label>
                            <a href="tel:<?php echo esc_attr( $ctf_content ); ?>">
                                <i class="ti-mobile"></i>
                                <?php echo wp_kses_post( $ctf_content  ); ?>
                            </a>
                            <?php break;

                        case 'email': ?>
                            <label><?php if(!empty($label)) { echo esc_attr($label); } else { echo esc_html__('Email:', 'induxe'); } ?></label>
                            <a href="mailto:<?php echo esc_attr( $ctf_content ); ?>">
                                <i class="ti-email"></i>
                                <?php echo wp_kses_post( $ctf_content  ); ?>
                            </a>
                            <?php break;

                        case 'address': ?>
                            <label><?php if(!empty($label)) { echo esc_attr($label); } else { echo esc_html__('Address:', 'induxe'); } ?></label>
                            <a href="http://maps.google.com/?q=<?php echo esc_attr( $ctf_content ); ?>" target="_blank">
                                <i class="ti-location-pin"></i>
                                <?php echo wp_kses_post( $ctf_content  ); ?>
                            </a>
                            <?php break;

                        default:
                            echo wp_kses_post( $ctf_content  );
                            break;
                    } ?>
                </div>
            </div>
        <?php } ?>
        <ul class="list-socials">
            <?php foreach ($cms_socials as $key => $value) {
                $cms_list_item_icon = isset($value['cms_list_item_icon']) ? $value['cms_list_item_icon'] : '';
                
                $link = vc_build_link($value['icon_link']);
                
                $a_href = '';
                $a_target = '';
                if ( strlen( $link['url'] ) > 0 ) {
                    $a_href = $link['url'];
                    $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
                }
            ?>
            
                <li class="item-social">
                    <a <?php echo !empty($icon_styles) ? 'style="' . esc_attr($icon_styles) . '"' : '' ?> <?php if(!empty( $a_href) ):?> href="<?php echo esc_url( $a_href );?>" <?php else : ?> href="#" <?php endif;?> <?php if(!empty($a_target)):?> target="<?php  echo esc_attr($a_target); ?>"<?php endif;?>>
                        <i class="<?php echo !empty($cms_list_item_icon)? $cms_list_item_icon:'fa fa-check' ?>" aria-hidden="true"></i>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>