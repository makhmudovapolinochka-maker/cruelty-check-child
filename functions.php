<?php

define(
    'CRUELTY_CHECK_FONTS',
    'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Source+Serif+4:ital,wght@0,400;0,600;1,400&display=swap'
);

// Sur le site : polices, style.css du thème enfant, puis composant carte
add_action( 'wp_enqueue_scripts', function () {
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'cruelty-check-fonts', CRUELTY_CHECK_FONTS, array(), null );

    wp_enqueue_style(
        'cruelty-check-child-style',
        get_stylesheet_uri(),
        array(),
        $version
    );

    wp_enqueue_style(
        'cruelty-check-card',
        get_stylesheet_directory_uri() . '/assets/css/components/card.css',
        array( 'cruelty-check-child-style' ),
        $version
    );
} );

// Dans l'éditeur Gutenberg : les mêmes polices et le même composant carte
add_action( 'after_setup_theme', function () {
    add_editor_style( array(
        CRUELTY_CHECK_FONTS,
        'assets/css/components/card.css',
    ) );
} );