<?php

    // Load in CSS
    function travel_enqueue_styles() {
        wp_enqueue_style( 'home', get_stylesheet_directory_uri() . '/assets/css/home.css', [], time(), 'all' );
        wp_enqueue_style( 'navigation', get_stylesheet_directory_uri() . '/assets/css/navigation.css', [], time(), 'all' );
    }
    add_action( 'wp_enqueue_scripts', 'travel_enqueue_styles' );
?>