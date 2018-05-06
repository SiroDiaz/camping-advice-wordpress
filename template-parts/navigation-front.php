

   <?php
    // Checking if there's anything in Top Menu
    if (has_nav_menu('Front-menu')) {
        // If there is, adds the Top Menu area
        wp_nav_menu(array(
            'menu' => 'Front-menu',
            'container' => 'ul',
            'menu_class' => 'navbar-front',
            'menu_id' => 'navbar-front'

        ));
    }
    ?>