<?php
/**
 * Tabut functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tabut
 */

if ( ! function_exists( 'Tabut_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tabut_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Tabut, use a find and replace
		 * to change 'tabut' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tabut', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'tabut' ),
			)
		);

		add_filter(
			'nav_menu_link_attributes',
			function( $atts ) {
				$atts['class'] = 'navbar-item';
				return $atts;
			},
			100,
			1
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'tabut_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		/**
		 * * Adding Theme Support for Gutenberg.
		 * */
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		// Editor Style
		add_editor_style( 'style-editor.css' );
	}
endif;
add_action( 'after_setup_theme', 'Tabut_setup' );


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function tabut_custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'Tabut_custom_excerpt_length', 999 );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tabut_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'Tabut_content_width', 640 );
}
add_action( 'after_setup_theme', 'Tabut_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tabut_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget', 'tabut' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add widgets here.', 'tabut' ),
			'before_widget' => '<div id="%1$s" class="widget column is-one-quarter %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title title is-5">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'Tabut_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tabut_scripts() {

	wp_enqueue_style( 'tabut-fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', array(), '5.8.1' );

	wp_enqueue_style( 'bulma', get_template_directory_uri() . '/assets/bulma/bulma.css' );
	wp_enqueue_style( 'tabut-style', get_template_directory_uri() . '/style.css', array( 'bulma' ) );
	wp_enqueue_script( 'tabut-deleteButton', get_template_directory_uri() . '/js/deleteButton.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'tabut-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20151215', true );
	wp_enqueue_script( 'tabut-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( ! is_admin() ) {
		wp_register_style( 'tabut_font_roboto', 'https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i&display=swap', array(), null, 'all' );
		wp_register_style( 'tabut_font_source_sans_pro', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap', array(), null, 'all' );

		wp_enqueue_style( 'tabut_font_roboto' );
		wp_enqueue_style( 'tabut_font_source_sans_pro' );
	}

}
add_action( 'wp_enqueue_scripts', 'Tabut_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Theme Options.
 */
require get_template_directory() . '/inc/customizer/theme-options.php';
require get_template_directory() . '/inc/customizer/customizer-css.php';


/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';


/**
 * Show First Image from post if no thumbnail present
 */
function tabut_first_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output    = preg_match_all( '/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches );
	$first_img = $matches[1][0];

	if ( empty( $first_img ) ) {
		$first_img = get_template_directory_uri() . '/assets/images/portfolio-image.jpg';
	}
	return $first_img;
}

/**
 * Register the required plugins for this theme.
 */

function tabut_register_required_plugins() {
	$plugins = array(
		array(
			'name' => 'Tabut Companion',
			'slug' => 'tabut-companion',
		),
		array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7',
		),
	);

	$config = array(
		'id'           => 'tgmpa',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
		'strings'      => array(
			'page_title' => __( 'Install Required Plugins', 'tabut' ),
			'menu_title' => __( 'Install Plugins', 'tabut' ),
			'nag_type'   => 'updated',
		),
	);

	tgmpa( $plugins, $config );

}

add_action( 'tgmpa_register', 'Tabut_register_required_plugins' );

