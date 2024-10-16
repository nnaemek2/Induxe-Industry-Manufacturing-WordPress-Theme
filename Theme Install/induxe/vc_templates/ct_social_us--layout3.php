<?php
    extract(shortcode_atts(array(
    // Title
    'title'             => '',              
    'title_color'       => '',
    'title_font_size'   => '',
    'title_line_height' => '',
    'font_weight'       => '',
    'text_transform'    => '',
    'margin_botton'    => '',    

    'social_list'       => '',
    'style'             => 'text-left',
    //Icon Setting
    'bg_icon'           => '',
    'icon_color'        => '',
    'border_icon'       => '',

    'bg_icon_hover'     => '',
    'icon_color_hover'  => '',
), $atts));
$uqid = uniqid();
$social_lists = array();
$social_lists = (array) vc_param_group_parse_atts($social_list);

$styles_title = array(
    'color'          => $title_color,
    'font-size'      => $title_font_size.'px',
    'line-height'    => $title_line_height,
    'text-transform' => $text_transform,
    'font-weight'    => $font_weight,
    'margin-bottom'  => $margin_botton.'px',
);
$title_styles = '';
foreach ($styles_title as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $title_styles .= $key . ':' . $value . ';';
    }
}

$styles_icon = array(
    'color'          => $icon_color,
    'border-color'   => $border_icon,
);
$icon_styles = '';
foreach ($styles_icon as $key => $value) {
    if (!empty($value) && $value != 'px') {
        $icon_styles .= $key . ':' . $value . ';';
    }
}

?>
<div id="ct-social-us-<?php echo esc_attr($uqid);?>" class="ct-social-us layout3 <?php echo esc_attr( $style ); ?>">
    <div class="ct-inline-css"  data-css="<?php if( !empty($bg_icon_hover)) : ?>
                #ct-social-us-<?php echo esc_attr($uqid);?>.ct-social-us ul li a:hover {
                    background-color: <?php echo esc_attr($bg_icon_hover); ?>!important;
                    border: 1px solid <?php echo esc_attr($bg_icon_hover); ?>!important;
                }
                <?php endif; ?>
                <?php if( !empty($icon_color_hover)) : ?>
                        #ct-social-us-<?php echo esc_attr($uqid);?>.ct-social-us ul li a:hover {
                           color: <?php echo esc_attr($icon_color_hover); ?>!important;
                        }
                <?php endif; ?>
        ">
    </div>
    <div class="ct-inner-layout">
        <?php if(!empty($title)) : ?>
            <label class="ct-social-title" <?php echo !empty($title_styles) ? 'style="' . esc_attr($title_styles) . '"' : '' ?>>
                <?php echo wp_kses_post( $title ); ?>
            </label>
        <?php endif;?>

        <ul>
            <?php 
                foreach ($social_lists as $key => $value) {
                $icon_class = isset($value['icon_list']) ? $value['icon_list'] : '';
                if( $icon_class == 'fa fa-facebook') {
                    $url = induxe_get_opt( 'social_facebook_url' );    
                }
                elseif ( $icon_class == 'fa fa-twitter' ) {
                    $url = induxe_get_opt( 'social_twitter_url' );  
                }
                elseif ( $icon_class == 'fa fa-google-plus' ) {
                    $url = induxe_get_opt( 'social_google_url' );  
                }
                elseif ( $icon_class == 'fa fa-linkedin' ) {
                    $url = induxe_get_opt( 'social_inkedin_url' );  
                }
                elseif ( $icon_class == 'fa fa-twitter' ) {
                    $url = induxe_get_opt( 'social_twitter_url' );  
                }
                elseif ( $icon_class == 'fa fa-rss' ) {
                    $url = induxe_get_opt( 'social_rss_url' );  
                }
                elseif ( $icon_class == 'fa fa-instagram' ) {
                    $url = induxe_get_opt( 'social_instagram_url' );  
                }

                elseif ( $icon_class == 'fa fa-skype' ) {
                    $url = induxe_get_opt( 'social_skype_url' );  
                }
                elseif ( $icon_class == 'fa fa-twitter' ) {
                    $url = induxe_get_opt( 'social_pinterest_url' );  
                }
                elseif ( $icon_class == 'fa fa-vimeo' ) {
                    $url = induxe_get_opt( 'social_vimeo_url' );  
                }
                elseif ( $icon_class == 'fa fa-youtube' ) {
                    $url = induxe_get_opt( 'social_youtube_url' );  
                }
                elseif ( $icon_class == 'fa fa-yelp' ) {
                    $url = induxe_get_opt( 'social_yelp_url' );  
                }
                elseif ( $icon_class == 'fa fa-tumblr' ) {
                    $url = induxe_get_opt( 'social_tumblr_url' );  
                }
                elseif ( $icon_class == 'fa fa-tripadvisor' ) {
                    $url = induxe_get_opt( 'social_tripadvisor_url' );  
                }
                
            ?>
                <li class="item-social">
                    <a <?php echo !empty($icon_styles) ? 'style="' . esc_attr($icon_styles) . '"' : '' ?> href="<?php echo esc_url($url)?>">
                        <i class="<?php echo esc_attr( $icon_class ); ?>"></i>    
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>