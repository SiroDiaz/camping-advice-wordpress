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

<<<<<<< HEAD:header-forum.php
	<?php wp_head(); ?>
=======
<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
<?php } ?>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="msvalidate.01" content="4CB214A27E0A9871DDFEF492EF5A6AD2" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

<!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9 ]>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type='text/javascript'>
window.jQuery || document.write('<script src="../bower_components/jquery/dist/jquery.min.js">\x3C/script>')
</script>
<link rel="stylesheet" type="text/css" href="styles/ie8.css"/>
<script src="lib/html5shiv/dist/html5shiv.min.js"></script>
<script src="lib/respond/dest/respond.min.js"></script>
<script src="scripts/Respond-master/dest/respond.min.js"></script>
<script src="scripts/html5shiv.min.js"></script>
<script src="scripts/selectivizr.min.js"></script>
<![endif]-->

    <?php wp_head(); ?>
>>>>>>> aa6f18f202d16c01773934c7be91883c8cfc8f42:camping-advice-wordpress/header-forum.php
</head>

<body <?php body_class(); ?>>

 <div class="container-fluid">
        <!--Container-->

        <div class="row">

<<<<<<< HEAD:header-forum.php
                <!--Container-->

            <header id="masthead" class="site-header">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-2 col-2 ">
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

                
        <?php get_template_part('template-parts/navigation', 'forum'); ?>

</div>
=======
            <!--Header -->
            <header>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">

                    <figure class="campuklogo">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/sites/4/2018/03/logo-forum.png" alt="Camping_Advice_Logo" />
                    </figure>


                </div>


                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 pull-right">
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
            </header>
            <!--Header end-->
                </div>

<?php get_template_part( 'template-parts/navigation', 'forum' ); ?>
>>>>>>> aa6f18f202d16c01773934c7be91883c8cfc8f42:camping-advice-wordpress/header-forum.php
