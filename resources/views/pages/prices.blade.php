@extends('layouts.default')
@section('content')
      <!-- Pricing Table1-->
      <div class="row">
      <div class="col-md-4 mb-5 ">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">{{ trans('messages.basic') }}</h1>
          <h2 class="h1 font-weight-bold">{{ trans('messages.money1') }}</h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.access') }}</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.week1') }}</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.energy') }}</li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>{{ trans('messages.offers') }}</del>
            </li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>{{ trans('messages.trainer') }}</del>
            </li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>{{ trans('messages.physio') }}</del>
            </li>
          </ul>
          <a href="{{route('register')}}" class="btn btn-primary btn-block p-2 shadow rounded-pill">{{ trans('messages.start') }}</a>
        </div>
      </div>
      <!-- END -->


       <!-- Pricing Table2-->
      <div class="col-md-4 mb-5 ">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Pro</h1>
          <h2 class="h1 font-weight-bold">{{ trans('messages.money2') }}</h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.access') }}</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.week2') }}</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.energy') }}</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.offers') }}</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.trainer') }}</li>
            <li class="mb-3">
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>{{ trans('messages.physio') }}</del>
            </li>
          </ul>
          <a href="{{route('register')}}" class="btn btn-primary btn-block p-2 shadow rounded-pill">{{ trans('messages.start') }}</a>
        </div>
      </div>
      <!-- END -->
       <!-- Pricing Table3-->
      <div class="col-md-4 mb-5 ">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Premium</h1>
          <h2 class="h1 font-weight-bold">{{ trans('messages.money3') }}</h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.access') }}</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.week3') }}</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.energy') }}</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.offers') }}</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.trainer') }}</li>
            <li class="mb-3">
              <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>{{ trans('messages.physio') }}</li>
            <li class="mb-3">
          </ul>
          <a href="{{route('register')}}" class="btn btn-primary btn-block p-2 shadow rounded-pill">{{ trans('messages.start') }}</a>
        </div>
      </div>
      </div>
      <!-- END -->

@endsection