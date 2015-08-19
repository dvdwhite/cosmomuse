
$(function() {
    
    $('.menu-icon').click(function() {
        $('.navigation').toggle();
        $('.search-container').toggle();
    });
    
    
    var  mn = $(".header");
    var logo = $('.logo');
    var menu = $('.menu-icon');
    var nav = $('.navigation');
    var search = $('.search-container');
    var mns = "header-scrolled";
    var hdr = $('.header').height() - 110;
    var body = $('.body');
    
    
    $(window).scroll(function() {
        if( $(this).scrollTop() > hdr ) {
            mn.addClass(mns);
            logo.addClass('logo-sm');
            menu.addClass('menu-icon-adjust');
            nav.addClass('nav-adjust');
            search.addClass('search-adjust');
            body.addClass('body-adjust');
        } else {
            mn.removeClass(mns);
            logo.removeClass('logo-sm');
            menu.removeClass('menu-icon-adjust');
            nav.removeClass('nav-adjust');
            search.removeClass('search-adjust');
            body.removeClass('body-adjust');
        }
    });
    
});