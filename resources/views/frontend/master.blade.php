<!DOCTYPE html>
<html>
<head>
	<link rel="apple-touch-icon" sizes="57x57" href="{!!asset('favicon/apple-icon-57x57.png')!!}">
	<link rel="apple-touch-icon" sizes="60x60" href="{!!asset('favicon/apple-icon-60x60.png')!!}">
	<link rel="apple-touch-icon" sizes="72x72" href="{!!asset('favicon/apple-icon-72x72.png')!!}">
	<link rel="apple-touch-icon" sizes="76x76" href="{!!asset('favicon/apple-icon-76x76.png')!!}">
	<link rel="apple-touch-icon" sizes="114x114" href="{!!asset('favicon/apple-icon-114x114.png')!!}">
	<link rel="apple-touch-icon" sizes="120x120" href="{!!asset('favicon/apple-icon-120x120.png')!!}">
	<link rel="apple-touch-icon" sizes="144x144" href="{!!asset('favicon/apple-icon-144x144.png')!!}">
	<link rel="apple-touch-icon" sizes="152x152" href="{!!asset('favicon/apple-icon-152x152.png')!!}">
	<link rel="apple-touch-icon" sizes="180x180" href="{!!asset('favicon/apple-icon-180x180.png')!!}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{!!asset('favicon/android-icon-192x192.png')!!}">
	<link rel="icon" type="image/png" sizes="32x32" href="{!!asset('favicon/favicon-32x32.png')!!}">
	<link rel="icon" type="image/png" sizes="96x96" href="{!!asset('favicon/favicon-96x96.png')!!}">
	<link rel="icon" type="image/png" sizes="16x16" href="{!!asset('favicon/favicon-16x16.png')!!}">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{!!asset('/ms-icon-144x144.png')!!}">
	<meta name="theme-color" content="#ffffff">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Pirano 1913</title>
	<meta name="description" content="Here is a precise description of my awesome webpage.">
</head>
<body>
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127841365-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-127841365-1');
		</script>

		@include('frontend/layout.menu')
	    @yield('content')
	    @include('frontend/layout.contact')
	    @include('frontend/layout.footer')
	    @include('frontend/layout.bottombar')
	    <div class="back-to-top">&uarr;</div>

	<link rel="stylesheet" type="text/css" href="{!! asset('css/app.css') !!} ">
	<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
	<div id="fb-root"></div>
	<!-- Your customer chat code -->
	<div class="fb-customerchat"
	  attribution=setup_tool
	  page_id="121872575334329"
	  logged_in_greeting="Hola, ¿tienes alguna duda?"
	  logged_out_greeting="Hola, ¿tienes alguna duda?">
	</div>
</body>
</html>