<!DOCTYPE html>
<html>
<body>

<h1>Map Semarang</h1>

<div id="googleMap" style="width:600px;height:600px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(-6.9923263,110.4288568),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=APIK_key&callback=myMap"></script>

</body>
</html>
