(function($) {
$(document).ready(function() {
var stickyNavTop = $('.top-bar').offset().top;

var stickyNav = function(){

	if($(window).width() > 650){
		var scrollTop = $(window).scrollTop();
		if (scrollTop > stickyNavTop) {
		    $('.top-bar').addClass('sticky');
		} else {
		    $('.top-bar').removeClass('sticky');
		}
	} else {
		$('.top-bar').removeClass('sticky');
	}

};

stickyNav();

$(window).scroll(function() {
    stickyNav();
});
})
})(jQuery);