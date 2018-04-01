<?php

/**
 * bbPress - Forum Archive
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

	<div id="forum-front" class="bbp-forum-front">
		<h1 class="entry-title"><?php bbp_forum_archive_title(); ?></h1>
		<div class="entry-content">

			<?php bbp_get_template_part( 'content', 'archive-forum' ); ?>

		</div>
	</div><!-- #forum-front -->

	</div><!-- .row -->
    

  </div><!-- .col -->

</article><!-- .row -->
<?php get_sidebar('forum'); ?>


 
<?php get_footer(); ?>