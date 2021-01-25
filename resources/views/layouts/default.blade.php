<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-between"> 
    @include('includes.headerUser')
</nav>
<nav id="navNoticias" class="bg-primary">
    @include('includes.headerAjax')
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-primary"> 
    @include('includes.headerPages')
</nav>
<section>
    @yield('content')
</section>
<section class="mt-3">
@include('includes.sectionSigIn')
</section>
<section id="socialMe">
@include('includes.sectionSocial')
</section>
<footer>
@include('includes.footer')
</footer>
</body>
</html>
