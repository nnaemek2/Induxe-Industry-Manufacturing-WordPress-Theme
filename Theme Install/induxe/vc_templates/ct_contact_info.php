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

    'ctf_items'  => '',
    'animation'  => '',
    'el_class'  => '',
), $atts));
$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );
$ctf_item = array();
$ctf_item = (array) vc_param_group_parse_atts($ctf_items);


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

<div id="<?php echo esc_attr($atts['html_id']);?>" class="ct-contact-info layout1 <?php echo esc_attr( $el_class.' '.$animation_classes )?>">
    <div class="ct-contact-info-inner">
        <?php if(!empty($title)) : ?>
            <h3 class="ct-contact-title" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
                <?php echo wp_kses_post( $title ); ?>
            </h3>
        <?php endif;?>

	    <?php foreach ($ctf_item as $key => $value) {
	    	$ctf_content = isset($value['ctf_content']) ? $value['ctf_content'] : '';
            $label = isset($value['label']) ? $value['label'] : '';
	    	$ctf_type = isset($value['ctf_type']) ? $value['ctf_type'] : '';
	    	?>
	    	<div class="ct-contact-info-item type-<?php echo esc_attr($ctf_type); ?>" >
			    <div class="ct-contact-info-content" <?php if(!empty($color)): ?> style="color: <?php echo esc_attr( $color )?>"<?php endif;?>>
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
	</div>
</div>