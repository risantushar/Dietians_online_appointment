<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Doctor || Login</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- Fontfaces CSS-->
     <link href="{{asset('/admin/dashboard/css/font-face.css')}}" rel="stylesheet" media="all">
     <link href="{{asset('/admin/dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet"  media="all">
     <link href="{{asset('/admin/dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet"  media="all">
     <link href="{{asset('/admin/dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
 
     <!-- Bootstrap CSS-->
     <link href="{{asset('/admin/dashboard/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet"  media="all">
 
     <!-- Vendor CSS-->
     <link href="{{asset('/admin/dashboard/vendor/animsition/animsition.min.css')}}"  media="all">
     <link href="{{asset('/admin/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
     <link href="{{asset('/admin/dashboard/vendor/wow/animate.css')}}" rel="stylesheet"  media="all">
     <link href="{{asset('/admin/dashboard/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet"  media="all">
     <link href="{{asset('/admin/dashboard/vendor/slick/slick.css')}}" rel="stylesheet"  media="all">
     <link href="{{asset('/admin/dashboard/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
     <link href="{{asset('/admin/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
     <link href="{{asset('/admin/dashboard/vendor/vector-map/jqvmap.min.css')}}" rel="stylesheet" media="all">
 
     <!-- Main CSS-->
     <link href="{{asset('/admin/dashboard/css/theme.css')}}" rel="stylesheet" media="all">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
