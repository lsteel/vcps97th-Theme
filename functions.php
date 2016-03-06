<?php
/**
 * vicaps97th functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package vicaps97th
 */

if ( ! function_exists( 'vicaps97th_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vicaps97th_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on vicaps97th, use a find and replace
   * to change 'vicaps97th' to the name of your theme in all the template files
   */
  load_theme_textdomain( 'vicaps97th', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' => esc_html__( 'Primary Menu', 'vicaps97th' ),
    'footerOne' => esc_html__( 'Footer One', 'vicaps97th' ),
		'footerTwo' => esc_html__( 'Footer Two', 'vicaps97th' ),
		'footerThree' => esc_html__( 'Footer Three', 'vicaps97th' ),
		'footerFour' => esc_html__( 'Footer Four', 'vicaps97th' ),
  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  /*
   * Enable support for Post Formats.
   * See https://developer.wordpress.org/themes/functionality/post-formats/
   */
  add_theme_support( 'post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
  ) );

  // Set up the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'vicaps97th_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );
}
endif; // vicaps97th_setup
add_action( 'after_setup_theme', 'vicaps97th_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vicaps97th_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'vicaps97th_content_width', 640 );
}
add_action( 'after_setup_theme', 'vicaps97th_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vicaps97th_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'vicaps97th' ),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'vicaps97th_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vicaps97th_scripts() {
  wp_enqueue_style( 'vicaps97th-style', get_stylesheet_uri() );

  wp_enqueue_script( 'vicaps97th-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

  wp_enqueue_script( 'vicaps97th-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  function wp_new_excerpt($text)
  {
    if ($text == '')
    {
      $text = get_the_content('');
      $text = strip_shortcodes( $text );
      $text = apply_filters('the_content', $text);
      $text = str_replace(']]>', ']]>', $text);
      $text = strip_tags($text);
      $text = nl2br($text);
      $excerpt_length = apply_filters('excerpt_length', 29);
      $words = explode(' ', $text, $excerpt_length + 1);
      if (count($words) > $excerpt_length) {
        array_pop($words);
        array_push($words, '...');
        $text = implode(' ', $words);
      }
    }
    return $text;
  }
  remove_filter('get_the_excerpt', 'wp_trim_excerpt');
  add_filter('get_the_excerpt', 'wp_new_excerpt');
  }
add_action( 'wp_enqueue_scripts', 'vicaps97th_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
