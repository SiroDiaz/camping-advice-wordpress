<?php

/**
 * Single User
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header('forum'); ?>
   
	 <?php do_action( 'bbp_before_main_content' ); ?>

	<div id="bbp-user-<?php bbp_current_user_id(); ?>" class="bbp-single-user">
		
		<div class="entry-content">

			<?php bbp_get_template_part( 'content', 'single-user' ); ?>

		</div><!-- .entry-content -->
		<br/>
	</div><!-- #bbp-user-<?php bbp_current_user_id(); ?> -->

<<<<<<< HEAD:bbpress/single-user.php
			</article>

	<?php get_sidebar('forum'); ?>

=======
			<?php do_action( 'bbp_before_main_content' ); ?>
>>>>>>> aa6f18f202d16c01773934c7be91883c8cfc8f42:camping-advice-wordpress/bbpress/single-user.php

<?php get_sidebar('forum'); ?>
<?php get_footer(); ?>
