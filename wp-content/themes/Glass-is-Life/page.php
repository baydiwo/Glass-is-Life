<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Glass-is-Life
 */

get_header(); ?>

	<div class="row">
        <div class="col-md-12">
            <div class="sharethis">
                <div class="share-icon pull-right"><span class='pull-right st_sharethis_large' displayText='ShareThis'></span><div class="pull-right pshare"><b>SHARE THIS</b></div></div>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-md-12">
			<main>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>
			</main>
		</div>
    </div>
<?php get_footer(); ?>
