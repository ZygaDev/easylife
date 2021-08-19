<?php

  add_theme_support( 'custom-logo' );
function load_theme_scripts()
{
  wp_register_style('style', get_template_directory_uri() . '/dist/style.css', array(), 2, 'all');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_theme_scripts');

add_filter('show_admin_bar', '__return_false');

function register_my_menus() {
  register_nav_menus(
      array(
        'primary' => esc_html__( 'Primary Menu', 'theme_wp' ),
          'footer' => __( 'Menu Footer' ),
          'header' =>__( 'Menu Header' ),
      )
  );
}
add_action( 'after_setup_theme', 'register_my_menus' );
function register_widget_areas() {
	register_sidebar( array(
		'name'          => __( 'Telefon', 'twentyfifteen' ),
		'id'            =>'header-1',
		'description'   => __( 'Tutaj należy dodać numer telefonu.', 'easylife' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  }

add_action( 'widgets_init', 'register_widget_areas' );
;
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
 acf_add_options_sub_page('Footer');
}

if (function_exists('acf_register_block_type')){
  add_action('acf/init', 'register_acf_block_types');
}
function register_acf_block_types(){
  acf_register_block_type(
    array(
      'name'              => 'Main',
      'title'             => __('Main'),
      'description'       => __('Strona główna.'),
      'render_template'   => 'template-parts/blocks/testimonial/main.php',
      'category'		=> 'formatting',
      'enqueue_assets' => function(){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/style.css' );
        wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/dist/app.js', '', true );
      }

    )
    );
    acf_register_block_type(
      array(
        'name'              => 'services',
        'title'             => __('services'),
        'description'       => __('Strona główna.'),
        'render_template'   => 'template-parts/blocks/testimonial/services.php',
        'category'		=> 'formatting',
        'enqueue_assets' => function(){
          wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/style.css' );
          wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/dist/app.js', '', true );
        }

      )
      );
      acf_register_block_type(
        array(
          'name'              => 'baza',
          'title'             => __('baza'),
          'description'       => __('Strona główna.'),
          'render_template'   => 'template-parts/blocks/testimonial/baza.php',
          'category'		=> 'formatting',
          'enqueue_assets' => function(){
            wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/style.css' );
            wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/dist/app.js', '', true );
          }

        )
        );
        acf_register_block_type(
          array(
            'name'              => 'contact',
            'title'             => __('contact'),
            'description'       => __('Strona główna.'),
            'render_template'   => 'template-parts/blocks/testimonial/contact.php',
            'category'		=> 'formatting',
            'enqueue_assets' => function(){
              wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/style.css' );
              wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/dist/app.js', '', true );
            }

          )
          );
          acf_register_block_type(
            array(
              'name'              => 'usluga',
              'title'             => __('usluga'),
              'description'       => __('Strona główna.'),
              'render_template'   => 'template-parts/blocks/testimonial/usluga.php',
              'category'		=> 'formatting',
              'enqueue_assets' => function(){
                wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/style.css' );
                wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/dist/app.js', '', true );
              }

            )
            );
            acf_register_block_type(
              array(
                'name'              => 'allblog',
                'title'             => __('allblog'),
                'description'       => __('Strona główna.'),
                'render_template'   => 'template-parts/blocks/testimonial/allblog.php',
                'category'		=> 'formatting',
                'enqueue_assets' => function(){
                  wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/style.css' );
                  wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/dist/app.js', '', true );
                }

              )
              );
              acf_register_block_type(
                array(
                  'name'              => 'pytania',
                  'title'             => __('pytania'),
                  'description'       => __('Strona główna.'),
                  'render_template'   => 'template-parts/blocks/testimonial/qa.php',
                  'category'		=> 'formatting',
                  'enqueue_assets' => function(){
                    wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/style.css' );
                    wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/dist/app.js', '', true );
                  }

                )
                );
}
?>