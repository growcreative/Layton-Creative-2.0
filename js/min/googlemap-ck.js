function initialize(){var o=new google.maps.LatLng(-37.798807,144.97756),e={zoom:16,minZoom:6,maxZoom:20,zoomControl:!0,zoomControlOptions:{position:google.maps.ControlPosition.LEFT_CENTER},panControl:!1,center:o,mapTypeControl:!1,streetViewControl:!1,overviewMapControl:!1,scrollwheel:!1,disableDoubleClickZoom:!0},n=new google.maps.Map(document.getElementById("googlemap"),e),i={url:"/wp-content/themes/Layton-Creative-2.0/img/google-maps-marker.png",size:new google.maps.Size(96,86),origin:new google.maps.Point(0,0),anchor:new google.maps.Point(48,43)},t=new google.maps.Marker({position:o,map:n,icon:i,title:"Layton Creative"})}google.maps.event.addDomListener(window,"load",initialize);