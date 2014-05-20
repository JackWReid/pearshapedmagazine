(function($) {
$(document).ready(function() {
var stickyNavTop = $('.nav-bar').offset().top;

var stickyNav = function(){

	if($(window).width() > 650){
		var scrollTop = $(window).scrollTop();
		if (scrollTop > stickyNavTop) {
		    $('.nav-bar').addClass('sticky');
		} else {
		    $('.nav-bar').removeClass('sticky');
		}
	} else {
		$('.nav-bar').removeClass('sticky');
	}

};

stickyNav();

$(window).scroll(function() {
    stickyNav();
});
})
})(jQuery);