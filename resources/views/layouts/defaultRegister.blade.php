<!doctype html>
<html>
<head>
    @include('includes.head')
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

<footer class="fixed-bottom">
@include('includes.footer')
</footer>
</body>
</html>
