<?php
/**
 * The template for displaying about O-I pages.
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
                    <div class="about text-center about-bg">
                        <h1><?php the_title(); ?></h1>
                        <iframe class="desktop" width="560" align="center" height="315" src="<?php the_field('youtube_link') ?>" frameborder="0" allowfullscreen></iframe>
                        <iframe class="mobile" width="100%" align="center" height="auto" src="<?php the_field('youtube_link') ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="about">
                        <br>
                        <?php the_field('content') ?>
                        <div class="clearfix"></div>
                        <div class="about-posts">
                            <a href="#"><img src="<?php the_field('image_1') ?>" alt=""></a>
                            <p class="title"><?php the_field('title_1') ?></p>
                        </div>
                        <div class="about-posts">
                            <a href="#"><img src="<?php the_field('image_2') ?>" alt=""></a>
                            <p class="title"><?php the_field('title_2') ?></p>
                        </div>
                        <div class="about-posts">
                            <a href="#"><img src="<?php the_field('image_3') ?>" alt=""></a>
                            <p class="title"><?php the_field('title_3') ?></p>
                        </div>
                    </div>
                </div> <!-- left side -->
                <div class="col-md-4 col-sm-12">
                    <div class="text-center">
                        <img src="<?php the_field('contact_us_image') ?>" class="pull-left" ><br><br>
                        <p class="text-left"><b><?php the_field('contact_us_text') ?>
                        <br><br>
                        <a href="<?php the_field('contact_us_link') ?>" class="green">Click Here</a>
                        </b></p>
                    </div>
                    <hr>
                    <div class="links-we-like">
                        <h2>LINKS WE LIKE</h2>
                        <?php the_field('link_images') ?>
                    </div>
                </div> <!-- right side -->
            </div>
<?php get_footer(); ?>