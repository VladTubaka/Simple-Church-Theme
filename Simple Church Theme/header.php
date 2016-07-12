<?php
/**
 * Header for Simple_Church_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <header role="banner">
      <div class="header-container">
        <div class="brand">
          <h2 class="church-name"><?php bloginfo('name'); ?></h1>
          <p class="slogan"><?php bloginfo('description'); ?></p>
        </div>
        <nav class="navbar" role="navigation">
          <?php
            $args = array(
              'primary' => 'Primary Menu'
            );

            wp_nav_menu( $args );
          ?>
        </nav>
        <nav class="mobile-nav" role="navigation">
          <button class="mobile-nav-button">&#9776;</button>
          <?php
            $args = array(
              'primary' => 'Primary Menu'
            );

            wp_nav_menu( $args );
          ?>
        </nav>
      </div>
    </header>
