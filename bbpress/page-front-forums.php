<?php

/**
 * Template Name: bbPress - Forums (Index)
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header('forum'); ?>

<div class="row">
    <!---Right side content area with slider and intro text and links-->
    <div class="col-lg- 12 col-md-12 col-sm-12 col-xs-12">

        <article id="main-content">

	<?php do_action( 'bbp_template_notices' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div id="forum-front" class="bbp-forum-front">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			pagefront
			<div class="entry-content">

				<?php the_content(); ?>

				<?php bbp_get_template_part( 'content', 'archive-forum' ); ?>

			</div>
		</div><!-- #forum-front -->

	<?php endwhile; ?>

</article>
<?php get_sidebar('forum'); ?>
	</div>
</div>


<?php get_footer(); ?>
