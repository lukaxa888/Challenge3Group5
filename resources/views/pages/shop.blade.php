@extends('layouts.defaultShop')

@section('content')



<!-- Seccion para las imagenes -->

<section id="section1" class="container-fluid">

  <div class="container">
    <div class="row">
      <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
        <div class="MultiCarousel-inner">
          <form id="form1" name="form1" action="{{ route('users.store.shop') }}" method="post">
            @csrf
            <div class="item">
              <div class="pad15">
<<<<<<< HEAD
                <img class="lead"  src="{{asset('img/producto1.jpg')}}"></img>
               
                <p class="parrafos"><b>CREATINE AMIX</b></p>
                <li name='amount' id="first" class="listas" value='19.99'>19,99$</li>
                <br>
=======
                <img class="lead" src="img/producto3.jpg"></img>
                <p class="parrafos"><b>CREATINE AMIX</b></p>
                <li name='amount' id="first" class="listas" value='19.99'>19,99$</li>
                <br>
                <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
>>>>>>> 97195bb5ff58e01d058d22f7997aeded42061642
              </div>
            </div>

            <form id="form2" name="form2" action="{{ route('users.store.shop') }}" method="post">
              @csrf
              <div class="item">
                <div class="pad15">
<<<<<<< HEAD
                  <img class="lead"  src="{{asset('img/producto1.jpg')}}"></img>

                  <p class="parrafos"><b>PLATINUM CREATINE</b></p>
                  <li name='amount' class="listas" value='24.99'>24,99$</li>
                  <br>
=======
                  <img class="lead" src="img/producto1.jpg"></img>
                  <p class="parrafos"><b>PLATINUM CREATINE</b></p>
                  <li name='amount' class="listas" value='24.99'>24,99$</li>
                  <br>
                  <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
>>>>>>> 97195bb5ff58e01d058d22f7997aeded42061642
                </div>
              </div>
            </form>

            <form id="form3" name="form3" action="{{ route('users.store.shop') }}" method="post">
              @csrf
              <div class="item">
                <div class="pad15">
<<<<<<< HEAD
                  <img class="lead" src="{{asset('img/producto1.jpg')}}"></img>
                  <p class="parrafos"><b>PROTEIN WHEY</b></p>
                  <li name='amount' class="listas" value='29.99'>29,99$</li>
                  <br>
=======
                  <img class="lead" src="img/producto2.jpg"></img>
                  <p class="parrafos"><b>PROTEIN WHEY</b></p>
                  <li name='amount' class="listas" value='29.99'>29,99$</li>
                  <br>
                  <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
>>>>>>> 97195bb5ff58e01d058d22f7997aeded42061642
                </div>
              </div>
            </form>
            <form id="form4" name="form4" action="{{ route('users.store.shop') }}" method="post">
              @csrf
              <div class="item">
                <div class="pad15">
<<<<<<< HEAD
                  <img class="lead"  src="{{asset('img/producto1.jpg')}}"></img>
                  <p class="parrafos"><b>NITRO-TECH PROTEIN</b></p>
                  <li name='amount' class="listas" value='39.99'>39,99$</li>
                  <br>
=======
                  <img class="lead" src="img/producto4.jpg"></img>
                  <p class="parrafos"><b>NITRO-TECH PROTEIN</b></p>
                  <li name='amount' class="listas" value='39.99'>39.99$</li>
                  <br>
                  <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
>>>>>>> 97195bb5ff58e01d058d22f7997aeded42061642
                </div>
              </div>
            </form>
            <form id="form5" name="form5" action="{{ route('users.store.shop') }}" method="post">
              @csrf
              <div class="item">
                <div class="pad15">
<<<<<<< HEAD
                  <img class="lead" id="iso"  src="{{asset('img/producto1.jpg')}}"></img>
                  <p class="parrafos"><b>ISO WHEY PROTEIN</b></p>
                  <li name='amount' class="listas" value='51.9'>51,90$</li>
                  <br>
=======
                  <img class="lead" id="iso" src="img/producto5.jpg"></img>
                  <p class="parrafos"><b>ISO WHEY PROTEIN</b></p>
                  <li name='amount' class="listas" value='51.9'>51.90$</li>
                  <br>
                  <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
>>>>>>> 97195bb5ff58e01d058d22f7997aeded42061642
                </div>
              </div>
            </form>
            <form id="form6" name="form6" action="{{ route('users.store.shop') }}" method="post">
              @csrf
              <div class="item">
                <div class="pad15">
<<<<<<< HEAD
                  <img class="lead"  src="{{asset('img/producto1.jpg')}}"></img>
                  <p class="parrafos"><b>ENERGY DRINK(x8)</b></p>
                  <li name='amount' class="listas" value='14.99'>14,99$</li>
                  <br>
=======
                  <img class="lead" src="img/producto6.jpg"></img>
                  <p class="parrafos"><b>ENERGY DRINK(x8)</b></p>
                  <li name='amount' class="listas" value='14.99'>14.99$</li>
                  <br>
                  <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
>>>>>>> 97195bb5ff58e01d058d22f7997aeded42061642
                </div>
              </div>
            </form>
            <form id="form7" name="form7" action="{{ route('users.store.shop') }}" method="post">
              @csrf
              <div class="item">
                <div class="pad15">
<<<<<<< HEAD
                  <img class="lead"  src="{{asset('img/producto1.jpg')}}"></img>
                  <p class="parrafos"><b>RED BULL(x8)</b></p>
                  <li name='amount' class="listas" value='17.99'>17,99$</li>
                  <br>
