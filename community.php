<?php get_header('forum'); ?>

	<div class="row">
<?php get_sidebar('forum'); ?> 
            <!---Right side content area with slider and intro text and links-->
            <div class="col-lg- 9 col-md-9 col-sm-9 col-xs-12">

                <article id="main-content">
    community           

 <?php get_template_part('template-parts/loop', 'forum'); ?>
<br/>
<br/>
                </article>

            </div>


</div>

<?php get_footer(); ?>

