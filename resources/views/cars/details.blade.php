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

  </head>

  <body>  

  <style>.p3 {font-family: "Georgia", "Courier New",Serif, monospace; }</style>
  <style>.g {background-color: #a38840;}</style>
  <style>.t{color: #a38840;}</style>
  <style>.s{ font-size: 18px;}</style>

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
  <li class="nav-item ">
    <a class="nav-link  text-light"style="font-size: 18px;" href="{{asset('/about')}}">About</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link  active text-warning"style="font-size: 18px;" href="{{route('cars.index')}}">Listing</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link text-light " style="font-size: 18px;"href="{{asset('/contact')}}">Contact</a>
  </li>
  <div class="dropdown mt-3">
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

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start p3">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{asset('/home')}}" class="text-warning"> Home <i class="ion-ios-arrow-forward"></i></a></span> <span> Listing <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Car details</h1>
          </div>
        </div>
      </div>
    </section>


    
    
<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container ">
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