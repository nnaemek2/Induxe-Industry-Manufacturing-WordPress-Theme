<?php
extract(shortcode_atts(array(
    'title' => '',
    'title_color' => '',
    'font_size' => '',

    'color_hover' => '',
    'color' => '',
    'icon_color' => '',

    'ctf_items'  => '',

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

    'animation'  => '',
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
    'color'  	 => $title_color,
    'font-size'  => $font_size,
);
$title_styles = '';
foreach ($styles_title as $key => $value) {
    if (!empty($value)) {
        $title_styles .= $key . ':' . $value . ';';
    }
}

?>
<div id="<?php echo esc_attr($atts['html_id']);?>" class="ct-contact-info layout2 <?php echo esc_attr( $animation_classes );?>">
    <div class="ct-inline-css"  data-css="<?php if( !empty($color_hover)) : ?>
            #<?php echo esc_attr($atts['html_id']);?>.ct-contact-info .ct-contact-info-content a:hover, 
            #<?php echo esc_attr($atts['html_id']);?>.ct-contact-info .ct-contact-info-content a:hover i {
               color: <?php echo esc_attr($color_hover); ?>!important;
            }
        <?php endif; ?>">    
    </div>

    <div class="ct-contact-info-inner">
        <?php if(!empty($title)) : ?>
            <h3 class="ct-contact-title" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
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
			                <a href="tel:<?php echo esc_attr( $ctf_content ); ?>" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
			                	<i <?php if(!empty($icon_color)): ?> style="color: <?php echo esc_attr( $icon_color )?>"<?php endif;?> class="fac fac-phone"></i>			                	
			                	<?php echo wp_kses_post( $ctf_content  ); ?>
			                </a>
			                <?php break;

			            case 'email': ?>
			                <a href="mailto:<?php echo esc_attr( $ctf_content ); ?>" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
								<i  <?php if(!empty($icon_color)): ?> style="color: <?php echo esc_attr( $icon_color )?>"<?php endif;?> class="fa fa-envelope"></i>
			                	<?php echo wp_kses_post( $ctf_content  ); ?>
			                </a>
			                <?php break;

			            case 'address': ?>
			                <a href="http://maps.google.com/?q=<?php echo esc_attr( $ctf_content ); ?>" target="_blank" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
			                	<i  <?php if(!empty($icon_color)): ?> style="color: <?php echo esc_attr( $icon_color )?>"<?php endif;?> class="fac fac-map-marker"></i>
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
        <?php if(!empty($icon_image_url) && $icon_type == 'image' ) { ?>
            <div class="ct-icon">
                <img class="icon-main" src="<?php echo esc_url( $icon_image_url ); ?>" alt="<?php echo esc_attr( $title ); ?>"/>
            </div>
        <?php } else { ?>
            <?php if($icon_class):?>
                <div class="ct-icon">
                    <i class="<?php echo esc_attr($icon_class); ?> <?php if($icon_list == 'fontawesome5' && !empty($icon_weight)) { echo esc_attr($icon_weight); } ?>"></i>
                </div>
            <?php endif;?>
        <?php } ?>
	</div>
</div>