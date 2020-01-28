@extends('layouts.main')

@section('body')
<header role="banner" id="fh5co-header" >
		<div class="container">
			<nav class="row justify-content-center navbar navbar-default">
				<div class=" navbar-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<img class="logo" id="logo" src="images/logo_blanco.png" alt="Logo">
					<a class="navbar-brand" href="{{route('index')}}">Talleres Ñaca</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-nav-section="work"><span>Juanito</span></a></li>
					<li><a href="#" data-nav-section="testimonials"><span>Mis autos</span></a></li>
					<li><a href="{{route('index')}}" ><span>Salir</span></a></li>
				  </ul>
				</div>
			</nav>

	  </div>
</header>
<section id="fh5co-home" data-section="home"  style="background-image: url(images/
carro.png);" data-stellar-background-ratio="0.5">
	<div class="gradient"></div>
	
	<div class="container">
		<div class="text-wrap">
			<div class="text-inner">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="to-animate">Bienvenido Juanito</h1>
						<h2 class="to-animate">¿Que deseas visualizar?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<button class="to-animate btn btn-primary btn-lg Cbtn">Mis autos</button>
						<button class="to-animate btn btn-primary btn-lg Cbtn">Mi perfil</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</section>

@endsection