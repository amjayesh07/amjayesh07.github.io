(function ($) {
    "use strict";

    // Offset start //
    var html_body = $('html, body'),
        nav = $('nav'),
        navOffset = nav.offset().top,
        $window = $(window);

    $('nav a').on('click', function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                html_body.animate({
                    scrollTop: target.offset().top - 30
                }, 1500);
                return false;
            }
        }
    });

    //navbar fixed js //
    $window.on('scroll', function () {
        var scrollPos = $window.scrollTop();
        if (scrollPos > navOffset) {
            $('nav').addClass('navbar-fixed');
        } else {
            $('nav').removeClass('navbar-fixed');
        }
    });

    //scrollspy menu //
    $('body').scrollspy({
        target: '#navbarSupportedContent',
        offset: 80
    });

    //counter //
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    //typer //
    var foo = $('#typer');
    foo.typer(['Front-end Developer', 'Hybrid App Devloper', 'Web Designer']);

    //isotop js //
    var portfolioitems = $(".portfolios");
    var portfoliofilterli = $(".iso-nav li a");
    portfolioitems.isotope({
        itemSelector: '.mix',
        layoutMode: 'fitRows',
    });
    portfoliofilterli.on('click', function () {
        portfoliofilterli.removeClass("active");
        $(this).addClass("active");
        var selector = $(this).attr('data-filter');
        portfolioitems.isotope({
            filter: selector,
            animation0ptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });
        return false;
    });

    //animate js//
    new WOW().init();

    //review_slider js//
    $('.review_slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoPlay:true,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
    },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
    },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });

    $('body').materialScrollTop({
        revealElement: 'header',
        revealPosition: 'bottom',
        onScrollEnd: function () {
            console.log('Scrolling End');
        }
    });
    $(window).load(function() {
            $(".loader").delay(2000).fadeOut("slow");
            $("#overlayer").delay(2000).fadeOut("slow");
        })


}(jQuery));
