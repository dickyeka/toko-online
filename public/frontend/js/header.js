$('.nav-menu li').on("click", function(){
	$('.nav-list').removeClass('active');
	$(this).addClass('active');
	var dropdown = "#" + $(this).data("dropdown");
	$('.dropdown-wrapper').fadeOut(200);
	$(dropdown).slideDown(300);

});

$(this).on("mouseup", function(){
	$('.dropdown-wrapper').fadeOut(200);
	$('.nav-list').removeClass('active');
});


$('#account-link').on("click", function(e){
	e.preventDefault();
	var dropdown = "#" + $(this).data("dropdown");
	$('.dropdown-wrapper').fadeOut(200);
	$(dropdown).slideDown(300);
});

$('.top-deal').hover(function(){
	$(this).find('.overlay-box').fadeIn(200);
},
function(){
	$(".overlay-box").fadeOut(200); 
});
