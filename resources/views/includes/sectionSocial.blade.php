
<!-- 
    SECTION DONDE SE METE LA PARTE DE SOCIAL E IMAGENES DE PAGO
    <section id="socialMe">
-->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

  <div id="footerBox1">
  <h1>{{ trans('messages.subscribe') }}</h1>
  <h2>{{ trans('messages.email1') }}</h2> <input type="text" name="Gmail" placeholder="{{ trans('messages.subscribeph') }}">
  <p></p>
  <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">{{ trans('messages.read') }}</label>
  <p></p>
  <input type="submit" name="send" value="{{ trans('messages.send') }}">
  </div>
  <div id="footerBox2">
    <img class="socialLinkImages" src="{{asset('img/instagram.jpg')}}">
    <img class="socialLinkImages" src="{{asset('img/twitter.png')}}">
    <img class="socialLinkImages" src="{{asset('img/facebook.png')}}">
    
  </div>
  <div id="footerBox3">

    <img   src="{{asset('img/payment.jpg')}}">
  </div>
  <div id="mapid" style="width: 200px; height: 200px;">
  </div>
  <script>

var mymap = L.map('mapid').setView([43.3020211,-1.9908733], 12);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);

L.marker([43.3020211,-1.9908733]).addTo(mymap) 
    .bindPopup("<b>Here is our sports center!</b>").openPopup();

L.circle([ 43.3088200,-2.0364300], 500, { 
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5
}).addTo(mymap).bindPopup("Best area for walks ");


var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);

</script>