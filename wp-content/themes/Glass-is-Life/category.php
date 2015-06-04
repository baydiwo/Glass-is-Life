<?php
/**
 * The template for displaying category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Glass-is-Life
 */

get_header(); ?>
<?php include "inc/article-menu.php" ?>
    <div class="row">
        <div class="col-md-12">
			<?php
			global $post;
			$categories = get_the_category($post->ID);
			 ?>
			<?php while ( have_posts() ) : the_post(); ?>

		    	<?php get_template_part( 'single', $categories[0]->cat_name ); ?>

		    <?php endwhile; ?>
		</div>
	</div>
<?php get_footer(); ?>
