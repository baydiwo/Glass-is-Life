$(document).ready(function(){
    if ($('#articlemenu li').length < 4) {
        $('#articlemenu').css('padding', '0 19.3%');
    }
    if ($('#articlemenu li').length < 3) {
        $('#articlemenu').css('padding', '0 29.4%');
    }

    $("#open-menu").click(function() {
        $(".sidemenu").openMenu();
        return true;
    });
    $(".sidemenu").fullpageMenu({
        openButton: '<nav class="navbar-default">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button></nav>',        // This option allows you to define the content of the open menu button. The default value is "Menu"
        closeButton: '<nav class="navbar-default">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button></nav>',    // This option allows you to define the content of the close menu button. The default value is "Close X"
        animationSpeed: 100,       // This option lets you control the speed of the animation of each navigation items. The option accepts milliseconds. The default value is 100.
        autoNumber: false,          // This option lets you enable/disable to automatic numbering on menu items. The default value is true.
        animation: "fadeInLeft"    // This option lets you define what type of animation you want. Available options are "fadeInLeft", "fadeInRight", "fadeInUp" and "fadeInDown".
    });

    $(".taste-youtube").colorbox({iframe:true, innerWidth:580, innerHeight:300 , maxWidth:'95%', maxHeight:'95%'});
    $(".quality-youtube").colorbox({iframe:true, innerWidth:580, innerHeight:300 , maxWidth:'95%', maxHeight:'95%'});
    $(".sus-youtube").colorbox({iframe:true, innerWidth:580, innerHeight:300 , maxWidth:'95%', maxHeight:'95%'});
    $(".health-youtube").colorbox({iframe:true, innerWidth:580, innerHeight:300 , maxWidth:'95%', maxHeight:'95%'});
});

