<?php
/**
 * camping-advice functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package camping-advice
 */

//buddypress
add_theme_support('buddypress');

//bbpress
remove_action('bbp_before_main_content', 'before_main_content'); // Top wrapper HTML
remove_action('bbp_after_main_content', 'after_main_content'); // Bottom wrapper
add_action('bbp_before_main_content', 'before_main_content'); // Top wrapper HTML

function before_main_content()
{
	?>
	<!--slider section-->

		    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="row">
        <article id="main-content">

    <?php
}

add_action('bbp_after_main_content', 'after_main_content'); // bottom wrapper HTML

function after_main_content()
{
    ?>
		</article>
	
    <?php
}
    
/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string Filtered title.
 */
function camping_advice_filter_wp_title($title, $sep)
{
    global $paged, $page;
 
    if (is_feed()) {
        return $title;
    }
 
    // Add the site name.
    $title .= get_bloginfo('name');
 
    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() )) {
        $title = "$title $sep $site_description";
    }
 
    // Add a page number if necessary.
    if ($paged >= 2 || $page >= 2) {
        $title = "$title $sep " . sprintf(__('Page %s', 'mannering-music'), max($paged, $page));
    }
 
    return $title;
}
add_filter('wp_title', 'camping_advice_filter_wp_title', 10, 2);

if ( ! function_exists( 'camping_advice_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function camping_advice_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on camping-advice, use a find and replace
		 * to change 'camping-advice' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'camping-advice', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		//theme support
			add_theme_support('html5', array('comment-list', 'comment-form', 'gallery', 'caption', 'search-form' ));
		    

			add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio' ));
		
			add_theme_support('post-thumbnails');
		
			add_image_size('featured-image', 783, 9999);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(

			'Main' => esc_html__('Main', 'camping-advice' ),
            'Secondary' => esc_html__('Secondary', 'camping-advice' ),
            'Forum' => esc_html__('Forum', 'camping-advice' ),
            'Mobile' => esc_html__('Mobile', 'camping-advice' ),
            'Front-menu' => esc_html__('Front-menu', 'camping-advice' )

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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'camping_advice_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 90,
			'width'       => 90,
			'flex-width'  => true,
			'flex-height' => true,
		) );


		$defaults = array(
		'before'           => '<p>' . __('Pages:', 'camping-advice'),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __('Next page', 'camping-advice'),
		'previouspagelink' => __('Previous page', 'camping-advice'),
		'pagelink'         => '%',
		'echo'             => 1
		);
		wp_link_pages($defaults);

		


	}
endif;
add_action( 'after_setup_theme', 'camping_advice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function camping_advice_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'camping_advice_content_width', 640 );
}
add_action( 'after_setup_theme', 'camping_advice_content_width', 0 );

function camping_advice_add_google_fonts()
{
    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,700', false);
    wp_enqueue_style('wpc-google-fonts', 'https://fonts.googleapis.com/css?family=Cabin:400,700', false);
}
add_action('wp_enqueue_scripts', 'camping_advice_add_google_fonts');



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function camping_advice_widgets_init() {
	register_sidebar(array(
		'name' => __('Right Sidebar', 'camping-advice'),
		'id' => 'right-sidebar',
		'description' => __('The Right Sidebar widget area', 'camping-advice'),
		'before_widget' => '<article class="side-bar-box">',
		'after_widget' => '</article>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
        ));
}
add_action( 'widgets_init', 'camping_advice_widgets_init' );

/**
 * front-menu area
 *
 */
if (! function_exists('camping_advice_front_widgets_init')) :
    function camping_advice_front_widgets_init()
    {
        register_sidebar(array(
        'name' => __('front-menu', 'camping-advice'),
        'id' => 'front-menu',
        'description' => __('The Front Menu widget area', 'camping-advice'),
        'menu_class' => 'menu',
        'before_widget' => '<article class="side-bar-box">',
        'after_widget' => '</article>',
        ));
    }
endif;
add_action('widgets_init', 'camping_advice_front_widgets_init');


/**
 * forum sidebar area
 *
 */
if (! function_exists('forum_widgets_init')) :
    function forum_widgets_init()
    {
        register_sidebar(array(
        'name' => __('forum-sidebar', 'camping-advice'),
        'id' => 'forum-sidebar',
        'description' => __('The forum sidebar widget area', 'camping-advice'),
        'before_widget' => '<article class="side-bar-box">',
        'after_widget' => "</article>",
        'before_title' => '<h2>',
        'after_title' => '</h2>',
        ));
    }
endif;
add_action('widgets_init', 'forum_widgets_init');

/**
 *
 * enqueue style sheets
 *
 */
function camping_advice_register_styles()
{
    wp_enqueue_style( 'camping-advice-style', get_stylesheet_uri() );
    wp_enqueue_style('booter', get_stylesheet_directory_uri() . '/css/bootstrap/bootstrap.css', false, '1.1' , 'all');
}
add_action('wp_enqueue_scripts', 'camping_advice_register_styles');

/**
 * Enqueue scripts and styles.
 */
function camping_advice_scripts() {
	
	wp_enqueue_script('camping-advice-bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.js', array('jquery'), 1.1, true);


	    wp_enqueue_script('camping-advice-bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap-js/bootstrap.bundle.js', array('jquery'), '1.1', true);
	   
	    wp_enqueue_script('master', get_template_directory_uri() . '/js/main.js', array('jquery'), '20161110', true);

	wp_enqueue_script( 'camping-advice-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'camping-advice-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

// Load the html5.
    wp_enqueue_script('camping-advice-html5', get_template_directory_uri() . '/js/old-browser-scripts/html5shiv.min.js', array(), '3.7.3');
    wp_script_add_data('camping-advice-html5', 'conditional', 'lte IE 8');

   // Load the Selectivizr.
    wp_enqueue_script('camping-advice-selectivizr', get_template_directory_uri() . '/js/old-browser-scripts/selectivizr-min.js', array('jquery'), '3.7.3');
    wp_script_add_data('camping-advice-selectivizr', 'conditional', 'lte IE 8');
}
add_action( 'wp_enqueue_scripts', 'camping_advice_scripts' );




/**
 * read more button
 *
 */
function camping_advice_excerpt_read_more_link($output)
{
    global $post;
    return $output . '<br/><a href="'. get_permalink($post->ID) . '" class="read_more">Read More</a>';
}
add_filter('the_excerpt', 'camping_advice_excerpt_read_more_link');


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

