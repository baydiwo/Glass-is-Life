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
                <!-- <div class="share-icon pull-right"><span class='pull-right st_sharethis_large' displayText='ShareThis'></span><div class="pull-right pshare"><b>SHARE THIS</b></div></div> -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="contact-us left-sidebar">
                <h1><?php the_title(); ?></h1>
                <br>
                <!-- <form class="form-horizontal"> -->
                <div class="row">
                    <div class="col-md-12">
                        <p>Jika kamu memiliki saran, pertanyaan atau komentar seputar komunitas ‘Glass Is Life Indonesia’, silakan mengisi formulir di bawah ini.</p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="115" title="Hubungi Kami"]' ); ?>
                    <div class="clearfix"></div>
                    <p>&nbsp;<br></p>
                </div>
                <!-- </form> -->
            </div>
        </div>
        <!-- <div class="col-md-4 col-sm-12">
            <div class="right-sidebar">
                <div class="item">
                    <img src="<?php the_field('sidebar_image') ?>" class="img-responsive"></img>
                </div>
                <div class="item box-green">
                    <p><?php the_field('name_and_title') ?></p>
                    <p class="light-green"><?php the_field('text') ?></p>
                </div>
            </div>
        </div> -->
    </div>
<?php get_footer(); ?>