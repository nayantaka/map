<!DOCTYPE html>
<html>
<body>

<h1>Kota Semarang</h1>

<div id="googleMap" style="width:800px;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(-6.9885885, 110.4172985),
  zoom:13,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({
               position: new google.maps.LatLng(-6.9885885, 110.4172985),
               map: map,
			   animation:google.maps.Animation.BOUNCE
            });
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=api_key&callback=myMap"></script>

</body>
</html>
