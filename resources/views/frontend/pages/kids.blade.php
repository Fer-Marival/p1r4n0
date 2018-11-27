@extends('frontend.master')
@section('content')
<div class="clear"></div>
<div class="container" id="kids">
	<div class="collections">
		<div class="colle-header">
			<div class="row align-items-center">
				<div class="col-md-8">
					<img src="{!! asset('/media/img/kids.jpg')!!}" alt="Lentes Pirano Kids" class="img-fluid"> <br /><br />
					<p><strong>Lentes Pirano 1913 </strong> presenta el nuevo lanzamiento de la línea de gafas <strong>Pirano KidS,</strong> con una propuesta de armazones Ultra resistentes para nuestros pequeños aventureros.</p>
				</div>
				<div class="col-md-4 text-center">
					<img src="{!!asset('/media/img/colection3.jpg')!!}" alt="Lentes Pirano Kids" class="img-fluid" alt="">
				</div>
				<div class="clearfix"></div>
				<div class="col-md-6">
					<img src="{!! asset('media/img/piranokids3.jpg')!!}" alt="Lentes Pirano Kids" title="Pirano kids" class="img-fluid" alt="">
				</div>
				<div class="col-md-6">
					<section class="description">
						<p>El hermoso acetato del lente <strong>Pirano KidS</strong> confiere personalidad total a la línea: esto debido a que los lentes para niños Pirano KidS son fabricados con fino <strong>ACETATO ITALIANO.</strong></p>
					</section>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-6">
					<section class="description">
						<p> mismo que nos regala esas características de resistencia que los papas buscamos, además vienen con formas y colores increíbles que al niño le fascinarán.</p>
					</section>
				</div>
				<div class="col-md-6">
					<div class="slider-pro" id="my-slider">
						<div class="sp-slides">
							<div class="sp-slide">
								<img class="sp-image" alt="Pirano1913 modelos" title="Pirano1913" src="{!! asset('media/img/piranokids1.jpg')!!}"/>
							</div>
							<div class="sp-slide">
								<img class="sp-image" alt="Pirano1913 modelos" title="Pirano1913" src="{!! asset('media/img/piranokids2.jpg')!!}"/>
							</div>
							<div class="sp-slide">
								<img class="sp-image" alt="Pirano1913 modelos" title="Pirano1913" src="{!! asset('media/img/piranokids4.jpg')!!}"/>
							</div>
							<div class="sp-slide">
								<img class="sp-image" alt="Pirano1913 modelos" title="Pirano1913" src="{!! asset('media/img/piranokids5.jpg')!!}"/>
							</div>
						</div>
					</div>
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
	</div>
</div>
@endsection