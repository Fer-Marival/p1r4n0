
@extends('frontend.master')
@section('content')
	<div class="container-fluid video" id="v-bg">
		<article class="see-video">
			<a data-fancybox href="https://www.youtube.com/watch?v=AELyi16PzWI&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="btn-border">Ver video completo</a> 
		</article>
		<video autoplay loop id="video-background" poster="{!! asset('media/img/header-mobile.jpg')!!}" muted>
			<source src="{{asset('media/video/video.mp4') }}" type="video/mp4">
		</video>
	</div>
	<div class="clear"></div>
	<div class="container" id="home">
		<div class="row align-items-center" id="slide-home">
			<div class="col-md-4 left-slide">
				<div class="content">
					<div class="tittle">
						<h1>PIRANO 1913</h1>
						<h2>Otoño - Invierno</h2> 
					</div>
					<hr>
					<p class="description">
						Presentamos la nueva y renovada colección <strong>Otoño e invierno 2018</strong> – fruto de un trabajo de introspecci&oacute;n y estudio de nuestras raíces, para lograr algo mejorado, nuevo, sublime, sin perder nuestra identidad que es lo que la gente ha aprendido a amar en estos 2 largos años.
					</p>
					<a href="{{url('/shop')}}"><span>&#x02992;</span></a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="slider-pro" id="my-slider">
					<div class="sp-slides">
						<div class="sp-slide">
							<img class="sp-image" alt="Pirano1913 modelos" title="Pirano1913" src="{!! asset('media/img/slide-home1.jpg')!!}"/>
						</div>
						<div class="sp-slide">
							<img class="sp-image" alt="Pirano1913 modelos" title="Pirano1913" src="{!! asset('media/img/slide-home2.jpg')!!}"/>
						</div>
						<div class="sp-slide">
							<img class="sp-image" alt="Pirano1913 modelos" title="Pirano1913" src="{!! asset('media/img/slide-home3.jpg')!!}"/>
						</div>
						<div class="sp-slide">
							<img class="sp-image" alt="Pirano1913 modelos" title="Pirano1913" src="{!! asset('media/img/slide-home4.jpg')!!}"/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="collections">
			<div class="row">
				<div class="col-md-4">
						<div class="collection one">
							<div class="gradient">
								<div class="tittle">Pirano SUN 2018</div>
								<p><em>La nueva colección Pirano SUN 2018 trae la mejor moda y tendencias europeas a tu alcance.</em></p>
								<a href="{{url('/colecciones/summer')}}" class="btn btn-border">Conoce más</a>
							</div class="gradient">
						</div>
				</div>
				<div class="col-md-4">
					<div class="collection two">
						<div class="gradient">
							<div class="tittle">Pirano Vista</div>
							<p><em>Hermosa colección de armazones de fino acetato italiano, que da continuidad a la tradición de la marca.</em></p>
							<div class="clearfix">
								<a href="{{url('/colecciones/vista')}}" class="btn btn-border">Conoce más</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="collection three">
							<div class="gradient">
								<div class="tittle">Pirano KidS</div>
								<p><em>El hermoso acetato del lente Pirano KidS confiere personalidad total a la línea</em></p>
								<div class="clearfix">
									<a href="{{url('/colecciones/kids')}}" class="btn btn-border">Conoce más</a>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
		<div id="campaing">
			<div class="col-md-4 content">
				<div class="tittle">Otoño - Invierno</div>
				<p>Conoce la nueva colección de Pirano1913 y luce con estilo en otoño e invierno </p>
				<a href="{{url('/colecciones')}}" class="btn btn-border">Ver colecciones <span>&#x02992;</span></a>
			</div>
		</div>
		<div id="more-sale">
			<h3>Lo Más Vendido</h3>
			<div class="row">
				<div class="col-6 col-md-3">
					<div class="item">
						<figure>
							<a href="{{url('/colecciones/shop/producto/lente-de-sol-pirano-tr1625-c3/')}}">
								<img src="{!! asset('/media/img/product1.jpg') !!}"class="img-fluid" alt="">
							</a>
						</figure>
						<div class="content">
							<div class="model"><strong>Modelo:</strong> TR1625 C_3</div>
							<a href="{{url('/colecciones/shop/producto/lente-de-sol-pirano-tr1625-c3/')}}">Ver más</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-md-3">
					<div class="item">
						<figure>
							<a href="{{url('/colecciones/shop/producto/lente-de-sol-pirano-m6019_c3/')}}">
								<img src="{!! asset('/media/img/product2.jpg') !!}"class="img-fluid" alt="">
							</a>
						</figure>
						<div class="content">
							<div class="model"><strong>Modelo:</strong> M6019_c3</div>
							<a href="{{url('/colecciones/shop/producto/lente-de-sol-pirano-m6019_c3/')}}">Ver más</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-md-3">
					<div class="item">
						<figure>
							<a href="http://www.pirano1913.com/shop/producto/lente-de-sol-pirano-1691-c9/">
								<img src="{!! asset('/media/img/product3.jpg') !!}" class="img-fluid" alt="">
							</a>
						</figure>
						<div class="content">
							<div class="model"><strong>Modelo:</strong> 1691-c9</div>
							<a href="http://www.pirano1913.com/shop/producto/lente-de-sol-pirano-1691-c9/">Ver más</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-md-3">
					<div class="item">
						<figure>
							<a href="http://www.pirano1913.com/shop/producto/lente-de-sol-pirano-6076-c2/">
								<img src="{!! asset('/media/img/product4.jpg') !!}"class="img-fluid" alt="">
							</a>
						</figure>
						<div class="content">
							<div class="model"><strong>Modelo:</strong> 6076_c2</div>
							<a href="http://www.pirano1913.com/shop/producto/lente-de-sol-pirano-6076-c2/">Ver más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="team">
			<div class="row  align-items-center">
				<div class="col-12 col-md-6">
					<div class="pictures">
						<a data-fancybox href="https://www.youtube.com/watch?v=AELyi16PzWI&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0">
							<img src="{!!asset('media/img/team1.jpg') !!}" alt="" class="img-fluid" width="300">
    						<img src="{!! asset('media/img/team2.jpg')!!}" alt="" width="300">
    					</a>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="content">
						<div class="tittle">Pirano 1913</div>
					<p class="description">
						Esta estupenda colección - fruto del talento y visión de la diseñadora Francesca Valente – es una combinación de modelos de colores vibrantes y estilos modernos. Así la presentación de la nueva colección – en las palabras de la diseñadora: <em>“esta línea es dedicada a nuestros jóvenes soñadores, viajeros y emprendedores que buscan dejar su huella en el mundo”.</em></p>
					<a href="{{url('/shop')}}" class="btn-right btn-border"><span>&#x02992;</span></a>
					</div>					
				</div>
			</div>
		</div>
		<div id="social">
			<div class="row justify-content-md-center align-items-center">
				<div class="col-2"><img src="{!! asset('media/img/icons/insta.svg') !!}" alt="insta" class="img-fluid"></div>
				<div class="col-8">
					<div class="tittle">
						<h4>Síguenos en Instagram </h4>
					</div>
				</div>
				<div class="col-1">
					<a href="https://www.instagram.com/Pirano1913/" class="btn-right btn-border"><span>&#x02992;</span></a>
				</div>
			</div>
			<div id="instafeed" class='grid'>
			  	<div class="grid-sizer"></div>
			</div>
		</div>
		@include('frontend/layout.news')
		{{-- 
		<div id="promo-seasons">
			<div class="row justify-content-end">
				<div class="col-md-6">
					<section>
						<img src="{!! asset('media/img/school-text.png')!!}" alt="" class="img-fluid">
						<p class="description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, omnis, nemo! Reiciendis eaque eum beatae consectetur numquam. Reprehenderit non, incidunt.
						</p>
						<a href="#" class="btn-border btn-right"> See More <span>&#x02992;</span></a>
					</section>
				</div>
			</div>
		</div> --}}
	</div>
@endsection
