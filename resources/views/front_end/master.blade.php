<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>@yield('title')</title>
		<meta name="description" content="Everything you need to know about meta tags for search engine optimization"/>
		<meta name="keywords" content="meta tags,search engine optimization" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, width=device-width" />

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
		<!-- Bootstrap -->
    	<link href="{{asset('/front_end/userInterface/css/bootstrap.css')}}" rel="stylesheet" media="screen" type="text/css">
		<!-- Main CSS -->
		<link href="{{asset('/front_end/userInterface/style.css')}}" rel="stylesheet" media="screen" type="text/css">
		<!-- Responsive CSS -->
		<link href="{{asset('/front_end/userInterface/css/responsive.css')}}" rel="stylesheet" media="screen" type="text/css">
		<!-- Font  -->
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,700,600,500,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
		<!-- Parteners Carousel  -->
		<link href="{{asset('/front_end/userInterface/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
		<!-- prettyPhoto Lightbox  -->
		<link rel="stylesheet" href="{{asset('/front_end/userInterface/css/prettyPhoto.css')}}" type="text/css">
	</head>
	<body>
        {{-- nav --}}
        @include('front_end.include.nav')
        <!--body Content Boxes -->
        @yield('body')
        <!-- Footer -->
        @include('front_end.include.footer')
	
	<script src="http://code.jquery.com/jquery.js" type="text/javascript"></script>
	<script src="{{asset('/front_end/userInterface/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/front_end/userInterface/js/owl.carousel.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/front_end/userInterface/js/bootstrap-rating-input.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/front_end/userInterface/js/jquery.prettyPhoto.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/front_end/userInterface/js/jquery.gmap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/front_end/userInterface/js/responsive-nav.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/front_end/userInterface/js/custom.js')}}" type="text/javascript"></script>
</body>