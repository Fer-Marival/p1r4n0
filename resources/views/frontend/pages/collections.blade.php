@extends('frontend.master')
@section('content')
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
@endsection