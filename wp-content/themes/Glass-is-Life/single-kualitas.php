<?php
/**
 * Template part for displaying single posts.
 *
 * @package Glass-is-Life
 */

?>
<div class="the-article quality-theme">
    <div class="the-video">
        <img src="<?php the_field('background_image') ?>" class="img-responsive article-bg">
        <h1><b>KUALITAS</b></h1>
        <div class="video">
            <iframe width="560" height="315" src="<?php the_field('video') ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="man-details">
            <h2>
                <?php the_title(); ?>   <br>
                <span class="light-color"><?php the_field("position") ?></span>
            </h2>
        </div>
        <div class="video-thumbnail">
            <ul class="list-unstyled list-inline">
                <?php
                // WP_Query arguments
                $args = array (
                    'post_status'            => array('publish','future'),
                    'post_type' => 'tentangkaca',
                    'category__in' => array( 4),
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post(); ?>
                        <?php
                            $url = get_field('video');
                            $vidid = substr($url, strrpos($url, '/') + 1);
                        ?>
                        <li><a href="<?php the_permalink(); ?>"><img src="http://img.youtube.com/vi/<?php echo $vidid; ?>/maxresdefault.jpg" alt="" class="img-responsive" width="170" height="95"><div class="play-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb-play-icon.jpg" height="23" width="26"></div></a></li>
                    <?php
                     }
                } else {
                    // no posts found
                } wp_reset_postdata();
                 ?>

            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
        <div class="row">
            <div class="col-md-10">
                <div class="summary">
                    <div class="colored"><?php the_field("top_description") ?></div>
                    <?php the_field("bottom_description") ?>
                </div>
            </div>
            <div class="col-md-2">
                <span class='st_sharethis_large' displayText='ShareThis'></span>
                <span class='st__large' displayText=''></span>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>