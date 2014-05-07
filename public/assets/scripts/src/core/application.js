$(document).ready(function(){
	$(".video").fitVids();
	$(".owl-carousel").owlCarousel({
    items : 5,
    itemsDesktop : [1200,5],
    itemsDesktopSmall : [960,4],
    itemsTablet: [640,3],
    itemsMobile : [480,2]
    });
  });

/*
function moveNav(){
  if($("body").scrollTop()>=$(".section--email").offset().top){
    $('#header').stop().velocity({top: '0px'},{ duration: 300 });
    }else{
      $('#header').stop().velocity({top: '-70px'},{ duration: 100 });
    }
  }




  //$(window).resize(function(){
    //if ($('.nav li').css('display') == "inline" ){
      var timer = 0;
      $(window).scroll(function () {
        if (timer) {
          clearTimeout(timer);
        }
        timer = setTimeout(moveNav, 50);
        });
    //}
    //});
*/

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
  $(t)
  .velocity("scroll", s)
  .velocity({ queue: false },{ complete: function() { window.location.hash = t; }});
}

function setScroll(x){
var item=$(x);
item.click(function(){
  var target=this.getAttribute('href');
  if(target.charAt(0)=="#"){
    scrollToSection(target, getSpeed(target));
  }
  return false;
  });
}

setScroll('.nav li a');
setScroll('.feature a');


if ($('#map').length > 0) {
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
}



