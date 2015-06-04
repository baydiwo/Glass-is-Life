<?php
/**
 * * The template for displaying all shows posts.
 *
 * @package Glass-is-Life
 */

get_header(); ?>
    <?php include "inc/article-menu.php" ?>
    <div class="row">
        <div class="col-md-12">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                    <?php
                    if(in_category('rasa' )){
                        get_template_part('single','rasa');
                    }
                    if(in_category('kualitas' )){
                        get_template_part('single','kualitas');
                    }
                    if(in_category('kelestarian' )){
                        get_template_part('single','kelestarian');
                    }
                    if(in_category('kesehatan' )){
                        get_template_part('single','kesehatan');
                    }
                     ?>

            <?php endwhile; ?>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>
<?php get_footer(); ?>
