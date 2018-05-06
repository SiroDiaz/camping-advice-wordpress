


<nav id="site-navigation" class="main-navigation">
      
      <?php
    // Checking if there's anything in Top Menu
    if (has_nav_menu('Forum')) {
        // If there is, adds the Top Menu area
        wp_nav_menu(array(
            'menu' => 'Forum-menu',
            'container' => 'ul',
            'menu_id' => 'navbar_forum',
            'menu_class' => 'navbar_forum'

        ));
    }
    ?>
                
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle collapsed" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
    </button>
                  
        
  </nav>
