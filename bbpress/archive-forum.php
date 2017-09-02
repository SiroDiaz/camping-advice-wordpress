<?php

/**
 * bbPress - Forum Archive
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header('forum'); ?>
	

<div class="row">
    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!--slider section-->
        <div class="row">
<article id="main-content">

	<?php do_action( 'bbp_template_notices' ); ?>

	<div id="forum-front" class="bbp-forum-front">
	archive
		<h1 class="entry-title"><?php bbp_forum_archive_title(); ?></h1>
		<div class="entry-content">

			<?php bbp_get_template_part( 'content', 'archive-forum' ); ?>

		</div>
	</div><!-- #forum-front -->

			</article>
	<?php get_sidebar('forum'); ?>
	  </div><!-- .row -->

  </div><!-- .col -->

</div><!-- .row -->


<?php get_footer(); ?>
