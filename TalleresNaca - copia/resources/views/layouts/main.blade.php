
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Talleres Ñaca</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<!-- Swiper Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="logo.ico">

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	
	

	<link rel="stylesheet" href="{{asset('css/black.css')}}">
	<!-- Swiper	 -->
	<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/hamburgers.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" href="{{asset('css/login.css')}}">
	
	
	
	  <style>
	    body {
	      background: #fff;
	      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
	      font-size: 14px;
	      color:#000;
	      margin: 0;
	      padding: 0;
	    }
	    .swiper-container {
	      width: 100%;
	      padding-top: 50px;
	      padding-bottom: 50px;
	    }
	    .swiper-slide {
	      background-position: center;
	      background-size: cover;
	      width: 300px;
	      height: 300px;

	    }
	  </style>
	

	</head>
	<body>
		@yield('body')
	</body>
	

	
	<!-- jQuery -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
	<!-- Counter -->
	<script src="{{asset('js/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup-options.js')}}"></script>
	
	<!-- Modernizr JS -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	

	<!-- Main JS (Do not remove) -->
	<script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('js/login.js')}}"></script>
	<!-- Swiper JS -->
  <script src="{{asset('js/swiper.min.js')}}"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

	</body>
</html>
