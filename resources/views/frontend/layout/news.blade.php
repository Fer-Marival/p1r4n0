
<div id="news">
	<section>
		<article class="shadow-lg">
			<form action="{{ url('newsletter') }}" method="post">
				<p class="text-center"><strong>Registrate a nuestro newsletter</strong><br />
				y enterate de nuestras promociones y nuevos lanzamientos</p>
				<div class="form-row align-items-center">
				  <div class="col-md-10">
				    <input type="text" class="form-control" id="email" placeholder="tucorreo@dominio.com" name="user_email">
				  </div>
				  <div class="col-md-2"> 
				  	{{ csrf_field() }}<button type="submit" class="btn btn-border pull-left">Inscribirme</button></div>
				  <div class="clearfix"></div>
				</div> 
				<div class="row justify-content-end">
				  	<div class="col-md-4">
				      <input class="form-check-input" type="checkbox" id="gridCheck">
				      <label class="form-check-label" for="gridCheck">
				        Acepto los <a href="#">Terminos y condiciones</a>
				      </label>
				  	</div>
				</div> 
			</form>
		</article>
	</section>
</div>
