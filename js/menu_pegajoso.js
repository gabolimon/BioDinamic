$(document).ready(function(){
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('header').addClass('header_2');
		} else {
			$('header').removeClass('header_2');
		}
	});
 
});