<?php
/**
 * Plugin Name: Refertur Site Core
 * Description: Helper plugin for CTA buttons, AI-links, schema helpers and migration utilities.
 * Version: 0.1.0
 * Author: Leonid D
 */

if (!defined('ABSPATH')) exit;

add_shortcode('refertur_cta', function ($atts) {
    $atts = shortcode_atts([
        'type' => 'tg',
        'label' => 'Написать',
        'message' => 'Запрос с сайта refertur.net'
    ], $atts);

    return sprintf(
        '<button class="rt-cta-btn" data-open-messenger data-type="%s" data-message="%s">%s</button>',
        esc_attr($atts['type']),
        esc_attr($atts['message']),
        esc_html($atts['label'])
    );
});
