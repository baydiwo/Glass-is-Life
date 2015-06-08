        </article>
        <footer>
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo.png" class="img-responsive pull-left" >
                    <div class="clearfix"></div>
                    <div class="sitemap pull-left">
                        <ul class="list-inline list-unstyled">
                            <li><a href="">site map</a></li>
                            <li><a href="<?php echo home_url() ?>/privacy-policy/">privacy policy</a></li>
                            <li><a href="<?php echo home_url() ?>/terms-of-use/">terms of use</a></li>
                            <li><a href="http://O-I.com" target="_blank">o-i.com</a></li>
                        </ul>
                    </div>
                    <div class="copy pull-right">
                        <p>© 2013 Owens-IllInois, Inc.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </footer>
    </div>

    <!-- responsive menu -->
    <div class="sidemenu">
        <ul class="fm-first-level">
            <li><a href="#menu1">Menu</a></li>
            <li><a href="#menu2">Tentang Kaca</a></li>
        </ul>
        <nav id="menu1" class="active">
            <?php mobile_main_nav(); ?>
        <!-- <a href="http://www.bucketlistly.com/achievements/bungee-off-victoria-falls-107918">
        <span class="subtitle">Finally, I decided to take on my first bungee jump ever (!) and I chose Victoria Falls..</span>
        Bungee Off Victoria Falls
        </a> -->
        </nav>
        <nav id="menu2">
            <?php mobile_second_nav(); ?>
        </nav>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js"></script>
</body>
</html>