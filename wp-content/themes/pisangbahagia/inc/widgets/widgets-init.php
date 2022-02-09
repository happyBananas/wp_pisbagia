<?php

require( get_template_directory()  . '/inc/widgets/widget-weather.php');
require( get_template_directory()  . '/inc/widgets/widget-popular-post.php');

function pisgia_widgets_register() {

    register_widget( 'pisgia_weather_widget' );
    register_widget( 'pisgia_popular_post_widget' );

}

add_action( 'widgets_init', 'pisgia_widgets_register' );
