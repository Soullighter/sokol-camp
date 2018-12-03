<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gulp-wordpress
 */

?>
<script>
 // 2. This code loads the IFrame Player API code asynchronously.
 var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: 'M7lc1UVf-VE',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
</script>
	</div><!-- #content -->
    <footer class="footer">
        <div class="wrapper">
            <div class="shape1"><img src="<?php echo get_template_directory_uri(); ?>/images/yellow-sheet.png" alt="sheet-green"></div>
            <div class="shape2"><img src="<?php echo get_template_directory_uri(); ?>/images/green-sheet.png" alt="sheet-yellow1"></div>
            <div class="col">
            	<?php if ( have_rows( 'footer_group', 'option' ) ) : ?>
					<?php while ( have_rows( 'footer_group', 'option' ) ) : the_row(); ?>
						<ul>
						    <li><?php the_sub_field( 'about_us' ); ?></li>
						</ul>
					<?php endwhile; ?>
				<?php endif; ?>
                <nav class="navmenu">
	                <?php
		                wp_nav_menu(
		                	array(
		                		'theme_location' => 'primary'
		                	)
		                );
	                ?>
	            </nav>
				<ul class="last">
            	<?php if ( have_rows( 'footer_group', 'option' ) ) : ?>
					<?php while ( have_rows( 'footer_group', 'option' ) ) : the_row(); ?>
						<?php if ( have_rows( 'social_media' ) ) : ?>
							<?php while ( have_rows( 'social_media' ) ) : the_row(); ?>
								<li><a href="<?php the_sub_field( 'url_of_social_media' ); ?>" target="_blank"><?php the_sub_field( 'name_of_social_media' ); ?></a></li>
							<?php endwhile; ?>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<li>Copyright 2018 Sokol Camp</li>
				</ul>
            </div>

        </div>
        <!-- end wrapper -->
    </footer>
    <!-- end footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	(function ($) {
// Can also be used with $(document).ready()
$(window).load(function() {
    $('.flexslider').flexslider({
      animation: "fade", 
    });
  });
})(jQuery);
</script>
</body>
</html>
