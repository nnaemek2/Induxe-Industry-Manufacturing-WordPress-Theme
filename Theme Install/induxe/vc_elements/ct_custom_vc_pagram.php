<?php
/*
 * VC
 */
vc_add_param("vc_section", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("Custom Style", 'induxe'),
    "param_name" => "cms_section_class",
    "value" => array(
        'None' => '', 
        'Section Overlay' => 'section-overlay',
        'Section Visible' => 'section-visible',
        'Section Background Postion Top' => 'section-bg-top',
        'Section Background Postion Right' => 'section-bg-right',
        'Section Background Postion Bottom' => 'section-bg-bottom',
        'Section Background Postion Bottom z1' => 'section-bg-bottom section-bg-bottom-z1',
        'Section Background Postion Left' => 'section-bg-left',
        'Section Background Image Scoll' => 'bg-image-scoll',
    ),
    "group" => esc_html__("Customs", 'induxe'),   
));


vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("Custom Style", 'induxe'),
    "param_name" => "ct_row_class",
    "value" => array(
        'None' => '',
        'Row Overlay' => 'row-overlay',
        'Row Overlay Black' => 'row-overlay-black',
        'Row Background Color Primary' => 'bg-primary',
        'Row Background Color Secondary' => 'bg-secondary',
        'Row Visible' => 'row-visible',
        'Row Flex' => 'row-flex',
        'Row Padding Right Remove' => 'rm-padding-right',
    ),
    "group" => esc_html__("Customs", 'induxe'),
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("Background Image Position", 'induxe'),
    "param_name" => "bg_image_position",
    "value" => array(
        'Inherit' => 'bg-image-ps-inherit',
        'Left'    => 'bg-image-ps-left',
        'Top'     => 'bg-image-ps-top',
        'Center'  => 'bg-image-ps-center',
        'Right'   => 'bg-image-ps-right',
        'Bottom'  => 'bg-image-ps-bottom',
    ),
    "group" => esc_html__("Design Options", 'induxe'),
));

vc_add_param("vc_column", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("Custom Style", 'induxe'),
    "param_name" => "ct_column_class",
    "value" => array(
        'None' => '',
        'Column Overlay' => 'col-overlay',
        'Remove Padding (Left/Right) X2Large Devices ( < 1600px ) to 60px' => 'rm-padding-x2lg',
        'Remove Padding (Left/Right) XLarge Devices ( < 1400px ) to 60px' => 'rm-padding-xxl',
        'Remove Padding (Left/Right) XLarge Devices ( < 1400px ) to 30px' => 'rm-padding-xlg',
        'Remove Padding (Left/Right) Large Devices ( < 1199px ) to 15px' => 'rm-padding-lg',
        'Remove Padding (Left/Right) Large Devices ( < 1199px ) to 0px' => 'rm-padding-0lg',
        'Remove Padding (Left/Right) Medium Devices ( < 991px ) to 15px' => 'rm-padding-md',
        'Remove Padding (Left/Right) Small Devices ( < 767px ) to 15px' => 'rm-padding-sm',
        'Remove Padding (Left/Right) Mini Devices ( < 575px ) to 15px' => 'rm-padding-xs',
        'Remove Margin (Top/Right/Bottom/Left) Small Devices ( < 767px ) to 0px' => 'rm-margin-sm',
    ),
    "group" => esc_html__("Customs", 'induxe'),
));

vc_add_param("vc_column", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("Column Offset With Container 1170px", 'induxe'),
    "param_name" => "ct_column_offset",
    "value" => array(
        'None' => '',
        'Offset Container Left' => 'col-offset-left',
        'Offset Container Right' => 'col-offset-right',
        'Offset Container Left Medium' => 'col-offset-left-md',
        'Offset Container Right Medium' => 'col-offset-right-md',
    ),
    "group" => esc_html__("Customs", 'induxe'),
));
vc_add_param("vc_column", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("Remove Space", 'induxe'),
    "param_name" => "ct_column_class_space",
    "value" => array(
        'No' => '',
        'Remove Margin (Left/Right) Large Devices ( < 1199px ) to (15px)' => 'rm-cl-margin-lg-15px',
        'Remove Margin (Left/Right) Large Devices ( < 1199px ) to (-15px)' => 'rm-cl-margin-lg-015px',
    ),
    "group" => esc_html__("Customs", 'induxe'),
));
vc_add_param("vc_column", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("Background Image Position", 'induxe'),
    "param_name" => "bg_image_column_position",
    "value" => array(
        'Inherit' => 'bg-image-cl-ps-inherit',
        'Left'    => 'bg-image-cl-ps-left',
        'Top'     => 'bg-image-cl-ps-top',
        'Center'  => 'bg-image-cl-ps-center',
        'Right'   => 'bg-image-cl-ps-right',
        'Bottom'  => 'bg-image-cl-ps-bottom',
    ),
    "group" => esc_html__("Design Options", 'induxe'),
));

