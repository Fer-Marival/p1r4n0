@extends('frontend.master')
@section('content')
<div id="collections">
	<div class="header"></div>
	<div class="container">
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