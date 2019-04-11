<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	<title>Pirano 1913</title>
	<meta name="description" content="Lentes Pirano para sol y armazones para tus lentes, La marca italiana que reinventa el concepto de lujo casual: gafas de gama alta con especial atención a la ligereza, la comodidad y la belleza.">

	<link rel="dns-prefetch" href="https://www.gstatic.com" />
	<link rel="dns-prefetch" href="https://www.facebook.com" />
	<link rel="dns-prefetch" href="https://www.gtrk.s3.amazonaws.com" />
	<meta name="dc.subject" content="Pirano 1913" />
	<meta name="dc.title" content="Lentes Pirano de sol y armazones a la moda en Puerto Vallarta y Rieviera nayarit, Mexico" />
	<meta name="dc.description" content="Lentes para sol y armazones para tus lentes, La marca italiana que reinventa el concepto de lujo casual: gafas de gama alta con especial atención a la ligereza, la comodidad y la belleza." />
	<meta name="dc.source" content="http://www.pirano1913.com/" />

	<meta property="og:locale" content="es"/>
	<meta property="og:locale:alternate" content="en" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Pirano 1913 Lentes para sol y armazones para tus lentes a la moda, en Puerto Vallarta y Rieviera nayarit, Mexico" />
	<meta property="og:description" content="Lentes para sol y armazones para tus lentes, La marca italiana que reinventa el concepto de lujo casual: gafas de gama alta con especial atención a la ligereza, la comodidad y la belleza." />
	<meta property="og:url" content="http://www.pirano1913.com/" />
	<meta property="og:site_name" content="Pirano 1913" />
	<meta property="og:image" content="http://www.pirano1913.com/media/logo.svg" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127841365-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-127841365-1');
		</script>
	<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "Store",
		  "name": "Pirano 1913",
		  "description": "Lentes para sol y armazones para tus lentes, La marca italiana que reinventa el concepto de lujo casual: gafas de gama alta con especial atención a la ligereza, la comodidad y la belleza.",
		  "openingHours": "Mo-Sun 07:00-23:00",
		  "telephone": "+52013221962051",
		  "address":
		  {
		  "@type": "PostalAddress",
		  "streetAddress": "Rio Rhin 128",
		  "addressLocality": "Puerto Vallarta",
		  "addressRegion": "JAL",
		  "addressCountry": "MX"
		  },
		  "department":
		  {
		    "@type": "ClothingStore",
		    "name": "Pirano 1913",
		    "description": "Lentes para sol y armazones para tus lentes, La marca italiana que reinventa el concepto de lujo casual: gafas de gama alta con especial atención a la ligereza, la comodidad y la belleza.",
		    "openingHours": "Mo-Sun 07:00-23:00",
		    "telephone": "+52013221962051",
		    "address":
		    {
		       "@type": "PostalAddress",
		        "streetAddress": "Rio Rhin 128",
		        "addressLocality": "Puerto Vallarta",
		        "addressRegion": "JAL",
		        "addressCountry": "MX"
		    }
		  }
		}
	</script>
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
		{{--@include('frontend/layout.contact') --}}
	    @include('frontend/layout.footer')
	    @include('frontend/layout.bottombar')
	    <div class="back-to-top">&uarr;</div>

	<link rel="stylesheet" type="text/css" href="{!! asset('css/app.css') !!} ">
	<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
	<div id="fb-root"></div>
		<!-- Your customer chat code -->
		<div class="fb-customerchat" attribution=setup_tool  page_id="121872575334329" logged_in_greeting="Hola, ¿tienes alguna duda?"  logged_out_greeting="Hola, ¿tienes alguna duda?">
		</div>
		<div class="fb-chat">
			<a href="https://m.me/Pirano1913" target="_blank"><svg width="60px" height="60px" viewBox="0 0 60 60"><svg x="0" y="0" width="60" height="60"><defs><linearGradient x1="50%" y1="100%" x2="50%" y2="0.000340050378%" id="linearGradient-1"><stop stop-color="#0068FF" offset="4.5%"></stop><stop stop-color="#00C6FF" offset="95.5%"></stop></linearGradient></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g><g><circle fill="#FFFFFF" cx="30" cy="30" r="30"></circle><g transform="translate(10.000000, 11.000000)"><path d="M0,18.7150914 C0,24.5969773 2.44929143,29.6044708 6.95652174,33.0434783 L6.95652174,40 L14.2544529,36.6459314 C16.0763359,37.1551856 18,37.4301829 20,37.4301829 C31.043257,37.4301829 40,29.0529515 40,18.7150914 C40,8.37723141 31.043257,0 20,0 C8.956743,0 0,8.37723141 0,18.7150914 Z" fill="url(#linearGradient-1)"></path><polygon fill="#FFFFFF" points="16.9378907 19.359375 7 25 17.8976562 13.140625 23.0570312 18.640625 33 13 22.1023437 24.859375"></polygon></g></g></g></g></svg></svg>
			</a>
</body>
</html>