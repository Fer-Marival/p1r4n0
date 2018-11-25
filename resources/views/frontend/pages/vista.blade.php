@extends('frontend.master')
@section('content')

<div class="clear"></div>
<div class="container" id="vista">
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
@endsection