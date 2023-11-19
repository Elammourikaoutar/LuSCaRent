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

  <style>.p3 {font-family: "Georgia", "Courier New",Serif, monospace; }</style>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark p3 s" id="ftco-navbar">
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
    <a class="nav-link active text-light"style="font-size: 18px;" href="{{asset('/about')}}">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light"style="font-size: 18px;" href="{{route('cars.index')}}">Listing</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link text-light " style="font-size: 18px;"href="{{asset('/contact')}}">Contact</a>
  </li>
  @auth
    <li class="nav-item">
      <a class="nav-link text-light" style="font-size: 18px;"href="{{route('users.profile',auth()->user()->id)}}">
        {{auth()->user()->name}}
      </a>
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
    <li class="nav-item">
    <form action="{{route('users.logout')}}" method="post">
      @csrf
    <button 
    style="background:transparent"
    type="submit" class="nav-link text-light border border-light" style="font-size: 18px;">Log out</button>
      </form>
    </li>
  @else
    <li class="nav-item">
      <a class="nav-link text-warning"style="font-size: 18px;" href="{{route('users.register')}}">Sign up</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light"style="font-size: 18px;" href="{{route('users.login')}}">Log in</a>
    </li>
  @endauth
</ul>

  </div>
</div>
</nav>
<div class="col-md-8 mx-auto p3">
<div class ="row"><br>
 <div class="col-md-10 mx-2 my-9">
 @include('includes.messages')
 </div>
 </div>
 @yield('content')
</div>
        <div class="col-md-8 mx-auto p3">
            <div class="card border border-light shadow-lg p-3 mb-5 bg-body rounded">
                <h3 class="card-header bg-dark "style="color: #a38840;font-size: 35px;">Create your account</h3>
                <div class="card-body">
                    <form action="{{route('users.register')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for=" name">Full name:</label>
                            <input type=" text" name="name" id=""
                             class="form-control" placeholder="Full name.."aria-describedby="helpId">
                        </div>
                         <div class="form-group">
                            <label for="tel">Phone number:</label>
                            <input type="tel" name="tel" id="" class="form-control" placeholder="phone number.."aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for=" ville">City:</label>
                            <input type=" text" name="ville" id=""
                             class="form-control" placeholder="City.."aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="" class="form-control" placeholder="Email.."aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="" class="form-control" placeholder="Password.."aria-describedby="helpId">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Photo:</lable>
                            <input type="file" name="image"
                                    id="" class="form-control"
                                    aria-describedly="helpId">
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-dark "style="color: #a38840;font-size: 18px;">CONFIRM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
