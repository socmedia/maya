<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maya Spring Bed</title>
    <meta name="description" content="Maya Spring Bed, Good Sleep Good Day">
    <meta property="og:title" content="Maya Spring Bed" />
    <meta property="og:url" content="https://https://mayaspringbed.id" />
    <meta property="og:type" content="website" />
    <meta property="og:description"
        content="Maya Springbed akan membuat tidur kamu berkualitas dan badan jadi sehat dan segar untuk menghadapi hari-hari beratmu!">
    <meta property="og:image" content="https://mayaspringbed.id/img/logo.png">
    <meta property="twitter:title" content="Maya Spring Bed" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:description"
        content="Maya Springbed akan membuat tidur kamu berkualitas dan badan jadi sehat dan segar untuk menghadapi hari-hari beratmu!">
    <meta property="twitter:image" content="https://mayaspringbed.id/img/logo.png">
    <link rel="shortcut icon" href="{{asset('img/icofont.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('styles')
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    @yield('content')

    <x-footer />

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script>
        window.addEventListener('scroll', function () {
        const height = window.pageYOffset;
        console.log(height)
            (height > 50) ? $('.navbar').addClass('scrolled') : $('.navbar').removeClass('scrolled');

        })
    </script>
    @stack('scripts')
</body>

</html>