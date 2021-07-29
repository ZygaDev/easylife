<?php

function load_theme_scripts()
{
  wp_register_style('style', get_template_directory_uri() . '/dist/style.css', array(), 2, 'all');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_theme_scripts');

add_filter('show_admin_bar', '__return_false');
?>