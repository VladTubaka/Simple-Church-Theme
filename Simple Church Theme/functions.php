<?php

register_nav_menu( 'primary', __( 'Primary Menu') );


function simpleChurchTheme_resources() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display+SC|Roboto|Playfair+Display' );
  wp_register_script( 'scripts.js', get_template_directory_uri() . '/js/scripts.js', array('jquery') );
  wp_enqueue_script( 'scripts.js');
}

add_action( 'wp_enqueue_scripts', 'simpleChurchTheme_resources' );


$defaults = array(
	'default-color'          => '555555',
	'default-image'          => '',
	'default-repeat'         => 'none',
	'default-position-x'     => '50%',
	'default-attachment'     => 'cover',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );


function arphabet_widgets_init() {

  register_sidebar( array(
  'name' => 'Footer Sidebar 1',
  'id' => 'footer-sidebar-1',
  'description' => 'Appears in the footer area',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  ) );
  register_sidebar( array(
  'name' => 'Footer Sidebar 2',
  'id' => 'footer-sidebar-2',
  'description' => 'Appears in the footer area',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  ) );
  register_sidebar( array(
  'name' => 'Footer Sidebar 3',
  'id' => 'footer-sidebar-3',
  'description' => 'Appears in the footer area',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  ) );
  register_sidebar( array(
  'name' => 'Footer Sidebar 4',
  'id' => 'footer-sidebar-4',
  'description' => 'Appears in the footer area',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
