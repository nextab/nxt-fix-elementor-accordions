<?php
/**
* Plugin Name: Fix Elementor Accordions
* Description: This minimalistic plugin ensures that a user scrolls to the top of an accordion item in Elementor after clicking on the title.
* Version: 1.0
* Author: nexTab - Oliver Gehrmann
*/

// Enqueue the JavaScript for the frontend
function nxt_content_blocker_enqueue_frontend_scripts() {
	wp_enqueue_script('nxt-content-blocker', plugin_dir_url(__FILE__) . 'js/nxt-content-blocker-frontend.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'nxt_content_blocker_enqueue_frontend_scripts');

function nxt_fea_load_script() {
	wp_register_script('nxt-fix-elementor-accordions-script', plugin_dir_url(__FILE__) . 'js/nxt-fix-elementor-accordions-script.js', ['elementor-dialog','elementor-dev-tools','elementor-common-modules','jquery'], '', true);
	wp_enqueue_script('nxt-fix-elementor-accordions-script');
}
add_action( 'wp_enqueue_scripts', 'nxt_fea_load_script', 9999);