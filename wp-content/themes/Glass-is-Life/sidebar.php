<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Glass-is-Life
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-md-5">
    <?php dynamic_sidebar( 'Home right sidebar' ); ?>
    <div class="rightpost">
        <div class="title">FOLLOW US</div>
        <ul class="list-inline">
            <li><a target="_blank" href="http://www.facebook.com/GlassIsLife"><img src="<?php echo get_template_directory_uri();?>/assets/img/FaceBookHome.png" class="img-responsive"></a></li>
            <li><a target="_blank" href="https://twitter.com/GlassIsLifeID"><img src="<?php echo get_template_directory_uri();?>/assets/img/TwitterHome.png" class="img-responsive"></a></li>
            <li><a target="_blank" href="https://instagram.com/glassislife.id/"><img src="<?php echo get_template_directory_uri();?>/assets/img/instagram.jpg" class="img-responsive"></a></li>
            <!-- <li><a target="_blank" href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/tumbleHome.png" class="img-responsive"></a></li> -->
        </ul>
    </div>
    <div class="rightpost">
        <div class="title">sharing glass</div>
        <?php echo do_shortcode("[custom-facebook-feed type=events pastevents=true]" );; ?>
    </div>
</div> <!-- right side -->