vc_add_param("vc_column_inner", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("Custom Style", 'induxe'),
    "param_name" => "ct_column_inner_class",
    "value" => array(
        'None' => '',
        'Remove Padding (Left/Right) Large Devices ( < 1199px ) to 30px' => 'rm-padding-lg30',
        'Remove Padding (Left/Right) Large Devices ( < 1199px ) to 15px' => 'rm-padding-lg',
        'Remove Padding (Left/Right) Medium Devices ( < 991px ) to 15px' => 'rm-padding-md',
        'Remove Padding (Left/Right) Small Devices ( < 767px ) to 15px' => 'rm-padding-sm',
        'Remove Padding (Left/Right) Mini Devices ( < 575px ) to 15px' => 'rm-padding-xs',
    ),
    "group" => esc_html__("Customs", 'induxe'),
));

vc_add_param("vc_column_inner", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("Remove Space", 'induxe'),
    "param_name" => "ct_column_inner_class_space",
    "value" => array(
        'No' => '',
        'Remove Margin (Left/Right) Large Devices ( < 1199px ) to (15px)' => 'rm-margin-lg-15px',
        'Remove Margin (Left/Right) Large Devices ( < 1199px ) to (-15px)' => 'rm-margin-lg-015px',
    ),
    "group" => esc_html__("Customs", 'induxe'),
));

vc_add_param("vc_column_inner",
    array(
        'type' => 'animation_style',
        'heading' => esc_html__( 'Animation', 'induxe' ),
        'param_name' => 'animation_column',
        'description' => esc_html__( 'Choose your animation style', 'induxe' ),
        'admin_label' => false,
        'weight' => 0,
        "group" => esc_html__("Customs", 'induxe'),
    )
);

// vc_tta_accordion
//--------------------------------------------------
vc_remove_param( 'vc_tta_accordion', 'title' );
vc_remove_param( 'vc_tta_accordion', 'style' );
vc_remove_param( 'vc_tta_accordion', 'shape' );
vc_remove_param( 'vc_tta_accordion', 'color' );
vc_remove_param( 'vc_tta_accordion', 'no_fill' );
vc_remove_param( 'vc_tta_accordion', 'spacing' );
vc_remove_param( 'vc_tta_accordion', 'gap' );
vc_remove_param( 'vc_tta_accordion', 'c_align' );
vc_remove_param( 'vc_tta_accordion', 'autoplay' );
vc_remove_param( 'vc_tta_accordion', 'c_icon' );
vc_remove_param( 'vc_tta_accordion', 'c_position' );
vc_add_param("vc_tta_accordion",
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Styles', 'induxe' ),
        'param_name' => 'style',
        "value" => array(
            'Default' => 'default',
            'Plus' => 'style-plus',
        ),
    )
);

// vc_tta_tabs
//--------------------------------------------------
vc_remove_param( 'vc_tta_tabs', 'title' );
vc_remove_param( 'vc_tta_tabs', 'style' );
vc_remove_param( 'vc_tta_tabs', 'shape' );
vc_remove_param( 'vc_tta_tabs', 'color' );
vc_remove_param( 'vc_tta_tabs', 'spacing' );
vc_remove_param( 'vc_tta_tabs', 'gap' );
vc_add_param("vc_tta_tabs",
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Styles', 'induxe' ),
        'param_name' => 'style',
        "value" => array(
            'Default' => 'default',
        ),
    )
);

vc_remove_param( 'vc_tta_tour', 'title' );
vc_remove_param( 'vc_tta_tour', 'style' );
vc_remove_param( 'vc_tta_tour', 'shape' );
vc_remove_param( 'vc_tta_tour', 'color' );
vc_remove_param( 'vc_tta_tour', 'spacing' );
vc_remove_param( 'vc_tta_tour', 'gap' );
vc_add_param("vc_tta_tour",
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Styles', 'induxe' ),
        'param_name' => 'style',
        "value" => array(
            'Default' => 'tour-default',
        ),
    )
);

// VC Image
//--------------------------------------------------
vc_add_param("vc_single_image",
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Image alignment small (768px < Screen < 991px)', 'induxe' ),
        'param_name' => 'ct_image_align_md',
        "value" => array(
            'Inherit' => 'inherit',
            'Left' => 'image_align_sm_left',
            'Center' => 'image_align_sm_center',
            'Right' => 'image_align_sm_right',
        ),
        "group" => esc_html__("Styles", 'induxe'),
    )
);
vc_add_param("vc_single_image",
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Image alignment small (Screen < 767px)', 'induxe' ),
        'param_name' => 'ct_image_align',
        "value" => array(
            'Inherit' => 'inherit',
            'Left' => 'image_align_xs_left',
            'Center' => 'image_align_xs_center',
            'Right' => 'image_align_xs_right',
        ),
        "group" => esc_html__("Styles", 'induxe'),
    )
);

// VC Text Block
//--------------------------------------------------
vc_add_param("vc_column_text",
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Text Align', 'induxe' ),
        'param_name' => 'text_align',
        "value" => array(
            'Left' => '',
            'Center' => 'text-center',
            'Right' => 'text-right',
        ),
    )
);

vc_add_param("vc_column_text",
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Text Style', 'induxe' ),
        'param_name' => 'text_style',
        "value" => array(
            'Default' => '',
            'Text Heading' => 'text-heading',
            'Text Heading Italic' => 'text-heading-italic',
            'Text Block' => 'text-block1',
        ),
    )
);

vc_remove_param( 'vc_pie', 'title' );
vc_remove_param( 'vc_pie', 'label_value' );