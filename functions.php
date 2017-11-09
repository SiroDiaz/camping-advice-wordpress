<?php

//buddypress
add_theme_support( 'buddypress' );
add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );

//bbpress
remove_action( 'bbp_before_main_content',  'before_main_content'  ); // Top wrapper HTML
remove_action( 'bbp_after_main_content',   'after_main_content'  ); // Bottom wrapper
add_action( 'bbp_before_main_content',  'before_main_content' ); // Top wrapper HTML

	function before_main_content() {
		?>
			<article id="main-content">

		<?php
	}

add_action( 'bbp_after_main_content',  'after_main_content'  ); // bottom wrapper HTML

	function after_main_content() {
	?>
			</article>
	<?php
	}

if ( ! function_exists( 'my_theme_setup' ) ) :

	function my_theme_setup(){
	//Localization support
	load_theme_textdomain('camping-advice-wordpress', get_template_directory() . '/languages');

	if ( ! isset( $content_width ) ) {$content_width = 800;};

	$defaults = array(
		'default-color'          => '',
		'default-image'          => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );
	add_theme_support( 'automatic-feed-links' );
	

	add_theme_support( 'post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio' ) );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'featured-image', 783, 9999 );


	$default = array(
		'default-image'          => '',
		'random-default'         => false,
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',

	);
	add_theme_support( 'nav-menus', $default );

	//register menus
	register_nav_menus(array(
	'main' => 'Main Nav',
	'Secondary' => 'Secondary',
	'Forum' => 'Forum',
	'mobile' => 'mobile',
	'Front-menu' => 'Front-menu'));


		$defaults = array(
		'before'           => '<p>' . __( 'Pages:', 'camping-advice-wordpress' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page', 'camping-advice-wordpress'),
		'previouspagelink' => __( 'Previous page', 'camping-advice-wordpress' ),
		'pagelink'         => '%',
		'echo'             => 1
		);

		wp_link_pages( $defaults );
}

endif; // my_theme_setup end
add_action('after_setup_theme', 'my_theme_setup');

//read more button
function excerpt_read_more_link($output) {
 global $post;
 return $output . '<br/><a href="'. get_permalink($post->ID) . '" class="read_more">Read More</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');


if ( ! function_exists( 'bootstrap_four_widgets_init' ) ) :
  function bootstrap_four_widgets_init() {
    register_sidebar( array(
      'name' => __( 'Right Sidebar', 'camping-advice-wordpress' ),
      'id' => 'right-sidebar',
      'description' => __( 'The Right Sidebar widget area', 'camping-advice-wordpress' ),
      'before_widget' => '<article class="side-bar-box">',
      'after_widget' => '</article>',
      'before_title' => '<h2>',
      'after_title' => '</h2>',
    ) );
  }
endif;
add_action( 'widgets_init', 'bootstrap_four_widgets_init' );


//front-menu area
if ( ! function_exists( 'front_widgets_init' ) ) :
function front_widgets_init() {
	register_sidebar( array(
	'name' => __( 'front-menu', 'camping-advice-wordpress' ),
	'id' => 'front-menu',
	'description' => __( 'The Front Menu widget area', 'camping-advice-wordpress' ),
	'menu_class' => 'menu',
	'before_widget' => '<article class="side-bar-box">',
	'after_widget' => '</article>',
	) );
	}
	endif;
add_action( 'widgets_init', 'front_widgets_init' );


//forum sidebar area
if ( ! function_exists( 'forum_widgets_init' ) ) :
function forum_widgets_init() {
	register_sidebar( array(
	'name' => __( 'forum-sidebar' , 'camping-advice-wordpress' ),
	'id' => 'forum-sidebar',
	'description' => __( 'The forum sidebar widget area', 'camping-advice-wordpress' ),
	'before_widget' => '<article class="side-bar-box">',
	'after_widget' => "</article>",
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	) );
	}
	endif;
add_action( 'widgets_init', 'forum_widgets_init' );

//enqueue style sheets
function mytheme_register_styles(){
	wp_register_style('booter', get_stylesheet_directory_uri() . '/css/bootstrap.css', false,'1.1','all' );
	wp_enqueue_style( 'booter' );
}
add_action('wp_enqueue_scripts','mytheme_register_styles');

//enqueue other scripts
function my_scripts_own() {
	wp_register_script('boots',get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'),'20161110', true );
	wp_register_script('collapse',get_stylesheet_directory_uri() . '/js/bootstrap/collapse.js', array('jquery'),'20161110', true );
	wp_register_script('dropdown',get_stylesheet_directory_uri() . '/js/bootstrap/dropdown.js', array('jquery'),'20161110', true );
	wp_register_script('transition',get_stylesheet_directory_uri() . '/js/bootstrap/transition.js', array('jquery'),'20161110', true );
	wp_register_script('carousel',get_stylesheet_directory_uri() . '/js/bootstrap/carousel.js', array('jquery'),'20161110', true );
	wp_register_script('tab',get_stylesheet_directory_uri() . '/js/bootstrap/tab.js', array('jquery'),'20161110', true );
	wp_register_script( 'master', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'),'20161110', true );

	wp_enqueue_script( 'boots' );
	wp_enqueue_script( 'collapse' );
	wp_enqueue_script( 'dropdown' );
	wp_enqueue_script( 'transition' );
	wp_enqueue_script( 'carousel' );
	wp_enqueue_script( 'tab' );
	wp_enqueue_script( 'master' );
	//wp_enqueue_script( 'master' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_own' );

// remove version from scripts and styles
function shapeSpace_remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
            $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);


function remove_version_parameter( $src ){
    // Check if version parameter exist
    $parts = explode( '?ver', $src );
    // return without version parameter
    return $parts[0];
}
// filter .js files
add_filter( 'script_loader_src', 'remove_version_parameter', 15, 1 );
// filter .css files
add_filter( 'style_loader_src', 'remove_version_parameter', 15, 1 );
?>
