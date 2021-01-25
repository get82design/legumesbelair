<head>
<title>@yield('dynamicPageTitle') - Les légumes de Bel Air</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Get82Design">
    <meta name="keywords" content="@yield('keywords')"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/png" href="{{ URL::asset('assets/images/icons/favicon.png') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/icomoon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/animate/animate.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/select2/select2.min.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/lightbox2/css/lightbox.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/revolution/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/revolution/css/navigation.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/revolution/css/settings.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/MagnificPopup/magnific-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/noui/nouislider.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/slide100/slide100.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/main.css') }}">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107087187-6"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-107087187-6');
	</script>

</head>