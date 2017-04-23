<?php get_header(); ?>

	<div class="row">

            <!---Right side content area with slider and intro text and links-->
            <div class="col-lg- 9 col-md-9 col-sm-9 col-xs-12">

                <article id="main-content">
               

 <?php get_template_part('template-parts/loop'); ?>
<br/>
                </article>

            </div>

<?php get_sidebar('forum'); ?> 
</div>

<?php get_footer(); ?>

