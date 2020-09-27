<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maya Spring Bed</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('img/icofont.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/nivo-lightbox/nivo-lightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/nivo-lightbox/default.css')}}">

    @stack('styles')
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    @yield('content')

    <x-footer />

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/nivo-lightbox.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/gsap/minified/gsap.min.js')}}"></script>

    @stack('scripts')
    <script>
        feather.replace();
        $(window).scroll(function () {
            (window.pageYOffset > 20) ?
                $('.navbar').addClass('scrolled') :
                $('.navbar').removeClass('scrolled');
        })
        $('.banner').owlCarousel({
            loop:true,
            nav:true,
            dots: true,
            lazyLoad: true,
            items: 1
        })
        $('.product').owlCarousel({
            loop:true,
            nav:true,
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
                success:function(data) {
                    console.log(data)
                    $('#modal-description').find('.modal-title').html(slug);
                    $('#modal-description').find('.product-info').html(`
                        <p>Deskripsi:</p>
                        <p>${data.description}</p>
                        <p>Kenyamanan : ${data.comfort}</p>
                        <p>Warna: ${data.color}</p>
                        <p>Tinggi: ${data.height}</p>
                        <p>Garansi: ${data.guarantee}</p>
                        <p>Ukuran: </p>
                    `);
                },
                error: function (err){
                    console.error(err.responseJSON.message)
                }
            })

            gsap.fromTo(".modal-dialog", {y: -50}, {y: 0, duration: .3, ease: "ease.power1"});
        })

    </script>
</body>

</html>