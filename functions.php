<?php
/**
 * banowetz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package banowetz
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'banowetz_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function banowetz_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on banowetz, use a find and replace
		 * to change 'banowetz' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'banowetz', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'banowetz' ),
				'menu-3' => esc_html__( 'Footer', 'banowetz' ),
				'seo-menu' => esc_html__( 'SEO', 'banowetz' ),
			)
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
				'banowetz_custom_background_args',
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
	}
endif;
add_action( 'after_setup_theme', 'banowetz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function banowetz_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'banowetz_content_width', 640 );
}
add_action( 'after_setup_theme', 'banowetz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function banowetz_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'banowetz' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'banowetz' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'banowetz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function banowetz_scripts() {

	wp_enqueue_style('banowetz-bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '20151215');
	wp_enqueue_style('banowetz-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '20151215');
	wp_enqueue_style('banowetz-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '20151215');
	wp_enqueue_style('banowetz-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '20151215');
	wp_enqueue_style('banowetz-fancybox-min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '20151215');
	wp_enqueue_style('banowetz-simplebar-css', get_template_directory_uri() . '/assets/css/simplebar.css', array(), '20151215');
	//wp_enqueue_style('banowetz-sticky', get_template_directory_uri() . '/assets/css/sticky.css', array(), '20151215');

	wp_enqueue_style( 'banowetz-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_script('jquery');
	wp_style_add_data( 'banowetz-style', 'rtl', 'replace' );

	wp_enqueue_script('banowetz-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true);
	wp_enqueue_script('banowetz-simplebar-js', get_template_directory_uri() . '/assets/js/simplebar.js', array(), '20151215', true);
	wp_enqueue_script('banowetz-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '20151215', true);
	wp_enqueue_script('banowetz-fancybox-min', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '20151215', true);
	wp_enqueue_script('banowetz-wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '20151215', true);
	wp_enqueue_script('banowetz-font-awesome-min', get_template_directory_uri() . '/assets/js/font-awesome.min.js', array(), '20151215', true);
	wp_enqueue_script('banowetz-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), rand(1000, 10000), true);
	wp_localize_script('banowetz-custom', 'custom_call', ['ajaxurl' => admin_url('admin-ajax.php')]);


	// wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	// wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), _S_VERSION );
	// wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), _S_VERSION );
	// wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), _S_VERSION );
	// wp_enqueue_style( 'jquery-fancybox-min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), _S_VERSION );
	// wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), _S_VERSION );
	// wp_enqueue_style( 'banowetz-style', get_stylesheet_uri(), array(), _S_VERSION );

	// wp_enqueue_script('jquery');
	// wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/assets/js/slick.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'wow-Js', get_template_directory_uri() . '/assets/js/wow.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'jquery-fancybox-min-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'jquery-cookie-min-js', get_template_directory_uri() . '/assets/js/jquery.cookie.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'Custome-Js', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'banowetz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'banowetz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'banowetz_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function rocket_lazy_load_disable( $value ) {
unset( $value->response['rocket-lazy-load/rocket-lazy-load.php'] );
return $value;
}
add_filter( 'site_transient_update_plugins', 'rocket_lazy_load_disable' );



add_action('wp_loaded', 'output_buffer_start');

function output_buffer_start() {
    ob_start("output_callback");
}

add_action('shutdown', 'output_buffer_end');

function output_buffer_end() {
    ob_end_flush();
}

function output_callback($buffer) {
    return preg_replace("%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer);
}

// Filter the output of logo to fix Googles Error about itemprop logo
add_filter( 'get_custom_logo', 'change_html_custom_logo' );
function change_html_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
	$site_name = get_bloginfo( 'name' );
    $html = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" title="'.$site_name.'">%2$s</a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'custom-logo',
            ) )
        );
    return $html;   
}

// it's working only menu custom link and link have started with #
function change_menu_URL($items){
	global $wp;
	$current_slug = $wp->request;
		if(!is_front_page()){
			foreach ($items as $key => $item) {
				if ($item->object == 'custom' && substr($item->url, 0, 1) == '#') {
					$item->url = site_url() . $item->url;
				}
			}
		}
		return $items;
	}
	add_filter('wp_nav_menu_objects', 'change_menu_URL'); 