function initialize() {
	var myLatlng = new google.maps.LatLng(-37.798807, 144.977560);
	var mapOptions = {
		zoom: 16,
		minZoom: 6,
		maxZoom: 20,
		zoomControl: true,
		zoomControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		panControl: false,
		center: myLatlng,
		mapTypeControl: false,
		streetViewControl: false,
		overviewMapControl: false,
		scrollwheel: false,
		disableDoubleClickZoom: true,
	}
	var map = new google.maps.Map(document.getElementById('googlemap'), mapOptions);
	var image = {
		url: '/wp-content/themes/Layton-Creative-2.0/img/google-maps-marker.png',
		size: new google.maps.Size(96, 86),
		origin: new google.maps.Point(0, 0),
		anchor: new google.maps.Point(48, 43)
	};
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		icon: image,
		title: 'Layton Creative'
	});
}
google.maps.event.addDomListener(window, 'load', initialize);