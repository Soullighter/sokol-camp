(function ($) {
// Can also be used with $(document).ready()
$(window).load(function() {
    $('.section6 .flexslider').flexslider({
      animation: "fade"
    });
    $('.flexslider').flexslider({
      animation: "slide"
    });
  });

var imgUrl = $('.block-section .wrapper > .text img').get(0).src;
console.log(imgUrl);
$('.block-section .wrapper > .text img').hide();
$('.block-section .wrapper > .text').wrap( function() {
	var html1 = '<svg class="img-inner-shape" width="485" height="300" viewBox="0 0 485 300">',
		html2 = '<defs><mask id="mark" maskUnits="objectBoundingBox">,'
    	html3 = '<image width="485" height="277" xlink:href="http://dev.sokolcamp.com/wp-content/themes/sokol-camp/images/mask-042.png" />',
    	html4 = '</mask></defs>',
    	html5 = '<image mask="url(#mark)" width="500" height="300" xlink:href="<?php echo get_template_directory_uri(); ?>/images/accommodation5.png" />',
    	html6 = '</svg>',
    	html  =	html1.concat(html2,html3,html4,html5,html6);
    	return html;
});
})(jQuery);
