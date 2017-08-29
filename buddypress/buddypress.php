<?php get_header('forum'); ?>

<div class="row">
index-buddy
    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!--slider section-->
        <div class="row">
           <article id="main-content">

 <?php if ( is_bbpress() ) : ?>
<?php bbp_breadcrumb(); ?>
				
                    <?php bbp_get_template_part( 'content', 'single-user' ); ?>
                               
                <?php else : ?>
          
 					<?php get_template_part('template-parts/loop','single'); ?>
 					
 						<?php endif; ?>

<!-- .entry-content -->


           </article>
    </div><!-- .row -->

  </div><!-- .col -->

</div><!-- .row -->

 <?php get_sidebar('forum'); ?>
 
<?php get_footer(); ?>