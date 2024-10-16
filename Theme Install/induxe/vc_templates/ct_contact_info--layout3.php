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

    'icon_type' => 'icon',
    'icon_list' => 'fontawesome',
    'icon_fontawesome' => '',
    'icon_fontawesome5' => '',
    'icon_material_design' => '',
    'icon_flaticon' => '',
    'icon_etline' => '',
    'icon_image' => '',
    'icon_color' => '',
    'icon_font_size' => '',
    'icon_weight' => '',

    'ctf_items'  => '',
    'animation'  => '',
    'el_class'  => '',
), $atts));

$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );
$ctf_item = array();
$ctf_item = (array) vc_param_group_parse_atts($ctf_items);

$icon_image_url = '';
if (!empty($icon_image)) {
    $attachment_image = wp_get_attachment_image_src($icon_image, 'full');
    $icon_image_url = $attachment_image[0];
}
$icon_name = "icon_" . $icon_list;
$icon_class = isset(${$icon_name}) ? ${$icon_name} : '';

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

?>

<div id="<?php echo esc_attr($atts['html_id']);?>" class="ct-contact-info layout3 <?php echo esc_attr( $el_class.' '.$animation_classes )?>">
    <div class="ct-contact-info-inner">
        <?php if(!empty($title)) : ?>
            <h3 class="ct-contact-title" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
                <?php if(!empty($icon_image_url) && $icon_type == 'image' ) { ?>
                        <img class="icon-main" src="<?php echo esc_url( $icon_image_url ); ?>" alt="<?php echo esc_attr( $title ); ?>"/>
                <?php } else { ?>
                    <?php if($icon_class):?>
                            <i class="<?php echo esc_attr($icon_class); ?> <?php if($icon_list == 'fontawesome5' && !empty($icon_weight)) { echo esc_attr($icon_weight); } ?>" style="<?php if(!empty($icon_color)) { echo 'color:'.esc_attr($icon_color).';'; } if(!empty($icon_font_size)) { echo 'font-size:'.esc_attr($icon_font_size).'px;'; } ?>"></i>
                    <?php endif;?>
                <?php } ?>
                <?php echo wp_kses_post( $title ); ?>
            </h3>
        <?php endif;?>

	    <?php foreach ($ctf_item as $key => $value) {
	    	$ctf_content = isset($value['ctf_content']) ? $value['ctf_content'] : '';
	    	$ctf_type = isset($value['ctf_type']) ? $value['ctf_type'] : '';
	    	?>
	    	<div class="ct-contact-info-item type-<?php echo esc_attr($ctf_type); ?>" >
			    <div class="ct-contact-info-content">
			    	<?php switch ( $ctf_type )
			        {
			            case 'phone': ?>
			                <a <?php if(!empty($color)): ?> style="color: <?php echo esc_attr( $color )?>"<?php endif;?> href="tel:<?php echo esc_attr( $ctf_content ); ?>">
			                	<?php echo wp_kses_post( $ctf_content  ); ?>
			                </a>
			                <?php break;

			            case 'email': ?>
			                <a <?php if(!empty($color)): ?> style="color: <?php echo esc_attr( $color )?>"<?php endif;?> href="mailto:<?php echo esc_attr( $ctf_content ); ?>">
			                	<?php echo wp_kses_post( $ctf_content  ); ?>
			                </a>
			                <?php break;

			            case 'address': ?>
			                <a <?php if(!empty($color)): ?> style="color: <?php echo esc_attr( $color )?>"<?php endif;?> href="http://maps.google.com/?q=<?php echo esc_attr( $ctf_content ); ?>" target="_blank">
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
	</div>
</div>