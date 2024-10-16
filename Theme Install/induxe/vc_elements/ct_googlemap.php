<?php
vc_map(array(
    'name' => 'Google Map',
    'base' => 'ct_googlemap',
    'class'    => 'ct-icon-element',
    'description' => esc_html__( 'Google Map Displayed', 'induxe' ),
    'category' => esc_html__('CaseThemes Shortcodes', 'induxe'),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => esc_html__('API Key', 'induxe'),
            'param_name' => 'api',
            'value' => '',
            'description' => esc_html__('Enter you api key of map, get key from (//console.developers.google.com)', 'induxe')
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Address', 'induxe'),
            'param_name' => 'address',
            'value' => 'New York, United States',
            'description' => esc_html__('Enter address of Map', 'induxe')
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Coordinate', 'induxe'),
            'param_name' => 'coordinate',
            'value' => '',
            'description' => esc_html__('Enter coordinate of Map, format input (latitude, longitude)', 'induxe')
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Click Show Info window', 'induxe'),
            'param_name' => 'infoclick',
            'value' => array(
                esc_html__('Yes, please', 'induxe') => true
            ),
            'description' => esc_html__('Click a marker and show info window (Default Show).', 'induxe')
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Marker Coordinate', 'induxe'),
            'param_name' => 'markercoordinate',
            'value' => '',
            'description' => esc_html__('Enter marker coordinate of Map, format input (latitude, longitude)', 'induxe')
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Marker Title', 'induxe'),
            'param_name' => 'markertitle',
            'value' => '',
            'description' => esc_html__('Enter Title Info windows for marker', 'induxe')
        ),
        array(
            'type' => 'textarea',
            'heading' => esc_html__('Marker Description', 'induxe'),
            'param_name' => 'markerdesc',
            'value' => '',
            'description' => esc_html__('Enter Description Info windows for marker', 'induxe')
        ),
        array(
            'type' => 'attach_image',
            'heading' => esc_html__('Marker Icon', 'induxe'),
            'param_name' => 'markericon',
            'value' => '',
            'description' => esc_html__('Select image icon for marker', 'induxe')
        ),
        array(
            'type' => 'textarea_raw_html',
            'heading' => esc_html__('Marker List', 'induxe'),
            'param_name' => 'markerlist',
            'value' => '',
            'description' => esc_html__('[{"coordinate":"41.058846,-73.539423","icon":"","title":"title demo 1","desc":"desc demo 1"},{"coordinate":"40.975699,-73.717636","icon":"","title":"title demo 2","desc":"desc demo 2"},{"coordinate":"41.082606,-73.469718","icon":"","title":"title demo 3","desc":"desc demo 3"}]', 'induxe')
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Info Window Max Width', 'induxe'),
            'param_name' => 'infowidth',
            'value' => '200',
            'description' => esc_html__('Set max width for info window', 'induxe')
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Map Type', 'induxe'),
            'param_name' => 'type',
            'value' => array(
                'ROADMAP' => 'ROADMAP',
                'HYBRID' => 'HYBRID',
                'SATELLITE' => 'SATELLITE',
                'TERRAIN' => 'TERRAIN'
            ),
            'description' => esc_html__('Select the map type.', 'induxe')
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Style Template', 'induxe'),
            'param_name' => 'style',
            'value' => array(
                'Default' => '',
                'Custom' => 'custom',
                'Light Monochrome' => 'light-monochrome',
                'Blue water' => 'blue-water',
                'Midnight Commander' => 'midnight-commander',
                'Paper' => 'paper',
                'Red Hues' => 'red-hues',
                'Hot Pink' => 'hot-pink'
            ),
            'description' => 'Select your heading size for title.'
        ),
        array(
            'type' => 'textarea_raw_html',
            'heading' => esc_html__('Custom Template', 'induxe'),
            'param_name' => 'content',
            'value' => '',
            'description' => esc_html__('Get template from //snazzymaps.com', 'induxe'),
            'dependency' => array(
                'element'=>'style',
                'value'=>array(
                    'custom',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Zoom', 'induxe'),
            'param_name' => 'zoom',
            'value' => '13',
            'description' => esc_html__('zoom level of map, default is 13', 'induxe')
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Width', 'induxe'),
            'param_name' => 'width',
            'value' => 'auto',
            'description' => esc_html__('Width of map without pixel, default is auto', 'induxe')
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Height', 'induxe'),
            'param_name' => 'height',
            'value' => '350px',
            'description' => esc_html__('Height of map without pixel, default is 350px', 'induxe')
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Scroll Wheel', 'induxe'),
            'param_name' => 'scrollwheel',
            'value' => array(
                esc_html__('Yes, please', 'induxe') => true
            ),
            'description' => esc_html__('If false, disables scrollwheel zooming on the map. The scrollwheel is disable by default.', 'induxe')
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Pan Control', 'induxe'),
            'param_name' => 'pancontrol',
            'value' => array(
                esc_html__('Yes, please', 'induxe') => true
            ),
            'description' => esc_html__('Show or hide Pan control.', 'induxe')
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Zoom Control', 'induxe'),
            'param_name' => 'zoomcontrol',
            'value' => array(
                esc_html__('Yes, please', 'induxe') => true
            ),
            'description' => esc_html__('Show or hide Zoom Control.', 'induxe')
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Scale Control', 'induxe'),
            'param_name' => 'scalecontrol',
            'value' => array(
                esc_html__('Yes, please', 'induxe') => true
            ),
            'description' => esc_html__('Show or hide Scale Control.', 'induxe')
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Map Type Control', 'induxe'),
            'param_name' => 'maptypecontrol',
            'value' => array(
                esc_html__('Yes, please', 'induxe') => true
            ),
            'description' => esc_html__('Show or hide Map Type Control.', 'induxe')
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Street View Control', 'induxe'),
            'param_name' => 'streetviewcontrol',
            'value' => array(
                esc_html__('Yes, please', 'induxe') => true
            ),
            'description' => esc_html__('Show or hide Street View Control.', 'induxe')
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Over View Map Control', 'induxe'),
            'param_name' => 'overviewmapcontrol',
            'value' => array(
                esc_html__('Yes, please', 'induxe') => true
            ),
            'description' => esc_html__('Show or hide Over View Map Control.', 'induxe')
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Extra class name', 'induxe' ),
            'param_name' => 'el_class',
            'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in Custom CSS.', 'induxe' ),
        ),
    )
));

class WPBakeryShortCode_ct_googlemap extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>