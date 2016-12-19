
var controles = $("#controles");
var slider = $("#content-slide");
var slide = $(".slide");

for(var i = 0; i < slide.length; i++){
	controles.append('<a href="#" data-control="'+ i +'"></a>');
	$(slide[i]).attr('data-target' , i);
};
$(slide[0]).addClass('active');
controles.find('a:first').addClass('active');
controles.on('click', 'a', function(e){
				$('#controles > a, .slide').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
				var correctTarget = $(this).attr('data-control');
				$('.slide[data-target="'+ correctTarget +'"]').addClass('active');
			});
$(".slideshow .arrowl").on('click', function(e){
	if(!$(".slideshow ul").find(".slide.active").is(":first-child")){
	$(".slideshow ul").find(".slide.active").prev().addClass("active").next().removeClass("active");
	controles.find("a.active").prev().addClass('active').next().removeClass('active');
}
else {
	$(".slideshow ul").find(".slide:last-child").addClass("active");
	$(".slideshow ul").find(".slide:first-child").removeClass("active");
	controles.find("a:last-child").addClass("active");
	controles.find("a:first-child").removeClass("active");}
});
$(".slideshow .arrowr").on('click', function(e){
	if(!$(".slideshow ul").find(".slide.active").is(":last-child")){
	$(".slideshow ul").find(".slide.active").next().addClass("active").prev().removeClass("active");
	controles.find("a.active").next().addClass('active').prev().removeClass('active');
}else{
	$(".slideshow ul").find(".slide:first-child").addClass("active");
	$(".slideshow ul").find(".slide:last-child").removeClass("active");
	controles.find("a:first-child").addClass("active");
	controles.find("a:last-child").removeClass("active");
}
	});
	

