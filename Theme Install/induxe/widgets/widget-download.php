<?php
class CS_Download_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'ct_download_widget',
            esc_html__('* Download', 'induxe'),
            array('description' => esc_html__('Download Widget', 'induxe'),)
        );
    }

    function widget($args, $instance) {
        global $woocommerce;

        extract($args);

        $title = isset($instance['title']) ? (!empty($instance['title']) ? $instance['title']: '') : '';
        $file_type = isset($instance['file_type']) ? (!empty($instance['file_type']) ? $instance['file_type']: '') : '';
        $download_link = isset($instance['download_link']) ? (!empty($instance['download_link']) ? $instance['download_link']: '') : '';
        ?>

        <?php if(!empty($title)) : ?>
            <div class="ct-download widget">
                <div class="ct-download-content">
                    <h3 class="widget-title ct-download-title"><?php echo esc_attr( $title ); ?></h3>
                    <?php if(!empty($file_type)) : ?>
                        <span><?php echo esc_attr( $file_type ); ?></span>
                    <?php endif; ?>
                    <a href="<?php echo esc_url($download_link); ?>">
                        <?php echo esc_html__('Download', 'induxe');?>
                    </a>
                </div>
            </div>
    <?php endif; }

    function update( $new_instance, $old_instance ) {
         $instance = $old_instance;
         $instance['title'] = strip_tags($new_instance['title']);
         $instance['file_type'] = strip_tags($new_instance['file_type']);
         $instance['download_link'] = strip_tags($new_instance['download_link']);

         return $instance;
    }

    function form( $instance ) {

         wp_enqueue_style('wp-color-picker');
         wp_enqueue_script('wp-color-picker');
         $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
         $file_type = isset($instance['file_type']) ? esc_attr($instance['file_type']) : '';
         $download_link = isset($instance['download_link']) ? esc_attr($instance['download_link']) : '';

         ?>
         <p><label for="<?php echo esc_url($this->get_field_id('title')); ?>"><?php esc_html_e( 'Title', 'induxe' ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>

         <p><label for="<?php echo esc_url($this->get_field_id('File Type')); ?>"><?php esc_html_e( 'File Type', 'induxe' ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('file_type') ); ?>" name="<?php echo esc_attr( $this->get_field_name('file_type') ); ?>" type="text" value="<?php echo esc_attr( $file_type ); ?>" /></p>

         <p><label for="<?php echo esc_url($this->get_field_id('Button Link')); ?>"><?php esc_html_e( 'Button Link', 'induxe' ); ?></label>
         <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('download_link') ); ?>" name="<?php echo esc_attr( $this->get_field_name('download_link') ); ?>" type="text" value="<?php echo esc_attr( $download_link ); ?>" /></p>

         </p>
    <?php
    }

}

add_action( 'widgets_init', 'register_download_widget' );
function register_download_widget(){
    if(function_exists('ct_allow_RegisterWidget')){
        ct_allow_RegisterWidget( 'CS_Download_Widget' );
    }
}

// function register_download_widget() {
//     register_widget('CS_Download_Widget');
// }
// add_action('widgets_init', 'register_download_widget'); ?>