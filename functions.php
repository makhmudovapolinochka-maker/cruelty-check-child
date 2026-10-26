<?php
/**
 * Fonctions du thème enfant Cruelty Check
 */

// Charge le fichier style.css du thème enfant
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'cruelty-check-child-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
} );