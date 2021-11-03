<?php
	use App\Http\Controllers\Controller;
	$global_settings = Controller::global_settings();
?>

<!doctype html>
<html lang="en">
<head>
<title>{{ $global_settings->meta_title ?? "" }}</title>
	<!--meta info-->
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<meta name="author" content="digitafro.com">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('theme/images/favicon.png') }}">
	<link rel="stylesheet" href="{{ asset('theme/css/style.css')}}" type="text/css">
	<link rel="stylesheet" href="{{ asset('theme/css/bootstrap.css')}}" type="text/css">
	<link rel="stylesheet" href="{{ asset('theme/css/font-awesome.css')}}" type="text/css">
	<!--[if !IE 9]><!-->
	<link rel="stylesheet" href="{{ asset('theme/css/effect.css')}}" type="text/css">
	<link rel="stylesheet" href="{{ asset('theme/css/animation.css')}}" type="text/css">
	<!--<![endif]-->
	<link rel="stylesheet" href="{{ asset('theme/css/masterslider.css')}}" type="text/css">
	<link rel="stylesheet" href="{{ asset('theme/css/ms-fullscreen.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" media="all" href="{{ asset('theme/css/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" media="all" href="{{ asset('theme/css/owl.transitions.css')}}">
	<link rel="stylesheet" href="{{ asset('theme/css/color.css')}}" type="text/css">
	@stack('head.scripts')
    @stack('head.styles')
</head> 

<body id="page-top" class="index-white" data-offset="90" data-target=".navigation" data-spy="scroll">
	<div class="wrapper hide-main-content" id="app"> 
		<section class="page page-product">
			<!--Menu Mobile-->
			@include('partials.themeMobile')
			<!--Menu Mobile-->
			<div class="content-wrapper">
				<!--Header-->	
				@include('partials.themeHeader')
				<!--End Header-->

				@yield('content')
			</div>
		</section >
		
		<!--Footer-->
		@include('partials.footer')
		<!--End Footer-->
		<!--To Top-->
		<div id="copyright">
			<div class="container">

				<div class="back-to-top"><a title="BACK_TO_TOP" href="#top"><i class="fa fa-chevron-up"></i></a></div>

				<div class="clrDiv"></div>
			</div>
		</div>
		<!--End To Top-->
		<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
	</div>
	
	<script type="text/javascript" src="{{ asset('theme/js/jquery-2.1.0.min.js')}}"></script>
	<script src="{{ mix('/js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('theme/js/bootstrap.min.js')}}"></script>
	<!-- <script type="text/javascript" src="{{ asset('theme/js/jquery.min.js')}}"></script>-->
	<!-- <script type="text/javascript" src="{{ asset('theme/js/jquery-ui.js')}}"></script> --> 
	<script type="text/javascript" src="{{ asset('theme/js/jquery.easing.1.3.js')}}"></script>
	<script type="text/javascript" src="{{ asset('theme/js/waypoints.js')}}"></script>
	<script type="text/javascript" src="{{ asset('theme/js/parallax/jquery.parallax-1.1.3.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/parallax/jquery.transform2d.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/parallax/script.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/parallax/parallax.js')}}"></script>
	<script type="text/javascript" src="{{ asset('theme/js/template.js')}}"></script>
	<script type="text/javascript" src="{{ asset('theme/js/masterslider.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('theme/js/banner.js')}}"></script>
	<script type="text/javascript" src="{{ asset('theme/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('theme/js/theme.js')}}"></script>
	<script type="text/javascript" src="{{ asset('theme/js/classie.js')}}"></script>
	<script type="text/javascript" src="{{ asset('theme/js/jquery.custombox.js')}}"></script>
	<!-- <script type="text/javascript" src="{{ asset('theme/js/dropdown.js')}}"></script> -->
	<script type="text/javascript" src="{{ asset('theme/js/main.js')}}"></script>
	

	<script type="text/javascript">
		$('#tabs').tabs();
		$('#profiletabs').tabs();
	</script>
	@yield('scripts')
</body>
</html>