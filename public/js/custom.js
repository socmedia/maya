(function ($) {

    "use strict";

    // Window Resize Mobile Menu Fix
    mobileNav();


    // Scroll animation init
    window.sr = new scrollReveal();


    // Menu Dropdown Toggle
    if ($('.menu-trigger').length) {
        $(".menu-trigger").on('click', function () {
            $(this).toggleClass('active');
            $('.header-area .nav').slideToggle(200);
        });
    }


    // Menu elevator animation
    $('a[href*=\\#]:not([href=\\#])').on('click', function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                var width = $(window).width();
                if (width < 991) {
                    $('.menu-trigger').removeClass('active');
                    $('.header-area .nav').slideUp(200);
                }
                $('html,body').animate({
                    scrollTop: (target.offset().top) - 130
                }, 700);
                return false;
            }
        }
    });

    $(document).ready(function () {
        if (window.location.pathname === "/") {
            $(document).on("scroll", onScroll());

            //smoothscroll
            $('a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");

                $('a').each(function () {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');

                var target = this.hash,
                    menu = target;
                var target = $(this.hash);
                $('html, body').stop().animate({
                    scrollTop: (target.offset().top) - 130
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        }
    });

    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $('.nav a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('.nav ul li a').removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    }


    // Home seperator
    if ($('.home-seperator').length) {
        $('.home-seperator .left-item, .home-seperator .right-item').imgfix();
    }


    // Page loading animation
    $(window).on('load', function () {
        if ($('.cover').length) {
            $('.cover').parallax({
                imageSrc: $('.cover').data('image'),
                zIndex: '1'
            });
        }

        $("#preloader").animate({
            'opacity': '0'
        }, 600, function () {
            setTimeout(function () {
                $("#preloader").css("visibility", "hidden").fadeOut();
            }, 300);
        });
    });


    // Window Resize Mobile Menu Fix
    $(window).on('resize', function () {
        mobileNav();
    });


    // Window Resize Mobile Menu Fix
    function mobileNav() {
        var width = $(window).width();
        $('.submenu').on('click', function () {
            if (width < 992) {
                $('.submenu ul').removeClass('active');
                $(this).find('ul').toggleClass('active');
            }
        });
    }

    $('[show-modal]').click(function () {
        $('#modal-description').modal('show')
        const slug = $(this).data('slug');
        $.ajax({
            url: `/api/product/${slug}`,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'GET',
            success: function (data) {
                $('[modal-body-loader]').hide();
                $('[modal-body-real]').removeClass('d-none').fadeIn();
                $('#modal-description').find('img').attr('src', `${document.location.origin}/image/${data.image}/get`);
                $('#modal-description').find('.product-info').html(data.description);
            },
            error: function (err) {
                console.error(err.responseJSON.message)
            }
        })
    })

    $('#modal-description').on('hidden.bs.modal', function (e) {
        $('[modal-body-loader]').show();
        $('[modal-body-real]').addClass('d-none');
        $('#modal-description').find('img').attr('src', '');
    })

    function checkError(value, message) {
        if (value === 'name') {
            $('[name="name"]').addClass('is-invalid').fadeIn();
            $('[name="name"]').parent().find('p').html(message).fadeIn();
        }

        if (value === 'email') {
            $('[name="email"]').addClass('is-invalid').fadeIn();
            $('[name="email"]').parent().find('p').html(message).fadeIn();
        }

        if (value === 'subject') {
            $('[name="subject"]').addClass('is-invalid').fadeIn();
            $('[name="subject"]').parent().find('p').html(message).fadeIn();
        }

        if (value === 'message') {
            $('[name="message"]').addClass('is-invalid').fadeIn();
            $('[name="message"]').parent().find('p').html(message).fadeIn();
        }
    }

    $('.main-button').click(function () {
        const form = new FormData(document.querySelector('#contact-form'));
        const datas = {
            name: form.get('name'),
            email: form.get('email'),
            subject: form.get('subject'),
            message: form.get('message'),
        }

        $('.spinner-border').removeClass('d-none');
        $('.form-control').removeClass('is-invalid');
        $('.form-control').parent().find('p').html('');

        $.ajax({
            url: 'http://127.0.0.1:8000/hubungi-kami',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: datas,
            success: function (data) {
                $('.spinner-border').addClass('d-none');
                $('.alert-success').fadeIn();
            },
            error: function (err) {
                const errors = err.responseJSON.errors;
                const obj = Object.entries(errors);
                $('.spinner-border').addClass('d-none');
                obj.map((v, i) => {
                    checkError(v[0], v[1]);
                })
            }
        })
    })


})(window.jQuery);
