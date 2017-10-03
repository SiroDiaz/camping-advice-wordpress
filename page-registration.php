	

<?php get_header('forum'); ?>
	


	<div class="row">

            <!---Right side content area with slider and intro text and links-->
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              
               <article id="main-content">
               
               <?php if(is_bbpress()): ?>
                
                
                	<?php bbp_get_template_part('page','user-login') ?>
                
               <?php endif; ?>
      
             
                        
               					


				</article>
                
	
           
            </div>


</div>
<?php get_sidebar('forum'); ?> 
<?php get_footer(); ?>

