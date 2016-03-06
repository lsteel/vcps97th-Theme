<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vicaps97th
 */

?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="max-width-wrapper">
      <nav id="footer-navigation" class="footer-navigation" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'footerOne', 'menu_id' => 'footer-one', 'depth' => 1, 'container_class' => 'footer-one' ) ); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'footerTwo', 'menu_id' => 'footer-two', 'depth' => 1, 'container_class' => 'footer-two' ) ); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'footerFour', 'menu_id' => 'footer-four', 'depth' => 1, 'container_class' => 'footer-four' ) ); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'footerThree', 'menu_id' => 'footer-three', 'depth' => 1, 'container_class' => 'footer-three' ) ); ?>
      </nav><!-- #footer-navigation -->
      <br class="flat clear">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/vicaps-logo-light.png' ); ?>" alt="Vicaps logo, light version" />
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
