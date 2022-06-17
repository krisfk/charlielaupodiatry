$(document).ready(function() {
    $('.mobile-menu-btn').click(function() {
        $('.mobile-menu-btn').toggleClass('active');
        $('.menu-top-container ul').toggleClass('active');
    });
});
$(window).load(function() {
    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: false, // default
        live: true, // default
    });
    wow.init();
});

$(function() {
    $('.submenu').fadeOut(0);
    $('.a-parent').mouseenter(function() {
        if ($(window).width() > 1200) {
            $('.submenu').clearQueue().fadeOut(0);

            // if ($(this).hasClass('parent')) {
            $(this).next('.submenu').css({
                display: 'block',
            });
            $(this).next('.submenu').slideDown(200);
            // }
        }
    });

    $('.submenu').mouseleave(function() {
        if ($(window).width() > 1200) {
            $('.submenu').fadeOut(0);
        }
    });

    $('.submenu').mouseenter(function() {
        $(this).clearQueue().fadeIn(0);
    });

    $('.a-parent').mouseleave(function() {
        if ($(window).width() > 1200) {
            $('.submenu').delay(500).fadeOut(0);
        }
    });
});