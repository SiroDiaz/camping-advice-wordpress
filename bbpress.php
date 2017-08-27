<?php
 
/*
*
* The template for displaying all bbPress pages
*
* This is the template that displays all bbPress pages by default.
* Please note that this is the template of all bbPress pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
* @package WordPress
* @subpackage Theme
*/
 
 
/*
Self explanatory its a functions that gets your header template.
*/
 
 get_header('forum'); ?>

<div class="row">
   
    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!--slider section-->
        <div class="row">
           <article id="main-content"> 
 
 
<?php
/*
Surrounding Classes for the site
 
These are different every theme and help with structure and layout
 
These could be SPANs or DIVs and with entirely different classes.
*/
?>
 

 
<?php
/*
Start the Loop
*/
?>


 
<?php while ( have_posts() ) : the_post(); ?>
 
 
<?php
/*
This is the start of the page and also the insertion of the post classes.
 
Post classes are very handy to style your forums.
*/
?>
 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
 
<?php
/*
This is the title wrapped in a header tag
 
and a class to better style the title for your theme
*/
?>
 
<header class="entry-header">
 index-bbpress
<h1 class="entry-title"><?php the_title(); ?></h1>
 
</header>
 
 
<?php
/*
This is the content wrapped in a div
 
and class to better style the content
*/
?>
<?php if ( is_bbpress() ) : ?>
 
<div class="entry-content">

<?php the_content(); ?>

</div>
  <?php endif; ?>
<!-- .entry-content -->
 
 
<?php
/*
End of Page
*/
?>
 
</article>
 
<!-- #post -->
<?php endwhile; // end of the loop. ?>


            </article>
    </div><!-- .row -->
       
  </div><!-- .col -->
 <?php get_sidebar('forum'); ?>
</div><!-- .row -->
 
<?php
/*
This is code to display the sidebar and the footer.
 
Remove the sidebar code to get full-width forums.
 
This would also need CSS to make it actually full width.
*/
?>

<?php get_footer(); ?>