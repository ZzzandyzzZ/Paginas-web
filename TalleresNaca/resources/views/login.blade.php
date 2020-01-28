@extends('layouts.main')
@extends('layouts.MainNavbar')
@section('body')
<div class="limiter">
	<div class="container-login100" >
		<div class="wrap-login100 ">
			<form class="login100-form validate-form">
				<div class="login100-form-avatar">
					<img src="images/login.jpg" alt="AVATAR">
				</div>

				<span class="login100-form-title p-t-20 p-b-10">
					Ingrese sus datos
				</span>

				<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
					<input class="input100" type="text" name="username" placeholder="Username">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="icon-user"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
					<input class="input100" type="password" name="pass" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="icon-lock"></i>
					</span>
				</div>

				<div class="container-login100-form-btn p-t-10">
					<button class="login100-form-btn">
						Ingresar
					</button>
				</div>

				<div class="text-center w-full p-t-25 p-b-20">
					<a href="#" class="txt1">
						Olvido su contraseña?
					</a>
				</div>

				<div class="text-center w-full">
					<a class="txt1" href="#">
						Crear cuenta nueva
						<i class="icon-arrow-right"></i>						
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
<section id="fh5co-home" data-section="home" style="background-image: url(images/carro.png);" data-stellar-background-ratio="0.5">
	<div class="gradient"></div>
</section>
	
@endsection


