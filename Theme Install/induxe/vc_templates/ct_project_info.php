<?php
extract(shortcode_atts(array(
    'ctf_items'  => '',
    'animation'  => '',
    'el_class'  => '',
), $atts));
$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );
$ctf_item = array();
$ctf_item = (array) vc_param_group_parse_atts($ctf_items);

?>

<div id="<?php echo esc_attr($atts['html_id']);?>" class="ct-project-info <?php echo esc_attr( $el_class.' '.$animation_classes )?>">
    <div class="ct-project-info-inner">
	    <?php foreach ($ctf_item as $key => $value) {
            $ct_label = isset($value['ct_label']) ? $value['ct_label'] : '';
	    	$ctf_content = isset($value['ctf_content']) ? $value['ctf_content'] : '';
	    	?>
	    	<div class="ct-project-item" >
                <label><?php echo wp_kses_post( $ct_label  ); ?></label>
                <span><?php echo wp_kses_post( $ctf_content  ); ?></span>
			</div>
	    <?php } ?>
	</div>
</div>