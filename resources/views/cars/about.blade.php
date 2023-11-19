<!doctype html>
<html lang="en">

  <head>
  <title>LUXE-C.R </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    @yield('styles')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  <body>  
  <style>.g {background-color: #a38840;}</style>

  <style>.p3 {font-family: "Georgia", "Courier New",Serif, monospace; }</style>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light p3 s" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" style="font-size: 34px;" href="{{asset('/home')}}" ><strong>LUXE-<span style="color: #a38840;" >C.R </span></strong></a>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
  <li class="nav-item ">
    <a class="nav-link  text-light" style="font-size: 18px;" href="{{asset('/home')}}">HOME <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item active ">
    <a class="nav-link active text-warning"style="font-size: 18px;" href="{{asset('/about')}}">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light"style="font-size: 18px;" href="{{route('cars.index')}}">Listing</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link text-light " style="font-size: 18px;"href="{{asset('/contact')}}">Contact</a>
  </li>
  <div class="dropdown mt-3">
    <button class="btn btn-light dropdown-toggle" type="button" id="user-dropdown" data-bs-toggle="dropdown">
      Account
    </button>
    <ul class="dropdown-menu"aria-labellebdy="user-dropdown">
    @auth
    <li>
      <a class="dropdown-item" style="font-size: 18px;"href="{{route('users.profile',auth()->user()->id)}}">
        {{auth()->user()->name}}
      </a>
    </li>
    <li>
    <form action="{{route('users.logout')}}" method="post">
      @csrf
    <button 
    style="background:transparent"
    type="submit" class="dropdown-item border border-light" style="font-size: 18px;">Log out</button>
      </form>
    </li>
    @if(auth()->user()->isAdmin())
    <div class="dropdown mt-6">
    <button class="btn g dropdown-toggle" type="button" id="user-dropdown" data-bs-toggle="dropdown">
      Admin
    </button>
    <ul class="dropdown-menu"aria-labellebdy="user-dropdown">
    <li>
      <a class="dropdown-item " style="font-size: 18px;"href="{{route('admins.index')}}">
        Cars
      </a>
    </li>
    <li>
      <a class="dropdown-item " style="font-size: 18px;"href="{{route('admins.reservation')}}">
        Commands
      </a>
    </li>
    <li>
      <a class="dropdown-item " style="font-size: 18px;"href="{{route('admins.commentaire')}}">
        Clients
      </a>
    </li>
    @endif
    </ul>
 
    @else
    <li>
      <a class="dropdown-item"style="font-size: 18px;" href="{{route('users.register')}}">Sign up</a>
    </li>
    <li >
      <a class="dropdown-item"style="font-size: 18px;" href="{{route('users.login')}}">Log in</a>
    </li>
  @endauth
    </ul>
  </div>
</ul>

</div>
</div>
</div>
</nav>
<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/image_6.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-12 ftco-animate">
          	<div class="t " style="color: #a38840;" >
        <div class="intro p3"style="color: #a38840; ">
          <h1 class="mb-4 p3 "style="color: #a38840; "><strong>About</strong></h1>
          <div class="custom-breadcrumbs"><a href="{{asset('/home')}}" class="text-warning"><strong> Home </strong></a> <span class="mx-2 text-light">/</span> <span class="mx-2 text-light"><strong>About</strong></span></div>
        </div>   

        </div>

    <div class="p3 col-lg-12">
    <style>.p3 {font-family: "Georgia", "Courier New",Serif, monospace; }</style>

            <h3 class="mb-4 p3 text-light"style=" font-size: 50px;" ><strong>"Luxe Car Rent</strong> provides you with prestigious cars at the best prices"
</h3>
        </div>
        
  </div>
</div>


<br>
<br>
<br>
<br>
<div class="site-section">
<div class="container">
  <div class="row">
    <div class=" col-lg-10s mb-5 mb-lg-4 order-lg-2">
      <img src="images/1.jpg" width="510" heigth="500" alt="Image"class=" img-fluid shadow-lg p-2 mb-5 bg-body rounded">
    </div>
    <br>
    <div class=" container shadow-lg p-2 mb-5 bg-body col-lg-4  mr-auto">
    <style>.p3 {font-family: "Georgia", "Courier New",Serif, monospace; }</style>
      <h2 class=" p3" style="color: #a38840;"><strong>Car Company</strong></h2>
      <br>
      <p class="p3">For an unforgettable stay in Marrakech, <strong>Luxe Car Rent </strong> offers you new generation and even recent vehicles according to your budget. Professional in the field of cheap car rental Marrakech, since 2012, Luxe Car Rent offers car rental offers at good prices.</p>
    </div>
  </div>
</div>
</div>
<br>
<br>
<div class="container shadow-lg p-3 mb-5 bg-body site-section bg-light">
<div class="container">
  <div class="row justify-content-center text-center mb-5 section-2-title">
    <div class="col-md-6">
      <h2 class=" p3 mb-4 "style="color: #a38840;"><strong>Meet Our Team</strong></h2>
    </div>
  </div>
  <div class="row  p3 align-items-stretch">

    <div class="col-lg-4 col-md-6 mb-5">
      <div class="post-entry-1 h-100 person-1">
        
          <img src="images/person_3.jpg" alt="Image"
           class="img-fluid">
      
        <div class="post-entry-1-contents">
         <strong> <span class="text-danger meta">Founder</span></strong>
          <h4>Karim ZNIBER</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5">
      <div class="post-entry-1 h-100 person-1">
        
          <img src="images/kaoutar_1.jpg" alt="Image"
           class="img-fluid">
      
        <div class="post-entry-1-contents">
          <strong><span class="text-danger meta"> Business Development Manager</span></strong>
          <h4>Kaoutar EL AMMOURI</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5">
      <div class="post-entry-1 h-100 person-1">
        
          <img src="images/mery.jpeg" alt="Image"
           class="img-fluid">
      
        <div class="post-entry-1-contents">
         <strong> <span class="text-danger  meta">UI Designer</span></strong>
          <h4>Meryem MENQIR</h4>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="site-section">
<div class="container">
  <div class="row">
    <div class="container shadow-lg p-1 mb-5 bg-body col-lg-6 mb-5 mb-lg-0">
      <img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded">
    </div>
    <div class=" container shadow-lg p-3 mb-5 bg-body p3 col-lg-4 ml-auto">
      <h2 class="text"style="color: #a38840;"><strong>Our History</strong></h2>
      <br>
      <p class="p3 ">Luxe Car Rent is a car rental company created in 2012 to offer you the best rental services at the best prices, our agency network specializes in luxury car rental in Marrakech and the largest cities in Morocco. </p>
      <p class="p3">Luxe Car Rent provides you with luxurious and prestigious cars from Ferrari to Alfa Romeo, via Porsche and the unmissable Maserati, you will certainly find the car of your dreams!</p>
    </div>
  </div>
</div>
</div>
</div>
<br>

<div class="site-section bg-dark py-5">
<div class="container">
  <div class="row align-items-center">
    <div class="col-lg-7 mb-4 mb-md-0">
      <h2 class="mb-0 text-white p3">What are you waiting for?</h2>
    </div>
    <div class="col-lg-4 text-md-right">
      <a href="{{route('cars.index')}}" class="btn btn-warning btn-info p3">Rent your car now</a>
    </div>
  </div>
</div>
</div>
<section class="ftco-counter p3 ftco-section img bg-light" id="section-counter">
			<div class="overlay"style="background-color: #a38840;"></div>
    	<div class="container">
    		<div class="row">
          <div class="col-md-8 col-lg-4 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" style="color: #a38840;" data-number="10">0</strong>
                <span>Year <br>Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-lg-4 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number"style="color: #a38840;" data-number="15">0</strong>
                <span>Total <br>Cars</span>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-lg-4 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number"style="color: #a38840;" data-number="2590">0</strong>
                <span>Happy <br>Customers</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>	
    <br>

    <footer class="ftco-footer p3 ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-8">
              <h2 class="ftco-heading-2"><a href="{{asset('/home')}}" class="logo ">LUXE-<span style="color: #a38840;" >C.R</span></a></h2>
              <p class="p3 t s">Luxe Car Rent is the agency that has been providing you with car rental services throughout Morocco for more than 10 years. We are not the only ones, but we are the best.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/Luxrentcar"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/LCR/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/LuxeCarRent"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 " style="color: #a38840;">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Gueliz Marrakech, Rue du Lieutenant Lamure, Marrakech</span></li>
	                <li><span class="icon icon-phone"></span><span class="tel">+212 707 240 500</span></li>
	                <li><span class="icon icon-envelope"></span><span class="email">contact@LCR.com</span></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        
    </footer>





  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


      

</body>

</html>