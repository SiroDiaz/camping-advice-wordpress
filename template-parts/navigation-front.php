   <!-- footer-->
    <?php
$front_nav_options = array(
  'theme_location'    => 'Front-menu',
  'depth'             => 2,
  'container'         => 'article',
  'container_class'   => 'side-bar-box',
  'container_id'      => 'menu-front',
  'menu_class'        => '',
  'fallback_cb'       => 'bootstrap_four_wp_navwalker::fallback',
  'walker'            => new bootstrap_four_wp_navwalker()
);
?>  
            
<?php  
  
          if ( has_nav_menu( 'Front-menu' ) ) {
  	// If there is, adds the Top Menu area
  	  wp_nav_menu( $front_nav_options); 
  }
   ?> 