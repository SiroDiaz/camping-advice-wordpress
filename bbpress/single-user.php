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
	<article id="main-content">

	<div id="bbp-user-<?php bbp_current_user_id(); ?>" class="bbp-single-user">
		
		<div class="entry-content">

			<?php bbp_get_template_part( 'content', 'single-user' ); ?>

		</div><!-- .entry-content -->
		<br/>
	</div><!-- #bbp-user-<?php bbp_current_user_id(); ?> -->

			</article>

	<?php get_sidebar('forum'); ?>


<?php get_footer(); ?>
