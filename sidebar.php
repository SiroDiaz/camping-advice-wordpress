<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package camping-advice
 */

if ( ! is_active_sidebar( 'Right Sidebar' ) ) {
	return;
}
?>
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-12"> 
    
    <aside id="side-bar-left" class="group" role="complementary">

	
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')) : ?>

<?php endif; ?>

 <div class="clearfix"></div>
</aside>
</div>
</div>
