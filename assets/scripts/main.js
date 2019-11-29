/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
        init: function() {
            $( ".navbar-toggle" ).click(function() {
                $( ".collapsed" ).toggleClass( "active" );
                $(this).toggleClass( "navbar-switch" );
                $( ".logo" ).toggleClass( "white-logo" );
            });
            $( ".navbar-default" ).addClass( "fadein" );
            $(window).on('scroll', function() {
                scrollPosition = $(this).scrollTop();
                if (scrollPosition >= 175) {
                    $( ".logo" ).addClass( "smaller" );
                }
                else {
                    $( ".logo" ).removeClass( "smaller" );
                }
            });
            // LazyLoad
            // lazy loads elements with default selector: `.lozad`
            const observer = lozad('.lozad', {
                loaded: function(el) {
                    el.onload = function() {
                        el.classList.add('fadein');
                    };
                },
            });
            var isInViewport = function (elem) {
                var distance = elem.getBoundingClientRect();
                return (
                    distance.top >= 0 &&
                    distance.left >= 0 &&
                    distance.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    distance.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            };
        },
        finalize: function() {

        }
    },
    // Home page
    'home': {
        init: function() {
            $( "#hero" ).addClass( "fadein-hero" );

            // Hero fadeins
            $( "#hero h1 span.static" ).addClass( "fadein" );
            $( "#hero h1 span.static" ).addClass( "color-change-orange" );
            setTimeout( function(){$( "#hero h1 span.static" ).removeClass( "color-change-orange" ); }  , 3500 );
            setTimeout( function(){$( "#hero h1 span.static" ).addClass( "color-change-pink" ); }  , 3500 );
            setTimeout( function(){$( "#hero h1 span.static" ).removeClass( "color-change-pink" ); }  , 7500 );
            setTimeout( function(){$( "#hero h1 span.static" ).addClass( "color-change-orange" ); }  , 7500 );

            setInterval(function(){loop()}, 8000);
            function loop(){
                setTimeout( function(){$( "#hero h1 span.static" ).removeClass( "color-change-orange" ); }  , 3300 );
                setTimeout( function(){$( "#hero h1 span.static" ).addClass( "color-change-pink" ); }  , 3300 );
                setTimeout( function(){$( "#hero h1 span.static" ).removeClass( "color-change-pink" ); }  , 7300 );
                setTimeout( function(){$( "#hero h1 span.static" ).addClass( "color-change-orange" ); }  , 7300 );
            }

            setTimeout( function(){$( "#hero h1 span.first" ).addClass( "fadein" ); }  , 300 );
            setTimeout( function(){$( "#hero h1 span.first" ).removeClass( "fadein" ); }  , 4300 );
            setTimeout( function(){$( "#hero h1 span.first" ).addClass( "fadeout" ); }  , 4300 );
            setTimeout( function(){$( "#hero h1 span.first" ).removeClass( "fadeout" ); }  , 4800 );


            setTimeout( function(){$( "#hero h1 span.second" ).addClass( "fadein" ); }  , 4300 );
            setTimeout( function(){$( "#hero h1 span.second" ).removeClass( "fadein" ); }  , 8300 );
            setTimeout( function(){$( "#hero h1 span.second" ).addClass( "fadeout" ); }  , 8300 );
            setTimeout( function(){$( "#hero h1 span.second" ).removeClass( "fadeout" ); }  , 8800 );


            setTimeout( function(){$( "#hero h1 span.third" ).addClass( "fadein" ); }  , 8300 );
            setTimeout( function(){$( "#hero h1 span.third" ).removeClass( "fadein" ); }  , 12300 );
            setTimeout( function(){$( "#hero h1 span.third" ).addClass( "fadeout" ); }  , 12300 );
            setTimeout( function(){$( "#hero h1 span.third" ).removeClass( "fadeout" ); }  , 12800 );

            setInterval(function(){loopsecond()}, 12000);

            function loopsecond(){
                setTimeout( function(){$( "#hero h1 span.first" ).addClass( "fadein" ); }  , 300 );
                setTimeout( function(){$( "#hero h1 span.first" ).removeClass( "fadein" ); }  , 4300 );
                setTimeout( function(){$( "#hero h1 span.first" ).addClass( "fadeout" ); }  , 4300 );
                setTimeout( function(){$( "#hero h1 span.first" ).removeClass( "fadeout" ); }  , 4800 );


                setTimeout( function(){$( "#hero h1 span.second" ).addClass( "fadein" ); }  , 4300 );
                setTimeout( function(){$( "#hero h1 span.second" ).removeClass( "fadein" ); }  , 8300 );
                setTimeout( function(){$( "#hero h1 span.second" ).addClass( "fadeout" ); }  , 8300 );
                setTimeout( function(){$( "#hero h1 span.second" ).removeClass( "fadeout" ); }  , 8800 );


                setTimeout( function(){$( "#hero h1 span.third" ).addClass( "fadein" ); }  , 8300 );
                setTimeout( function(){$( "#hero h1 span.third" ).removeClass( "fadein" ); }  , 12300 );
                setTimeout( function(){$( "#hero h1 span.third" ).addClass( "fadeout" ); }  , 12300 );
                setTimeout( function(){$( "#hero h1 span.third" ).removeClass( "fadeout" ); }  , 12800 );
            }





            // Full page scrolling
            var $win = $('.outsider');

            $win.scroll(function () {
                if ($win.scrollTop() == 0) {
                    $( "#intro" ).removeClass( "active-intro" );
                    $( "#hero" ).removeClass( "inactive-hero" );
                    console.log("top!");
                }
                else {
                    $( "#intro" ).addClass( "active-intro" );
                    $( "#hero" ).addClass( "inactive-hero" );
                }
            });

            jQuery(function($) {

                var $win = $('.outsider');
                var winA = $win.height();   // Get the window height.

                $win.on("scroll", function () {
                    if ($(this).scrollTop() > winA ) {
                        console.log("eerste!");
                        $( ".outsider" ).addClass( "pink" );
                        $( ".logo" ).addClass( "white" );
                        $( ".navbar-toggle" ).addClass( "white" );
                        $( ".navbar-default" ).addClass( "white" );
                        $( ".outsider" ).removeClass( "blue" );
                        $( "#intro" ).addClass( "full-width" );
                        $( ".logos" ).addClass( "remove" );
                        $( ".logos ul li" ).removeClass( "active-li" );
                        $( ".logo" ).addClass( "smaller" );
                    }
                    else if ($(this).scrollTop() < winA ) {
                        console.log("nietus een!");

                        $( ".outsider" ).removeClass( "pink" );
                        $( "#intro" ).removeClass( "full-width" );
                        $( ".logo" ).removeClass( "white" );
                        $( ".navbar-default" ).removeClass( "white" );
                        $( ".logo" ).removeClass( "smaller" );
                        $( ".navbar-toggle" ).removeClass( "white" );

                        setTimeout( function(){$( ".logos" ).removeClass( "remove" ); }  , 500 );
                        setTimeout( function(){$( ".logos ul li" ).addClass( "active-li" ); }  , 1000 );
                    }
                }).on("resize", function(){ // If the user resizes the window
                    winH = $(this).height(); // you'll need the new height value
                });

            });

            jQuery(function($) {

                var $win = $('.outsider');
                var winB = $win.height() + $win.height();   // Get the window height.

                $win.on("scroll", function () {
                    if ($(this).scrollTop() > winB ) {
                        console.log("tweede!");
                        $( ".outsider" ).addClass( "blue" );
                        $( ".logo" ).addClass( "white" );
                        $( ".navbar-toggle" ).addClass( "white" );
                        $( ".navbar-default" ).addClass( "white" );
                        $( ".outsider" ).removeClass( "orange" );
                    }
                    else {
                        console.log("nietus twee!");
                    }
                }).on("resize", function(){ // If the user resizes the window
                    winH = $(this).height(); // you'll need the new height value
                });

            });

            jQuery(function($) {

                var $win = $('.outsider');
                var winB = $win.height() + $win.height() + $win.height() ;   // Get the window height.

                $win.on("scroll", function () {
                    if ($(this).scrollTop() > winB ) {
                        $( ".outsider" ).addClass( "orange" );
                        console.log("derde!");
                    }
                    else {
                        console.log("nietus drie!");
                    }
                }).on("resize", function(){ // If the user resizes the window
                    winH = $(this).height(); // you'll need the new height value
                });

            });

        },
        finalize: function() {
            // JavaScript to be fired on the home page, after the init JS
        }
    },
    'over_ons': {
        init: function() {
            $( ".outsider" ).addClass( "pink" );
            $( ".logo" ).addClass( "white" );
            $( ".maintitle" ).addClass( "active-titel" );
            $( "#main-content p:first-of-type" ).addClass( "active-text" );
            $( ".navbar-default" ).addClass( "white" );
            $( ".navbar-toggle" ).addClass( "white" );

            $('#title-hero .maintitle').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".outsider" ).removeClass( "orange" );
                    $( ".outsider" ).addClass( "pink" );
                }
            })

            $('#main-content img').isInViewport(function (status) {
                if (status ==='entered') {
                    $(this).addClass( "bigger" );
                }
                else {
                    $(this).removeClass( "bigger" );
                }
            })

            $('#more-info .title').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".outsider" ).removeClass( "pink" );
                    $( ".outsider" ).removeClass( "white" );
                    $( ".outsider" ).addClass( "orange" );
                    $( ".logo" ).addClass( "white" );
                    $( ".navbar-default" ).addClass( "white" );
                    $( ".navbar-toggle" ).addClass( "white" );
                }
            })

            $('#team ul .teammember .teammember-title').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".outsider" ).removeClass( "orange" );
                    $( ".outsider" ).addClass( "white" );
                    $( ".logo" ).removeClass( "white" );
                    $( ".navbar-default" ).removeClass( "white" );
                    $( ".navbar-toggle" ).removeClass( "white" );
                    $( ".logo" ).addClass( "smaller" );
                }
            })

            $('#team ul .full a').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".logo" ).removeClass( "white" );
                    $( ".navbar-default" ).removeClass( "white" );
                    $( ".navbar-toggle" ).removeClass( "white" );
                    $( ".logo" ).addClass( "smaller" );
                }
            })

            $('footer .address').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".logo" ).removeClass( "smaller" );
                    $( ".navbar-default" ).addClass( "white" );
                    $( ".navbar-toggle" ).addClass( "white" );
                }
            })
        },
        finalize: function() {

        }
    },
    'onze_aanpak': {
        init: function() {
            $( ".outsider" ).addClass( "orange" );
            $( ".logo" ).addClass( "white" );
            $( ".maintitle" ).addClass( "active-titel" );
            $( "#main-content p:first-of-type" ).addClass( "active-text" );
            $( ".navbar-default" ).addClass( "white" );
            $( ".navbar-toggle" ).addClass( "white" );

            $('#title-hero .maintitle').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".outsider" ).removeClass( "pink" );
                    $( ".outsider" ).addClass( "orange" );
                    $( ".big-title-text" ).removeClass( "animation" );
                }
            })

            var image = document.getElementsByClassName('floating-image');
            new simpleParallax(image);

            /*
            $('#main-content .checker').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".image-1" ).addClass( "active-image" );
                    $( ".image-2" ).addClass( "active-image-two" );
                }
                else {
                    $( ".image-1" ).removeClass( "active-image" );
                    $( ".image-2" ).removeClass( "active-image-two" );
                }
            })
            */

            $('#big-title .checker').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".outsider" ).removeClass( "orange" );
                    $( ".outsider" ).addClass( "pink" );
                    setTimeout( function(){$( ".big-title-text" ).addClass( "animation" ); }  , 1000 );
                }
                else {
                    $( ".outsider" ).removeClass( "pink" );
                    $( ".outsider" ).addClass( "orange" );
                }
            })

            $('footer .address').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".logo" ).removeClass( "smaller" );
                    $( ".navbar-default" ).addClass( "white" );
                    $( ".navbar-toggle" ).addClass( "white" );
                }
            })
        },
        finalize: function() {

        }
    },
    'single_cases': {
        init: function() {
            $( ".logo" ).addClass( "white" );
            $( ".navbar-default" ).addClass( "white" );
            $( ".navbar-toggle" ).addClass( "white" );
            $( ".maintitle" ).addClass( "active-titel" );
            $( ".breadcrumb" ).addClass( "active-titel" );

            $('#case-detail-hero .checker').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".logo" ).addClass( "white" );
                    $( ".navbar-default" ).addClass( "white" );
                    $( ".navbar-toggle" ).addClass( "white" );
                }
            })

            $('#intro-case-detail .checker, #content-image-left .title, #content-image-right .title').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".logo" ).removeClass( "white" );
                    $( ".navbar-default" ).removeClass( "white" );
                    $( ".navbar-toggle" ).removeClass( "white" );
                }
            })

            $('#slider .checker').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".logo" ).addClass( "white" );
                    $( ".navbar-default" ).addClass( "white" );
                    $( ".navbar-toggle" ).addClass( "white" );
                }
            })

            $('#video').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".logo" ).removeClass( "white" );
                    $( ".navbar-default" ).removeClass( "white" );
                    $( ".navbar-toggle" ).removeClass( "white" );
                }
            })

            $('footer .address').isInViewport(function (status) {
                if (status ==='entered') {
                    $( ".logo" ).removeClass( "smaller" );
                    $( ".navbar-default" ).addClass( "white" );
                    $( ".navbar-toggle" ).addClass( "white" );
                }
                else {
                    $( ".logo" ).removeClass( "white" );
                    $( ".navbar-default" ).removeClass( "white" );
                    $( ".navbar-toggle" ).removeClass( "white" );
                }
            })
        },
        finalize: function() {
            $('.slider').slick({
                dots: false,
                arrows: true,
                nextArrow: "<img class='a-left control-c next slick-arrow slick-next' src='https://peoplemarketing.nl/arrow-next.svg'>",
                prevArrow: "<img class='a-left control-c prev slick-arrow slick-prev' src='https://peoplemarketing.nl/arrow-previous.svg'>",
                infinite: true,
                autoplay: true,
                draggable: true,
                accessibility: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplaySpeed: 12000,
                centerMode: true,
                centerPadding: '20%',
                responsive: [
                  {
                    breakpoint: 768,
                    settings: {
                      centerPadding: '0px',
                    }
                  }
                ]
            });
        }
    },
    'cases': {
        init: function() {
            $( ".maintitle" ).addClass( "active-titel" );
            $( "#case-intro p:first-of-type" ).addClass( "active-text" );
            $( ".first" ).addClass( "active-first" );
        },
        finalize: function() {

        }
    },
    'error404': {
        init: function() {
            $( ".logo" ).addClass( "white" );
            $( ".navbar-default" ).addClass( "white" );
            $( ".navbar-toggle" ).addClass( "white" );
        },
        finalize: function() {

        }
    },
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
