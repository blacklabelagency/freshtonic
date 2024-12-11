<?php


function cardea_wp_child_enqueue_styles() {  
    wp_enqueue_style( 'cardea-main-theme-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'cardea-child-main-theme-style',get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'cardea_wp_child_enqueue_styles', 11);

function cardea_child_lang_setup() {
    load_child_theme_textdomain( 'cardea-wp', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'cardea_child_lang_setup' );

?>