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

        const array = [1, 1, 2, 3, 5, 5, 1]
        const uniqueArray = [...new Set(array)];
        console.log(uniqueArray);


    </script>
</body>

</html>