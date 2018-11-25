@extends('frontend.master')
@section('content')	
<div class="clear"></div>		
	<div id="error">
			<div class="error-content">
				<span>404</span>
				<p>Los lentes que necesitas estan <a href="/store">aqui</a></p>
				<a href="#collections" class="btn btn-border">Conoce Nuestras colecciones</a>
			</div>
		<hr>
		<div id="collections">
			<div class="row">
				<div class="col-md-4">
					<a href="/collections/summer">
						<div class="collection one">
							<div class="gradient">
								<div class="tittle">Pirano SUN 2018</div>
								<p><em>La nueva colección Pirano SUN 2018 trae la mejor moda y tendencias europeas a tu alcance.</em></p>
								<a href="/collections/summer" class="btn btn-border">Conoce más</a>
							</div class="gradient">
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<div class="collection two">
						<a href="/collections/vista">
						<div class="gradient">
							<div class="tittle">Pirano Vista</div>
							<p><em>Hermosa colección de armazones de fino acetato italiano, que da continuidad a la tradición de la marca.</em></p>
							<div class="clearfix">
								<a href="/collections/summer" class="btn btn-border">Conoce más</a>
							</div>
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="collection three">
						<a href="/collections/kids">
							<div class="gradient">
								<div class="tittle">Pirano KidS</div>
								<p><em>El hermoso acetato del lente Pirano KidS confiere personalidad total a la línea</em></p>
								<div class="clearfix">
									<a href="/collections/kids" class="btn btn-border">Conoce más</a>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection