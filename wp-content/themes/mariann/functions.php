<?php
/**
 * Mariann functions
 *
 * @package Mariann
 */

/**
 * Theme Control Panel Configuration
 */
define( 'MARIANN_IPANEL_PATH' , get_template_directory() . '/inc/ipanel/' ); 
define( 'MARIANN_IPANEL_URI' , get_template_directory_uri() . '/inc/ipanel/' );
define( 'MARIANN_IPANEL_PLUGIN_USAGE' , false );

include_once (MARIANN_IPANEL_PATH . 'ipanel.php');

// Get theme options globally
function mariann_get_theme_options() {
	if(get_option('MARIANN_PANEL')) {
		$theme_options_data = maybe_unserialize(get_option('MARIANN_PANEL'));
	} else {
		$theme_options_data = Array();
	}

	return $theme_options_data;
}

$mariann_theme_options = mariann_get_theme_options();

/**
 * WordPress content width configuration
 */
if (!isset($content_width))
	$content_width = 1140; /* pixels */

if (!function_exists('mariann_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function mariann_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Mariann, use a find and replace
	 * to change 'mariann' to the name of your theme in all the template files
	 */
	load_theme_textdomain('mariann', get_template_directory() . '/languages');

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support('automatic-feed-links');

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support('post-thumbnails');

	/**
	 * Enable support for JetPack Infinite Scroll
	 *
	 * @link https://jetpack.me/support/infinite-scroll/
	 */
	add_theme_support( 'infinite-scroll', array(
	    'container' => 'content',
	    'footer' => 'page',
	) );

	/**
	 * Enable support for Title Tag
	 *
	 */
	
	add_theme_support( 'title-tag' );

	/**
	 * Enable support for Logo
	 */
	add_theme_support( 'custom-header', array(
	    'default-image' =>  get_template_directory_uri() . '/img/logo.png',
            'width'         => 165,
            'flex-width'    => true,
            'flex-height'   => false,
            'header-text'   => false,
	));

	/**
	 *	Woocommerce support
	 */
	add_theme_support( 'woocommerce' );

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	/**
	 * Change customizer features
	 */
	add_action( 'customize_register', 'mariann_theme_customize_register' );
	function mariann_theme_customize_register( $wp_customize ) {
		$wp_customize->remove_section( 'colors' );

		$wp_customize->add_setting( 'mariann_header_transparent_logo' , array(
		     array ( 'default' => '',
				    'sanitize_callback' => 'esc_url_raw'
				    ),
		    'transport'   => 'refresh',
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mariann_header_transparent_logo', array(
		    'label'    => esc_html__( 'Logo for Transparent Header (Light logo)', 'mariann' ),
		    'section'  => 'header_image',
		    'settings' => 'mariann_header_transparent_logo',
		) ) );
	}

	/**
	 * Theme resize image
	 */
	add_image_size( 'mariann-blog-thumb', 1140, 760, false);
	add_image_size( 'mariann-blog-thumb-sidebar', 750, 500, false);
	add_image_size( 'mariann-blog-thumb-2column', 555, 370, false);
	add_image_size( 'mariann-blog-thumb-2column-sidebar', 360, 240, false);
	add_image_size( 'mariann-blog-thumb-masonry-sidebar', 360, 240, true);
	add_image_size( 'mariann-blog-thumb-widget', 90, 55, true);

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
            'primary' => esc_html__('Header Menu', 'mariann'),
            'top' => esc_html__('Top Menu', 'mariann'),
            'footer' => esc_html__('Footer Menu', 'mariann'),
	) );
	/*
	* Change excerpt length
	*/
	function mariann_new_excerpt_length($length) {
		$mariann_theme_options = mariann_get_theme_options();

		if(isset($mariann_theme_options['post_excerpt_legth'])) {
			$post_excerpt_length = $mariann_theme_options['post_excerpt_legth'];
		} else {
			$post_excerpt_length = 18;
		}

		return $post_excerpt_length;
	}
	add_filter('excerpt_length', 'mariann_new_excerpt_length');
	/**
	 * Enable support for Post Formats
	 */
	add_theme_support('post-formats', array('aside', 'image', 'gallery', 'video', 'audio', 'quote', 'link', 'status', 'chat'));

}
endif;
add_action('after_setup_theme', 'mariann_setup');

