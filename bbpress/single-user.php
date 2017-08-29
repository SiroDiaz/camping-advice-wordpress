<?php

/**
 * Single User
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header('forum'); ?>
   
    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!--slider section-->
        <div class="row">
	<?php do_action( 'bbp_before_main_content' ); ?>

	<div id="bbp-user-<?php bbp_current_user_id(); ?>" class="bbp-single-user">
		
		<div class="entry-content">

			<?php bbp_get_template_part( 'content', 'single-user' ); ?>

		</div><!-- .entry-content -->
		<br/>
	</div><!-- #bbp-user-<?php bbp_current_user_id(); ?> -->

	<?php do_action( 'bbp_after_main_content' ); ?>


		</div>
</div>
<?php get_footer(); ?>
