@extends('template.template')

@section('content')

<style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 60%; }
    </style>

<div class="col-sm-12" id="map"></div>
    <script type="text/javascript">

function initMap() {
  var myLatLng = {lat: 53.923535, lng: 27.600250};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 17,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Houses'
  });
}

</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBF0lz20drHgHR2A8yWE7E6qm64SZWYqWE&callback=initMap">
</script>

<div class="tab-content product-detail-info">
	     <b>Адрес:</b> ул.Сурганова 14, Минск, Беларусь<br/>
	     <b>Тел:</b> +44 123 654321<br/>
	     <b>Факс:</b> +44 123 654321<br/>
	     <b>Email:</b> <a href="mailto:houses.auth@gmail.com">houses.auth@gmail.com</a>
</div>
@stop