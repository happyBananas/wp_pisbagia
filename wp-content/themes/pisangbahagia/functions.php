<?php

//load widget
require( get_template_directory()  . '/inc/widgets/widgets-init.php');

//load css files
function pisgia_load_styles(){

    wp_enqueue_style('css-font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.css', array(), '4.7.0', 'all');
    wp_enqueue_style('css-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'pisgia_load_styles' );

//load js files
function pisgia_load_scripts(){

    wp_enqueue_script('js-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), false, true);
    wp_enqueue_script('js-toogle', get_template_directory_uri() . '/assets/js/toogle.js', array(), false, true);
    wp_enqueue_script('js-loading', get_template_directory_uri() . '/assets/js/loading.js', array(), false, true);
    wp_enqueue_script('js-scroll', get_template_directory_uri() . '/assets/js/scroll.js', array(), false, true);

    if( is_front_page() ):
        wp_enqueue_script('js-slideshow', get_template_directory_uri() . '/assets/js/slideshow.js', array(), false, true);
    endif;

}

add_action( 'wp_enqueue_scripts', 'pisgia_load_scripts' );


//registration menu location
function pisgia_regist_menu(){

    $locations = array(
        'primary_menu' => 'Primary Menu',
        'footer_menu'  => 'Footer menu',
        'sidebar_menu' => 'Sidebar menu'
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'pisgia_regist_menu' );


//registration sidebar
function pisgia_regist_sidebar(){

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

add_action( 'widgets_init', 'pisgia_regist_sidebar' );


//add active menu on current page
function pisgia_nav_class($classes, $item, $args){
     if( in_array( 'current-menu-item' , $classes ) ){
             $classes[] = 'active ';
     }
     return $classes;
}
add_filter( 'nav_menu_css_class' , 'pisgia_nav_class' , 10 , 4);


//support theme
function pisgia_support_theme(){
    //thumbnail post
    add_theme_support( 'post-thumbnails' );
    //dynamic title page
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'pisgia_support_theme' );


//hapus tipe post tertentu dari hasil pencarian
function pisgia_remove_post_type_from_search() {

    global $wp_post_types;

    $wp_post_types['page']->exclude_from_search = true;
    $wp_post_types['attachment']->exclude_from_search = true;
}

add_action('init', 'pisgia_remove_post_type_from_search');


//read_time
function pisgia_read_time(){

    $total_words = str_word_count( get_the_content() );
    $word_per_second = 1.5;
    $minute = 60;
    $time_result = ( $total_words / $word_per_second ) / $minute;
    $result = floor( $time_result ) == 0 ? 1 : floor( $time_result );

    return $result;
}

//set view count to custome field in tbl postmeta
function pisgia_set_post_views($postID) {
    $count_key = 'pisgia_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);