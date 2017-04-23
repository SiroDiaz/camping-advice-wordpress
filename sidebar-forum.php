

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"> 
    
    <aside id="side-bar-left" class="group" role="complementary">
        
        <article class="side-bar-box">
     <h2>Links</h2>         
<?php get_template_part( 'navigation', 'front' ); ?>
                    </article>
   
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('forum-sidebar')) : ?>

        <?php endif; ?>

 
</aside>
</div>