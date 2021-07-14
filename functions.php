<?php

function load_theme_scripts()
{
  wp_register_style('main', get_template_directory_uri() . '/dist/main.css', array(), 2, 'all');
  wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_theme_scripts');

add_filter('show_admin_bar', '__return_false');
?>