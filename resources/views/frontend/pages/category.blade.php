@extends('frontend.master')
@section('content')
<div class="clear"></div>
<div class="container" id="summer">
	<div class="collections">
		<div class="colle-header">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="/media/img/summer.png" alt="" class="img-fluid"> <br /><br />
					<em>La nueva colección <strong>Pirano SUN 2018</strong> trae la mejor moda y tendencias europeas a tu alcance.</em>
				</div>
				<div class="col-md-6">
					<img src="{!!asset('/media/img/summer/1.jpg')!!}" alt="" class="img-fluid">
				</div>
				<div class="clearfix"></div>
				<div class="col-md-6">
					<img src="{!!asset('/media/img/summer/2.jpg')!!}" class="img-fluid" alt="">
				</div>
				<div class="col-md-6">
					<section class="description">
						<p>Gafas de sol modernas, fashion, resistentes; toda la colección es <strong>POLARIZADA</strong> para garantizarte la mejor visibilidad y colores en cualquier condición de clima.</p>
					</section>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-6">
					<section class="description">
						<p>Además sus micas <strong>FLAT LENSES</strong> te regalan ese toque de luxury appear gracias a su curvatura reducida sin perder definición en toda la longitud del lente.</p>
					</section>
				</div>
				<div class="col-md-6">
					<img src="{!!asset('/media/img/summer/product.jpg')!!}" class="img-fluid" alt="">
				</div>
				<div class="clearfix"></div>
				<div class="col-md-6">
					<div class="tittle"> Il nostro segreto è l'amore</div>
					<em>Nuestros lentes son hechos con arte, tecnologia, pero el secreto es el <i>&hearts;</i>.</em>
					<ul>
						<li>100% POLARIZADOS</li>
						<li>MICAS PLANAS FASHION LOOK</li>
						<li>LA MODA ITALIANA EN TU CASA</li>
						<li>MEJOR PROTECCIÓN UVA/ UVB</li>
					</ul>
				</div>
				<div class="col-md-6"></div>
			</div>
		</div>
		<div class="product">
			<div class="slider-product">
				<div class="slider-pro" id="product-slider">
					<div class="sp-slides">
						<div class="sp-slide">
							<div class="row align-items-center">
								<div class="col-md-6 product1"><section></section></div>
								<div class="col-md-6">
									<div class="model-card">
										<div class="tittle">Solar Mussa</div>
										<div class="model">SM0943</div>
										<div class="short-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
										<div class="color">
											<span class="pink"></span>
											<span class="red"></span>
											<span class="blue"></span>
										</div>
										<div class="clearfix">
											<a href="#" class="btn btn-border float-right">comprar</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="sp-slide">
							<div class="row align-items-center">
								<div class="col-md-6 product2"><section></section></div>
								<div class="col-md-6">
									<div class="model-card">
										<div class="tittle">Solar Mussa</div>
										<div class="model">SM0943</div>
										<div class="short-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
										<div class="color">
											<span class="pink"></span>
											<span class="red"></span>
											<span class="blue"></span>
										</div>
										<div class="clearfix">
											<a href="#" class="btn btn-border float-right">comprar</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="sp-slide">
							<div class="row align-items-center">
								<div class="col-md-6 product3"><section></section></div>
								<div class="col-md-6">
									<div class="model-card">
										<div class="tittle">Solar Mussa</div>
										<div class="model">SM0943</div>
										<div class="short-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
										<div class="color">
											<span class="pink"></span>
											<span class="red"></span>
											<span class="blue"></span>
										</div>
										<div class="clearfix">
											<a href="#" class="btn btn-border float-right">comprar</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="colle-content container">
			
		</div>
	</div>
</div>
@endsection