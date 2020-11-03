(function () {
    'use strict';

    // Show Menu on Book
    $(window).bind('scroll', function () {
        var navHeight = $(window).height() - 500;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar').addClass('on');
        } else {
            $('.navbar').removeClass('on');
        }
    });

    $(".navbar-nav li a").click(function (event) {
        var toggle = $(".navbar-toggle").is(":visible");
        if (toggle) {
            $(".navbar-collapse").collapse('hide');
        }
    });

    $('.banner').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        lazyLoad: true,
        autoplay: true,
        items: 1
    })
    $('.product').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        lazyLoad: true,
        items: 3,
    })

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

    $('.btn-contact').click(function () {
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

}());
