(function($) {
$(document).ready(function() {
var stickyNavTop = $('.top-bar').offset().top;
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
       
if (scrollTop > stickyNavTop) {
    $('.top-bar').addClass('sticky');
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