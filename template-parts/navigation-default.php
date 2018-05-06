
<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Main', 'camping-advice' ); ?></button>
			<?php
   // Checking if there's anything in Top Menu
   if (has_nav_menu('Main')) {
       // If there is, adds the Top Menu area
       wp_nav_menu(array(
           'menu' => 'Main',
           'container' => 'ul',
           'menu_id' => 'navbar_default',
           'menu_class' => 'navbar_default'
       ));
   }
   ?>
			
		</nav><!-- #site-navigation -->
