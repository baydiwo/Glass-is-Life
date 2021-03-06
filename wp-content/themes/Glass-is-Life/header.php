<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Glass-is-Life
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">




    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- <title>Glass is Life</title> -->

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "c9a81680-606b-417e-907a-bff19ee75190", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <header>
            <div class="row">
                <div class="col-md-7 col-xs-10">
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo.png" alt="Glas is Life" class="img-responsive"></a>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-xs-12">
                    <div class="share">
                        <iframe frameborder="0" style="margin-right :15px ;width:160px; float: left;height:20px;" src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com/glassislife&amp;send=true&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21"></iframe>
                        <iframe frameborder="0" id="twitter-widget-0" scrolling="no" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.b169aa788731255dd55f1bb243b660e1.en.html#_=1431567427134&amp;count=horizontal&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fglassislife.com%2F&amp;related=glassislife&amp;size=m&amp;text=Glass%20Is%20Life%20%7C%20O-I%20%7C%20Honest%2C%20pure%2C%20iconic%20glass&amp;url=http%3A%2F%2Fglassislife.com" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="float:left;width: auto; height: 20px;width: 90px;"></iframe>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="main-nav">
                        <nav id="primary-nav">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' , 'menu_class' => 'list-inline list-unstyled', ) ); ?>
                        </nav>
                    </div> <!-- main nav -->
                    <div id="mobile-nav">
                        <div class="custom-navbar"><a  class="fm-button" href="#"><nav class="navbar-default">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button></nav></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <article>
