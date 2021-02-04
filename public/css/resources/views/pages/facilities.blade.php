<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <!-- estilo-->
    <link rel="stylesheet" href="{{ asset('css/facilities.css') }}"/>
    <!-- JS-->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<title>Metamorfosis</title>
</head>
<style type="text/css">

  #section1 {
    background-image: url("img/fondo.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  
</style>
<body>
  <!-- Nav con logo y opciones de administración -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-between">
  <img  class="navbar-brand" id="imagenLogo" src="img/logo.png" width="100" height="100">
  

    <ul class="navbar-nav ">
      
      <li class="nav-item pr-4">
      	
      	<a class="text-dark" href="#">
   		 <img src="img/account.png" width="30" height="30" class="d-inline-block align-top " data-toggle="modal" data-target="#exampleModal" alt="" loading="lazy">
   		 Manage your account
  </a>
      
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
  <form class="px-4 py-3">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="/register">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    
  </div>
</div>

      </li>
       <li class="nav-item pr-4">
      	 <a  href="#" class="text-dark">
   		 <img src="img/carrito.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
   		 Buy now!
  </a>
        
      </li>
     
      <li class="nav-item">
        <p>EN/ES</p>
      </li>
    </ul>
    
  
</nav>
<!-- Nav para poner las noticias con Ajax-->
<nav id="navNoticias" class="bg-primary">
  <p>Last news: Metamorfosis is the best sports centre</p>
  
</nav>

<!-- Nav para moverte por las diferentes paginas-->

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a  id="margenMedio" class="navbar-brand" href="{{route('users.landing')}}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{route('users.facilities')}}" role="button" aria-expanded="false">
          Facilities
        </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Rates
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route('users.prices')}}">Prices</a>
          <a class="dropdown-item" href="{{route('users.courses')}}">Courses</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Calendar</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('users.shop')}}">Shop</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Seccion para las imagenes -->

<section class="container-fluid" id="section1">

  <div class="row container-fluid justify-content-between pt-5 mb-5 align-items-center">

  <div id="divTexto1" class="col-12 col-sm-6">
    
    <h2>Gym</h2>

    <br>
    
    <p>We have plenty of equipment that you could be using as you want.
    In our gym there are some machines which make your workout easier by just allowing to make certain movements to work the part of the body specified.<br>
    There are some treadmills for the people who don't like running outside, some weights distributed in different ways and different machines to work some specific muscles, mats so that you don't need to touch the floor while doing some exercises in it as abs, ... </p>

  </div>

  <div id="divImagen2" class="col-12 col-sm-6">
    
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/gimnasio1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/gimnasio2.jpg" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</div>

<div class="row container-fluid justify-content-between mt-5 mb-5 align-items-center">
  
  <img class="col-12 col-sm-6" src="img/bicicleta.jpg">

  <div id="divTexto2" class="col-12 col-sm-6">
    
    <h2>Bike area</h2>

    <br>
    
    <p>This is a area where we only placed static bikes, we have about 15 bikes for the customers and one for a teacher to give some classes.<br>
    This room is used only for classes, this means only classes will be taking place here, you can't go by your own and start using some bikes.
    These classes are of spinning, and there are given by different teachers to allow you choose the one that you most like. </p>

  </div>

</div>

<div class="row container-fluid justify-content-between mt-5 mb-5 align-items-center">

  <div id="divTexto3" class="col-12 col-sm-6">
    
    <h2>Paddle tennis</h2>

    <br>
    
    <p>Inside our facilities we have several paddle tennis courts, exactly 6, where you can play if you make a reservation.<br>
    We also host many tournaments where the best players of Europe come and play at a really high level, so for that we haves a terrace where people who are afiliated can watch and enjoy these games. </p>

  </div>

  <img class="col-12 col-sm-6" src="img/padel.jpg">

</div>

<div class="row container-fluid justify-content-between mt-5 mb-5 align-items-center">

  <img class="col-12 col-sm-6" src="img/tenis.jpg">

  <div id="divTexto4" class="col-12 col-sm-6">
    
    <h2>Tennis</h2>

    <br>
    
    <p>Next to our paddle tennis courts we also have some tennis courts, the same ammount as paddle ones, 6.<br> This courts work pretty much the same way as the paddle tennis ones, you need to book a court, there are some tournaments also and you can even get some guided classes. </p>

  </div>


</div>

<div class="row container-fluid justify-content-between mt-5 mb-5 align-items-center">

  <div id="divTexto5" class="col-12 col-sm-6">
    
    <h2>Swimming pools</h2>

    <br>
    
    <p>We have two types os swimming pools, we have one situated in the outside of the building and another one inside it.<br>
    As around the building there was a big green garde, we decided to create a really huge swimming pool that would allow you to have a bath and also stay at the grass with a towel. </p>

  </div>

  <div id="divImagen2" class="col-12 col-sm-6">
    
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/piscinaExterior.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/piscinaInterior.jpg" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


</div>



</section>
<!-- Sección para el contacto-->
<footer>
  <h3>Contact us</h3>
   <img src="img/correo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
       metamorfosisGym@gmail.com
       <div id="telefono">
    <img src="img/telefono.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
       943 16 61 38
       </div>
  
</footer>



</body>
</html>