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
<section class="ftco-section  p3">
			<div class="container ">
				
<div class="row mx-3 p3">
<div class=" col-md-12 ">
            <div class="card border border-warning shadow-lg p-3 mb-5 bg-body  ">
                <h3 class="card-header bg-dark " style="color: #a38840;">{{$car->marque}}</h3>
                <br>
                <div class="row ">
<br>
                <div class=" col-md-6 ">
                    <div class="card-img-top">
                         <img src="{{asset($car->image)}}" width="450" height="300" class="img  m-3" alt="">
                    </div>
                            <div class=" col-md-6 card-body">
                    <p class="d-flex flex-row justify-content-start">
                        <span class="badge badge-warning mx-2">Fuel:
                            {{$car->type}}
                        </span>
                        <span class="badge badge-info mx-2"> Price:
                            {{$car->prixJ}} dh 
                        </span><br>
                        @if($car->dispo)
                           @auth
                           <p class="d-flex flex-row justify-content-start">
                           <a href="{{route('command.create',$car->id)}}" class="btn btn-success">Reserve me</a>
                           </p>
                           @else
                           <p class="d-flex flex-row justify-content-start">
                              <a href="{{route('users.register')}}" class="btn btn-secondary">Sign up first</a>
                           </p>
                           @endauth
                        @else
                            <span class="badge badge-danger mx-2"> 
                                Reserved
                            </span>
                        @endif
                    </p>                          
                 </div>
                 </div>

      
<br>
        <div class="  col-md-6  item-model-description">
        <div class="info-line"><br>
        <i class="t fa fa-car" aria-hidden="true"></i>
        <span class="highlight">  <b>Type:</span>    4x4</div><div class="info-line"><br>
        <i class="t fa fa-cogs" aria-hidden="true"></i>
        <span class="highlight">  <b>Gearbox:</span> Automatique</div><div class="info-line"><br>
        <i class="t fa fa-users" aria-hidden="true"></i>
        <span class="highlight">  Max passengers:</span> 5</div><div class="info-line "><br>
        <i class="t fa fa-briefcase" aria-hidden="true"></i>
        <span class="highlight">  Max luggages:</span> 5</div><div class="info-line"><br>
        <i class="t fa fa-car" aria-hidden="true"></i>
        <span class="highlight">  Doors:</span> 5</div><div class="info-line"><br>
        <i class="t fa fa-road" aria-hidden="true"></i>
        <span class="highlight">  Mileage:</span> 300 Mi</div><div class="info-line"><br>
        <i class="t fa fa-user" aria-hidden="true"></i>
        <span class="highlight">  Minimum driver age:</span> 23</div><div class="info-line"><br>
  </div>
    </div> 
    </div>
    </div>
				</div>
			</div>
		</section>
    
