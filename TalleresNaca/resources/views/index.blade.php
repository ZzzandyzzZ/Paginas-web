@extends('layouts.main')
@extends('layouts.MainNavbar')
@section('body')

<section id="fh5co-home" data-section="home" style="background-image: url(images/carro.png);" data-stellar-background-ratio="0.5">
	<!-- <div class="gradient"></div> -->
	<!-- <div class="fh5co-overlay"></div> -->
	<div class="container">
		<div class="text-wrap">
			<div class="text-inner">
				<div class="row ">
					<div class="section-heading text-center">
						<h1 class="to-animate">¿Buscas un buen servicio de suspension?</h1>
						<h2 class="to-animate">Estas en el lugar indicado</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="slant"></div>
</section>
<section id="fh5co-counters"  data-stellar-background-ratio="0.5">
	<!-- <div class="fh5co-overlay"></div> -->
	<div class="container">
		<div class="row">
			<div class="section-heading text-center to-animate">
				<h2>Datos que debes saber</h2>
			</div>

		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="fh5co-counter to-animate">
					<i class="fh5co-counter-icon icon-people to-animate-2"></i>
					<span class="fh5co-counter-number js-counter" data-from="0" data-to="452" data-speed="5000" data-refresh-interval="50">452</span>
					<span class="fh5co-counter-label">Clientes</span>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="fh5co-counter to-animate">
					<i class="fh5co-counter-icon icon-clock to-animate-2"></i>
					<span class="fh5co-counter-number js-counter" data-from="0" data-to="20" data-speed="5000" data-refresh-interval="50">20</span>
					<span class="fh5co-counter-label">Años de experiencia</span>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="fh5co-counter to-animate">
					<!-- <i class="fh5co-counter-icon icon-car to-animate-2"></i> -->
					<i class="fh5co-counter-icon icon-car to-animate-2"></i>
					<span class="fh5co-counter-number js-counter" data-from="0" data-to="560" data-speed="5000" data-refresh-interval="50">560</span>
					<span class="fh5co-counter-label">Servicios Realizados</span>
				</div>
			</div>

		</div>
	</div>
</section>	


<section id="fh5co-work" data-section="work" >
	<div class="container" >
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2 class="to-animate">Galeria</h2>
				<div class="row justify-content-center">
					<div class="subtext to-animate">
						<h3>Aqui podra observar los trabajos realizados,asi como clientes y mecanicos.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
			  <div class="swiper-slide">
				<!-- Required swiper-lazy class and image source specified in data-src attribute -->
				<img data-src="images/Trabajos/img(1).jpg" class="swiper-lazy">
				<!-- Preloader image -->
				<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
			  </div>
			  <div class="swiper-slide">
				<!-- Required swiper-lazy class and image source specified in data-src attribute -->
				<img data-src="images/Trabajos/img (2).jpg" class="swiper-lazy">
				<!-- Preloader image -->
				<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
			  </div>
			  <div class="swiper-slide">
				<!-- Required swiper-lazy class and image source specified in data-src attribute -->
				<img data-src="images/Trabajos/img (3).jpg" class="swiper-lazy">
				<!-- Preloader image -->
				<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
			  </div>
			  <div class="swiper-slide">
				<!-- Required swiper-lazy class and image source specified in data-src attribute -->
				<img data-src="images/Trabajos/img (4).jpg" class="swiper-lazy">
				<!-- Preloader image -->
				<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
			  </div>
			  <div class="swiper-slide">
				<!-- Required swiper-lazy class and image source specified in data-src attribute -->
				<img data-src="images/Trabajos/img (5).jpg" class="swiper-lazy">
				<!-- Preloader image -->
				<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
			  </div>
			  <div class="swiper-slide">
				<!-- Required swiper-lazy class and image source specified in data-src attribute -->
				<img data-src="images/Trabajos/img (6).jpg" class="swiper-lazy">
				<!-- Preloader image -->
				<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
			  </div>

			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination swiper-pagination-white"></div>
			<!-- Navigation -->
			<div class="swiper-button-next swiper-button-white"></div>
			<div class="swiper-button-prev swiper-button-white"></div>
		  </div>


	</div>
</section>

