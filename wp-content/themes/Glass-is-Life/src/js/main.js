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
        //openButton: "Menu",        // This option allows you to define the content of the open menu button. The default value is "Menu"
        //closeButton: "Close X",    // This option allows you to define the content of the close menu button. The default value is "Close X"
        animationSpeed: 100,       // This option lets you control the speed of the animation of each navigation items. The option accepts milliseconds. The default value is 100.
        autoNumber: false,          // This option lets you enable/disable to automatic numbering on menu items. The default value is true.
        animation: "fadeInLeft"    // This option lets you define what type of animation you want. Available options are "fadeInLeft", "fadeInRight", "fadeInUp" and "fadeInDown".
    });
});
