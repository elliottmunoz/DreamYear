$(document).ready(function(){
	$(".video").fitVids();
});


var contact=$('#contactBtn');
contact.click(function(){
	$(this).hide();
	$(".speaking__form").slideDown(750);
    return false;
})


var map = L.mapbox.map('map', 'elliottmunoz.hj6m67pi', {zoomControl: false})
.setView([39.555, -96.768], 5);

//Basic responsive rules
function respond(x) {

	if (x >= 640) {
		map.setZoom(5);
	}

	if (x < 640) {
		map.setZoom(4);
	}

	if (x < 320) {
		map.setZoom(3);
	}

}

map.on('resize', function () {
	var dimensions = map.getSize();
	var width = dimensions.x;

	respond(width);
});

map.markerLayer.on('layeradd', function (e) {
	var marker = e.layer,
	feature = marker.feature;
	marker.setIcon(L.icon(feature.properties.icon));
});


map.markerLayer.setGeoJSON(geoJson);
map.setZoomRange(5, 17);




