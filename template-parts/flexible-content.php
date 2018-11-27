<?php if ( have_rows( 'flexible_content' ) ): ?>
	<?php while ( have_rows( 'flexible_content' ) ) : the_row(); ?>

		<!-- Block Section -->
		<?php if ( get_row_layout() == 'block_section' ) : ?>
    	<section class="location-gallery">
       		<div class="wrapper col-2">
			<?php if ( have_rows( '1st_column' ) ) : ?>
				<?php while ( have_rows( '1st_column' ) ) : the_row(); ?>
					<?php $block_type = get_sub_field( 'select_block_type' ); ?>
					<?php if ($block_type === 'text-editor'): ?>
						<div>
							<?php the_sub_field( 'text_editor' ); ?>
						</div>
					<?php elseif ($block_type === 'flexslider'): ?>
						<?php $picture_slider_images = get_sub_field( 'picture_slider' ); ?>
						<?php if ( $picture_slider_images ) :  ?>
			            <div class="flexslider">

							<?php if ( have_rows( 'slider_info_fields' ) ) : ?>
					                <div class="sheet-top"></div>
		                			<div class="sheet-text"><img src="images/mask-yellow2.png" alt="yellow-sheet">
	                				<div class="text">
								<?php while ( have_rows( 'slider_info_fields' ) ) : the_row(); ?>

									<strong><?php the_sub_field( 'number' ); ?></strong>
									<?php the_sub_field( 'text' ); ?>
									<br>
								<?php endwhile; ?>
								</div>
							<?php else: ?>

			                <div class="sheet1"></div>
			                <div class="sheet2"><img src="<?php echo get_template_directory_uri(); ?>/images/mask-sheet-yellow.png" alt="yellow-sheet"></div>

							<?php endif; ?>

			                <ul class="slides">
							<?php foreach ( $picture_slider_images as $picture_slider_image ): ?>
			                    <li>
									<img src="<?php echo $picture_slider_image['sizes']['large']; ?>" alt="<?php echo $picture_slider_image['alt']; ?>" />
			                    </li>
							<?php endforeach; ?>
			                </ul>
			            </div>
						<?php endif; ?>
					<?php elseif ($block_type === 'image-gallery'): ?>
						<?php $image_gallery_images = get_sub_field( 'image_gallery' ); ?>
						<?php if ( $image_gallery_images ) :  ?>
							<div class="location1-img">
								<img class="sheet" src="images/sheet-green.png" alt="">
				                <div>
				                    <div>
							<?php foreach ( $image_gallery_images as $image_gallery_image ): ?>
								<img src="<?php echo $image_gallery_image['sizes']['large']; ?>" alt="<?php echo $image_gallery_image['alt']; ?>" />
							<?php endforeach; ?>
				                    </div>
				                </div>
							</div>
						<?php endif; ?>
					<?php endif ?>

					
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</section>
		<!-- Block Section END-->

		<!-- Latest posts -->
		<?php elseif ( get_row_layout() == 'latest_posts' ) : ?>
			<?php if ( get_sub_field( 'latest_posts' ) == 1 ) { ?>
			 
			<section class="news-list">
		        <div class="wrapper padding">
		        	<h2>Objava medija</h2>
		            <div class="col-4">

						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
		            </div>
		        </div>
		        <!-- end wrapper -->
		    </section>
			<?php } else { ?>
			  
			<?php } ?>
		<!-- Latest posts -->

		<!-- People about us single -->
		<?php elseif ( get_row_layout() == 'people_about_us_single' ) : ?>
			<?php the_sub_field( 'quoter' ); ?>
			<?php if ( get_sub_field( 'image_of_quoter' ) ) { ?>
				<img src="<?php the_sub_field( 'image_of_quoter' ); ?>" />
			<?php } ?>
			<?php the_sub_field( 'quote' ); ?>
			<?php $additional_image = get_sub_field( 'additional_image' ); ?>
			<?php if ( $additional_image ) { ?>
				<img src="<?php echo $additional_image['url']; ?>" alt="<?php echo $additional_image['alt']; ?>" />
			<?php } ?>
		<!-- People about us single -->

		<!-- People about us slider -->
		<?php elseif ( get_row_layout() == 'people_about_us_slider' ) : ?>
			<?php the_sub_field( 'quoter' ); ?>
			<?php if ( get_sub_field( 'image_of_quoter' ) ) { ?>
				<img src="<?php the_sub_field( 'image_of_quoter' ); ?>" />
			<?php } ?>
			<?php the_sub_field( 'quote' ); ?>
		<!-- People about us slider -->

		<!-- Partners -->
		<?php elseif ( get_row_layout() == 'partners' ) : ?>
			<?php if ( have_rows( 'list_of_partners' ) ) : ?>
	        <section class=" padding">
	            <div class="wrapper">
	            	<h2>Partneri</h2>
                	<div class="partners">
				<?php while ( have_rows( 'list_of_partners' ) ) : the_row(); ?>
					<?php if ( get_sub_field( 'partners_logo' ) ) { ?>
						<a href="<?php the_sub_field( 'partners_url' ); ?>">
						<img src="<?php the_sub_field( 'partners_logo' ); ?>" /></a>
					<?php } ?>
				<?php endwhile; ?>
					</div>
				</div>
			</section>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		<!-- Partners -->

		<!-- Booking with contact form -->
		<?php elseif ( get_row_layout() == 'booking_form_with_contact' ) : ?>
	    <section class="section-contact">
	        <div class="wrapper">
	            <img class="shape2" src="images/green-shape.png" alt="">
	            <ul class="col-2">
	            	<li>
	                    <h2>Rezervirajte smestaj</h2>
	                   <?php the_sub_field( 'form' ); ?>
               	 	</li>
               	 	<li>
						<?php the_sub_field( 'contact_info' ); ?>
               	 	</li>
		<!-- Booking with contact form -->

		<!-- Text block column -->
		<?php elseif ( get_row_layout() == 'text_blocks_columns_with_bg_images' ) : ?>
			<?php the_sub_field( 'column_number' ); ?>
			<?php the_sub_field( 'text_editor_1' ); ?>
			<?php the_sub_field( 'text_editor_2' ); ?>
			<?php the_sub_field( 'text_editor_3' ); ?>
			<?php $background_images_images = get_sub_field( 'background_images' ); ?>
			<?php if ( $background_images_images ) :  ?>
				<?php foreach ( $background_images_images as $background_images_image ): ?>
					<a href="<?php echo $background_images_image['url']; ?>">
						<img src="<?php echo $background_images_image['sizes']['thumbnail']; ?>" alt="<?php echo $background_images_image['alt']; ?>" />
					</a>
				<p><?php echo $background_images_image['caption']; ?></p>
				<?php endforeach; ?>
		<?php endif; ?>
		<!-- Text block column -->

		<!-- Gallery separator -->
		<?php elseif ( get_row_layout() == 'gallery_separator' ) : ?>
			<?php $gallery_images = get_sub_field( 'gallery' ); ?>
			<?php if ( $gallery_images ) :  ?>
				<?php foreach ( $gallery_images as $gallery_image ): ?>
					<a href="<?php echo $gallery_image['url']; ?>">
						<img src="<?php echo $gallery_image['sizes']['thumbnail']; ?>" alt="<?php echo $gallery_image['alt']; ?>" />
					</a>
				<p><?php echo $gallery_image['caption']; ?></p>
				<?php endforeach; ?>
			<?php endif; ?>
		<?php endif; ?>
		<!-- Gallery separator -->

	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>
