<!-- 
    HEADER ENTRE PAGINAS 
    <nav class="navbar navbar-expand-lg navbar-light bg-primary"> 
-->
<a  id="margenMedio" class="navbar-brand" href="{{route('users.landing')}}">{{ trans('messages.home') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{route('users.facilities')}}" id="navbarDropdownMenuLink" role="button">
        {{ trans('messages.faci') }}
        </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ trans('messages.rates') }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route('users.prices')}}">{{ trans('messages.prices') }}</a>
          <a class="dropdown-item" href="{{route('users.courses')}}">{{ trans('messages.courses') }}</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/calendar">{{ trans('messages.cal') }}</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('users.shop')}}">{{ trans('messages.shop') }}</a>
      </li>
    </ul>
  </div>
