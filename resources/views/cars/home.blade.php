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
    <link rel="stylesheet" href="nav.css">

  </head>

  <body>  

  <style>.p3 {font-family: "Georgia", "Courier New",Serif, monospace; }</style>
  <style>.g {background-color: #a38840;}</style>
  <style>.t{color: #a38840;}</style>
  <style>.s{ font-size: 18px;}</style>
  <style>.sub-menu-1{
  display: none; 
}</style>
<style>.navbar ul li :hover .sub-menu-1{display: block;position: relative;}</style>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light p3 s" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" style="font-size: 34px;" href="{{asset('/home')}}" ><strong>LUXE-<span style="color: #a38840;" >C.R </span></strong></a>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
    <a class="nav-link active text-warning " style="color: #a38840;font-size: 18px;" href="{{asset('/home')}}">HOME <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link  text-light"style="font-size: 18px;" href="{{asset('/about')}}">About</a>
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
<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-112 ftco-animate">
          	<div class="text w-100 text-center mb-md-8 pb-md-9">
	            <h1 class="mb-4 p3 "style="color: #a38840; font-size: 64px;">Fast And Easy Way To Rent A Car</h1>
	            <p  class="p3 text-light" style=" font-size: 18px;"><strong>Luxe Car Rent is the agency that has been providing you with car rental services throughout Morocco for more than 10 years. We are not the only ones, but we are the best.</strong></p>
	        
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class=" p3 ftco-section ftco-no-pt "style="background-color: #a38840;">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  						
	  					</div>
	  					<div class="col-md-8 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100 bg-black">
	  							<h3 class="heading-section mb-4"style="color: #a38840;">Better Way to Rent Your Perfect Cars</h3>
	  							<div class="row d-flex mb-4">
                                  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
                                    
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"style="color: #a38840;" ></span></div>
				              	<div class="text w-100">
					                <h3 class="text-white heading mb-2">Choose Your Pickup date</h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"style="color: #a38840;" ></span></div>
				              	<div class="text w-100">
					                <h3 class="text-white heading mb-2">Select the Best Deal</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent" style="color: #a38840;" ></span></div>
				              	<div class="text w-100">
					                <h3 class="text-white heading mb-2">Reserve Your Rental Car</h3>
					              </div>
					            </div>      
					          </div>
					        </div>
					        <p><a href="{{route('cars.index')}}" class="btn  py-3 px-4"style="background-color: #a38840;"> <strong>Reserve Your Perfect Car</strong></a></p>
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section>
    <br>

    <section class="ftco-section ftco-no-pt bg-light p3">
    	<div class="container ">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading" style="color: #a38840;" > <strong>What we offer</strong></span>
            <h2 class="mb-2">Feeatured Vehicules</h2>
          </div>
        </div>
    		<div class="row ">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end container shadow-lg p-1 mb-5 " style="background-image: url(images/3.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0">Audi Q8</h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">AUDI</span>
			    						<p class="price ml-auto"style="color: #a38840;">2300 MAD <span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"> <a href= "{{route('cars.index')}}" class="btn py-2 ml-1" style="background-color: #a38840;">Details</a></p>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end container shadow-lg p-1 mb-5 " style="background-image: url(images/r.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0">Rang rover sport SVR</h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">Land rover</span>
			    						<p class="price ml-auto"style="color: #a38840;">7000 MAD <span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"> <a href= "{{route('cars.index')}}" class="btn py-2 ml-1" style="background-color: #a38840;">Details</a></p>
                                </div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end container shadow-lg p-1 mb-5" style="background-image: url(images/11.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0">Mercedes G63</h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">Mercedes</span>
			    						<p class="price ml-auto"style="color: #a38840;">16000 MAD <span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"> <a href= "{{route('cars.index')}}" class="btn py-2 ml-1" style="background-color: #a38840;">Details</a></p>
                                </div>
		    				</div>
    					</div>
                        <div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end container shadow-lg p-1 mb-5" style="background-image: url(images/s.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0">Mercedes class S</h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">Mercedes</span>
			    						<p class="price ml-auto"style="color: #a38840;">3000 MAD <span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"> <a href= "{{route('cars.index')}}" class="btn py-2 ml-1" style="background-color: #a38840;">Details</a></p>
                                </div>
		    				</div>
    					</div>
		    				</div>
    					</div>
    				</div>
    			</div>
    	</div>
    </section>

    <section class="p3 ftco-no-pt "style="background-color: #a38840;">
				<div class="row no-gutter ">
					<div class="col-md-6 p-md-4 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/1.png);">
					</div>
          
					<div class="col-md-5 wrap-about mx-2 bg-black ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
                <br>
	          	<span class="subheading " style="t"><strong>About us</strong></span>
	            <h2 class="mb-4" style="color: #a38840;">Welcome to LUXE CARENT</h2>
                <p class="p3 ">Luxe Car Rent is a car rental company created in 2012 to offer you the best rental services at the best prices, our agency network specializes in luxury car rental in Marrakech and the largest cities in Morocco. </p>
                <p class="p3">Luxe Car Rent provides you with luxurious and prestigious cars from Ferrari to Alfa Romeo, via Porsche and the unmissable Maserati, you will certainly find the car of your dreams!</p>
<br>
	            <p><a href="{{route('cars.index')}}" class="btn g py-3 px-4"><strong>Search Vehicle</strong></a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section  p3">
			<div class="container ">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading text-dark">Services</span>
            <h2 class="mb-3 t">Our Latest Services</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-4">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center "  style="background-color: #a38840;"><span class="flaticon-wedding-car"  ></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Wedding Ceremony</h3>
<p>If needing car rental services for your upcoming wedding, look no further than LCR. We offer affordable, premium wedding car rental vehicles to help you celebrate the big day in style and elegance. Our fleet of top quality vehicles can help shuttle your guests, family and friends, or your wedding party during you special day comfortably and conveniently.</p>
            </div>
            </div>
					</div>
			
					<div class="col-md-4">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"style="background-color: #a38840;"><span class="flaticon-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Airport Transfer</h3>
<p>Complete your travel plans by booking your Car Rental and Airport Transfer through our partner Car Trawler. 

Our Airport Transfer service includes but not limited to taxis, ride-hailing services, transfer services, and chauffeur drive vehicle rental, private transfers, business class transfers, first-class transfers, bus, and mini bus transfers, train transfers, and limousine transfers.

 </p>
            </div>
            </div>
					</div>
					<div class="col-md-4">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"style="background-color: #a38840;"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Whole City Tour</h3>
<p>Have an adventure of a lifetime and enjoy your city Tour with Luxury rent car. Making it simple to start and end your trip where you would like to. Whether you are planning on a journey that takes place over a few days, or a few weeks, you are going to experience some fascinating cultures and breath-taking sights. Book your city travel now and pick your rental car in any of our airport or downtown locations.</p>
            </div>
            </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-intro bg-dark ftco-about p3 " style="background-image: url(images/hero.jpg);">
			<div class="overlay  "style="background-color: #a38840;"></div>
			<div class="container ">
				<div class="row justify-content-end">
					<div class="col-md-8 heading-section heading-section-white ftco-animate">
            <h2 class="mb-1" >Do You Want To Earn With Us? So Don't Be Late.</h2>
            <a href="{{route('users.register')}}" class="btn g btn-lg"><strong>Become A Driver</strong></a>
          </div>
				</div>
			</div>
		</section>

<br>
    <section class="ftco-section testimony-section bg-light p3 container shadow-lg p-1 mb-5">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading text-dark">Testimonial</span>
            <h2 class="mb-3 t">Customer Comments</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5 container shadow-lg p-1 mb-5">
                  <div class="user-img mb-2 container shadow-lg p-1 mb-5" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">The personal service that you offer certainly will encourage me to use your car hire company in the future.</p>
                    <p class="name">Ahmed chwiki</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5 container shadow-lg p-1 mb-5">
                  <div class="user-img mb-2 container shadow-lg p-1 mb-5" style="background-image: url(images/person_5.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Good morning Team, I just, wanted to thank you for your amazing service and care of my Mom after having a very challenging car experience. I appreciate your professionalism and courtesy.</p>
                    <p class="name">Amina kalim</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5 container shadow-lg p-1 mb-5">
                  <div class="user-img mb-2 container shadow-lg p-1 mb-5" style="background-image: url(images/post_3.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Not only was the car excellent and surpassing my expectations, so too was the service from your entire team.I will definitely be using your company again and recommending it to my friends.</p>
                    <p class="name">Sarah Jamili</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5 container shadow-lg p-1 mb-5">
                  <div class="user-img mb-2container shadow-lg p-1 mb-5" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Thank you very much for your great and friendly service. The car was perfect and we will definitely make use of your services in the future.</p>
                    <p class="name">Mourad Kipa</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5 container shadow-lg p-1 mb-5">
                  <div class="user-img mb-2 container shadow-lg p-1 mb-5" style="background-image: url(images/l.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">The vehicle was great and suited our requirements for the weekend perfectly. Your service was even better and we would have no hesitation in hiring a car from you again.</p>
                    <p class="name">Anas Thaifa</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-counter ftco-section p3 img bg-light" id="section-counter">
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