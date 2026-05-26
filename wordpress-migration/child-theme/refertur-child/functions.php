<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('refertur-child', get_stylesheet_uri(), [], '0.1.0');
    wp_enqueue_style(
        'refertur-child-app',
        get_stylesheet_directory_uri() . '/assets/css/app.css',
        ['refertur-child'],
        '0.1.0'
    );
    wp_enqueue_script(
        'refertur-child-app',
        get_stylesheet_directory_uri() . '/assets/js/app.js',
        [],
        '0.1.0',
        true
    );
});
