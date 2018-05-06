  


<?php get_header(); ?>

<!--Content and Left Sidebar Wrapper-->
<div class="row">

    <?php get_sidebar('front'); ?>

    <div class=" col-lg-9 col-md-9 col-sm-12 col-12">

        <!--slider section-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="carousel slide" data-ride="carousel" id="campingCarousel" data-interval="3000">
                    <ol class="carousel-indicators">
                        <li data-target="#campingCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#campingCarousel" data-slide-to="1"></li>
                        <li data-target="#campingCarousel" data-slide-to="2"></li>
                        <li data-target="#campingCarousel" data-slide-to="3"></li>
                        <li data-target="#campingCarousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <a href="#"><img src="<?php echo home_url(); ?>/wp-content/themes/camping-advice-wordpress/images/Sliderimages/black-family-in-tent-smiling.jpg" alt="black-family-in-tent-smiling" /></a>
                            <div class="carousel-caption">
                                <h3>Caption Text</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img 
                            src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/camping-advice-wordpress/images/Sliderimages/Man-sitting-in-tent-in-wood-lands.jpg" 
                            alt="<?php esc_attr_e('Man-sitting-in-tent-in-wood-lands', 'camping-advice');?>" 
                            class="d-block w-100"
                            /></a>
                            
                            <div class="carousel-caption">
                                <h3>Caption Text</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                                <img src="<?php echo home_url(); ?>/wp-content/themes/camping-advice-wordpress/images/Sliderimages/group-of-young-people-camping.jpg" alt="<?php esc_attr_e('group-of-young-people-camping', 'camping-advice');?>" />
                            </a>
                            <div class="carousel-caption">
                                <h3>Caption Text</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                                <img src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/camping-advice-wordpress/images/Sliderimages/kids-running-around-tent.jpg" alt="<?php esc_attr_e('kids-running-around-tent', 'camping-advice');?>" />
                            </a>
                            <div class="carousel-caption">
                                <h3>Caption Text</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                                <img src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/camping-advice-wordpress/images/Sliderimages/young-couple-in-tent.jpg" alt="<?php esc_attr_e('young-couple-in-tent', 'camping-advice');?>" />
                            </a>
                            <div class="carousel-caption">
                                <h3>Caption Text</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#campingCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                   <a class="carousel-control-next" href="#campingCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--end of slider section-->
            </div>
        </div>

        <!--Content section-->
        <div class="row">
            <div class="lg-md-12 col-md-12 col-sm-12 col-xs-12">
                <!--Intro section-->
                <article class="home-page-text">
                    <!-- TEXT BOX-->
                    <h1><?php _e( 'CampingAdvice.com', 'camping-advice' ); ?></h1>

                    <h2><?php _e( 'Expert Advice', 'camping-advice' ); ?></h2>
                    
                    <p><?php _e( 'is a site goving advice on all camping related issues. Sed commodo hendrerit mi. Praesent libero lorem, sollicitudin bibendum, ultricies in, pharetra id, risus.', 'camping-advice' ); ?>
                        
                    </p>
                    <br/>
                    <h2><?php _e( 'Discounts and Special offers', 'camping-advice' ); ?></h2>
                    <p>
                        
                        <?php _e( 'Etiam ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor sollicitudin Hiking. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur volutpat lacus quis pede.', 'camping-advice' ); ?>
                    </p>
                    <br/>
                    <h2><?php _e( 'Find the best value camp sites', 'camping-advice' ); ?></h2>
                    <p>
                    <?php _e( 'Etiam ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor sollicitudin Hiking. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur volutpat lacus quis pede.', 'camping-advice' ); ?>
                    </p>
                    <br/>
                    <br/>
                </article>
            </div>
        </div>

        <div class="row">

            <div class="lg-md-4 col-md-4 col-sm-6 col-xs-12">
                <!--content-boxes section-->

                <div class="card" >
                    <a href="#">  <img class="card-img-top" src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/camping-advice-wordpress/images/Kids-running.jpg" alt="<?php esc_attr_e('kids-running-around-tent', 'camping-advice');?>"></a>
                        <div class="card-body">

                            <h5 class="card-title">Class aptent taciti sociosqu ad torquent per conubia tents</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Proin eu enim. Maecenas porttitor metus sit amet tortor. Aenean non tellus in ante interdum ornare.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                </div>

            </div>

             <div class="lg-md-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card" >
                    <a href="#">  <img class="card-img-top" src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/camping-advice-wordpress/images/Kids-running.jpg" alt="<?php esc_attr_e('kids-running-around-tent', 'camping-advice');?>"></a>
                        <div class="card-body">

                            <h5 class="card-title">Class aptent taciti sociosqu ad torquent per conubia tents</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Proin eu enim. Maecenas porttitor metus sit amet tortor. Aenean non tellus in ante interdum ornare.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                </div>

            </div>

            <div class="lg-md-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card" >
                    <a href="#">  <img class="card-img-top" src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/camping-advice-wordpress/images/Kids-running.jpg" alt="<?php esc_attr_e('kids-running-around-tent', 'camping-advice');?>"></a>
                        <div class="card-body">

                            <h5 class="card-title">Class aptent taciti sociosqu ad torquent per conubia tents</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Proin eu enim. Maecenas porttitor metus sit amet tortor. Aenean non tellus in ante interdum ornare.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                </div>
                
            </div>
            
        </div>

    </div>

</div>
<!--Content section end-->

<div class="clearfix"></div>

    <div class="sidebar-btn">
        Login and Register.
        <br/> Click Here
    </div>

<?php get_footer(); ?>