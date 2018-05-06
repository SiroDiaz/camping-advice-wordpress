<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package camping-advice
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="container-fluid">
        <!--Container-->

        <div class="row">
	

            <header id="masthead" class="site-header">

                <div class="row">

                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 ">
                        <div class="site-branding">
                            <?php
                            the_custom_logo();
                            if ( is_front_page() && is_home() ) :
                                ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php
                            else :
                                ?>
                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                <?php
                            endif;
                            ?>
                                        
                        </div><!-- .site-branding -->
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <?php if (is_front_page() || is_page()) : ?>
                                <hgroup>
                                    <h1 id="logo"><span>RAYTHOMPSON</span><span>WEBDEV</span>.CO.UK</h1>

                                <?php else : ?>
                                    <hgroup>
                                        <h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>BLOG</h1>

                                    <?php
                                    endif;

                                    $description = get_bloginfo('description', 'display');

                                    if ($description || is_customize_preview()) :
                                        ?>

                                        <h2 class="site-description"><?php echo $description; ?></h2>
                                    </hgroup>


                                <?php endif; ?>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-6 pull-right">
                        <figure class="socials">
                            <ul>
                                <li>
                                    <a href="#" title="Follow us on Twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Follow us on Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Follow us on Google"><i class="fa fa-google"></i> </a>
                                </li>
                                <li>
                                    <a href="#" title="Follow us on Instagram"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </figure>
                    </div>
                </div>	
            </header><!-- #masthead -->

                
                <?php get_template_part('template-parts/navigation', 'default'); ?>

        </div>