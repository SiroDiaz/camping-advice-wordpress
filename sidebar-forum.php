<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-12"> 
    
    <aside id="side-bar-left" class="group" role="complementary">
        
        <article class="side-bar-box">
     <h2>Links</h2>         
<?php get_template_part( 'template-parts/navigation', 'front' ); ?>
                    </article>
   
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('forum-sidebar')) : ?>

        <?php endif; ?>

 <div class="clearfix"></div>
</aside>
</div>
</div>