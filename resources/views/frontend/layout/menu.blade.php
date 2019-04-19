<header>
	<div class="promotions-bar">
		<p><a href="{{url('/shop')}}"> Envío gratis a toda la republica mexicana<sup>*</sup> <i class="fas fa-truck"></i></a></p>
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
					<a href="/colecciones"><i class="fas fa-glasses"></i> Colecciones</a>
					<ul class="collection-hidden">
						<li class="nav-item">
							<section>
								<div class="name">Pirano Solar</div>
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
				<li class="nav-item shop">
					<a href="{{url('/shop')}}"><i class="fas fa-shopping-cart"></i> Comprar</a>
				</li>
				<li class="nav-item ">
					<a href="mailto:info@pirano1913.com" class=""><i class="far fa-envelope"></i> Contacto</a>
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
	                		<a href="{{url('/')}}" title="" class="nav-link"><i class="fas fa-home"></i> Inicio</a>
	                	</li>
						<li class="nav-item">
							<a href="{{url('/colecciones/')}}" title="" class="nav-link"><i class="fas fa-glasses"></i> Colecciones</a>
							<ul>
								<li><a href="{{url('/colecciones/summer')}}"><i class="far fa-sun"></i> Solar</a></li>
								<li><a href="{{url('/colecciones/vista')}}"><i class="far fa-eye"></i> Vista</a></li>
								<li><a href="{{url('/colecciones/kids')}}"><i class="fas fa-truck-pickup"></i> Kids</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="{{url('/shop')}}" title="" class="nav-link"><i class="fas fa-shopping-cart"></i> Comprar</a>
						</li>
						<li class="nav-item">
							<a href="mailto:info@pirano1913.com" title="" class="nav-link contact"><i class="far fa-envelope"></i> Contacto</a>
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

