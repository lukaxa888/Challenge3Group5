<!--    
  ESTO ES LO QUE TIENE QUE TENER EL NAV DEL INCLUDE
  <nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-between"> 
-->
<img class="navbar-brand" id="imagenLogo" src="img/logo.png" width="100" height="100">


<ul class="navbar-nav ">

  <li class="nav-item pr-4">
 
    <a class="text-dark" data-toggle="modal" data-target="#exampleModal" alt="" loading="lazy">
      <img src="img/account.png" width="30" height="30" class="d-inline-block align-top " data-toggle="modal" data-target="#exampleModal" alt="" loading="lazy">
      @if (Auth::guest())
      {{ trans('messages.manage') }}
      @else

            {{ Auth::user()->name }}
            @endif
    </a>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            @if (Auth::guest())
            <h5 class="modal-title" id="exampleModalLabel">{{ trans('messages.log') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">{{ trans('messages.email2') }}</label>
                <input type="email" name="email" required autocomplete="email" autofocus class="form-control @error('email') is-invalid @enderror" id="exampleDropdownFormEmail1" placeholder="{{ trans('messages.emailph') }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1">{{ trans('messages.password1') }}</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleDropdownFormPassword1" required name="password" placeholder="{{ trans('messages.password1') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
            @else

            {{ Auth::user()->name }}
            <a href="{{ route('logout') }}">Logout</a>
            @endif

          </div>
        </div>

      </div>
    </div>

  </li>
  <li class="nav-item pr-4">
    <a href="#" class="text-dark">
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