@extends('frontend.master')
@section('content')
<div id="summer">
	<div class="header"></div>
	<div class="container">
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
		<div class="collections">
			<div class="colle-header">
				<div class="row align-items-center">
					<div class="col-md-8">
						<img src="{!!asset('/media/img/sun.jpg')!!}" alt="Lentes Pirano 1913 solar" class="img-fluid"> <br /><br />
						<em>La nueva colección <strong>Pirano Solar</strong> trae la mejor moda y tendencias europeas a tu alcance.</em><br />
						<p>Gafas de sol modernas, fashion, resistentes; toda la colección es <strong>POLARIZADA</strong> para garantizarte la mejor visibilidad y colores en cualquier condición de clima.</p>
						<p>Además sus micas <strong>FLAT LENSES</strong> te regalan ese toque de luxury appear gracias a su curvatura reducida sin perder definición en toda la longitud del lente.</p>
						<br /><a href="{{url('/shop')}}" class="btn-border">Ver más modelos</a>
					</div>
					<div class="col-md-4">
						<img src="{!!asset('/media/img/product1.jpg')!!}" alt="Lentes Pirano 1913 solar" class="img-fluid">
					</div>
					<div class="col-md-4">
						<img src="{!!asset('/media/img/summer/1.jpg')!!}" class="img-fluid" alt="Lentes Pirano 1913 solar">
					</div>
					<div class="col-md-4">
						<img src="{!!asset('/media/img/product2.jpg')!!}" class="img-fluid" alt="Lentes Pirano 1913 solar">
					</div>
					<div class="col-md-6">
						<img src="{!!asset('/media/img/slide-home5.jpg')!!}" class="img-fluid" alt="Lentes Pirano 1913 solar">
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection