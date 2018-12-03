(function ($) {
// Can also be used with $(document).ready()
$(window).load(function() {
    $('.section6 .flexslider').flexslider({
      animation: "fade"
    });
    $('.flexslider').flexslider({
      	animation: "slide"
      	after: function(slider) {

        $('.current-slide').text(slider.currentSlide+1);
    
		},
		start: function(slider) {
		    $('.current-slide').text(slider.currentSlide+1);
		    $('.total-slides').text(slider.count);
		  
		}
    });

    
  });

var imgUrl = $('.block-section .wrapper > .text img.mask').get(0).src;

$('.block-section .wrapper > .text img.mask').after( function() {
	var html1 = '<svg class="img-inner-shape" width="485" height="300" viewBox="0 0 485 300">',
	  	html2 = '<defs><mask id="mark" maskUnits="objectBoundingBox">',
    	html3 = '<image width="485" height="277" xlink:href="http://dev.sokolcamp.com/wp-content/themes/sokol-camp/images/mask-042.png" />',
    	html4 = '</mask></defs>',
    	html5 = '<image mask="url(#mark)" width="500" height="300" xlink:href="' + imgUrl + '" />',
    	html6 = '</svg>';
      
    	html  =	html1.concat(html2,html3,html4,html5,html6);
    	return html;
});
$('.block-section .wrapper > .text img.mask').hide();
})(jQuery);
