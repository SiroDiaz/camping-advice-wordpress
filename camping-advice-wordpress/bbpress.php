<?php get_header('forum'); ?>

<div class="row">
    <!---Right side content area with slider and intro text and links-->
    <div class="col-lg- 12 col-md-12 col-sm-12 col-xs-12">

        <article id="main-content">

          <h1><?php the_title();?></h1>


          <?php the_content(); ?>
		
		
		</article>

    </div>

</div>

	<?php get_sidebar('forum'); ?>

<?php get_footer(); ?>