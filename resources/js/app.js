window.$ = window.jQuery = require('jquery');

var didScroll;
var lastScrollTop = 0;
var delta = 200;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}

$(function() {
    var message = "Where you at?";
    var original;

    $(window).focus(function() {
        if (original) {
            document.title = original;
        }
    }).blur(function() {
        var title = $('title').text();
        if (title != message) {
            original = title;
        }
        document.title = message;
    });
});


