

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">  
<!---Left Side Bar-->
<aside id="side-bar-left">
       
 <article class="side-bar-box-front ">
     <h2>Menu</h2>  
     <nav id="navbar-front-menu">       
<?php get_template_part( 'template-parts/navigation', 'front' ); ?>
</nav>
 </article>
                    
 <article class="side-bar-box-front">
<<<<<<< HEAD:sidebar-front.php
    <h2><?php esc_html_e( 'Popular Campsites ', 'camping-advice' ); ?></h2>

    <div class="card" >
        <a href="#">
            <img src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/camping-advice-wordpress/images/Top5/image1.jpg" class="card-img-top" alt="<?php esc_attr_e('Image of Doward Farm Campsite', 'camping-advice');?>" />
        </a>
    
        <div class="card-body">
            <h5 class="card-title">Doward Farm</h5>
            <p class="card-text">In the beautiful Lake District Sed commodo hendrerit mi. Praesent libero lorem.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <div class="card">
        <a href="#">
            <img src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/camping-advice-wordpress/images/Top5/image2.jpg" class="card-img-top" alt="<?php esc_attr_e('Image of Doward Farm Campsite', 'camping-advice');?>" />
        </a>
    
        <div class="card-body">
            <h5 class="card-title"><?php esc_html_e('Hollins Farm ', 'camping-advice'); ?></h5>
            <p class="card-text"><?php esc_html_e('In the beautiful Lake District Sed commodo hendrerit mi. Praesent libero lorem. ', 'camping-advice'); ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <div class="card">
        <a href="#">
            <img src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/camping-advice-wordpress/images/Top5/image3.jpg" class="card-img-top" alt="<?php esc_attr_e('Image of Syke Farm Campsite', 'camping-advice');?>" />
        </a>
    
        <div class="card-body">
            <h5 class="card-title"><?php esc_html_e('Syke Farm Camp ', 'camping-advice'); ?></h5>
            <p class="card-text"><?php esc_html_e('In Durham in the beautiful Lake District Sed commodo hendrerit mi. libero lorem. ', 'camping-advice'); ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    
    
</article>
<article class="side-bar-box-front">
    <h2>Weather</h2>
    <div id="weather">
        <a href="http://www.accuweather.com/en/gb/london/ec4a-2/weather-forecast/328328" class="aw-widget-legal">
            <!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
        </a>
        <div id="awcc1438108667288" class="aw-widget-current" data-locationkey="328328" data-unit="f" data-language="en-us" data-useip="false" data-uid="awcc1438108667288"></div>
        <script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
    </div>
</article>



</aside>
<!--Left Side Bar end-->
=======
                        <h2>Popular Campsites</h2>

                        <div class="media">

                            <div class="media-left ">
                                <a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/sites/4/2016/12/image3-1.jpg" class="img-thumbnail img-responsive media-object" alt="Image of Doward Farm Campsite" /></a>
                            </div>

                            <div class="media-body">
                                <h3>Doward Farm</h3>
                                <p> In the beautiful Lake District Sed commodo hendrerit mi. Praesent libero lorem.</p>

                            </div>

                        </div>

                        <div class="media">

                            <div class="media-left">
                                <img src="<?php echo home_url(); ?>/wp-content/uploads/sites/4/2016/12/image4-1.jpg" class="img-thumbnail img-responsive media-object" alt="Image of Hollins Farm Campsite" />
                            </div>

                            <div class="media-body">
                                <h3>Hollins Farm</h3>
                                <p> In the beautiful Lake District Sed commodo hendrerit mi. Praesent libero lorem.</p>
                            </div>

                        </div>

                        <div class="media">

                            <div class="media-left">
                                <img src="<?php echo home_url(); ?>/wp-content/uploads/sites/4/2016/12/image2-1.jpg" class="img-thumbnail img-responsive media-object" alt="Image of Syke Farm Campsite" />
                            </div>

                            <div class="media-body">
                                <h3>Syke Farm Camp</h3>
                                <p> In Durham in the beautiful Lake District Sed commodo hendrerit mi. libero lorem.</p>
                            </div>

                        </div>

                    </article>
                    <article class="side-bar-box-front">
                        <h2>Weather</h2>
                        <div id="weather">
                            <a href="http://www.accuweather.com/en/gb/london/ec4a-2/weather-forecast/328328" class="aw-widget-legal">
                                <!--
        By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
        -->
                            </a>
                            <div id="awcc1438108667288" class="aw-widget-current" data-locationkey="328328" data-unit="f" data-language="en-us" data-useip="false" data-uid="awcc1438108667288"></div>
                            <script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
                        </div>
                    </article>

                  

                </aside>
                <!--Left Side Bar end-->
>>>>>>> aa6f18f202d16c01773934c7be91883c8cfc8f42:camping-advice-wordpress/sidebar-front.php
</div>
