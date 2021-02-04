<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <!-- estilo-->
    <link rel="stylesheet" href="{{ asset('css/css.css') }}"/>
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
   		 {{ auth()->user()->name }}
  </a>
      
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ trans('messages.log') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
  <form class="px-4 py-3">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">{{ trans('messages.email2') }}</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="{{ trans('messages.emailph') }}">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">{{ trans('messages.password1') }}</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="{{ trans('messages.password1') }}">
    </div>
    <div class="form-group">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
        {{ trans('messages.remember') }}
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">{{ trans('messages.sign') }}</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="/register">{{ trans('messages.new1') }}</a>
  <a class="dropdown-item" href="#">{{ trans('messages.forgot') }}</a>
</div>
      </div>
    
  </div>
</div>

      </li>
       <li class="nav-item pr-4">
      	 <a  href="#" class="text-dark">
   		 <img src="img/carrito.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
   		 {{ trans('messages.cart') }}
  </a>
        
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{__('Choose a language!')}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ url('lang', ['es']) }}">Español</a>
          <a class="dropdown-item" href="{{ url('lang', ['en']) }}">English</a>
        </div>
      </li>
    </ul>
    
  
</nav>
<!-- Nav para poner las noticias con Ajax-->
<nav id="navNoticias" class="bg-primary">
  <p>{{ trans('messages.news') }}</p>
  
</nav>

<!-- Nav para moverte por las diferentes paginas-->

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a  id="margenMedio" class="navbar-brand" href="#">{{ trans('messages.home') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ trans('messages.faci') }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">{{ trans('messages.gym') }}</a>
          <a class="dropdown-item" href="#">{{ trans('messages.bike') }}</a>
          <a class="dropdown-item" href="#">{{ trans('messages.padel') }}</a>
          <a class="dropdown-item" href="#">{{ trans('messages.tenis') }}</a>
          <a class="dropdown-item" href="#">{{ trans('messages.swim') }}</a>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ trans('messages.rates') }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">{{ trans('messages.prices') }}</a>
          <a class="dropdown-item" href="#">{{ trans('messages.courses') }}</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">{{ trans('messages.cal') }}</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">{{ trans('messages.shop') }}</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Carrousel con imagenes del polideportivo-->
<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carrousel1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carrousel2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carrousel3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<!-- Sección con jumbotron para hacer el sig in-->
<section class="mt-3">
  <div id="tamañoJumbotron" class="jumbotron mx-auto">
  <h1 class="display-4">{{ trans('messages.start') }}</h1>
  <p class="lead">{{ trans('messages.text1') }}</p>
  <hr class="my-4">
 
  <a class="btn btn-primary btn-lg" href="/register" role="button">{{ trans('messages.sign') }}</a>
</div>
</section>


<!-- Footer para suscribirse al periodico, redes sociales, formas de pago y localización (solo CSS)-->
<section id="socialMe">
  <div id="footerBox1">
  <h1>{{ trans('messages.subscribe') }}</h1>
  <h2>{{ trans('messages.email1') }}</h2> <input type="text" name="Gmail" placeholder="{{ trans('messages.subscribeph') }}">
  <p></p>
  <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">{{ trans('messages.read') }}</label>
  <p></p>
  <input type="submit" name="send" value="{{ trans('messages.send') }}">
  </div>
  <div id="footerBox2">
    <img class="socialLinkImages" src="img/instagram.jpg">
    <img class="socialLinkImages" src="img/twitter.png">
    <img class="socialLinkImages" src="img/facebook.png">
    
  </div>
  <div id="footerBox3">
    <img src="img/payment.jpg">
  </div>
  <div id="footerBox4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.5847447575666!2d-1.9908732845135921!3d43.30201717913491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b01d51947163%3A0x8916ad3db217f11e!2sEtxadi%20kiroldegia!5e0!3m2!1ses!2ses!4v1606982351093!5m2!1ses!2ses" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</section>
<!-- Sección para el contacto-->
<footer>
  <h3>{{ trans('messages.contact') }}</h3>
   <img src="img/correo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
       metamorfosisGym@gmail.com
       <div id="telefono">
    <img src="img/telefono.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
       943 16 61 38
       </div>
  
</footer>



</body>
</html>
