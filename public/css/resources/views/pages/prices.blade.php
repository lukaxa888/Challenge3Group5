<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>

    <!-- estilo-->
    <link rel="stylesheet" href="{{ asset('css/courses.css') }}"/>
    <!-- JS-->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <title>Metamorfosis</title>
</head>
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
      
    <li class="nav-item">
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



   
      <!-- Pricing Table1-->
      <div class="row">
      <div class="col-md-4 mb-5 ">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Basic</h1>
          <h2 class="h1 font-weight-bold">10€<span class="text-small font-weight-normal ml-2">/ month</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Access to all facilities</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> 1 class per week</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>An energy drink after your weekly class</li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Especial offers in our shop</del>
            </li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Personal trainer</del>
            </li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>physiotherapist</del>
            </li>
          </ul>
          <a href="{{route('register')}}" class="btn btn-primary btn-block p-2 shadow rounded-pill">Start now</a>
        </div>
      </div>
      <!-- END -->


       <!-- Pricing Table2-->
      <div class="col-md-4 mb-5 ">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Pro</h1>
          <h2 class="h1 font-weight-bold">20€<span class="text-small font-weight-normal ml-2">/ month</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Access to all facilities</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> 2 class per week</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>An energy drink after your weekly class</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Especial offers in our shop</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Personal Trainer</li>
            <li class="mb-3">
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Physiotherapist</del>
            </li>
          </ul>
          <a href="{{route('register')}}" class="btn btn-primary btn-block p-2 shadow rounded-pill">Start now</a>
        </div>
      </div>
      <!-- END -->
       <!-- Pricing Table3-->
      <div class="col-md-4 mb-5 ">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Premium</h1>
          <h2 class="h1 font-weight-bold">30€<span class="text-small font-weight-normal ml-2">/ month</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Access to all facilities</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> 3 class per week</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>An energy drink after your weekly class</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Especial offers in our shop</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Personal Trainer</li>
            <li class="mb-3">
              <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Physiotherapist</li>
            <li class="mb-3">
          </ul>
          <a href="{{route('register')}}" class="btn btn-primary btn-block p-2 shadow rounded-pill">Start now</a>
        </div>
      </div>
      </div>
      <!-- END -->
      
    

<!-- Footer para el contacto-->
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