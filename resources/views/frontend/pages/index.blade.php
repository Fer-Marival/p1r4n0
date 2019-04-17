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
		<div id="collections">
			<div class="row">
				<div class="col-md-4">
						<div class="collection one">
							<div class="gradient">
								<div class="tittle">Pirano Solar</div>
								<p><em>La nueva colección Pirano Solar trae la mejor moda y tendencias europeas en lentes de sol a tu alcance.</em></p>
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
		<div id="more-sale" >
			<h3>Lo Más Vendido</h3>
			  <div class="slider more-sale">
	              <div class="sp-slides">
	                <div class="sp-slide">
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
	                <div class="sp-slide">
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
	                <div class="sp-slide">
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
	                 <div class="sp-slide">
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
		</div>
		<div id="campaing">
			<div class="slider promotions">
	            <div class="sp-slides">
	                <div class="sp-slide">
		                <div class="item">
							<figure>
								<a href="{{url('/colecciones/shop/producto/lente-de-sol-pirano-tr1625-c3/')}}">
									<img src="{!! asset('/media/img/temp-prim.jpg') !!}" class="img-fluid sp-image" alt="">
								</a>
							</figure>
						</div>
	                </div>
	            </div>
            </div>
		</div>
		<div id="social">
			<div class="row">
				<div class="insta-follow">
					<img src="{!! asset('media/img/icons/insta.svg') !!}" alt="instagram pirano1913" class="img-fluid">
					<div class="tittle"><h4>Síguenos en Instagram </h4></div>
					<a href="https://www.instagram.com/Pirano1913/" class="btn-right btn-border"><span>&#x02992;</span></a>
				</div>
			</div>
			<div id="instafeed" class='grid'>
			  	<div class="grid-sizer"></div>
			</div>
		</div>
		@include('frontend/layout.news')
	</div>
@endsection
