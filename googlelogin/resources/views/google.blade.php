<!DOCTYPE html>
<html>
  <head>
    <title>demo map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-map/3.0-rc1/jquery.ui.map.js"></script>
  </head>
  <body>
<div class="container">
 <div class="row">
    <div class="col">
      <br>
   <input type="hidden" disabled="disabled" placeholder="Latitude" id="lat"/>
   <input type="hidden" disabled="disabled" placeholder="Longitude" id="lng"/>
   <table>
  <tr> <input id="pac-input" type="text" placeholder="Search Box"/>
    &nbsp;
  <button type="button" id="addmarker" class="btn btn-info">Add Marker</button>
</tr>
<br>
  </div>
  <br>
  <div id="map" class="col" style="height: 400px;"></div>
</div>
</div>
</table>
</form>
</body> 
 <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU8ixiHp9IPRMVAMmndBMEXzZOmxKwYtw&callback=initAutocomplete&libraries=places&v=weekly"
      async></script>
 
</html>
<script>
$(document).ready(function() {
$("#lat_area").addClass("d-none");
$("#long_area").addClass("d-none");
});
</script>
<script type="text/javascript">

function initAutocomplete() {
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 21.1702, lng: 72.8311 },
    zoom: 15,
  });
  const input = document.getElementById("pac-input");
  const searchBox = new google.maps.places.SearchBox(input);
  // map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);
  // Bias the SearchBox results towards current map's viewport.
 
  map.addListener("bounds_changed", () => {
    searchBox.setBounds(map.getBounds());
    // var place = input.getPlace();

 var geocoder = new google.maps.Geocoder();
    geocoder.geocode({
      "address" : $("#pac-input").val()
    }, function(results, status) {
      if(status == google.maps.GeocoderStatus.OK) {
        $("#lat").val(results[0].geometry.location.lat().toFixed(6));
        $("#lng").val(results[0].geometry.location.lng().toFixed(6));
      } else {
        console.log();
      }
    });
  }

  );
  @forEach($location as $l)
  var lat={{$l->latitude}};
  var lng={{$l->longitude}};
var markerLatlng = new google.maps.LatLng(parseFloat(lat),parseFloat(lng));
var marker = new google.maps.Marker({
        position: markerLatlng,
        map: map,
  });
 @endforEach
  
  let markers = [];
  searchBox.addListener("places_changed", () => {
    const places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    markers.forEach((marker) => {
      marker.setMap(null);
    });
    markers = [];
    const bounds = new google.maps.LatLngBounds();
    places.forEach((place) => {
      if (!place.geometry || !place.geometry.location) {
        console.log("Returned place contains no geometry");
        return;
      }
      const icon= {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25),
      };
      markers.push(
        new google.maps.Marker({
          map,
          icon ,
          // animation:google.maps.Animation.BOUNCE,
          draggable:true,
          title: place.name,
          position: place.geometry.location,
        })
      );

      if (place.geometry.viewport) {
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
  
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
  
 $(document).on('click','#addmarker',function(){
    var address=$('#pac-input').val();
    var latitude=$('#lat').val();
    var longitude=$('#lng').val();
  
    $.ajax({

      url:"{{route('google')}}",
      data:{address:address,latitude:latitude,longitude:longitude},
      datatype:"JSON",
      type:"GET",
      
      success:function(res){
        Swal.fire({
                              position: 'text-center',
                              icon: 'success',
                              title: 'Marker Added!.',
                              showConfirmButton: false,
                              timer: 5000
                           });
      }
    });
    
  });
</script>