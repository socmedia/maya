<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maya Spring Bed</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('img/icofont.png')}}" type="image/x-icon">
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
    <script type="text/javascript" src="{{asset('js/gsap/minified/gsap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

    @stack('scripts')
</body>

</html>