/**
 * Enqueue scripts and styles
 */
function mariann_scripts() {
	$mariann_theme_options = mariann_get_theme_options();

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('mariann-fonts', mariann_google_fonts_url(), array(), '1.0' );
	wp_enqueue_style('owl-main', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.css');
	wp_enqueue_style('mariann-stylesheet', get_stylesheet_uri(), array(), '1.0.2', 'all');
	wp_enqueue_style('mariann-responsive', get_template_directory_uri() . '/responsive.css', '1.0.2', 'all');

	if(isset($mariann_theme_options['enable_theme_animations']) && $mariann_theme_options['enable_theme_animations']) {
		wp_enqueue_style('mariann-animations', get_template_directory_uri() . '/css/animations.css');
	}

	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style('mariann-select2', get_template_directory_uri() . '/js/select2/select2.css'); // special version, must be prefixed with theme prefix
	wp_enqueue_style('offcanvasmenu', get_template_directory_uri() . '/css/offcanvasmenu.css');
	wp_enqueue_style('nanoscroller', get_template_directory_uri() . '/css/nanoscroller.css');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/css/idangerous.swiper.css');

	add_thickbox();
	
	// Registering scripts to include it in correct order later
	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.1.1', true);
	wp_register_script('easing', get_template_directory_uri() . '/js/easing.js', array(), '1.3', true);
	wp_register_script('mariann-select2', get_template_directory_uri() . '/js/select2/select2.min.js', array(), '3.5.1', true);  // special version, must be prefixed with theme prefix
	wp_register_script('owl-carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.js', array(), '2.0.0', true);
	wp_register_script('nanoscroller', get_template_directory_uri() . '/js/jquery.nanoscroller.min.js', array(), '3.4.0', true);

	// Enqueue scripts in correct order
	wp_enqueue_script('mariann-script', get_template_directory_uri() . '/js/template.js', array('jquery', 'bootstrap', 'easing', 'mariann-select2', 'owl-carousel', 'nanoscroller', 'masonry'), '1.0', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

}
add_action('wp_enqueue_scripts', 'mariann_scripts');

// Deregister scripts
function mariann_dequeue_stylesandscripts() {
	if ( class_exists( 'woocommerce' ) ) {
		wp_dequeue_style( 'select2' );
		wp_deregister_style( 'select2' );
	} 
}
add_action( 'wp_enqueue_scripts', 'mariann_dequeue_stylesandscripts', 100 );

/**
 * Enqueue scripts and styles for admin area
 */
function mariann_admin_scripts() {
	wp_register_style( 'mariann-style-admin', get_template_directory_uri() .'/css/admin.css' );
	wp_enqueue_style( 'mariann-style-admin' );
	wp_register_style('font-awesome-admin', get_template_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style( 'font-awesome-admin' );

	wp_register_script('mariann-template-admin', get_template_directory_uri() . '/js/template-admin.js', array(), '1.0', true);
	wp_enqueue_script('mariann-template-admin');

}
add_action( 'admin_init', 'mariann_admin_scripts' );

function mariann_load_wp_media_files() {
  wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'mariann_load_wp_media_files' );

/**
 * Display navigation to next/previous pages when applicable
 */
if (!function_exists('mariann_content_nav')) :
function mariann_content_nav( $nav_id ) {
  global $wp_query, $post;

  // Loading library to check active plugins
  include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

  // Don't print empty markup on single pages if there's nowhere to navigate.
  if ( is_single() ) {
    $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
    $next = get_adjacent_post( false, '', false );

    if ( ! $next && ! $previous )
      return;
  }

  // Don't print empty markup in archives if there's only one page.
  if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
    return;

  $nav_class = ( is_single() ) ? 'navigation-post' : 'navigation-post navigation-paging';

  ?>
  <nav id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo esc_attr($nav_class); ?>">
  
  <?php if ( is_single() ) : // navigation links for single posts ?>
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-6 nav-post-prev">
    <?php
    $prev_post = get_previous_post();
    if ( is_a( $prev_post , 'WP_Post' ) ) { ?>
      <a href="<?php echo esc_url(get_permalink( $prev_post->ID )); ?>"><div class="nav-post-title"><?php esc_html_e( 'Previous', 'mariann' ); ?></div><div class="nav-post-name"><?php echo esc_html(get_the_title( $prev_post->ID )); ?></div></a>
    <?php } 
    ?>
    </div>
    <div class="col-md-6 nav-post-next">
    <?php
    $next_post = get_next_post();
    if ( is_a( $next_post , 'WP_Post' ) ) { ?>
      <a href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>"><div class="nav-post-title"><?php esc_html_e( 'Next', 'mariann' ); ?></div><div class="nav-post-name"><?php echo esc_html(get_the_title( $next_post->ID )); ?></div></a>
    <?php } 
    ?>
    </div>

  </div>
  </div>
  <?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>
  <div class="clear"></div>
  <div class="container-fluid">
    <div class="row">
      <?php if ( is_plugin_active( 'wp-pagenavi/wp-pagenavi.php' ) ): ?>
        <div class="col-md-12 nav-pagenavi">
        <?php wp_pagenavi(); ?>
        </div>
      <?php else: ?>
        <div class="col-md-6 nav-post-prev">
        <?php if ( get_next_posts_link() ) : ?>
        <?php next_posts_link( esc_html__( 'Older posts', 'mariann' ) ); ?>
        <?php endif; ?>
        </div>
        
        <div class="col-md-6 nav-post-next">
        <?php if ( get_previous_posts_link() ) : ?>
        <?php previous_posts_link( esc_html__( 'Newer posts', 'mariann' ) ); ?>
        <?php endif; ?>
        </div>
      <?php endif; ?>
    
    </div>
  </div>
  <?php endif; ?>

  </nav>
  <?php
}
endif;

/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
if (!function_exists('mariann_comment')) :
function mariann_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;

  if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>

  <li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
    <div class="comment-body">
      <?php esc_html_e( 'Pingback:', 'mariann' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( 'Edit', 'mariann' ), '<span class="edit-link">', '</span>' ); ?>
    </div>

  <?php else : ?>

  <li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
    <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
      
      <div class="comment-meta clearfix">
        <div class="reply">
          <?php edit_comment_link( esc_html__( 'Edit', 'mariann' ), '', '' ); ?>
          <?php comment_reply_link( array_merge( $args, array( 'add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </div><!-- .reply -->
        <div class="comment-author vcard">
          
          <?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, 100 ); ?>

        </div><!-- .comment-author -->

        <div class="comment-metadata">
          <div class="author">
          <?php printf('%s', sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
          </div>
          <div class="date"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time datetime="<?php comment_time( 'c' ); ?>"><?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'mariann' ), get_comment_date(), get_comment_time() ); ?></time></a></div>

          <?php if ( '0' == $comment->comment_approved ) : ?>
          <p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'mariann' ); ?></p>
          <?php endif; ?>
          <div class="comment-content">
            <?php comment_text(); ?>
          </div>
        </div><!-- .comment-metadata -->

        
      </div><!-- .comment-meta -->

      
    </article><!-- .comment-body -->

  <?php
  endif;
}
endif;

// Set/Get current post details for global usage in templates (post position in loop, etc)
function mariann_set_post_details($details) {
	global $mariann_post_details;

	$mariann_post_details = $details;
}
function mariann_get_post_details() {
	global $mariann_post_details;

	return $mariann_post_details;
}

/**
 * Registers an editor stylesheet
 */
if (!function_exists('mariann_add_editor_styles')) :
function mariann_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'mariann_add_editor_styles' );
endif;

/**
 * Load theme functions.
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * Load theme widgets.
 */
require get_template_directory() . '/inc/theme-widgets.php';

/**
 * Load theme dynamic CSS.
 */
require get_template_directory() . '/inc/theme-css.php';

/**
 * Load theme dynamic JS.
 */
require get_template_directory() . '/inc/theme-js.php';

/**
 * Load theme metaboxes.
 */
require get_template_directory() . '/inc/theme-metaboxes.php';