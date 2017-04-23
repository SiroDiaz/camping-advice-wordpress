<?php get_header(); ?>

<div class="row">

    <!---Right side content area with slider and intro text and links-->
    <div class="col-lg- 12 col-md-12 col-sm-12 col-xs-12">

        <article id="main-content">

           <?php get_template_part('template-parts/loop' , 'single'); ?>

        </article>


    </div>

</div>

<br/>
<div class="row">
    <!---Right side content area with slider and intro text and links-->
    <div class="col-lg- 12 col-md-12 col-sm-12 col-xs-12">

<article id="main-content-comments">
<h1>Send your Comments</h1>
    <?php
// If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) :

        comments_template();

    endif;
    ?>

</article>

</div>

</div>





    <!---Right side content area with slider and intro text and links-->





<?php get_footer(); ?>
