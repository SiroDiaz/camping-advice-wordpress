     
    <?php
$main_nav_options = array(
  'theme_location'    => 'Forum',
  'depth'             => 2,
  'container'         => 'false',
  'menu_class'        => 'navbar navbar-default',
  'fallback_cb'       => 'bootstrap_four_wp_navwalker::fallback',
  'walker'            => new bootstrap_four_wp_navwalker()
);
?>

  <nav role="navigation">
     
      <div class="container" id="main-navi">   
    <?php  
  
          if ( has_nav_menu( 'Forum' ) ) {
  	// If there is, adds the Top Menu area
  	 wp_nav_menu( $main_nav_options ); 
  }
   ?> 
            
    </div><!-- .container -->
    
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle collapsed" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
    </button>
        
        
        <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">

         <?php wp_nav_menu( $main_nav_options ); ?>

    </div> 
        
  </nav>
