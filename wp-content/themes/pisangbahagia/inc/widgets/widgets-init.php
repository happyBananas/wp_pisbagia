<?php

require( get_template_directory()  . '/inc/widgets/widget-weather.php');

function pisgia_widgets_register() {

    register_widget( 'pisgia_weather_widget1' );

}

add_action( 'widgets_init', 'pisgia_widgets_register' );
