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
  </li  style="color: #a38840">
  <li class="nav-item ">
    <a class="nav-link  text-light"style="font-size: 18px;" href="{{asset('/about')}}">About</a>
  </li  style="color: #a38840">
  <li class="nav-item">
    <a class="nav-link text-light"style="font-size: 18px;" href="{{route('cars.index')}}">Listing</a>
  </li  style="color: #a38840">
  <li class="nav-item active ">
    <a class="nav-link text-warning active " style="font-size: 18px;"href="{{asset('/contact')}}">Contact</a>
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
<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/post_6.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-12 ftco-animate">
          <div class="t "  >
        <div class="intro p3">
	            <h1 class="mb-4 p3  "style="color: #a38840;font-size: 64px;"><strong>Contact us</strong></h1>
              <div class="p3 custom-breadcrumbs "style="font-size: 40px;"><a  class="p3 text-warning" style="font-size: 40px;"href="{{asset('/home')}}"><strong>Home</strong></a> <span class="mx-2"style="font-size: 40px;">/</span> <span class="text-light" style="font-size: 40px;"><strong>Contact</strong></span></div>	        
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
      

    <br>
    <br>
    <br>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
      <div class ="row"><br>
 <div class="col-md-10 mx-5 my-10">
 @include('includes.messages')
 </div>
 </div>
 @yield('content')
</div>
</div>
</div>

        <div class="row justify-content-left text-left mx-3">
        <div class="p3 col-8  text-left mb-5 text-success mx-2">
          <h2 class="text "style="color: #a38840;font-size: 38px;"><strong>Use This Form To Contact Us </strong></h2>
        </div>
      </div>
      
        <div class="row justify-content-left text-left mx-4 ">
          <div class="p3 col-lg-7 mb-5 " >
            <form action="{{route('users.info')}}" method="post"enctype="multipart/form-data">
                @csrf
              <div class="form-group row">
              <div class="col-md-6 ">
                
              <label for=" name">Full name:</label>
                  <input type="text" class=" container shadow-lg p-1 mb-3 bg-body form-control" placeholder="Full name" name="name">
                </div>
                <div class="col-md-6 mb-4 mb-lg-0">
                <label for="tel">Phone number:</label>
                  <input type="tel" class="container shadow-lg p-1 mb-3 bg-body form-control" placeholder="Phone Number" name="tel">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                <label for="email">Email Address:</label>
                  <input type="text" class="container shadow-lg p-1 mb-3 bg-body form-control" placeholder="Email address" name="email">
                </div>
              </div>
              <!-- <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="" class="container shadow-lg p-1 mb-3 bg-body form-control" placeholder="Password.."aria-describedby="helpId">
                        </div> -->
              <div class="form-group row">
                <div class="col-md-12">
                <label for="notes">Notes:</label>
                  <textarea name="notes" id="" class="container shadow-lg p-1 mb-3 bg-body form-control" placeholder="Write your message." cols="30" rows="10" ></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class=" container shadow-lg p-1 mb-3 bg-body btn btn-block  text-white py-3 px-5 "style="background-color: #a38840;" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          
          <div class="p3 col-lg-5 ml-auto">
            <div class="container shadow-lg p-1 mb-3 bg-body bg-black p-3 p-md-5">
              <h3 class=" mb-4" style="color: #a38840;font-size: 35px;"><strong>Contact Info</strong></h3>
              <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
              <div class="icon mr-3">
			          		<span class="icon-map-o"style="color: #a38840;font-size: 19px"></span>
			          	</div>
			            <p><span style="font-size: 20px" >Address: </span> <span class="text-light"> Gueliz Marrakech, Rue du Lieutenant Lamure, Marrakech </span> </p>
                  </div>
		          </div>
		          
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"style="color: #a38840; font-size: 30px"></span>
			          	</div>
			            <p><span>Phone:</span> <a href="tel://1234567920">+212 707 240 500</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"style="color: #a38840; font-size: 20px"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:contact@LCR.com">contact@LCR.comm</a></p>
			          </div>
		          </div>
              <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
              
              <ul class="list-unstyled footer-link">
              <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#"><i class="fa fa-facebook"></i></button> -->
                <li style="color: #a38840"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>  <a href="#"><span><i class="bi bi-facebook"></i></span>  https://www.facebook.com/LCR/</a></li  style="color: #a38840">
                <li  style="color: #a38840"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg> <a href="#"><i class="bi bi-instagram"></i>https://www.instagram.com/LuxeCarRent/</a></li  style="color: #a38840">
                <li  style="color: #a38840"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg> <a href="#"><i class="bi bi-twitter"></i>https://twitter.com/Luxrentcar</a></li  style="color: #a38840">
                <li  style="color: #a38840"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg> <a href="#"><i class="bi bi-linkedin"></i>https://www.linkedin.com/company/LCR/</a></li  style="color: #a38840">
              </ul>
            </div>
          </div>
          </div>
        </div>
      </div>
      </div>
      </div>

      <div class="container shadow-lg p-5 mb-1 bg-body bg-light p-1 p-md-1">
      <div class="row justify-content-center">
        	<div class="col-md-12">
        		<div id="map" class="bg-white"></div>
        	</div>
        </div>
      </div>
      </div>
<br>
      <footer class="ftco-footer p3 ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-8">
              <h2 class="ftco-heading-2"><a href="{{asset('/home')}}" class="logo ">LUXE-<span style="color: #a38840;" >C.R</span></a></h2>
              <p class="p3 t s">Luxe Car Rent is the agency that has been providing you with car rental services throughout Morocco for more than 10 years. We are not the only ones, but we are the best.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/Luxrentcar"><span class="icon-twitter"></span></a></li  style="color: #a38840">
                <li class="ftco-animate"><a href="https://www.facebook.com/LCR/"><span class="icon-facebook"></span></a></li  style="color: #a38840">
                <li class="ftco-animate"><a href="https://www.instagram.com/LuxeCarRent"><span class="icon-instagram"></span></a></li  style="color: #a38840">
              </ul>
            </div>
          </div>
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 " style="color: #a38840;">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li  style="color: #a38840"><span class="icon icon-map-marker"></span><span class="text">Gueliz Marrakech, Rue du Lieutenant Lamure, Marrakech</span></li  style="color: #a38840">
	                <li  style="color: #a38840"><span class="icon icon-phone"></span><span class="tel">+212 707 240 500</span></li  style="color: #a38840">
	                <li  style="color: #a38840"><span class="icon icon-envelope"></span><span class="email">contact@LCR.com</span></li  style="color: #a38840">
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