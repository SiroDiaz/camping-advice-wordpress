<?php get_header(); ?>

<div class="row">
index
    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!--slider section-->
        <div class="row">
           <article id="main-content">


            <?php get_template_part('template-parts/loop'); ?>


           </article>
    </div><!-- .row -->

  </div><!-- .col -->

</div><!-- .row -->

 <?php get_sidebar('blog'); ?>
 
<?php get_footer(); ?>