=======
                  <img class="lead" src="img/producto7.jpg"></img>
                  <p class="parrafos"><b>RED BULL(x8)</b></p>
                  <li name='amount' class="listas" value='17.99'>17.99$</li>
                  <br>
                  <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
>>>>>>> 97195bb5ff58e01d058d22f7997aeded42061642
                </div>
              </div>
            </form>
            <form id="form8" name="form8" action="{{ route('users.store.shop') }}" method="post">
              @csrf
              <div class="item">
                <div class="pad15">
<<<<<<< HEAD
                  <img class="lead"  src="{{asset('img/producto1.jpg')}}"></img>
                  <p class="parrafos"><b>POWERADE(x8)</b></p>
                  <li name='amount' class="listas" value='18.99'>18,99$</li>
                  <br>
=======
                  <img class="lead" src="img/producto8.jpg"></img>
                  <p class="parrafos"><b>POWERADE(x8)</b></p>
                  <li name='amount' class="listas" value='18.99'>18.99$</li>
                  <br>
                  <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
>>>>>>> 97195bb5ff58e01d058d22f7997aeded42061642
                </div>
              </div>
            </form>
            <form id="form9" name="form9" action="{{ route('users.store.shop') }}" method="post">
              @csrf
              <div class="item">
                <div class="pad15">
<<<<<<< HEAD
                  <img class="lead"  src="{{asset('img/producto1.jpg')}}"></img>
                  <p class="parrafos"><b>ISOSTAR</b></p>
                  <li name='amount'  class="listas" value='12.99'>12,99$</li>
                  <br>
=======
                  <img class="lead" src="img/producto9.jpg"></img>
                  <p class="parrafos"><b>ISOSTAR</b></p>
                  <li name='amount' value='12.99'>12.99$</li>
                  <br>
                  <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
>>>>>>> 97195bb5ff58e01d058d22f7997aeded42061642
                </div>
              </div>
            </form>
            <form id="form10" name="form10" action="{{ route('users.store.shop') }}" method="post">
              @csrf
              <div class="item">
                <div class="pad15">
<<<<<<< HEAD
                  <img class="lead"  src="{{asset('img/producto1.jpg')}}"></img>
                  <p class="parrafos"><b>ISOSTAR</b></p>
                  <li name='amount'   class="listas" value='13.99'>13,99$</li>
                  <br>
=======
                  <img class="lead" src="img/producto10.jpg"></img>
                  <p class="parrafos"><b>ISOSTAR</b></p>
                  <li name='amount' value='13.99'>13.99$</li>
                  <br>
                  <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
>>>>>>> 97195bb5ff58e01d058d22f7997aeded42061642
                </div>
              </div>
            </form>
            <form id="form11" name="form11" action="{{ route('users.store.shop') }}" method="post">
              @csrf
              <div class="item">
                <div class="pad15">
<<<<<<< HEAD
                  <img class="lead"  src="{{asset('img/producto1.jpg')}}"></img>
                  <p class="parrafos"><b>REFLEX</b></p>
                  <li name='amount' class="listas"  value='7.99'>7,99$</li>
                  <br>
=======
                  <img class="lead" src="img/producto11.jpg"></img>
                  <p class="parrafos"><b>REFLEX</b></p>
                  <li name='amount' value='7.99'>7.99$</li>
                  <br>
                  <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
>>>>>>> 97195bb5ff58e01d058d22f7997aeded42061642
                </div>
              </div>
            </form>
            <form id="form12" name="form12" action="{{ route('users.store.shop') }}" method="post">
              @csrf
              <div class="item">
                <div class="pad15">
<<<<<<< HEAD
                  <img class="lead"  src="{{asset('img/producto1.jpg')}}"></img>
                  <p class="parrafos"><b>TIGER BALM</b></p>
                  <li name='amount' class="listas"  value='11.40'>11,40$</li>
                  <br>
=======
                  <img class="lead" src="img/producto12.jpg"></img>
                  <p class="parrafos"><b>TIGER BALM</b></p>
                  <li name='amount' value='11.40'>11.40$</li>
                  <br>
                  <input type='submit' id="boton1" value="Buy Now!" class="botones"></input>
>>>>>>> 97195bb5ff58e01d058d22f7997aeded42061642
                </div>
            </form>
        </div>
      </div>
      <button class="btn btn-primary leftLst">< </button>
      <button class="btn btn-primary rightLst">></button>
    </div>
  </div>
  </div>
</section>

<script type="text/javascript">
  $(document).ready(function() {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function() {
      var condition = $(this).hasClass("leftLst");
      if (condition)
        click(0, this);
      else
        click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function() {
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
      $(itemsDiv).each(function() {
        id = id + 1;
        var itemNumbers = $(this).find(itemClass).length;
        btnParentSb = $(this).parent().attr(dataItems);
        itemsSplit = btnParentSb.split(',');
        $(this).parent().attr("id", "MultiCarousel" + id);


        if (bodyWidth >= 1200) {
          incno = itemsSplit[3];
          itemWidth = sampwidth / incno;
        } else if (bodyWidth >= 992) {
          incno = itemsSplit[2];
          itemWidth = sampwidth / incno;
        } else if (bodyWidth >= 768) {
          incno = itemsSplit[1];
          itemWidth = sampwidth / incno;
        } else {
          incno = itemsSplit[0];
          itemWidth = sampwidth / incno;
        }
        $(this).css({
          'transform': 'translateX(0px)',
          'width': itemWidth * itemNumbers
        });
        $(this).find(itemClass).each(function() {
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
      } else if (e == 1) {
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
@endsection