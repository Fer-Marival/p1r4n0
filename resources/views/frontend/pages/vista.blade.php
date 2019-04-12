@extends('frontend.master')
@section('content')
<div id="vista">
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
					<div class="col-md-6 text-center">
						<img src="{!!asset('/media/img/vista/vista1.jpg')!!}" alt="" class="img-fluid box1">
					</div>
					<div class="col-md-6">
						<img src="/media/img/vista.jpg" alt="" class="img-fluid shadow-none"> <br /><br />
						<em>Esta estupenda colección - fruto del talento y visión de la diseñadora <strong>Francesca Valente</strong> – es una combinación de modelos de colores vibrantes y estilos modernos.</em>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6">
						<section class="description">
							<p>Así la presentación de la nueva colección – en las palabras de la diseñadora: <em>“esta línea es dedicada a nuestros jóvenes soñadores, viajeros y emprendedores que buscan dejar su huella en el mundo”</em>.</p>
						</section>
					</div>
					<div class="col-md-6 text-center">
						<img src="{!!asset('/media/img/vista/vista2.jpg')!!}" class="img-fluid box2" alt="">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6 text-center">
						<img src="{!!asset('/media/img/vista/vista3.jpg')!!}" class="img-fluid box1" alt="">
					</div>
					<div class="col-md-6">
						<section class="description">
							<p>El hermoso acetato italiano del lente Pirano confiere personalidad en toda la línea, con sus reflejos y transparencias que solamente un acetato italiano puede darte. </p>
						</section>
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
					<div class="col-md-6 text-center">
						<img src="{!!asset('/media/img/vista/lente.jpg')!!}" alt="" class="img-fluid box2 shadow-none">
					</div>
				</div>
			</div>
			{{--
			<div class="product">
				<div class="slider-product">
					<div class="slider-pro">
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
			</div> --}}
			<div class="colle-content container">
				
			</div>
		</div>
	</div>
	<div id="collection">
		<div class="cd-slider-wrapper">
			<ul class="cd-slider">
				<li class="is-visible">
					<div class="cd-half-block image"></div>

					<div class="cd-half-block content">
						<div class="white">
							<h2>Colección 2018 </h2>
							<p>
								Conoce la nueva colección 2018 – aún más liviana, más elegante, y moderna!
							</p>
							{{-- <a href="https://codyhouse.co/?p=7404" class="btn">Article &amp; Download</a>--}}
						</div>
					</div>
				</li> <!-- .cd-half-block.content -->

				<li>
					<div class="cd-half-block image"></div>

					<div class="cd-half-block content light-bg">
						<div>
							<h2>Pirano <strong>ACETATE</strong></h2>
							<p>La pura esencia de la colección clásica de Pirano: una hermosa colección de armazones de fino acetato italiano, que da continuidad a la tradición de la marca con gafas inmediatamente identificables gracias a sus líneas limpias, materiales de primera calidad y colores inspirados en el paisaje italiano (tierra, cielo, composiciones arquitectónicas, mármol, y todo lo que ha hecho de Italia la tierra del buen vivir y de la calidad reconocida mundialmente).
							</p>
						</div>
					</div> <!-- .cd-half-block.content -->
				</li>

				<li>
					<div class="cd-half-block image"></div>

					<div class="cd-half-block content">
						<div>
							<h2>Pirano <strong>ACETATE PLUS</strong></h2>
							<p>
								Como los grandes maestros del arte italiano agregaban su toque único a las obras que sus ayudantes preparaban, así nuestros finos artesanos se han superado con la colección Pirano ACETATE PLUS.
								<br />
								La harmonia de los detalles de metal en las bisagras y varillas logró enriquecer una colección que ya pensabamos perfecta.
								<br />
								En esta colección el toque del maestro elevó sin duda a otro nivel de perfección este fino accesorio de moda.
							</p>
						</div>
					</div> <!-- .cd-half-block.content -->
				</li>

				<li>
					<div class="cd-half-block image"></div>

					<div class="cd-half-block content">
						<div>
							<h2>Pirano <strong>GOLD</strong></h2>
							<p><strong>MINIMALISMO Y ELEGANCIA:</strong>
							Inspirados en los ornamentos de los palacios reales de la aristocracia europea de la epoca de oro, la colección Pirano GOLD es una sublime fusión entre la pureza del acetato italiano y la elegancia y perfección de los metales más nobles. <br />
							Una colección completa para hombre y mujer, con modelos elegantes, ligeros, cómodos. Un perfecto mix de moda y clasicismo!
							</p>
						</div>
					</div> <!-- .cd-half-block.content -->
				</li>
			</ul> <!-- .cd-slider -->
		</div> <!-- .cd-slider-wrapper -->
	</div>
</div>
@endsection