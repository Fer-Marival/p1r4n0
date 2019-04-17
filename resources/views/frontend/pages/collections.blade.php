@extends('frontend.master')
@section('content')
<div id="collections">
	<div class="header"></div>
	<div class="clear"></div>
	<div class="container">
		<div class="row">
			<h1 class="title">Pirano1913</h1>
			<p>Presentamos la nueva y renovada colección {{date('Y')}} – fruto de un trabajo de introspección y estudio de nuestras raíces, para lograr algo mejorado, nuevo, sublime, sin perder nuestra identidad que es lo que la gente ha aprendido a amar en estos 2 largos años.</p>
			<p>Esta estupenda colección - fruto del talento y visión de la diseñadora <a href="#">Francesca Valente</a> – es una combinación de modelos de colores vibrantes y estilos modernos. Así la presentación de la nueva colección – en las palabras de la diseñadora: <em>“esta línea es dedicada a nuestros jóvenes soñadores, viajeros y emprendedores que buscan dejar su huella en el mundo”.</em></p>
		</div>
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
</div>
@endsection