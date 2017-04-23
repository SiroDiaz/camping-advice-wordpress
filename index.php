<?php get_header(); ?>

<div class="row">

    <div class=" col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <!--slider section-->
        <div class="row">
           <article id="main-content">


            <?php get_template_part('template-parts/loop'); ?>


           </article>
    </div><!-- .row -->

  </div><!-- .col -->
 <?php get_sidebar('blog'); ?>
</div><!-- .row -->

<?php get_footer(); ?>
