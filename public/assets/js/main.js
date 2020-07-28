/*
* Template Name: BreezyCV - Resume / CV / vCard / Portfolio Template
* Author: LMPixels
* Author URL: http://themeforest.net/user/lmpixels
* Version: 1.2.0
*/

(function ($) {
    "use strict";

    // Portfolio subpage filters
    function portfolio_init() {
        let portfolio_grid = $('.portfolio-grid'),
            portfolio_filter = $('.portfolio-filters');

        if (portfolio_grid) {

            portfolio_grid.shuffle({
                speed: 450,
                itemSelector: 'figure'
            });

            portfolio_filter.on("click", ".filter", function (e) {
                portfolio_grid.shuffle('update');
                e.preventDefault();
                $('.portfolio-filters .filter').parent().removeClass('active');
                $(this).parent().addClass('active');
                portfolio_grid.shuffle('shuffle', $(this).attr('data-group'));
            });

        }
    }

    // /Portfolio subpage filters


    // Hide Mobile menu
    function mobileMenuHide() {
        let windowWidth = $(window).width(),
            siteHeader = $('#site_header');

        if (windowWidth < 1025) {
            siteHeader.addClass('mobile-menu-hide');
            $('.menu-toggle').removeClass('open');
            setTimeout(function () {
                siteHeader.addClass('animate');
            }, 500);
        } else {
            siteHeader.removeClass('animate');
        }
    }

    // /Hide Mobile menu

    // Custom scroll
    function customScroll() {
        let windowWidth = $(window).width();
        if (windowWidth > 1024) {
            $('.animated-section, .single-page-content, #site_header').each(function () {
                $(this).perfectScrollbar();
            });
        } else {
            $('.animated-section, .single-page-content, #site_header').each(function () {
                $(this).perfectScrollbar('destroy');
            });
        }
    }

    // /Custom scroll

    // Contact form validator
    $(function () {
        let contactForm = $('#contact_form');

        contactForm.validator();

        contactForm.on('submit', function (e) {
            e.preventDefault();
            let url = "php/contact_form.php";
            let data = $(this).serialize();

            grecaptcha.ready(function () {
                grecaptcha.execute('6LeR2LAZAAAAAA6CymXn45X55tUZKC5bC6WKox3p', {action: 'submit'}).then(function (token) {
                    data += "&g-recaptcha-response=" + token;
                    
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: data,
                        success: function (data) {
                            let messageAlert = 'alert-' + data.type;
                            let messageText = data.message;

                            let alertBox = '' +
                                '<div class="alert ' + messageAlert + ' alert-dismissable">' +
                                '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><br>'
                                + messageText +
                                '</div>';
                            if (messageAlert && messageText) {
                                let messages = contactForm.find('#messages');
                                messages.html(alertBox);
                                messages.toggleClass('hidden');
                                $('.close').click(function () {
                                    messages.toggleClass('hidden');
                                    messages.html("");
                                });
                                contactForm[0].reset();
                            }
                        }
                    });
                });
            });
        });
        return false;
    });
    // /Contact form validator

    //On Window load & Resize
    $(window)
        .on('load', function () { //Load
            // Animation on Page Loading
            $(".preloader").fadeOut(800, "linear");

            // initializing page transition.
            let ptPage = $('.animated-sections');
            if (ptPage[0]) {
                PageTransitions.init({
                    menu: 'ul.main-menu',
                });
            }
        })
        .on('resize', function () { //Resize
            mobileMenuHide();
            $('.animated-section').each(function () {
                $(this).perfectScrollbar('update');
            });
            customScroll();
        });


    // On Document Load
    $(document).on('ready', function () {
        let movementStrength = 23;
        let height = movementStrength / $(document).height();
        let width = movementStrength / $(document).width();

        $("body").on('mousemove', function (e) {
            let pageX = e.pageX - ($(document).width() / 2),
                pageY = e.pageY - ($(document).height() / 2),
                newvalueX = width * pageX * -1,
                newvalueY = height * pageY * -1,
                elements = $('.lm-animated-bg');

            elements.addClass('transition');
            elements.css({
                "background-position": "calc( 50% + " + newvalueX + "px ) calc( 50% + " + newvalueY + "px )",
            });

            setTimeout(function () {
                elements.removeClass('transition');
            }, 300);
        })

        // Mobile menu
        $('.menu-toggle').on("click", function () {
            let siteHeader = $('#site_header');
            siteHeader.addClass('animate');
            siteHeader.toggleClass('mobile-menu-hide');
            $('.menu-toggle').toggleClass('open');
        });

        // Mobile menu hide on main menu item click
        $('.main-menu').on("click", "a", function () {
            mobileMenuHide();
        });

        // Sidebar toggle
        $('.sidebar-toggle').on("click", function () {
            $('#blog-sidebar').toggleClass('open');
        });

        // Initialize Portfolio grid
        let $portfolio_container = $(".portfolio-grid");
        $portfolio_container.imagesLoaded(function () {
            portfolio_init(this);
        });

        customScroll();

        // Text rotation
        $('.text-rotation').owlCarousel({
            loop: true,
            dots: false,
            nav: false,
            margin: 0,
            items: 1,
            autoplay: true,
            autoplayHoverPause: false,
            autoplayTimeout: 3800,
            animateOut: 'animated-section-scaleDown',
            animateIn: 'animated-section-scaleUp'
        });

        // Testimonials Slider
        $(".testimonials.owl-carousel").owlCarousel({
            nav: true, // Show next/prev buttons.
            items: 3, // The number of items you want to see on the screen.
            loop: false, // Infinity loop. Duplicate last and first items to get loop illusion.
            navText: false,
            autoHeight: true,
            margin: 25,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1,
                },
                // breakpoint from 480 up
                480: {
                    items: 1,
                },
                // breakpoint from 768 up
                768: {
                    items: 2,
                },
                1200: {
                    items: 2,
                }
            }
        });

        // Clients Slider
        $(".clients.owl-carousel").imagesLoaded().owlCarousel({
            nav: true, // Show next/prev buttons.
            items: 2, // The number of items you want to see on the screen.
            loop: false, // Infinity loop. Duplicate last and first items to get loop illusion.
            navText: false,
            margin: 10,
            autoHeight: true,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 2,
                },
                // breakpoint from 768 up
                768: {
                    items: 4,
                },
                1200: {
                    items: 5,
                }
            }
        });


        //Form Controls
        $('.form-control')
            .val('')
            .on("focusin", function () {
                $(this).parent('.form-group').addClass('form-group-focus');
            })
            .on("focusout", function () {
                if ($(this).val().length === 0) {
                    $(this).parent('.form-group').removeClass('form-group-focus');
                }
            });

        // Lightbox init
        $('body').magnificPopup({
            delegate: 'a.lightbox',
            type: 'image',
            removalDelay: 300,

            // Class that is added to popup wrapper and background
            // make it unique to apply your CSS animations just to this exact popup
            mainClass: 'mfp-fade',
            image: {
                // options for image content type
                titleSrc: 'title',
                gallery: {
                    enabled: true
                },
            },

            iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe"  allowfullscreen></iframe>' +
                    '<div class="mfp-title mfp-bottom-iframe-title"></div>' +
                    '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

                patterns: {
                    youtube: {
                        index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

                        id: null, // String that splits URL in a two parts, second part should be %id%
                        // Or null - full URL will be returned
                        // Or a function that should return %id%, for example:
                        // id: function(url) { return 'parsed id'; }

                        src: '%id%?autoplay=1' // URL that will be set as a source for iframe.
                    },
                    vimeo: {
                        index: 'vimeo.com/',
                        id: '/',
                        src: '//player.vimeo.com/video/%id%?autoplay=1'
                    },
                    gmaps: {
                        index: '//maps.google.',
                        src: '%id%&output=embed'
                    }
                },

                srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
            },

            callbacks: {
                markupParse: function (template, values, item) {
                    values.title = item.el.attr('title');
                }
            },
        });

        // OpenStreetMap
        let request = $.ajax({
            url: "https://api-adresse.data.gouv.fr/search/",
            method: "GET",
            data: "q=" + encodeURI($('#map').data('address'))
        });
        request.done(function (result) {
            let x = result.features[0].geometry.coordinates[1];
            let y = result.features[0].geometry.coordinates[0];

            let map = L.map('map', {
                center: [x, y],
                zoom: 12
            });
            L.tileLayer("https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png").addTo(map);
            L.marker([x, y]).addTo(map)
        })
        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed : " + textStatus);
        })
    });

})(jQuery);
