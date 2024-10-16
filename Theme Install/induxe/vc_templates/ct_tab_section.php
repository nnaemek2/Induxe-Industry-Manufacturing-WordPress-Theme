<?php
	$atts = array_merge( array(
		'icon_flaticon'  => '',
		'title'  => '',
	), $atts );
	global $tab_id, $tabs_data, $tabs_data_section, $active_section;
	$active               = ( $active_section == ++ $tab_id ) ? 'active' : '';
	$active_content       = ( $active_section == $tab_id ) ? 'show active' : '';
	$id                   = 'tab-' . uniqid();
	$tabs_data_section[ $tab_id ] = '<li class="nav-item"><a id="tab-section-' . $id . '" class="nav-link '.$active.'" data-toggle="tab" href="#tab-content-' . $id . '" aria-controls="tab-content-' . $id . '" aria-selected="true"><i class="'.esc_attr($atts['icon_flaticon']) .'"></i>'. $atts['title'] . '</a></li>';
	$tabs_data[ $tab_id ] = '<div id="tab-content-' . $id . '" class="tab-pane fade '.$active_content.'" role="tabpanel" aria-labelledby="tab-section-' . $id . '">' . do_shortcode( $content ) . '</div>';
?>