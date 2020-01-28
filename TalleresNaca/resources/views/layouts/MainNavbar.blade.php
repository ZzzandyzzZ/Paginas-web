<header role="banner" id="fh5co-header" >
	<div class="container-lg">
		<nav class="navbar navbar-expand-lg navbar-light ">
			<a class="navbar-brand" href="{{route('index')}}">
				<img class="logo" id="logo" src="images/logo_blanco.png" alt="LogoÑaca">
				Talleres Ñaca
			</a>

			<button id="BtnT" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="navbar-toggler-icon"><i></i></span>
			</button>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="navbar-nav ml-auto">
					<li class="active"><a href="{{route('index')}}" data-nav-section="home"><span>Inicio</span></a></li>
					<li><a class="nav-item" href="{{route('login')}}" data-nav-section="work"><span>Trabajo</span></a></li>
					<li><a class="nav-item" href="{{route('login')}}" data-nav-section="testimonials"><span>Comentarios</span></a></li>
					<li><a class="nav-item" href="{{route('login')}}" data-nav-section="services"><span>Servicios</span></a></li>
					<li><a class="nav-item" href="{{route('login')}}" data-nav-section="about"><span>Informacion</span></a></li>
					<li><a class="nav-item" href="{{route('login')}}" ><span>Ingresar</span></a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>