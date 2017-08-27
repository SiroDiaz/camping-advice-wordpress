<?php


remove_action( 'bbp_before_main_content',  'before_main_content'  ); // Top wrapper HTML
remove_action( 'bbp_after_main_content',   'after_main_content'  ); // Bottom wrapper 


add_action( 'bbp_before_main_content',  'before_main_content' ); // Top wrapper HTML
	/**
	 * Inserts HTML at the top of the main content area to be compatible with
	 * the Twenty Twelve theme.
	 *
	 * @since bbPress (r3732)
	 */
	function before_main_content() {
	?>

		<article id="main-content">

	<?php
	}



add_action( 'bbp_before_main_content',  'before_main_content'  ); // Top wrapper HTML
	/**
	 * Inserts HTML at the bottom of the main content area to be compatible with
	 * the Twenty Twelve theme.
	 *
	 * @since bbPress (r3732)
	 */
	function after_main_content() {
	?>

			</article><!-- #bbp-content -->
		

	<?php
	}



add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
add_image_size( 'featured-image', 783, 9999 );

//read more button
function excerpt_read_more_link($output) {
 global $post;
 return $output . '<br/><a href="'. get_permalink($post->ID) . '" class="read_more">Read More</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');


//register menus
register_nav_menus(array(
'main' => 'Main Nav',
'Secondary' => 'Secondary',
'mobile' => 'mobile',
'Front-menu' => 'Front-menu'));

if ( ! function_exists( 'bootstrap_four_widgets_init' ) ) :
  function bootstrap_four_widgets_init() {
    register_sidebar( array(
      'name' => __( 'Right Sidebar', 'bootstrap-four' ),
      'id' => 'right-sidebar',
      'description' => __( 'The Right Sidebar widget area', 'bootstrap-four' ),
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
'name' => __( 'front-menu', 'CampingAdviceWordpress' ),
'id' => 'front-menu',
'description' => __( 'The Front Menu widget area', 'CampingAdviceWordpress' ),
'menu_class' => 'menu',   
'before_widget' => '<article class="side-bar-box">',
'after_widget' => '</article>',
) );
}
endif;
add_action( 'widgets_init', 'front_widgets_init' );


//contact form area
if ( ! function_exists( 'contact_widgets_init' ) ) :
function contact_widgets_init() {
register_sidebar( array(
'name' => __( 'contact-form', 'CampingAdviceWordpress' ),
'id' => 'contact-form',
'description' => __( 'The contact form widget area', 'CampingAdviceWordpress' ),
'before_widget' => '<section class="searchformadvance">',
'after_widget' => '</section>',
) );
}
endif;
add_action( 'widgets_init', 'contact_widgets_init' );


//forum sidebar area
if ( ! function_exists( 'forum_widgets_init' ) ) :
function forum_widgets_init() {
register_sidebar( array(
'name' => __( 'forum-sidebar' , 'CampingAdviceWordpress' ),
'id' => 'forum-sidebar',
'description' => __( 'The forum sidebar widget area', 'CampingAdviceWordpress' ),
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