<section id="fh5co-testimonials" data-section="testimonials">
	<div class="container">
		<div class="row">
			<div class="section-heading text-center">
				<h2 class="to-animate">Comentarios</h2>
				<div class="row justify-content-center">
					<div class="subtext to-animate">
						<h3>Descubre opiniones de algunos de nuestros clientes.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="box-testimony">
					<blockquote class="to-animate-2">
						<p>&ldquo;Me gusto mucho la atencion es este taller, quede muy contento y satisfecho por el trabajo realizado. Recomiendo mucho este taller&rdquo;</p>
					</blockquote>
					<div class="author to-animate">
						<figure><img src="images/person1.jpg" alt="Person"></figure>
						<p>
						Pepito Zanahoria <span class="subtext">Toyota Corolla</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-testimony">
					<blockquote class="to-animate-2">
						<p>&ldquo; Muy buen trabajo realizado, la altura de mi carro quedo a la perfeccion y como tanto la queria al suelo XD.Buena atencion y mecanicos amables.&rdquo;</p>
					</blockquote>
					<div class="author to-animate">
						<figure><img src="images/person2.jpg" alt="Person"></figure>
						<p>
						Jhon Salchichon <span class="subtext">Suzuki Baleno</span>
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="box-testimony">
					<blockquote class="to-animate-2">
						<p>&ldquo;Atencion rapido y de calidad , muy buen taller de mecanica me atrevo a decir que el mejor de todo Arequipa &rdquo;</p>
					</blockquote>
					<div class="author to-animate">
						<figure><img src="images/person3.jpg" alt="Person"></figure>
						<p>
						Zoyla Baca  <span class="subtext">Volkswagen Golf</span>
						</p>
					</div>
				</div>
			</div>


		</div>
	</div>
</section>


<section id="fh5co-services" data-section="services">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-heading text-left">
				<h2 class=" left-border to-animate">Servicios</h2>
				<div class="row">
					<div class="subtext to-animate">
						<h3>Una lista de la variedad de servicios que ofrece nuestro taller de mecanica.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row ">
			<div class="col-md-6 col-sm-12 fh5co-service to-animate">
				<i class="icon to-animate-2 icon-anchor"></i>
				<h3>Amortiguadores: Reparacion, Mantenimiento y Creacion</h3>
				<p>Far far away, behind tve right at the coast of the Semantics, a large language ocean</p>
			</div>
			<div class="col-md-6 col-sm-12 fh5co-service to-animate">
				<i class="icon to-animate-2 icon-layers2"></i>
				<h3>Cremalleras: Mantenimiento</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean a a a a a a a a a a a aa a a a a a a</p>
			</div>

			<div class="clearfix visible-sm-block"></div>

			<div class="col-md-6 col-sm-12 fh5co-service to-animate">
				<i class="icon to-animate-2 icon-video2"></i>
				<h3>Palieres: Reparacion</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
			</div>
			<div class="col-md-6 col-sm-12 fh5co-service to-animate">
				<i class="icon to-animate-2 icon-monitor"></i>
				<h3>Rotulas: Mantemiento Cambio</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
			</div>

		</div>
	</div>
</section>

<section id="fh5co-about" data-section="about">
	<div class="container">
		<div class="row">
			<div class="col section-heading text-center">
				<h2 class="to-animate">Informacion</h2>
				<div class="row justify-content-center">
					<div class="col-md-4 subtext to-animate">
							<h3>Telefono</h3>
							<p>959560108</p>
					</div>
					<div class="col-md-4 subtext to-animate">
							<h3>Horarios</h3>
							<p>LUNES-SABADO: 08:00–19:00</p>
					</div>
					<div class="col-md-4 subtext to-animate">
							<h3>Direccion</h3>
							<p>EDUARDO LOPEZ DE ROMAÑA 109,AREQUIPA</p>
					</div>

				</div>
			</div>
		</div>

		<div class="row">
				<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.7801461302221!2d-71.54950227082576!3d-16.418701112874526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a92cc34ada1%3A0xf4029f1b234c1bee!2sEduardo%20Lopez%20de%20Roma%C3%B1a%20109%2C%20Arequipa%2004011!5e0!3m2!1ses-419!2spe!4v1578866828041!5m2!1ses-419!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>	
		</div>
	</div>
</section>


<footer id="footer" role="contentinfo">
	<a href="#" class="gotop js-gotop">Subir<i class="icon-arrow-up2"></i></a>
	<div class="container">
		<div class="">
			<div class="col-md-12 text-center">
				<p>&copy; Elate Free HTML5. All Rights Reserved. <br>Created by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Images: <a href="http://pexels.com/" target="_blank">Pexels</a>, <a href="http://plmd.me/" target="_blank">plmd.me</a></p>

			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<ul class="social social-circle">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
@endsection
	

