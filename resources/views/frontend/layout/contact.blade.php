<div class="clear"></div>
<div id="contact" class="container">
	<div class="contact-slide">
		<div class="row">
			<div class="col-md-8">
				<div id="contact-slide" class="carousel slide carousel-fade" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="{!! asset('media/img/contact1.jpg') !!}" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="{!! asset('media/img/contact2.jpg') !!}" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="{!! asset('media/img/contact3.jpg') !!}" alt="Third slide">
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-md-4">
				<form action="" class="form">
						<strong class="tittle">Contáctanos </strong>
					  <div class="form-group">
					    <label for="name">Nombres:</label>
					    <input type="text" class="form-control" id="name" placeholder="ingresa tus nombres" required>
					  </div>
					  <div class="form-group">
					    <label for="lastname">Apellido:</label>
					    <input type="text" class="form-control" id="lastname" placeholder="Ingresa tus apellidos" required>
					  </div>
					  <div class="form-group">
					    <label for="mail">Email:</label>
					    <input type="email" class="form-control" id="mail" placeholder="youremail@tusitio.com" required>
					  </div>
					  <div class="form-group">
					    <label for="phone">Teléfono: </label>
					    <input type="phone" class="form-control" id="phone" placeholder="+52 01322 28920" required>
					  </div>
					  <div class="form-group">
					    <label for="message">Deja un bonito mensaje:</label>
					    <textarea name="message"></textarea>
					  </div>
					  <button class="btn btn-border">Enviar</button>
				</form>
			</div>
		</div>
	</div>
</div>