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
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="key-contacts left-sidebar">

                <h1><?php the_title(); ?></h1>

                <div class="separator"></div>

                <div class="world-map">
                    <h4>Key Contact</h4>
                    <div class="the-map"><img src="assets/img/worldMap.png" ></div>
                    <h5>Global Brand Communications</h5>
                    <details>
                        <p>Jessica Engle <br>
                        +1 567 366 1026 <br>
                        <a href="mailto:jessica.engle@o-i.com" >jessica.engle@o-i.com</a></p>
                    </details>
                </div>
                <div class="world-map">
                    <h4>Regional Contacts</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="the-map"><img src="assets/img/northAmericaMap.png" ></div>
                            <h5>Global Brand Communications</h5>
                            <details>
                                <p>Jessica Engle <br>
                                +1 567 366 1026 <br>
                                <a href="mailto:jessica.engle@o-i.com" >jessica.engle@o-i.com</a></p>
                            </details>
                        </div>
                        <div class="col-sm-6">
                            <div class="the-map"><img src="assets/img/latinAmerica.png" ></div>
                            <h5>Global Brand Communications</h5>
                            <details>
                                <p>Jessica Engle <br>
                                +1 567 366 1026 <br>
                                <a href="mailto:jessica.engle@o-i.com" >jessica.engle@o-i.com</a></p>
                            </details>
                        </div>
                        <div class="col-sm-6">
                            <div class="the-map"><img src="assets/img/asiaPacificMap.png" ></div>
                            <h5>Global Brand Communications</h5>
                            <details>
                                <p>Jessica Engle <br>
                                +1 567 366 1026 <br>
                                <a href="mailto:jessica.engle@o-i.com" >jessica.engle@o-i.com</a></p>
                            </details>
                        </div>
                        <div class="col-sm-6">
                            <div class="the-map"><img src="assets/img/EuorpeanMap.png" ></div>
                            <h5>Global Brand Communications</h5>
                            <details>
                                <p>Jessica Engle <br>
                                +1 567 366 1026 <br>
                                <a href="mailto:jessica.engle@o-i.com" >jessica.engle@o-i.com</a></p>
                            </details>
                        </div>
                    </div>
                </div>
                <div class="separator"></div>
                <div class="world-map">
                    <h4>Press Materials</h4>
                    <ul class="list-unstyled pdf-list">
                        <li><a href="">LCA Report</a></li>
                        <li><a href="">6 Reasons to Choose Glass</a></li>
                        <li><a href="">Clear Solution for the Future</a></li>
                        <li><a href="">O-I 2012 Corporate Brochure</a></li>
                    </ul>
                    <br><br>
                    <p>You will need Adobe Reader to view these files. <br>
                    <a class="green"><b>Click here to download Adobe Reader.</b></a></p>
                </div>
            </div> <!-- col-md-8 -->
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="right-sidebar">
                <div class="item">
                    <img src="assets/img/keyContact.png" class="img-responsive"></img>
                </div>
                <div class="item box-green">
                    <p>MIRELLA GUEDES CAMPELO</p>
                    <p class="light-green">Knows Food That Comes In Glass Is Just Better</p>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>