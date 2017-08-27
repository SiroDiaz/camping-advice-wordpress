<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msvalidate.01" content="4CB214A27E0A9871DDFEF492EF5A6AD2" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
      
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
</head>
      
<body <?php body_class(); ?>>

  <div class="container-fluid">
        <!--Container-->

        <div class="row">

            <!--Header -->
            <header>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                    <?php  if ( is_front_page() || is_page()) : ?>
                    <figure class="campuklogo">
                        <img src="<?php echo home_url(); ?>/wp-content/themes/CampingAdviceWordpress/images/logo1.png" alt="Camping_Advice_Logo" />
                    </figure>
                    
                    <?php else : ?>
                    <figure class="campuklogo">
                        <img src="<?php echo home_url(); ?>/wp-content/themes/CampingAdviceWordpress/images/logo-blog.png" alt="Camping_Advice_Logo" alt="Camping_Advice_Logo" />
                    </figure>
                    
                    <?php endif; ?>
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
        
<?php get_template_part( 'template-parts/navigation', 'default' ); ?>