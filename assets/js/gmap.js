function myMap() {
    var icon={
          url: 'http://image.flaticon.com/icons/svg/252/252025.svg',
          scaledSize: new google.maps.Size(80, 80),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(32,65),
          labelOrigin:  new google.maps.Point(40,33),
        }; 
        var markerLabel = 'SPECTRUM ';      
  var myCenter = new google.maps.LatLng(45.548110, 19.793515);
  var mapProp = {center:myCenter, zoom:18, scrollwheel:false, draggable:false,
   mapTypeId:google.maps.MapTypeId.ROADMAP};
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var marker = new google.maps.Marker({position:myCenter,icon:icon, label: {
        text: markerLabel,
        color: "#000",
        fontSize: "16px",
        fontWeight: "bold"
      }});
  marker.setMap(map);
  }