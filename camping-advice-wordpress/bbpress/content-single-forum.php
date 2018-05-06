<?php

/**
 * Single Forum
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header('forum'); ?>
    
		<?php do_action( 'bbp_before_main_content' ); ?>

<div id="bbpress-forums">

<?php bbp_breadcrumb(); ?>

<?php bbp_forum_subscription_link(); ?>

<?php do_action( 'bbp_template_before_single_forum' ); ?>

<?php if ( post_password_required() ) : ?>

	<?php bbp_get_template_part( 'form', 'protected' ); ?>

<?php else : ?>

	<?php bbp_single_forum_description(); ?>

	<?php if ( bbp_has_forums() ) : ?>

		<?php bbp_get_template_part( 'loop', 'forums' ); ?>

	<?php endif; ?>

	<?php if ( !bbp_is_forum_category() && bbp_has_topics() ) : ?>

		<?php bbp_get_template_part( 'pagination', 'topics'    ); ?>

		<?php bbp_get_template_part( 'loop',       'topics'    ); ?>

		<?php bbp_get_template_part( 'pagination', 'topics'    ); ?>

		<?php bbp_get_template_part( 'form',       'topic'     ); ?>

	<?php elseif ( !bbp_is_forum_category() ) : ?>

		<?php bbp_get_template_part( 'feedback',   'no-topics' ); ?>

		<?php bbp_get_template_part( 'form',       'topic'     ); ?>

	<?php endif; ?>

<?php endif; ?>

<?php do_action( 'bbp_template_after_single_forum' ); ?>

</div>

	<?php do_action( 'bbp_after_main_content' ); ?>


<?php get_sidebar('forum'); ?>
<?php get_footer(); ?>


