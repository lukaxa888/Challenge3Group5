<!-- 
    SECTION PARA EL SING IN
    <section class="mt-3">
-->
@if (Auth::guest())
<div id="tamañoJumbotron" class="jumbotron mx-auto">
  <h1 class="display-4">{{ trans('messages.start') }}</h1>
  <p class="lead">{{ trans('messages.text1') }}</p>
  <hr class="my-4">
 
  <a class="btn btn-primary btn-lg" href="/register" role="button">{{ trans('messages.sign') }}</a>
</div>

      @else

            {{ Auth::user()->name }}
            @endif

  
