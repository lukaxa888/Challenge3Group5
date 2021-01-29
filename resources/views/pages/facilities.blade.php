@extends('layouts.default')
@section('content')
<style type="text/css">

  #section1 {
    background-image: url("img/fondo.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }

  .divsTexto {
    box-shadow: 5px 5px 5px black;
  }

</style>



<!-- Seccion para las imagenes -->

<section class="container-fluid" id="section1">

  <div class="row container-fluid justify-content-between pt-5 mb-5 align-items-center">

  <div id="divTexto1" class="divsTexto col-12 col-sm-6">
    
    <h2>{{ trans('messages.gym') }}</h2>

    <br>
    
    <p>{{ trans('messages.facilities1') }}</p>
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

  <div id="divTexto2" class="divsTexto col-12 col-sm-6">
    
    <h2>{{ trans('messages.bike') }}</h2>

    <br>
    
    <p>{{ trans('messages.facilities2') }}</p>
  </div>

</div>

<div class="row container-fluid justify-content-between mt-5 mb-5 align-items-center">

  <div id="divTexto3" class="divsTexto col-12 col-sm-6">
    
    <h2>{{ trans('messages.padel') }}</h2>

    <br>
    
    <p>{{ trans('messages.facilities3') }}</p>

  </div>

  <img class="col-12 col-sm-6" src="img/padel.jpg">

</div>

<div class="row container-fluid justify-content-between mt-5 mb-5 align-items-center">

  <img class="col-12 col-sm-6" src="img/tenis.jpg">

  <div id="divTexto4" class="divsTexto col-12 col-sm-6">
    
    <h2>{{ trans('messages.tenis') }}</h2>

    <br>
    
    <p>{{ trans('messages.facilities4') }}</p>

  </div>


</div>

<div class="row container-fluid justify-content-between mt-5 mb-5 align-items-center">

  <div id="divTexto5" class="divsTexto col-12 col-sm-6">
    
    <h2>{{ trans('messages.swim') }}</h2>

    <br>
    
    <p>{{ trans('messages.facilities5') }}</p>

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
@endsection