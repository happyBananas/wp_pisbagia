<?php
class Pisgia_weather_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            // widget ID
            'pisgia_weather_widget',
            // widget name
            __('Pisangbahagia Weather Widget', 'pisgia_weather_widget_domain'),
            // widget description
            array ( 'description' => __( 'Pisangbahagia Weather Widget', 'pisgia_weather_widget_domain' ), )
        );
    }

    public function widget( $args, $instance ) {
        if( is_front_page() ){
            wp_enqueue_script('js-weather', get_template_directory_uri() . '/assets/js/weather.js', array(), false, true);

            $title = apply_filters( 'widget_title', $instance['title'] );
            echo $args['before widget'];

            if ( ! empty ( $title ) ){
                echo $args['before_title'] . $title . $args['after_title'];
            }

            // echo __( 'Greetings from Hostinger.com!', 'pisgia_weather_widget_domain' );
            echo "<div class='weather'></div>";

            echo $args['after_widget'];
        }
    }

    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ){
            $title = $instance[ 'title' ];
        }
        // else{
        //     $title = __( 'Default Title', 'pisgia_weather_widget_domain' );
        // }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
}