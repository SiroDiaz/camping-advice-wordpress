<?php

/**
 * bbPress - Topic Archive
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

	<div id="topic-front" class="bbp-topics-front">
		<h1 class="entry-title"><?php bbp_topic_archive_title(); ?></h1>
		<div class="entry-content">

			<?php bbp_get_template_part( 'content', 'archive-topic' ); ?>

		</div>
	</div><!-- #topics-front -->

			</article>
			</div>
</div>

<?php get_sidebar('forum'); ?>
<?php get_footer(); ?>
