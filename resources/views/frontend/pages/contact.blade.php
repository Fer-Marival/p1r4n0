@extends('frontend.master')
@section('content')
<br><br><br><br>

<div class="container">
		<h3>Contact Form</h3>
		@if (Session::has('flash_message'))
			<div class="alert alert-success">{{ Session::get('flash_message') }}</div>
		@endif
		<form class="form" method="post" action="{{route('contact.store')}}">
		 		{{ csrf_field() }}
			<strong class="tittle">Contáctanos </strong>
			  <div class="form-group">
			    <label for="name">Nombres:</label>
			    <input type="text" class="form-control" name="name" placeholder="ingresa tus nombres" required>
			  </div>
			  <div class="form-group">
			    <label for="lastname">Apellido:</label>
			    <input type="text" class="form-control" name="lastname" placeholder="Ingresa tus apellidos" required>
			  </div>
			  <div class="form-group">
			    <label for="email">Email:</label>
			    <input type="email" class="form-control" name="email" placeholder="youremail@tusitio.com" required>
			  </div>
			  <div class="form-group">
			    <label for="phone">Teléfono: </label>
			    <input type="phone" class="form-control" name="phone" placeholder="+52 01322 28920" required>
			  </div>
			  <div class="form-group">
			    <label for="message">Deja un bonito mensaje:</label>
			    <textarea name="message"></textarea>
			  </div>
			  <button class="btn btn-border" >Enviar</button>
		</form>
</div>	
@endsection