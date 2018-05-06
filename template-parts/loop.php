  

 

    <?php if (have_posts()) : ?>
        
        <?php while (have_posts()) : the_post(); ?>
        
            <article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">

                <h1 class="post-title">
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute( array(
            'before' => 'Permalink to: ',
            'after' => '')
        );?>">  <?php the_title(); ?> </a>
                </h1>

                <header class="byline">
                    <div class="entry-meta">
                        <div class="meta-content">
                            

                        </div>
                    </div><!-- .entry-meta -->
                </header>
        

                    <?php if (has_post_thumbnail()) { ?>
                        <figure class="featuredImage">
                            <a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
                                <?php the_post_thumbnail('featured-image'); ?>
                            </a>
                        </figure>
                    <?php } else { ?>
                        <figure class="featuredImage">
                            <a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </figure>
                    <?php }
                    ?>
                    <div class="entry-content">
                      <?php the_excerpt(); ?>
                    </div>
                <br/>
                    <footer class="byline">

                      <p class='right'>
                            <a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
                        </p>

                        <span class="bylinecat">Posted in <?php the_category(', ') ?> </span>
                        <span class="bylinecat"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>


                        <p><?php
                            $lastmodified = get_the_modified_time('U');
                            $posted = get_the_time('U');
                            if ($lastmodified > $posted) {
                                echo "Edited " . human_time_diff(get_the_time('U'), get_the_modified_time('U')) . " later";
                            }
                            ?>
                        </p>

                    </footer>

<br/>
            </article>
        <?php endwhile; ?>
    <?php else: ?>

        <?php get_template_part( 'templates/loop', 'none' ); ?>
        
    <?php endif; ?>
