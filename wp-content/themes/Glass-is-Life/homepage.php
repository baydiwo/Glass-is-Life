<?php
/**
 * Template Name: Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
            <?php if ( have_posts() ) : ?>
            <div class="row">
                <div class="col-md-7">
                    <ul class="list-unstyled listpost-homepage">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <li <?php if(get_field('taste_image') == null){echo 'class="display-none"';} ?> >
                            <div class="theposts">
                                <img class="img-responsive" src="<?php the_field('taste_image') ?>">
                                <div class="title">
                                    <h2><b><?php the_field('taste_title') ?></b>
                                    <br>
                                    <?php the_field('taste_quotes') ?>
                                    <br><br>
                                    – <?php the_field('taste_name') ?> <br>
                                    <span class="colors"><?php the_field('taste_position') ?></span></h2>
                                </div>
                                <div class="linefront"></div>
                                <div class="lineback"></div>
                                <div class="watch"><p>LIHAT VIDEO</p><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play_icon_rasa.gif"></a></div>
                            </div>
                        </li>
                        <li <?php if(get_field('quality_image') == null){echo 'class="display-none"';} ?> >
                            <div class="theposts">
                                <img class="img-responsive" src="<?php the_field('quality_image') ?>">
                                <div class="title">
                                    <h2><b><?php the_field('quality_title') ?></b>
                                    <br>
                                    <?php the_field('quality_quotes') ?>
                                    <br><br>
                                    – <?php the_field('quality_name') ?> <br>
                                    <span class="colors"><?php the_field('quality_position') ?></span></h2>
                                </div>
                                <div class="linefront"></div>
                                <div class="lineback"></div>
                                <div class="watch"><p>LIHAT VIDEO</p><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play_icon_kualitas.gif"></a></div>
                            </div>
                        </li>
                        <li <?php if(get_field('sus_image') == null){echo 'class="display-none"';} ?> >
                            <div class="theposts">
                                <img class="img-responsive" src="<?php the_field('sus_image') ?>">
                                <div class="title">
                                    <h2><b><?php the_field('sus_title') ?></b>
                                    <br>
                                    <?php the_field('sus_quotes') ?>
                                    <br><br>
                                    – <?php the_field('sus_name') ?> <br>
                                    <span class="colors"><?php the_field('sus_position') ?></span></h2>
                                </div>
                                <div class="linefront"></div>
                                <div class="lineback"></div>
                                <div class="watch"><p>LIHAT VIDEO</p><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play_icon_kelestarian.gif"></a></div>
                            </div>
                        </li>
                        <li <?php if(get_field('health_image') == null){echo 'class="display-none"';} ?> >
                            <div class="theposts">
                                <img class="img-responsive" src="<?php the_field('health_image') ?>">
                                <div class="title">
                                    <h2><b><?php the_field('health_title') ?></b>
                                    <br>
                                    <?php the_field('health_quotes') ?>
                                    <br><br>
                                    – <?php the_field('health_name') ?> <br>
                                    <span class="colors"><?php the_field('health_position') ?></span></h2>
                                </div>
                                <div class="linefront"></div>
                                <div class="lineback"></div>
                                <div class="watch"><p>LIHAT VIDEO</p><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play_icon_kesehatan.gif"></a></div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                </div> <!-- left side -->
                <?php else : ?>
                        <?php get_template_part( 'template-parts/content', 'none' ); ?>
                    <?php endif; ?>
                <?php get_sidebar(); ?>
            </div>
<?php get_footer(); ?>