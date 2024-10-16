<?php
extract(shortcode_atts(array(
    'id'        => '',
    
    'el_title'  => '',
    'title_color' => '',
    'title_line_height'=> '',
    'font_size' => '',
    
    'box_shadow_layout' => '',
    'postion_setting' => '',
    'animation' => '',
), $atts));
$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );


if(class_exists('WPCF7')) { ?>
    <div class="ct-contact-form layout1 <?php echo esc_attr( $box_shadow_layout.' '.$postion_setting.' '.$animation_classes )?>">
        <?php if(!empty($el_title)) : ?>
            <h3 class="ct-el-title" style="<?php if(!empty($title_color)) { echo 'color:'.esc_attr($title_color).';'; } if(!empty($font_size)) { echo 'font-size:'.esc_attr($font_size).'px;'; } if(!empty($title_line_height)) { echo 'line-height:'.esc_attr($title_line_height).'px;'; } ?>">
                <?php echo wp_kses_post( $el_title ); ?>
            </h3>
        <?php endif;?>        
        <div class="ct-contact-form-inner">
            <?php echo do_shortcode('[contact-form-7 id="'.esc_attr( $id ).'"]'); ?>
        </div>
    </div>
<?php } ?>

