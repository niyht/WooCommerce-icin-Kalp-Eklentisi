<?php
/*
Plugin Name: Woo Heart Button
Description: Adds a heart button below the Add to Cart button on WooCommerce product so the websites
Version: 1.0
Author: Your Name
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue the JavaScript and CSS files
function woo_heart_button_scripts() {
    if (is_product()) {
        // Enqueue the JavaScript file
        wp_enqueue_script('woo-heart-button', plugin_dir_url(__FILE__) . 'heart-button.js', array(), '1.0', true);

        // Enqueue the CSS file
        wp_enqueue_style('woo-heart-button-css', plugin_dir_url(__FILE__) . 'heart.css', array(), '1.0', 'all');
    }
}

add_action('wp_enqueue_scripts', 'woo_heart_button_scripts');

// Add the heart button below the Add to Cart button
function woo_add_heart_button() {
    echo '<div id="heart-container">
                
                <button id="heart" type="button">❤️ 0 ❤️</button>
          </div>';
}

add_action('woocommerce_after_add_to_cart_button', 'woo_add_heart_button');
?>
