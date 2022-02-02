<?php
//load css files
function pb_load_styles(){
    wp_enqueue_style('css-font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.css', array(), '4.7.0', 'all');
    wp_enqueue_style('css-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'pb_load_styles' );

//load js files
function pb_load_scripts(){
    wp_enqueue_script('js-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), false, true);
    wp_enqueue_script('js-toogle', get_template_directory_uri() . '/assets/js/toogle.js', array(), false, true);
    wp_enqueue_script('js-loading', get_template_directory_uri() . '/assets/js/loading.js', array(), false, true);
    wp_enqueue_script('js-scroll', get_template_directory_uri() . '/assets/js/scroll.js', array(), false, true);
    wp_enqueue_script('js-slideshow', get_template_directory_uri() . '/assets/js/slideshow.js', array(), false, true);
    wp_enqueue_script('js-weather', get_template_directory_uri() . '/assets/js/weather.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'pb_load_scripts' );

//registration menu location
function pb_regist_menu(){
    $locations = array(
        'primary_menu' => 'Primary Menu',
        'footer_menu'  => 'Footer menu',
        'sidebar_menu' => 'Sidebar menu'
    );

    register_nav_menus( $locations );
}
add_action( 'init', 'pb_regist_menu' );

//registration menu location
function pb_regist_sidebar(){
    $args = array(
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget' => '',
        'name' => 'main-sidebar',
        'id' => 'sidebar-1',
        'description' => 'Sidebar in main container'
    );

    register_sidebar( $args );
}
add_action( 'widgets_init', 'pb_regist_sidebar' );

//add active menu on current page
function special_nav_class($classes, $item, $args){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 4);

//support theme
function pb_support_theme(){
    //thumbnail post
    add_theme_support( 'post-thumbnails' );
    //dynamic title page
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'pb_support_theme' );

//read_time
function pb_read_time(){
    $total_words = str_word_count( get_the_content() );
    $word_per_second = 1.5;
    $minute = 60;
    $time_result = ( $total_words / $word_per_second ) / $minute;
    $result = floor( $time_result ) == 0 ? 1 : floor( $time_result );

    return $result;
}