<?php
extract(shortcode_atts(array(
    'id'        => '',
    'el_title'  => '',
    'title_color' => '',
    'title_line_height'=> '',
    'font_size' => '',
    
    'el_sub_title' => '',
    'sub_color' => '',
    'sub_font_size' => '',

    'animation' => '',
), $atts));
$animation_tmp = isset($animation) ? $animation : '';
$animation_classes = $this->getCSSAnimation( $animation_tmp );


if(class_exists('WPCF7')) { ?>
    <div class="ct-contact-form layout3 <?php echo esc_attr( $animation_classes )?>">
        <?php if(!empty($el_title)) : ?>
            <h3 class="ct-el-title" style="<?php if(!empty($title_color)) { echo 'color:'.esc_attr($title_color).';'; } if(!empty($font_size)) { echo 'font-size:'.esc_attr($font_size).'px;'; } if(!empty($title_line_height)) { echo 'line-height:'.esc_attr($title_line_height).'px;'; } ?>">
                <?php echo wp_kses_post( $el_title ); ?>
            </h3>
        <?php endif;?>       
        <div class="ct-contact-form-inner">
            <?php echo do_shortcode('[contact-form-7 id="'.esc_attr( $id ).'"]'); ?>
        </div>
       <?php if(!empty($el_sub_title)) : ?>
            <div class="ct-description" style="<?php if(!empty($sub_color)) { echo 'color:'.esc_attr($sub_color).';'; } if(!empty($sub_font_size)) { echo 'font-size:'.esc_attr($sub_font_size).'px;'; } ?>">
                <?php echo wp_kses_post( $el_sub_title ); ?>
            </div>
        <?php endif;?>       
    </div>
<?php } ?>






