<?php
/**
 * Created by PhpStorm.
 * User: Atmarkcafe
 * Date: 8/27/2018
 * Time: 10:18 AM
 */
//include "C:/xampp/htdocs/diapers/wp-content/themes/metrostore/functions.php";

require dirname( __FILE__ ) . '/inc/init.php';

function diapers_theme_setup() {
    add_image_size( 'sanpham_thumb', 370, 300, false );
}
add_action('init', 'diapers_theme_setup', 10);

function remove_default_styles() {
    wp_dequeue_style( 'metrostore-style' );
}
add_action('wp_print_styles', 'remove_default_styles', 10 );

function diapers_load_theme_style() {
    wp_enqueue_style('parent-styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-styles', get_stylesheet_directory_uri() . '/style.css', array('parent-styles'));
}
add_action('wp_enqueue_scripts', 'diapers_load_theme_style', 15 );

