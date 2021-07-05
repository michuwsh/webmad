<?php

/**
 * Załączenie stylów i skryptów do motywu
 */
function webmad_style() {

  wp_enqueue_style( 'webmad-main-style', get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_style( 'webmad-animated-style', get_template_directory_uri() . '/assets/css/animated.css' );
  wp_enqueue_script( 'webmad-script-siema', get_template_directory_uri() . '/assets/js/siema.min.js' );
  wp_enqueue_script( 'webmad-script', get_template_directory_uri() . '/assets/js/main.js' );

}
add_action( 'wp_enqueue_scripts', 'webmad_style' );

/**
 * Rejestracja menu
 */

function webmad_menus() {

	$locations = array(
		'primary'  => __( 'Main menu', 'webmad' )
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'webmad_menus' );

/**
 * Webmad własny format menu
 */

function webmad_custom_menu( $menu_name = null ) {

    $webmad_menu = '';
 
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
  
       $menu = wp_get_nav_menu_object( $locations[$menu_name] );
       $menu_items = wp_get_nav_menu_items( $menu->term_id );
       $webmad_menu .= '<ul class="main-menu">';
       foreach($menu_items as $key => $item) {
        $webmad_menu .= '<li class="menu-item ' . ( ($key == 0) ? 'menu-item-active' : '') . '"><a class="menu-item-link" href="'.$item->url.'">'.$item->title.'</a></li>';
       }
       $webmad_menu .= '</ul>';
    }
    echo $webmad_menu;
 }

/**
 * Logo
 */

function webmad_setup(){

    // Własne logo w motywie
    add_theme_support( 'custom-logo', array(
      'height'      => 50, // wysokość logo
      'width'       => 67, // szerokość logo
      'flex-height' => false, // czy wysokość ma być elastyczna
      'flex-width'  => true, // czy szerokość ma być elastyczna
    ) );
  
}
add_action('after_setup_theme', 'webmad_setup');

/**
* Adding widget to site
*/

function my_widget_init() {
  register_sidebar( array(
      'name'          => 'Form contakt',
      'id'            => 'form-contakt',
      'before_widget' => ' ',
      'after_widget'  => ' ',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    )
  );

  register_sidebar( array(
      'name'          => 'Footer left',
      'id'            => 'footer-left',
      'before_widget' => ' ',
      'after_widget'  => ' ',
      'before_title'  => '',
      'after_title'   => '',
    ) 
  );

  register_sidebar( array(
    'name'          => 'Footer right',
    'id'            => 'footer-right',
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => '',
    'after_title'   => '',
  ) 
);
}

add_action( 'widgets_init', 'my_widget_init' );