@extends('layouts.default')
@section('content')


<!-- Bikea area TableS-->
<div class="row">
  <div class="col-md-6 mb-5 ">
    <div class="bg-white p-5 rounded-lg shadow">
      <h1 class="h6 text-uppercase font-weight-bold mb-4">{{ trans('messages.bike') }}</h1>


      <div class="custom-separator my-4 mx-auto bg-primary"></div>

      <ul class="list-unstyled my-5 text-small text-left">
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.bike2') }}
        </li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.bike3') }}
        </li>
        <img src="img/bike.jpg" id="bikeImage" width="500" height="400">
      </ul>

    </div>
  </div>
  <!-- END -->


  <!-- Crossfit Table2-->

  <div class="col-md-6 mb-5 ">
    <div class="bg-white p-5 rounded-lg shadow">
      <h1 class="h6 text-uppercase font-weight-bold mb-4">ZUMBA</h1>


      <div class="custom-separator my-4 mx-auto bg-primary"></div>

      <ul class="list-unstyled my-5 text-small text-left">
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.zumba2') }}
        </li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.zumba3') }}
        </li>
        <img src="img/zumba.jpg" id="imagenZumba">
      </ul>

    </div>
  </div>
  <!-- END -->
  <!-- Crossfit Table3-->
  <div class="col-md-6 mb-5 ">
    <div class="bg-white p-5 rounded-lg shadow">
      <h1 class="h6 text-uppercase font-weight-bold mb-4">Cross fit </h1>

      <div class="custom-separator my-4 mx-auto bg-primary"></div>

      <ul class="list-unstyled my-5 text-small text-left">
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.crossfit2') }}
        </li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.crossfit3') }}
        </li>
        <img src="img/crossfit.jpg" id="crossFitImage">


      </ul>

    </div>
  </div>
  <!-- END -->
  <!-- Aqua Gym-->
  <div class="col-md-6 mb-5 ">
    <div class="bg-white p-5 rounded-lg shadow">
      <h1 class="h6 text-uppercase font-weight-bold mb-4">Aqua Gym </h1>

      <div class="custom-separator my-4 mx-auto bg-primary"></div>

      <ul class="list-unstyled my-5 text-small text-left">
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.aqua2') }}
        </li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>
          {{ trans('messages.aqua3') }}
        </li>
        <img src="img/aquagym.jpg" id="aquaGymImage">


      </ul>

    </div>
  </div>
</div>
<!-- END -->
@endsection