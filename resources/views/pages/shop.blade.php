<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>

    <!-- estilo-->
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}"/>
    <!-- JS-->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<title>Metamorfosis</title>
</head>
<style type="text/css">

  /*#section1 {
    background-image: url("img/fondo.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }*/
  
</style>

<script type="text/javascript">
  $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});

</script>

<body>
  <!-- Nav con logo y opciones de administración -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-between">
  <img  class="navbar-brand" id="imagenLogo" src="img/logo.png" width="100" height="100">
  

    <ul class="navbar-nav ">
      
      <li class="nav-item pr-4">
      	
      	<a class="text-dark" href="#">
   		 <img src="img/account.png" width="30" height="30" class="d-inline-block align-top " data-toggle="modal" data-target="#exampleModal" alt="" loading="lazy">
   		 Manage your account
  </a>
      
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
  <form class="px-4 py-3">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="/register">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    
  </div>
</div>

      </li>
       <li class="nav-item pr-4">
      	 <a  href="#" class="text-dark">
   		 <img src="img/carrito.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
   		 Buy now!
  </a>
        
      </li>
     
      <li class="nav-item">
        <p>EN/ES</p>
      </li>
    </ul>
    
  
</nav>
<!-- Nav para poner las noticias con Ajax-->
<nav id="navNoticias" class="bg-primary">
  <p>Last news: Metamorfosis is the best sports centre</p>
  
</nav>

<!-- Nav para moverte por las diferentes paginas-->

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a  id="margenMedio" class="navbar-brand" href="{{route('users.landing')}}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="{{route('users.facilities')}}" role="button" aria-expanded="false">
          Facilities
        </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Rates
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route('users.prices')}}">Prices</a>
          <a class="dropdown-item" href="{{route('users.courses')}}">Courses</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/calendar">Calendar</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('users.shop')}}">Shop</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Seccion para las imagenes -->

<section id="section1" class="container-fluid">

  <div class="container">
  <div class="row">
    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
            <form id="form1" name="form1" action="{{ route('users.store.shop') }}" method="post">
            @csrf
                <div class="item">
                    <div class="pad15">
                        <img class="lead" src="img/producto3.jpg"></img>
                        <p class="parrafos"><b>CREATINE AMIX</b></p>
                        <li name='amount' id="first" class="listas" value='19.99' >19,99$</li>
                        <br>
                        <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
                    </div>
                </div>

            <form id="form2" name="form2" action="{{ route('users.store.shop') }}" method="post">
            @csrf
                <div class="item">
                    <div class="pad15">
                        <img class="lead" src="img/producto1.jpg"></img>
                        <p class="parrafos"><b>PLATINUM CREATINE</b></p>
                        <li name='amount' class="listas" value='24.99'>24,99$</li>
                        <br>
                        <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
                    </div>
                </div>

            <form id="form3" name="form3" action="{{ route('users.store.shop') }}" method="post">
            @csrf
                <div class="item">
                    <div class="pad15">
                        <img class="lead" src="img/producto2.jpg"></img>
                        <p class="parrafos"><b>PROTEIN WHEY</b></p>
                        <li name='amount' class="listas" value='29.99'>29,99$</li>
                        <br>
                        <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
                    </div>
                </div>

            <form id="form4" name="form4" action="{{ route('users.store.shop') }}" method="post">
            @csrf
                <div class="item">
                    <div class="pad15">
                        <img class="lead" src="img/producto4.jpg"></img>
                        <p class="parrafos"><b>NITRO-TECH PROTEIN</b></p>
                        <li name='amount' class="listas" value='39.99'>39.99$</li>
                        <br>
                        <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
                    </div>
                </div>

            <form id="form5" name="form5" action="{{ route('users.store.shop') }}" method="post">
            @csrf
                <div class="item">
                    <div class="pad15">
                        <img class="lead" id="iso" src="img/producto5.jpg"></img>
                        <p class="parrafos"><b>ISO WHEY PROTEIN</b></p>
                        <li name='amount' class="listas" value='51.9'>51.90$</li>
                        <br>
                        <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
                    </div>
                </div>

            <form id="form6" name="form6" action="{{ route('users.store.shop') }}" method="post">
            @csrf
                <div class="item">
                    <div class="pad15">
                        <img class="lead" src="img/producto6.jpg"></img>
                        <p class="parrafos"><b>ENERGY DRINK(x8)</b></p>
                        <li name='amount' class="listas" value='14.99'>14.99$</li>
                        <br>
                        <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
                    </div>
                </div>

            <form id="form7" name="form7" action="{{ route('users.store.shop') }}" method="post">
            @csrf
                <div class="item">
                    <div class="pad15">
                        <img class="lead" src="img/producto7.jpg"></img>
                        <p class="parrafos"><b>RED BULL(x8)</b></p>
                        <li name='amount' class="listas" value='17.99'>17.99$</li>
                        <br>
                        <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
                    </div>
                </div>

            <form id="form8" name="form8" action="{{ route('users.store.shop') }}" method="post">
            @csrf
                <div class="item">
                    <div class="pad15">
                        <img class="lead" src="img/producto8.jpg"></img>
                        <p class="parrafos"><b>POWERADE(x8)</b></p>
                        <li name='amount' class="listas" value='18.99'>18.99$</li>
                        <br>
                        <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
                    </div>
                </div>

            <form id="form9" name="form9" action="{{ route('users.store.shop') }}" method="post">
            @csrf
                <div class="item">
                    <div class="pad15">
                        <img class="lead" src="img/producto9.jpg"></img>
                        <p class="parrafos"><b>ISOSTAR</b></p>
                        <li name='amount' value='12.99'>12.99$</li>
                        <br>
                        <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
                    </div>
                </div>

            <form id="form10" name="form10" action="{{ route('users.store.shop') }}" method="post">
            @csrf
                <div class="item">
                    <div class="pad15">
                        <img class="lead" src="img/producto10.jpg"></img>
                        <p class="parrafos"><b>ISOSTAR</b></p>
                        <li name='amount' value='13.99'>13.99$</li>
                        <br>
                        <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
                    </div>
                </div>

            <form id="form11" name="form11" action="{{ route('users.store.shop') }}" method="post">
            @csrf
                <div class="item">
                    <div class="pad15">
                        <img class="lead" src="img/producto11.jpg"></img>
                        <p class="parrafos"><b>REFLEX</b></p>
                        <li name='amount' value='7.99'>7.99$</li>
                        <br>
                        <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
                    </div>
                </div>

            <form id="form12" name="form12" action="{{ route('users.store.shop') }}" method="post">
            @csrf
                <div class="item">
                    <div class="pad15">
                        <img class="lead" src="img/producto12.jpg"></img>
                        <p class="parrafos"><b>TIGER BALM</b></p>
                        <li name='amount' value='11.40'>11.40$</li>
                        <br>
                        <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
  </div>
</div>
  

</section>


<!-- Sección para el contacto-->
<footer>
  <h3>Contact us</h3>
   <img src="img/correo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
       metamorfosisGym@gmail.com
       <div id="telefono">
    <img src="img/telefono.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
       943 16 61 38
       </div>
  
</footer>
</body>

<script type="text/javascript">

</script>
</html>