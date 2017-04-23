  

<h1 class="post-title">
    <a href="<?php the_permalink() ?>" title="<?php
    the_title_attribute(array(
        'before' => 'Permalink to: ',
        'after' => '')
    );
    ?>">  <?php the_title(); ?> </a>
</h1>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">



        <?php the_content(); ?>


        </article>
    <?php endwhile; ?>
<?php else: ?>

    <?php get_template_part('templates/loop', 'none'); ?>

<?php endif; ?>
