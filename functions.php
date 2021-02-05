<?php

function bootstrap() {

    /*Bootstrap*/
    wp_register_style( 'bootstrap-stylesheet', get_template_directory_uri() . '/css/bootstrap.min.css', 
    array(), false, 'all');
    wp_enqueue_style('bootstrap-stylesheet');
    
    /* Custom Style */
    wp_register_style( 'style', get_template_directory_uri() . '/style.css', 
        array(), false, 'all');
    wp_enqueue_style('style');

    wp_register_style( 'custom-style', get_template_directory_uri() . '/custom-style.css', 
    array(), false, 'all');
    wp_enqueue_style('custom-style');

    wp_register_style('fa', get_template_directory_uri(). '/fontawesome/css/fontawesome.css',array(), false, 'all');
    wp_enqueue_style('fa');
    wp_register_style('fa-solid', get_template_directory_uri(). '/fontawesome/css/solid.css',array(), false, 'all');
    wp_enqueue_style('fa-solid');
}
add_action( 'wp_enqueue_scripts', 'bootstrap');

/*Jquery*/
function include_jquery() {

    wp_deregister_script( 'jquery' );

    wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/jquery-3-5-1.min.js', '', 1 , true );

}
add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs() {
    wp_register_script( 'customjs', get_template_directory_uri(). '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action( 'wp_enqueue_scripts', 'loadjs');

/*Menu Support*/
add_theme_support('menus');
register_nav_menus(
    array(

        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);


add_filter( 'embed_defaults', 'modify_embed_defaults' );
 
function modify_embed_defaults() {
    return array(
        'width'  => 900, 
    );
}



add_theme_support( 'post-thumbnails' );


?>