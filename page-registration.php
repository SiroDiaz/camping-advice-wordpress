	

<?php get_header('forum'); ?>
	


	<div class="row">

            <!---Right side content area with slider and intro text and links-->
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              
               <?php do_action( 'bbp_before_main_content' ); ?>
               
                
             <?php if ( is_bbpress() ) : ?>
             
         <?php the_content(); ?>
                               
               					
 						<?php endif; ?>

                <?php do_action( 'bbp_after_main_content' ); ?>
                
	
           
            </div>


</div>
<?php get_sidebar('forum'); ?> 
<?php get_footer(); ?>

