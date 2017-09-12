/**
 * Created by Alexandre on 13-Aug-17.
 */
var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 0.504099, lng: 9.404849},
        zoom: 14,
        gestureHandling: 'cooperative',
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        rotateControl: false,
        fullscreenControl: false/*,
        styles: [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dadada"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#c9c9c9"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
        ]*/
    });
}


$(document).ready(function () {
    $(function () {
        var categories_carousel = $('.categories_carousel'),
            carousel = categories_carousel.find('.carousel');

        carousel.slick({
            infinite: false,
            slidesToShow: 8,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 6,
                        infinite: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: false,
                        dots: true
                    }
                }
            ]
        });
    })

    $(function () {
        var windowWidth = $(window).width(),
            google_maps = $('#google-map'),
            carousel = google_maps.find('.list'),
            prev = google_maps.find('.prev'),
            next = google_maps.find('.next');
        carousel.slick({
            infinite: false,
            vertical: true,
            slidesToShow: 5,
            verticalSwiping: true,
            slidesToScroll: 2,
            autoplay: false,
            prevArrow: prev,
            nextArrow: next,
            responsive: [
                {
                    breakpoint: 1365,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        verticalSwiping: false,
                        vertical: false,
                        infinite: false,
                        autoplay: true,
                        autoplaySpeed: 2000
                    }
                },
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        verticalSwiping: false,
                        vertical: false,
                        infinite: false,
                        autoplay: true,
                        autoplaySpeed: 2000
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        verticalSwiping: false,
                        vertical: false,
                        infinite: false,
                        autoplay: true,
                        autoplaySpeed: 2000
                    }
                }
            ]
        })
    });

    $(function () {
        var sectionSlider =  $('.top-evenements'),
            carousel = sectionSlider.find('.section-body'),
            prev = sectionSlider.find('.prev'),
            next = sectionSlider.find('.next');

        carousel.slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            prevArrow: prev,
            nextArrow: next
        })
    });

    $(function () {
        var sectionSlider =  $('.top-categories'),
            carousel = sectionSlider.find('.section-body'),
            prev = sectionSlider.find('.prev'),
            next = sectionSlider.find('.next');
        carousel.slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            prevArrow: prev,
            nextArrow: next,
            responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1 ,
                        infinite: false,
                        dots: true
                    }
                }
            ]
        })
    });

    $(function () {

        var sectionSliders = $('.section-slider');

        sectionSliders.each(function () {
            var self = $(this),
                carousel = self.find('.event_list'),
                prev = self.find('.prev'),
                next = self.find('.next');

            carousel.slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: prev,
                nextArrow: next,
                responsive: [
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: false,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1 ,
                            infinite: false,
                            dots: true
                        }
                    }
                ]
            })
        });

    });



    var eventData = [
        {"date":"2017-08-17","badge":false,"title":"Fête de l'indépendance"},
        {"date":"2017-08-21","badge":false,"title":"Anniversaire de Freddy"}
    ];

    $('#calendar').zabuto_calendar({
        language: "fr",
        show_previous: false,
        today: true,
        data: eventData
    });

    $(window).scroll(function () {
        var fixedNavbar = $('.navbar-fixed-top'),
            topNav = $('#top-nav-menu'),
            height = topNav.height() + 5,
            self = $(this);

        if(self.scrollTop() >= height){
            fixedNavbar.addClass('attached');
        }
        else {
            fixedNavbar.removeClass('attached');
        }
    })




    $('.pictures-gallery').each(function () {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled:true
            }
        });
    });

    $('.video-player').magnificPopup({
        delegate: 'a',
        type: 'iframe'
    });



    var $animation_elements = jQuery('*[data-animate]');
    var $window = jQuery(window);



    $window.on('scroll',check_if_in_view);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function() {

            var $element = jQuery(this);

            var $animation = $element.attr('data-animate');

            var element_height = $element.outerHeight();

            var element_top_position = $element.offset().top;

            var element_bottom_position = (element_top_position + element_height);



            //check to see if this current container is within viewport

            if ((element_bottom_position >= window_top_position) &&

                (element_top_position <= window_bottom_position)) {

                $element.addClass('animated data-animated '+$animation);

            }

        });

    }

    $('.form_input').attr('autocomplete','off');


});