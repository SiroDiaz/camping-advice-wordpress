<?php

/**
 * bbPress - Forum Archive
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header('forum'); ?>

<<<<<<< HEAD:bbpress/archive-forum.php
<?php do_action( 'bbp_before_main_content' ); ?>
=======
<div class="row">
    <!---Right side content area with slider and intro text and links-->
    <div class="col-lg- 12 col-md-12 col-sm-12 col-xs-12">

        <article id="main-content">
>>>>>>> aa6f18f202d16c01773934c7be91883c8cfc8f42:camping-advice-wordpress/bbpress/archive-forum.php

<?php do_action( 'bbp_template_notices' ); ?>

<<<<<<< HEAD:bbpress/archive-forum.php
<div id="forum-front" class="bbp-forum-front">
	<h1 class="entry-title"><?php bbp_forum_archive_title(); ?></h1>
	<div class="entry-content">
=======
	<div id="forum-front" class="bbp-forum-front">
		<h1 class="entry-title"><?php bbp_forum_archive_title(); ?></h1>
		<div class="entry-content">
>>>>>>> aa6f18f202d16c01773934c7be91883c8cfc8f42:camping-advice-wordpress/bbpress/archive-forum.php

		<?php bbp_get_template_part( 'content', 'archive-forum' ); ?>

	</div>
</div><!-- #forum-front -->

<<<<<<< HEAD:bbpress/archive-forum.php
<?php do_action( 'bbp_after_main_content' ); ?>
=======
	</div><!-- .row -->
    

  </div><!-- .col -->

</article><!-- .row -->
<?php get_sidebar('forum'); ?>
>>>>>>> aa6f18f202d16c01773934c7be91883c8cfc8f42:camping-advice-wordpress/bbpress/archive-forum.php

<?php get_sidebar(); ?>

 
<?php get_footer(); ?>