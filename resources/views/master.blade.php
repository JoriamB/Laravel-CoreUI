<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/coreui/css/coreui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/coreui/fontawesome/css/fontawesome.css') }}">
    <!-- Custom CSS -->
    @stack('css')

    <title>@yield('title', config('coreui.title', __('coreui::coreui.default_title')))</title>
</head>
<body class="app header-fixed sidebar-fixed sidebar-lg-show sidebar-minimized brand-minimized">
<header class="app-header navbar">
    <div class="container-fluid">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="navbar-brand-full">{!! config('coreui.logo') !!}</span>
            <span class="navbar-brand-minimized">{!! config('coreui.logo_mini') !!}</span>
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav ml-auto">
            @yield('account', View::make('coreui::account'))
        </ul>
    </div>
</header>
<div class="app-body">
    <script type="application/javascript" src="{{ asset('vendor/coreui/js/toggle_sidebar.js') }}"></script>
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                @each('coreui::menu-item', $coreUI->menu(), 'item')
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        <script type="application/javascript" src="{{ asset('vendor/coreui/js/add_listener_to_sidebar.js') }}"></script>
    </div>
    <main class="main">
        <div aria-label="breadcrumb">
            @yield('breadcrumb')
        </div>
        <div class="container-fluid">
            @yield('body')
        </div>
    </main>
</div>
<footer class="app-footer">
    @yield('footer', View::make('coreui::footer'))
</footer>

<!-- jQuery first, then Bootstrap, then CoreUI  -->
<script type="application/javascript" src="{{ asset('vendor/coreui/js/jquery.slim.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('vendor/coreui/js/bootstrap.bundle.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('vendor/coreui/js/coreui.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('vendor/coreui/js/coreui-utilities.min.js') }}"></script>

<!-- Custom JS -->
@stack('js')
</body>
</html>
