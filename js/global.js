
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
    var sw = $( document ).width();
    
    
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
        
        
        if (sw > 766) {
            if( $(this).scrollTop() > 700 ) {
                $('.floating-top-button').fadeIn();
                $('.floating-nav-widget').fadeIn();
            } else {
                $('.floating-top-button').fadeOut();
                $('.floating-nav-widget').fadeOut();
            }
        }
        
    });
    
    $('.floating-top-button').click(function() {
		$('html, body').animate({scrollTop : 0},800);
		return false;
    })
    

    if ($('.floating-nav-item').contents().length != 0) {
        // console.log('true');
        $(this).css('display','block');
    }  
    
    
    /*
    $('.comment-content li strong').remove();
    var commentSign = $('.comment-content li').text();
    console.log(commentSign);
    $('.comment-author img').attr('src','/wp-content/themes/cosmomuse/images/signs/' + commentSign + '.png'); 
    $('.comment-author img').attr('srcset','/wp-content/themes/cosmomuse/images/signs/' + commentSign + '.png'); */
    
    
    // Get the current sign and display the appropriate dates

    var currentSign = $('.sign-name').attr('id');
    
    if (currentSign == 'aries') { $('.date-range').html('March 21 - April 19') }
    if (currentSign == 'taurus') { $('.date-range').html('April 20 - May 20') }
    if (currentSign == 'gemini') { $('.date-range').html('May 21 - June 20') }
    if (currentSign == 'cancer') { $('.date-range').html('June 21 - June 20') }
    if (currentSign == 'leo') { $('.date-range').html('July 23 - August 22') }
    if (currentSign == 'virgo') { $('.date-range').html('August 23 - September 22') }
    if (currentSign == 'libra') { $('.date-range').html('September 23 - October 22') }
    if (currentSign == 'scorpio') { $('.date-range').html('October 23 - November 21') }
    if (currentSign == 'sagittarius') { $('.date-range').html('November 22 - December 21') }
    if (currentSign == 'capricorn') { $('.date-range').html('December 22 - January 19') }
    if (currentSign == 'aquarius') { $('.date-range').html('January 20 - February 18') }
    if (currentSign == 'pisces') { $('.date-range').html('February 19 - March 20') }
    
});