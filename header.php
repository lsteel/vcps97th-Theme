<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vicaps97th
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,900" rel="stylesheet" type="text/css">
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<script src="<?php echo esc_url( get_template_directory_uri() . '/js/velocity.js' ); ?>"></script>
<script src="<?php echo esc_url( get_template_directory_uri() . '/js/masonry.pkgd.min.js' ); ?>"></script>
<script src="<?php echo esc_url( get_template_directory_uri() . '/js/jquery.infinitescroll.min.js' ); ?>"></script>
<script src="<?php echo esc_url( get_template_directory_uri() . '/js/main.js' ); ?>"></script>
</head>
<body <?php body_class(); ?>>
<div id="top"></div>
<div id="page" class="hfeed site">
  <header id="masthead" class="site-header" role="banner">
    <div class="max-width-wrapper">
      <div class="header-shadow header-shadow-left"></div>
      <div class="header-shadow header-shadow-right"></div>
      <div class="site-branding">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo-shadow.png' ); ?>" alt="logo shadow" class="logo-shadow" />
        <a href="/"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/vicaps-header.png' ); ?>" alt="Vicaps Header Logo" class="header-logo" /></a>
      </div><!-- .site-branding -->

      <div class="nav-container">
        <nav id="site-navigation" class="main-navigation" role="navigation">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '&#9776;', 'vicaps97th' ); ?></button>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav><!-- #site-navigation -->
        <div class="raq-btn-container">
          <a href="/request-a-quote/" class="raq-link">
            Request A Quote
          </a>
        </div>
      </div>

      <div class="phone-container">
        Need it fast?
        <!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In  -->
        <svg version="1.1"
          width="14.1667px" height="14.1667px" viewBox="0 0 14.1667 14.1667" enable-background="new 0 0 14.1667 14.1667"
          xml:space="preserve">
        <defs>
        </defs>
        <path id="XMLID_1_" fill="none" stroke="#8BC53F" stroke-miterlimit="10" d="M10.1556,8.4C9.2778,9.2778,9.2778,10.1556,8.4,10.1556
          S6.6444,9.2778,5.7667,8.4S4.0111,6.6444,4.0111,5.7667s0.8778-0.8778,1.7556-1.7556S4.0111,0.5,3.1333,0.5S0.5,3.1333,0.5,3.1333
          c0,1.7556,1.8034,5.3145,3.5111,7.0222c1.7077,1.7078,5.2667,3.5111,7.0222,3.5111c0,0,2.6333-1.7556,2.6333-2.6333
          C13.6667,10.1556,11.0333,7.5222,10.1556,8.4"/>
        </svg>
        <a href="tel:8007051203">(800) 705-1203</a>
      </div>
    </div>
  </header><!-- #masthead -->

  <div id="content" class="site-content">
