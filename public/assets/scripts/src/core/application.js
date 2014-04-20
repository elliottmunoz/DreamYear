$(document).ready(function(){
	$(".video").fitVids();
});


var contact=$('#contactBtn');
contact.click(function(){
	$(this).hide();
	$(".speaking__form").slideDown(750);
    return false;
})




