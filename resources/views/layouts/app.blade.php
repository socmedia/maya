<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{asset('img/icofont.png')}}" type="image/x-icon">
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/adm.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{ asset('css/adm.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed accent-maroon">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand border-bottom-0 navbar-light navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4 sidebar-dark-warning">
            <!-- Brand Logo -->
            <a class="brand-link text-center">
                <img class="brand-image" src="{{asset('img/icofont.png')}}" alt="AdminLTE Logo">
                <span class="brand-text text-uppercase">Maya Springbed</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex text-center">
                    <div class="info w-100">
                        <h5 class="text-uppercase m-0">
                            <a class="nav-link p-0">{{auth()->user()->name}}</a>
                        </h5>
                        <a class="nav-link p-0"><small><em> {{auth()->user()->email}}</em></small></a>

                        <a class="btn mt-3 btn-block btn-outline-secondary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('product.index')}}"
                                class="nav-link {{request()->routeIs('product*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-bed"></i>
                                <p>
                                    Produk
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview {{request()->routeIs('article*') ? 'menu-open' : ''}}">
                            <a href="javascript:void(0)"
                                class="nav-link {{request()->routeIs('article*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Artikel
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('article.index')}}"
                                        class="nav-link {{(request()->routeIs('article*') && ! request()->routeIs('article.create')) ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Artikel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('article.create')}}"
                                        class="nav-link {{request()->routeIs('article.create') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tulis Artikel</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>

        {{-- Content Section --}}
        @yield('content')

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer>
    </div>

    @stack('scripts')
</body>

</html>
