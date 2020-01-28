@extends('layouts.main')

@section('body')
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
					<li class="active"><a href="" ><span>Juanito</span></a></li>
					<li><a class="nav-item" href=""><span>Mis autos</span></a></li>
					<li><a class="nav-item" href="{{route('index')}}" ><span>Salir</span></a></li>
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
				<div class="row ">
					<div class="section-heading text-center">
						<h1 class="to-animate">Bienvenido Juanito</h1>
						<h2 class="to-animate">¿Que deseas visualizar?</h2>
					</div>
				</div>
				<div class="row justify-content-center">
						<button class="to-animate btn btn-primary btn-lg Cbtn">Mis autos</button>
						<button class="to-animate btn btn-primary btn-lg Cbtn">Mi perfil</button>
				</div>
			</div>
		</div>
		
	</div>
</section>
<div class="container">
	<table class="table">
	  <thead class="thead-dark">
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">First</th>
		  <th scope="col">Last</th>
		  <th scope="col">Handle</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <th scope="row">1</th>
		  <td>Mark</td>
		  <td>Otto</td>
		  <td>@mdo</td>
		</tr>
		<tr>
		  <th scope="row">2</th>
		  <td>Jacob</td>
		  <td>Thornton</td>
		  <td>@fat</td>
		</tr>
		<tr>
		  <th scope="row">3</th>
		  <td>Larry</td>
		  <td>the Bird</td>
		  <td>@twitter</td>
		</tr>
	  </tbody>
	</table>
</div>
@endsection