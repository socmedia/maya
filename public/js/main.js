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

    // Hide nav on click
    $(".navbar-nav li a").click(function (event) {
        // check if window is small enough so dropdown is created
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
                let li = '';
                const host = document.location.host;
                data.size.map(function (v) {
                    return li += `<li>${v}</li>`;
                })
                $('#modal-description').find('img').attr('src', `/img/detail/${slug}.png`);
                $('#modal-description').find('#comfort').html(data.comfort);
                $('#modal-description').find('#color').html(data.color);
                $('#modal-description').find('#height').html(data.height);
                $('#modal-description').find('#size').html(`<ol>${li}</ol>`);
                $('#modal-description').find('#guarantee').html(data.guarantee);
                $('#modal-description').find('#description').html(data.description);
            },
            error: function (err) {
                console.error(err.responseJSON.message)
            }
        })

        gsap.fromTo(".modal-dialog", {
            y: -50
        }, {
            y: 0,
            duration: .3,
            ease: "ease.power1"
        });
    })

    $(document).ready(function () {
        setTimeout(() => {
            $('iframe').last().remove()
        }, 3000);

        $('.page').click(function () {
            $('.page').removeClass('active');
            $(this).addClass('active');
        })
    })

}());
