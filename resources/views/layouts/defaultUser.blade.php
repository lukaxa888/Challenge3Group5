<!doctype html>
<html>
<head>
    @include('includes.headUser')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-between"> 
    @include('includes.headerUser')
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-primary"> 
    @include('includes.headerPages')
</nav>
<section>
    @yield('content')
</section>

@if (Auth::guest())
<section class="mt-3">
@include('includes.sectionSigIn')
</section>
      @else
            @endif

<section id="socialMe">
@include('includes.sectionSocial')
</section>
<footer>
@include('includes.footer')
</footer>
</body>
</html>
