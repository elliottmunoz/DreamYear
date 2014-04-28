$(document).ready(function(){
	$(".video").fitVids();
	$(".owl-carousel").owlCarousel({
      items : 5, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 961px
      itemsDesktopSmall : [900,4], // betweem 960p and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
});


var contact=$('#contactBtn');
contact.click(function(){
	$(this).hide();
	$(".speaking__form").slideDown(750);
    return false;
})

//Scroll to #ID based on anchor
  var baseSpeed=2000;

  function getSpeed(t){
    var offset=($(t).offset());
    var ratio=offset.top/$(document).height();
    var ratioRounded=ratio.toFixed(2)
    var speed=ratioRounded*baseSpeed;
    return(speed);
  }

  function scrollToSection(t, s){
    y=$(t).offset().top;
    $("html,body").animate({scrollTop:y}, {
      duration: s,
      easing: 'swing',
      queue: false,
      complete: function(){
        window.location.hash = t;
      }
    });
  }

var item=$('.nav li a');
  item.click(function(){
    var target=this.getAttribute('href');
    scrollToSection(target, getSpeed(target));
    return false;
  });


var map = L.mapbox.map('map', 'elliottmunoz.hj6m67pi', {minZoom: 4, zoomControl: false})
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




