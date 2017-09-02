<?php

/**
 * Single Forum
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header('forum'); ?>
    
	    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!--slider section-->
        <div class="row">

	<article id="main-content">

	<?php do_action( 'bbp_template_notices' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php if ( bbp_user_can_view_forum() ) : ?>

			<div id="forum-<?php bbp_forum_id(); ?>" class="bbp-forum-content">
			single-forum
				<h1 class="entry-title"><?php bbp_forum_title(); ?></h1>
				<div class="entry-content">

					<?php bbp_get_template_part( 'content', 'single-forum' ); ?>

				</div>
			</div><!-- #forum-<?php bbp_forum_id(); ?> -->

		<?php else : // Forum exists, user no access ?>

			<?php bbp_get_template_part( 'feedback', 'no-access' ); ?>

		<?php endif; ?>

	<?php endwhile; ?>

			</article>
			</div>
</div>
<?php get_sidebar('forum'); ?>
<?php get_footer(); ?>


