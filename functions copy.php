<?php

  add_theme_support( 'custom-logo' );
function load_theme_scripts()
{
  wp_register_style('style', get_template_directory_uri() . '/dist/style.css', array(), 2, 'all');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_theme_scripts');



function register_my_menus() {
  register_nav_menus(
      array(
        'primary' => esc_html__( 'Primary Menu', 'theme_wp' ),
          'footer' => __( 'Menu Footer' ),
          'header' =>__( 'Menu Header' ),
      )
  );
}

	register_sidebar( array(
		'name'          => __( 'Telefon', 'twentyfifteen' ),
		'id'            =>'header-1',
		'description'   => __( 'Tutaj należy dodać numer telefonu.', 'easylife' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


add_action( 'widgets_init', 'register_widget_areas' );
;
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
 acf_add_options_sub_page('Footer');
}
?>