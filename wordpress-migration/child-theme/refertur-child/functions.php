<?php

add_action('wp_enqueue_scripts', function () {
    // Parent theme style
    wp_enqueue_style('refertur-child-parent', get_template_directory_uri() . '/style.css');

    // Child theme style
    wp_enqueue_style('refertur-child', get_stylesheet_uri(), ['refertur-child-parent'], '0.1.1');

    // Custom CSS (Reveal animations, FAQ, Messenger)
    wp_enqueue_style(
        'refertur-child-custom',
        get_stylesheet_directory_uri() . '/assets/css/custom.css',
        ['refertur-child'],
        '0.1.1'
    );

    // Custom JS (Reveal, Analytics placeholders)
    wp_enqueue_script(
        'refertur-child-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        [],
        '0.1.1',
        true
    );
});
