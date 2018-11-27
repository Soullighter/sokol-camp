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
		                			<div class="sheet-text"><img src="<?php echo get_template_directory_uri(); ?>/images/mask-yellow2.png" alt="yellow-sheet">
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
								<img class="sheet" src="<?php echo get_template_directory_uri(); ?>/images/sheet-green.png" alt="">
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
	            <img class="shape2" src="<?php echo get_template_directory_uri(); ?>/images/green-shape.png" alt="">
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
    		<section class="background-img-shapes">
			<?php if ( have_rows( 'background_images' ) ) : ?>
				<?php while ( have_rows( 'background_images' ) ) : the_row(); ?>
					<?php if ( get_sub_field( 'image_1' ) ) { ?>
        				<!-- 1 left -->
						<div class="img-shape">
				            <svg width="732" height="530" viewBox="0 0 732 530">
				                <defs>
				                    <mask id="mask1" maskUnits="objectBoundingBox">
				                        <image width="732" height="530" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-accommodation3.png" />
				                    </mask>
				                </defs>
				                <image mask="url(#mask1)" width="711" height="527" xlink:href="<?php the_sub_field( 'image_1' ); ?>" />
				            </svg>
				        </div>
					<?php } ?>
					<?php if ( get_sub_field( 'image_2' ) ) { ?>
						<!-- 2 left -->
				        <div class="img-shape">
				            <svg class="img-inner-shape" width="655" height="397" viewBox="0 0 655 397">
				                <defs>
				                    <mask id="mask2" maskUnits="objectBoundingBox">
				                        <image width="655" height="397" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask22.png" />
				                    </mask>
				                </defs>
				                <image mask="url(#mask2)" width="655" height="397" xlink:href="<?php the_sub_field( 'image_2' ); ?>" />
				            </svg>
				        </div>
					<?php } ?>
						<!-- 3 left -->
        				<div class="img-shape"><img src="<?php echo get_template_directory_uri(); ?>/images/mask.png" alt=""></div>
					<?php if ( get_sub_field( 'image_3' ) ) { ?>
						<!-- 4 left -->
				        <div class="img-shape">
				            <svg class="img-inner-shape" width="695" height="415" viewBox="0 0 695 415">
				                <defs>
				                    <mask id="mask5" maskUnits="objectBoundingBox">
				                        <image width="695" height="415" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask3.png" />
				                    </mask>
				                </defs>
				                <image mask="url(#mask5)" width="695" height="415" xlink:href="<?php the_sub_field( 'image_3' ); ?>" />
				            </svg>
				        </div>
					<?php } ?>
						<!-- 5 top -->
				        <div class="img-shape"><img src="<?php echo get_template_directory_uri(); ?>/images/mask4.png" alt=""></div>

				        <!-- 6 bottom -->
				        <div class="img-shape"><img src="<?php echo get_template_directory_uri(); ?>/images/mask5.png" alt=""></div>
					<?php if ( get_sub_field( 'image_4' ) ) { ?>
						<!-- 5 right  -->
				        <div class="img-shape">
				            <svg class="img-inner-shape" width="731" height="368" viewBox="0 0 731 368">
				                <defs>
				                    <mask id="mask3" maskUnits="objectBoundingBox">
				                        <image width="731" height="368" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask23.png" />
				                    </mask>
				                </defs>
				                <image mask="url(#mask3)" width="761" height="368" xlink:href="<?php the_sub_field( 'image_4' ); ?>" />
				            </svg>
				        </div>
					<?php } ?>
					<?php if ( get_sub_field( 'image_5' ) ) { ?>
						<!-- 6 right -->
				        <div class="img-shape">
				            <svg width="732" height="530" viewBox="0 0 732 530">
				                <defs>
				                    <mask id="mask4" maskUnits="objectBoundingBox">
				                        <image width="732" height="530" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-accommodation3.png" />
				                    </mask>
				                </defs>
				                <image mask="url(#mask4)" width="711" height="527" xlink:href="<?php the_sub_field( 'image_5' ); ?>" />
				            </svg>
				        </div>
					<?php } ?>
			        <!-- 7 right -->
			        <div class="img-shape"><img src="<?php echo get_template_directory_uri(); ?>/images/mask5.png" alt=""></div>
				<?php endwhile; ?>
			<?php endif; ?>

        	<div class="wrapper">
					<?php $column_number = get_sub_field( 'column_number' ); ?>
					<?php if ($column_number === 'one-column'): ?>
    				<ul class="col-1">
					<?php elseif ($column_number === 'two-column'): ?>
    				<ul class="col-2">
					<?php elseif ($column_number === 'three-column'): ?>
    				<ul class="col-3">
					<?php endif ?>
					<?php if ( have_rows( 'content' ) ) : ?>
						<?php while ( have_rows( 'content' ) ) : the_row(); ?>
							<li>
			                    <?php the_sub_field( 'text_editor' ); ?>
			                <li>
						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
				</ul>
			</div>
		<!-- Text block column -->

		<!-- Gallery separator -->
		<?php elseif ( get_row_layout() == 'gallery_separator' ) : ?>
	    <div class="border-image">
	        <div class="wrapper">
			<?php if ( have_rows( 'gallery_group' ) ) : ?>
				<?php while ( have_rows( 'gallery_group' ) ) : the_row(); ?>
					<?php if ( get_sub_field( 'image_1' ) ) { ?>
						 <!-- shape 1 -->
			            <div class="img-shape1">
			                <svg width="470" height="380" viewBox="0 0 470 380">
			                    <defs>
			                        <mask id="mask11" maskUnits="objectBoundingBox">
			                            <image width="480" height="380" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-sheet2.png" />
			                        </mask>
			                    </defs>
			                    <image mask="url(#mask11)" width="480" height="380" xlink:href="<?php the_sub_field( 'image_1' ); ?>" />
			                </svg>
			            </div>
					<?php } ?>
		            <!-- shape 2 -->
		            <div class="img-shape1"><img src="<?php echo get_template_directory_uri(); ?>/images/mask4.png" alt=""></div>
					<?php if ( get_sub_field( 'image_2' ) ) { ?>
						<!-- shape 3 -->
			            <div class="img-shape1">
			                <svg width="373" height="345" viewBox="0 0 373 345">
			                    <defs>
			                        <mask id="mask12" maskUnits="objectBoundingBox">
			                            <image width="373" height="345" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-sheet1.png" />
			                        </mask>
			                    </defs>
			                    <image mask="url(#mask12)" width="373" height="345" xlink:href="<?php the_sub_field( 'image_2' ); ?>" />
			                </svg>
			            </div>
					<?php } ?>

		            <!-- shape 4 -->
		            <div class="img-shape1"><img src="<?php echo get_template_directory_uri(); ?>/images/mask-green.png" alt=""></div>
					<?php if ( get_sub_field( 'image_3' ) ) { ?>
						 <!-- shape 5 -->
			            <div class="img-shape1">
			                <svg width="470" height="380" viewBox="0 0 470 380">
			                    <defs>
			                        <mask id="mask13" maskUnits="objectBoundingBox">
			                            <image width="480" height="380" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-sheet2.png" />
			                        </mask>
			                    </defs>
			                    <image mask="url(#mask13)" width="480" height="380" xlink:href="<?php the_sub_field( 'image_3' ); ?>" />
			                </svg>
			            </div>
					<?php } ?>

		            <!-- shape 6 -->
		            <div class="img-shape1"><img src="<?php echo get_template_directory_uri(); ?>/images/mask5.png" alt=""></div>
					<?php if ( get_sub_field( 'image_4' ) ) { ?>
						 <div class="img-shape1">
			                <svg width="373" height="345" viewBox="0 0 373 345">
			                    <defs>
			                        <mask id="mask14" maskUnits="objectBoundingBox">
			                            <image width="373" height="345" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-sheet1.png" />
			                        </mask>
			                    </defs>
			                    <image mask="url(#mask14)" width="373" height="345" xlink:href="<?php the_sub_field( 'image_4' ); ?>" />
			                </svg>
			            </div>
					<?php } ?>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
		<!-- Gallery separator -->

	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>
