<?php get_header('forum'); ?>

<div class="row">
 <?php get_sidebar('forum'); ?> 
    <div class=" col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <!--slider section-->
        <div class="row">
           <article id="main-content"> 
            index-bbpress
          
            <?php get_template_part('template-parts/loop', 'forum'); ?>
         

           </article>
    </div><!-- .row -->
       
  </div><!-- .col -->

</div><!-- .row -->

<?php get_footer(); ?>
