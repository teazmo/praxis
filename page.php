<?php get_header(); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="article">
                    <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <?php the_content(); ?>
                </div> <!-- .article -->
            <?php endwhile; endif; ?>
<?php get_footer(); ?>
