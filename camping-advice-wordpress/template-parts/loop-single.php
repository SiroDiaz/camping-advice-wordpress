  

    <?php if (have_posts()) : ?>
        
        <?php while (have_posts()) : the_post(); ?>
        
            <article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">

                <h1 class="post-title">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h1>

                <header class="byline">
                    <div class="entry-meta">
                        <div class="meta-content">

                            single loop

                        </div>
                    </div><!-- .entry-meta -->
                </header>
                
  <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute() ?>;">
                    <figure class="featuredImage"><?php the_post_thumbnail('custom'); ?></figure>
                </a>

              
 <div class="entry-content">
                     
                      <?php the_content(); ?>
 </div>
                    <br>
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

<?php comment_form(); ?>
<br>
<br>
            </article>
        <?php endwhile; ?>
    <?php else: ?>

       
        
    <?php endif; ?>
