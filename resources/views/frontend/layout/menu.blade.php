<header>
	<div class="promotions-bar">
		<p><a href="#">Envío gratis a toda la republica mexicana <sup>* </sup></a></p>
	</div>
	<nav class="row align-items-center">
		<div class="brand col-md-2">
			<a href="{{url('/')}}">
				<img src="{!!asset('media/logo.svg')!!}" class="img-fluid" alt="Logo Pirano1913">
			</a>
		</div>
		<div class="col">
			<ul class="nav col justify-content-center">
				<li class="nav-item">
					<a href="{{url('/')}}">Inicio</a>
				</li>
				<li class="nav-item collection-options">
					<a href="/colecciones">Colecciones</a>
					<ul class="collection-hidden">
						<li class="nav-item">
							<section>
								<div class="name">Pirano Sun</div>
								<div class="thumb"><a href="{{url('/colecciones/summer')}}"><img src="{!!asset('/media/img/colection1.jpg')!!}" class="img-fluid" alt="Pirano 1913 sun"></a></div>
							</section>	
						</li>
						<li class="nav-item ">
							<section>
								<div class="name">Pirano Vista</div>
								<div class="thumb"><a href="{{url('/colecciones/vista')}}"><img src="{!!asset('/media/img/colection2.jpg')!!}" class="img-fluid" alt="Pirano 1913 Vista"></a></div>
							</section>
						</li>
						<li class="nav-item ">
							<section>
								<div class="name">Pirano Kids</div>
								<div class="thumb"><a href="{{url('/colecciones/kids')}}"><img src="{!!asset('/media/img/colection3.jpg')!!}" class="img-fluid" alt="Pirano 1913 Kids"></a></div>
							</section>
						</li>
					</ul>
				</li>
				<li class="nav-item ">
					<a href="#contact" class="">Contacto</a>
				</li>
				<li class="nav-item shop">
					<a href="{{url('/shop')}}">e-Shop</a>
				</li>
			</ul>
		</div>	
		<div class="social col-md-2">
			<a href="https://www.facebook.com/Pirano1913"><img src="{!! asset('media/img/icons/face.svg') !!}" alt="Face"></a>
			<a href="https://www.instagram.com/Pirano1913/"><img src="{!! asset('media/img/icons/insta.svg') !!}" alt="insta"></a>
			<a href=""><img src="{!! asset('media/img/icons/you.svg') !!}" alt="Youtube"></a>
		</div>
	</nav>		
</header>

<div id="menu-responsivo">
<a href="{{url('/')}}" class="brand">
	<img src="{!!asset('media/logo.svg')!!}" class="img-fluid" alt="Logo Pirano1913">
</a>
    <div class="menu-tint menu-trigger menu-type"></div>
        <div class="menu menu-type">
            <div class="table">
                <div class="cell">
                	<ul>
	                	<li class="nav-item">
	                		<a href="{{url('/')}}" title="" class="nav-link">Inicio</a>
	                	</li>
						<li class="nav-item">
							<a href="{{url('/colecciones/')}}" title="" class="nav-link">Colecciones</a>
							<ul>
								<li><a href="{{url('/colecciones/summer')}}">Summer</a></li>
								<li><a href="{{url('/colecciones/kids')}}">Kids</a></li>
								<li><a href="{{url('/colecciones/vista')}}">Vista</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#contact" title="" class="nav-link contact">Contacto</a>
						</li>
						<li class="nav-item">
							<a href="{{url('/shop')}}" title="" class="nav-link">e-Shop</a>
						</li>
					</ul>
                </div>
            </div>
        </div>
        <div id="menu-trigger" class="menu-trigger">
            <div></div>
            <div></div>
            <div></div>
        </div>
</div>	


