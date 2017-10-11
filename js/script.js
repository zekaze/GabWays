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
        fullscreenControl: false
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

    //modal body



    $('#calendar').zabuto_calendar({
        language: "fr",
        show_previous: false,
        today: true,
        ajax: {
            url: "event_data.php",
            modal: true
        }
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

    $('input[type=checkbox]').each(function () {
        var self = $(this),
            label = self.parent('label');

        self.change(function () {
            if(self.is(':checked')){
                label.addClass('checked');
            }
            else{
                label.removeClass('checked');
            }
        })
    });


    $(function () {
        $('#tags').tagsinput({
            maxTags: 8,
            typeahead: {
                source: ['Amsterdam', 'Washington', 'Sydney', 'Beijing', 'Cairo']
            }
        });
    });



    $(function () {
        $('.datepicker').wickedpicker({
            now: "8:00",
            twentyFour : true,
            timeSeparator: ':',
            minutesInterval: 15
        });
    })


});
tinymce.init({
    selector: '.rich-text',
    height: 200,
    menubar: false,
    language: 'fr_FR',
    branding: false,
    plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'wordcount',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code help'
    ],
    toolbar: 'insert | undo redo |  styleselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat'
});
