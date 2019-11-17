<!DOCTYPE html>
<html>
<body>

<h1><center>Google Maps API</center></h1>
<hr>

<div id="googleMap" style="width:800px;height:400px;margin:auto;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(-7.4003726,111.4429855),
  zoom:12,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({
               position: new google.maps.LatLng(-7.401965,111.4431335),
               map: map,
			   animation:google.maps.Animation.DROP
            });
// membuat konten untuk info window
 var contentString = '<h3>Kost Putri melati!</h3><p>Terima kos khusus putri untuk wilayah Ngawi dan sekitarnya</p><p>Harga terjangkau dan bersih</p><img src=kos.jpg>';
 var ngawi = {lat: -7.401965, lng: 111.4431335};
  // membuat objek info window
        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          position: ngawi
        });
		// event saat marker diklik
        marker.addListener('click', function() {
          // tampilkan info window di atas marker
          infowindow.open(map, marker);
        });

 
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=API_key&callback=myMap"></script>

</body>
</html>