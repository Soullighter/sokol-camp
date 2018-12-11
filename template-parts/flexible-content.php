<?php if ( have_rows( 'flexible_content' ) ): ?>
	<?php $count = 0; ?>
	<?php while ( have_rows( 'flexible_content' ) ) : the_row(); ?>
		<?php $count++; ?>

		<!-- Block Section -->
		<?php if ( get_row_layout() == 'block_section' ) : ?>
    	<section class="block-section">
       		<div class="wrapper col-2">
			<?php if ( have_rows( '1st_column' ) ) : ?>
				<?php $col1Class = 'col1' ?>
				<?php while ( have_rows( '1st_column' ) ) : the_row(); ?>
					<?php $block_type = get_sub_field( 'select_block_type' ); ?>
					<?php if ($block_type === 'text-editor'): ?>
						<div class="text <?php echo $col1Class ?>">
							<?php the_sub_field( 'text_editor' ); ?>
						</div>
					<?php elseif ($block_type === 'flexslider'): ?>
						<?php $picture_slider_images = get_sub_field( 'picture_slider' ); ?>
						<?php if ( $picture_slider_images ) :  ?>
							<div class="flexslider <?php echo $col1Class ?>">

								<?php if ( have_rows( 'slider_info_fields' ) ) : ?>
										<div class="sheet-top"> <img src="<?php echo get_template_directory_uri(); ?>/images/green-sheet.png" alt=""></div>
										<div class="sheet-text"><img src="<?php echo get_template_directory_uri(); ?>/images/mask-yellow2.png" alt="yellow-sheet">
											<div class="text">
											<?php while ( have_rows( 'slider_info_fields' ) ) : the_row(); ?>
												<span><?php the_sub_field( 'number' ); ?></span><br>
												<small><?php the_sub_field( 'text' ); ?></small>
											<?php endwhile; ?>
											</div>
										</div>
								<?php else: ?>

								<div class="sheet1"><img src="<?php echo get_template_directory_uri(); ?>/images/green-sheet.png" alt=""></div>
								<div class="sheet2"><img src="<?php echo get_template_directory_uri(); ?>/images/mask-sheet-yellow.png" alt="yellow-sheet"></div>

								<?php endif; ?>

								<ul class="slides">
								<?php foreach ( $picture_slider_images as $picture_slider_image ): ?>
									<li>
										<a href="<?php echo $picture_slider_image['sizes']['large']; ?>" rel="group-<?php echo $count; ?>">
										<img src="<?php echo $picture_slider_image['sizes']['slider_thumb']; ?>" alt="<?php echo $picture_slider_image['alt']; ?>" />
										</a>
									</li>
								<?php endforeach; ?>
								</ul>
								<div class="number-slides">
									<span class="zero1"></span><span class="current-slide"></span>
									<hr class="line">
									<span class="zero2"></span><span class="total-slides"></span>
								</div>
							</div>
			          
					<?php endif; ?>
					<?php elseif ($block_type === 'image-gallery'): ?>
						<?php $image_gallery_images = get_sub_field( 'image_gallery' ); ?>
						<?php if ( $image_gallery_images ) :  ?>
							<div class="location1-img <?php echo $col1Class ?>">
								<img class="sheet" src="<?php echo get_template_directory_uri(); ?>/images/sheet-green.png" alt="">
				                <div>
				                    <div class="gallery">
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

			<?php if ( have_rows( '2nd_column' ) ) : ?>
				<?php $col2Class = 'col2' ?>
				<?php while ( have_rows( '2nd_column' ) ) : the_row(); ?>
					<?php $block_type = get_sub_field( 'select_block_type' ); ?>
					<?php if ($block_type === 'text-editor'): ?>
						<div class="text <?php echo $col2Class
						 ?>">
							<?php the_sub_field( 'text_editor' ); ?>
						</div>
					<?php elseif ($block_type === 'flexslider'): ?>
						<?php $picture_slider_images = get_sub_field( 'picture_slider' ); ?>
						<?php if ( $picture_slider_images ) :  ?>
			            <div class="flexslider <?php echo $col2Class
						 ?>">

							<?php if ( have_rows( 'slider_info_fields' ) ) : ?>
					                <div class="sheet-top"> <img src="<?php echo get_template_directory_uri(); ?>/images/green-sheet.png" alt=""></div>
                					<div class="sheet-text"><img src="<?php echo get_template_directory_uri(); ?>/images/mask-yellow2.png" alt="yellow-sheet">
	                					<div class="text">
										<?php while ( have_rows( 'slider_info_fields' ) ) : the_row(); ?>
											<span><?php the_sub_field( 'number' ); ?></span>
											<small><?php the_sub_field( 'text' ); ?></small>
										<?php endwhile; ?>
										</div>
									</div>
							<?php else: ?>

							<div class="sheet1"><img src="<?php echo get_template_directory_uri(); ?>/images/green-sheet.png" alt=""></div>
			                <div class="sheet2"><img src="<?php echo get_template_directory_uri(); ?>/images/mask-sheet-yellow.png" alt="yellow-sheet"></div>

							<?php endif; ?>

			                <ul class="slides">
							<?php foreach ( $picture_slider_images as $picture_slider_image ): ?>
			                    <li>
			                    	<a href="<?php echo $picture_slider_image['sizes']['large']; ?>" rel="group-<?php echo $count; ?>">
									<img src="<?php echo $picture_slider_image['sizes']['slider_thumb']; ?>" alt="<?php echo $picture_slider_image['alt']; ?>"/>
									</a>
			                    </li>
							<?php endforeach; ?>
			                </ul>
			               <div class="number-slides">
								<span class="zero1"></span><span class="current-slide"></span>
								<hr class="line">
								<span class="zero2"></span><span class="total-slides"></span>
							</div>
			            </div>
						<?php endif; ?>
					<?php elseif ($block_type === 'image-gallery'): ?>
						<?php $image_gallery_images = get_sub_field( 'image_gallery' ); ?>
						<?php if ( $image_gallery_images ) :  ?>
							<div class="location1-img <?php echo $col2Class
						 ?>">
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

		<!-- Two text blocks with centered image -->
		<?php elseif ( get_row_layout() == 'two_text_blocks_with_centered_image' ) : ?>
		    <section class="section2">
		        <div class="wrapper col">
		        	<img class="shape1" src="<?php echo get_template_directory_uri(); ?>/images/green-sheet.png" alt="">
		            <div>
		                <?php the_sub_field( '1st_block' ); ?>
		            </div>
		                <div class="image-shape2">
		                	<?php if ( get_sub_field( 'image' ) ) { ?>
		                		<?php $image = get_sub_field( 'image' ); ?>
							<?php } ?>
		                    <svg class="img-inner-shape" width="711" height="413" viewBox="0 0 711 413">
		                        <defs>
		                            <mask id="sect-2"  maskUnits="objectBoundingBox">
	                                	<image width="802" height="558" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-section2-homepage.png"/>
		                            </mask>
		                        </defs>
		                        <image mask="url(#sect-2)" xlink:href="<?php echo $image['sizes']['711x413']; ?>" />
	                        	<image width="711" height="413" mask="url(#sect-2)" xlink:href="<?php echo $image['sizes']['711x413']; ?>"/>
		                    </svg>
		                </div>
		                
		            <div>
		                <?php the_sub_field( '2nd_block' ); ?>
		            </div>
		        </div>
		        <img class="shape2" src="<?php echo get_template_directory_uri(); ?>/images/green-shape.png" alt="">
		        <!-- end wrapper  -->
		    </section>
		<!-- Two text blocks with centered image -->

		<!-- Latest posts -->
		<?php elseif ( get_row_layout() == 'latest_posts' ) : ?>
			<?php if ( get_sub_field( 'latest_posts' ) == 1 ) { ?>
			 
			<section class="news-list">
		        <div class="wrapper">
		        	<h2><?php esc_html_e( 'Media', 'gulp-wordpress' ); ?></h2>
		            <div class="col-4">
		            	<?php
						// The Query
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 4,
							'post_status' => 'publish'
						);
						$the_query = new WP_Query( $args );

						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );
							}
							/* Restore original Post Data */
							wp_reset_postdata();
						} else {
							get_template_part( 'template-parts/content', 'none' );
						}
						?>
		            </div>
		        </div>
		        <!-- end wrapper -->
		    </section>
			<?php } else { ?>
			  
			<?php } ?>
		<!-- Latest posts -->

		<!-- People about us single -->
		<?php elseif ( get_row_layout() == 'people_about_us_single' ) : ?>

			<?php 
				if ( get_sub_field( 'image_of_quoter' ) ) { 
					$image_of_quoter = get_sub_field( 'image_of_quoter' );
			 	} 
			
				if ( get_sub_field( 'additional_image' ) ) { 
					$additional_image = get_sub_field( 'additional_image' );
				} 
			?>

		 	<section class="section5">
		        <div class="wrapper">
		        <img class="shape1" src="<?php echo get_template_directory_uri(); ?>/images/yellow-sheet2.png" alt="">
		        <img class="shape2" src="<?php echo get_template_directory_uri(); ?>/images/green-shape.png" alt="">
		        <img class="shape3" src="<?php echo get_template_directory_uri(); ?>/images/yellow-shape.png" alt="">

	                <div class="image-shape1">
						<svg class="img-inner-shape" width="695" height="415" viewBox="0 0 695 415">
							<defs>
								<mask id="sect-5" maskUnits="objectBoundingBox">
									<image width="695" height="415" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask3.png"
									/>
								</mask>
							</defs>
							<image mask="url(#sect-5)" width="695" height="415" xlink:href="<?php echo get_template_directory_uri(); ?>/images/section5-2.png"
							/>
						</svg>
						<div >
							<div class="inner-sheet">
								<?php the_sub_field( 'quoter' ); ?>
							</div>
							<img class="sheet-text1" src="<?php echo get_template_directory_uri(); ?>/images/sheet-home-text.png" alt="">
						</div>
						
					</div>
	                <div class="quote">
	                    <?php the_sub_field( 'quote' ); ?>
	            	</div>
	     
	            	<div class="image-shape2">
	                    <svg width="675" height="440" viewBox="0 0 675 440">
	                        <defs>
	                            <mask id="mask4" maskUnits="objectBoundingBox">
	                                <image width="675" height="440" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-section5-2.png" />
	                            </mask>
	                        </defs>
                        	<image mask="url(#mask4)" width="675" height="440" xlink:href="<?php echo $additional_image['sizes']['675x440']; ?>"/>
	                    </svg>
	                </div>
	        	</div>
	        	<!-- end wrapper -->
	    	</section>
		<!-- People about us single -->

		<!-- People about us slider -->
		<?php elseif ( get_row_layout() == 'people_about_us_slider' ) : ?>
		    <section class="section6">
		        <div class="wrapper">
		        <img class="side-img" src="<?php echo get_template_directory_uri(); ?>/images/section6-side2.png" alt="">
		       
	        	<h2><?php esc_html_e( 'People about us', 'gulp-wordpress' ); ?></h2>
				<?php if ( have_rows( 'slide' ) ) : ?>
				<div class="flexslider shapes">
					
						<ul class="slides">
						<?php while ( have_rows( 'slide' ) ) : the_row(); ?>
							<li>
								<?php
									if ( get_sub_field( 'image_of_quoter' ) ) { 
									
									$image_of_quoter = get_sub_field( 'image_of_quoter' );
									}
								?>
								<img class ="shape1" src="<?php echo get_template_directory_uri(); ?>/images/sheet-green.png" alt="">
								<img class ="shape2" src="<?php echo get_template_directory_uri(); ?>/images/yellow-sheet.png" alt="">
								<div class="flex-caption">
									<div class="border-radius">
										<img src="<?php echo $image_of_quoter ?>" />
									</div>
									<div>
										<div><?php the_sub_field( 'quote' );?></div>
										<div><?php the_sub_field( 'quoter' ); ?></div>
									</div>
								</div>
							</li>
						<?php endwhile; ?>
						</ul>
			
				</div>
					
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
				<img class="side-img2" src="<?php echo get_template_directory_uri(); ?>/images/section6-side1.png" alt="">
				</div>
			</section>
		<!-- People about us slider -->

		<!-- Partners -->
		<?php elseif ( get_row_layout() == 'partners' ) : ?>
			<?php if ( have_rows( 'list_of_partners' ) ) : ?>
	        <section class="section8">
	            <div class="wrapper">
	        	<h2><?php esc_html_e( 'Partners', 'gulp-wordpress' ); ?></h2>
                	<div class="partners">
				<?php while ( have_rows( 'list_of_partners' ) ) : the_row(); ?>
					<?php if ( get_sub_field( 'partners_logo' ) ) { ?>
						<a href="<?php the_sub_field( 'partners_url' ); ?>" target="_blank">
							<div>
								<img src="<?php the_sub_field( 'partners_logo' ); ?>" /></a>
							</div>
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
			<div class="top-shape">
			</div>
			<div class="wrapper">
			<img class="shape1" src="<?php echo get_template_directory_uri(); ?>/images/green-shape.png" alt="">

			<img class="shape2" src="<?php echo get_template_directory_uri(); ?>/images/green-shape.png" alt="">
					<ul class="col-2 contact-form">
						<li>
						<?php the_sub_field( 'form' ); ?>
						</li>
						<li>
							<?php the_sub_field( 'contact_info' ); ?>
						</li>
					</ul>
			</div>
	        <!-- <div class="wrapper"> -->
	           
           	<!-- </div> -->
       </section>
		<!-- Booking with contact form -->

		<!-- Booking form with images -->
		<?php elseif ( get_row_layout() == 'booking_form_with_images' ) : ?>
			<section class="accommodation-form">
				<div class="wrapper">
			<?php if ( have_rows( 'image_group' ) ) : ?>
				<?php while ( have_rows( 'image_group' ) ) : the_row(); ?>
					<?php $image_left = get_sub_field( 'image_left' ); ?>
					<?php if ( $image_left ) { ?>
						<div class="image-shape1">
							<svg class="img-inner-shape" width="776" height="600" viewBox="0 0 776 600">
								<defs>
									<mask id="accomm-1" maskUnits="objectBoundingBox">
										<image width="776" height="600" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-accommodation1-form.png"></image>
									</mask>
								</defs>
								<image mask="url(#accomm-1)" xlink:href="<?php echo $image_left['sizes']['776x600']; ?>"></image>
							</svg>
			            </div>
					<?php } ?>
					<?php $image_right = get_sub_field( 'image_right' ); ?>
					<?php if ( $image_right ) { ?>
			            <div class="image-shape2">
							<svg class="img-inner-shape" width="776" height="600" viewBox="0 0 776 600">
								<defs>
									<mask id="accomm-2" maskUnits="objectBoundingBox">
										<image width="776" height="600" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-accommodation2-form.png"></image>
									</mask>
								</defs>
								<image mask="url(#accomm-2)" xlink:href="<?php echo $image_right['sizes']['776x600']; ?>"></image>
							</svg>
			            </div>
					<?php } ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if ( have_rows( 'features' ) ) : ?>
				<div class="mask-cover">
					<img class="mask-sheet" src="<?php echo get_template_directory_uri(); ?>/images/mask-form-text.png" alt="">
					<ul>
				<?php while ( have_rows( 'features' ) ) : the_row(); ?>
						<li><?php the_sub_field( 'feature' ); ?></li>
				<?php endwhile; ?>
					</ul>
				</div>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
            <div class="sheet">
				<img src="<?php echo get_template_directory_uri(); ?>/images/sheet-form.png" alt="">
            </div>
			<div class="col">
	            <div class="form">
					<h2><?php esc_html_e( 'Booking reservation', 'gulp-wordpress' ); ?></h2>
					<?php the_sub_field( 'form' ); ?>
	            </div>
			</div>
		<!-- Booking form with images -->

		<!-- Contact form section -->
		<?php elseif ( get_row_layout() == 'contact_form_with_additional_contact' ) : ?>

		    <section class="contact">
		        <div class="wrapper col-2">
		            <div class="text">
						<?php the_sub_field( 'text_editor' ); ?>
		            </div>
		            <div class="contact-form">
					    <img class="sheet1" src="<?php echo get_template_directory_uri(); ?>/images/sheet-yellow.png" alt="yellow-sheet">	
						<div class="sheet2">
							<img  src="<?php echo get_template_directory_uri(); ?>/images/mask-green.png" alt="green-shape">
						</div>
		               
		              
		                <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/" alt=""> -->
		               
		               <?php the_sub_field( 'form' ); ?>
						
						<span class="info">Ukoliko želite rezervisati smeštaj, kontaktirajte nas <a href="#"><strong>ovde</strong></a></span>
		            </div>
		        </div>
		        <!-- end wrapper -->
		    </section>

		<!-- Contact form section -->

		<!-- Text block column -->
		<?php elseif ( get_row_layout() == 'text_blocks_columns_with_bg_images' ) : ?>
    		<section class="background-img-shapes">
			<?php if ( have_rows( 'background_images' ) ) : ?>
				<?php while ( have_rows( 'background_images' ) ) : the_row(); ?>
					<?php if ( get_sub_field( 'image_1' ) ) { ?>
						<?php $image_1 = get_sub_field( 'image_1' ); ?>
        				<!-- 1 left -->
						<div class="img-shape">
							<svg class="img-inner-shape" width="776" height="600" viewBox="0 0 776 600">
								<defs>
									<mask id="mask1" maskUnits="objectBoundingBox">
										<image width="776" height="600" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-background1.png"></image>
									</mask>
								</defs>
								<image mask="url(#mask1)" xlink:href="<?php echo $image_1['sizes']['776x600']; ?>"></image>
							</svg>
			            </div>
					<?php } ?>
					<?php if ( get_sub_field( 'image_2' ) ) { ?>
						<?php $image_2 = get_sub_field( 'image_2' ); ?>
						<!-- 2 left -->
				        <div class="img-shape">
				            <svg class="img-inner-shape" width="655" height="397" viewBox="0 0 655 397">
				                <defs>
				                    <mask id="mask2" maskUnits="objectBoundingBox">
				                        <image width="655" height="397" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask22.png" />
				                    </mask>
				                </defs>
				                <image mask="url(#mask2)" width="655" height="397" xlink:href="<?php echo $image_2['sizes']['655x397']; ?>" />
				            </svg>
				        </div>
					<?php } ?>
						<!-- 3 left -->
        				<div class="img-shape"><img src="<?php echo get_template_directory_uri(); ?>/images/mask.png" alt=""></div>
					<?php if ( get_sub_field( 'image_3' ) ) { ?>
						<?php $image_3 = get_sub_field( 'image_3' ); ?>
						<!-- 4 left -->
				        <div class="img-shape">
				            <svg class="img-inner-shape" width="695" height="415" viewBox="0 0 695 415">
				                <defs>
				                    <mask id="mask5" maskUnits="objectBoundingBox">
				                        <image width="695" height="415" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask3.png" />
				                    </mask>
				                </defs>
				                <image mask="url(#mask5)" width="695" height="415" xlink:href="<?php echo $image_3['sizes']['695x415']; ?>" />
				            </svg>
				        </div>
					<?php } ?>
						<!-- 5 top -->
				        <div class="img-shape top"><img src="<?php echo get_template_directory_uri(); ?>/images/mask4.png" alt=""></div>

				        <!-- 6 bottom -->
				        <div class="img-shape bottom"><img src="<?php echo get_template_directory_uri(); ?>/images/mask5.png" alt=""></div>
					<?php if ( get_sub_field( 'image_4' ) ) { ?>
						<?php $image_4 = get_sub_field( 'image_4' ); ?>
						<!-- 5 right  -->
				        <div class="img-shape">
				            <svg class="img-inner-shape" width="731" height="368" viewBox="0 0 731 368">
				                <defs>
				                    <mask id="mask3" maskUnits="objectBoundingBox">
				                        <image width="731" height="368" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask23.png" />
				                    </mask>
				                </defs>
				                <image mask="url(#mask3)" width="761" height="386" xlink:href="<?php echo $image_4['sizes']['731x368']; ?>" />
				            </svg>
				        </div>
					<?php } ?>
					<?php if ( get_sub_field( 'image_5' ) ) { ?>
						<?php $image_5 = get_sub_field( 'image_5' ); ?>
						<!-- 6 right -->
				        <div class="img-shape">
				            <svg width="732" height="530" viewBox="0 0 732 530">
				                <defs>
				                    <mask id="mask4" maskUnits="objectBoundingBox">
				                        <image width="732" height="530" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-accommodation3-6.png" />
				                    </mask>
				                </defs>
				                <image mask="url(#mask4)" width="711" height="527" xlink:href="<?php echo $image_5['sizes']['732x530']; ?>" />
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
			                </li>
						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
				</ul>
			</div>
		</section>
		<!-- Text block column -->

		<!-- Gallery separator -->
		<?php elseif ( get_row_layout() == 'gallery_separator' ) : ?>
	    <div class="border-image">
	        <div class="wrapper">
			<?php if ( have_rows( 'gallery_group' ) ) : ?>
				<?php while ( have_rows( 'gallery_group' ) ) : the_row(); ?>
					<?php if ( get_sub_field( 'image_1' ) ) { ?>
						<?php $image_1 = get_sub_field( 'image_1' ); ?>
						 <!-- shape 1 -->
			            <div class="img-shape1">
			                <svg width="470" height="380" viewBox="0 0 470 380">
			                    <defs>
			                        <mask id="mask11" maskUnits="objectBoundingBox">
			                            <image width="480" height="380" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-sheet2.png" />
			                        </mask>
			                    </defs>
			                    <image mask="url(#mask11)" width="480" height="380" xlink:href="<?php echo $image_1['sizes']['470x380']; ?>" />
			                </svg>
			            </div>
					<?php } ?>
		            <!-- shape 2 -->
		            <div class="img-shape1"><img src="<?php echo get_template_directory_uri(); ?>/images/mask4.png" alt=""></div>
					<?php if ( get_sub_field( 'image_2' ) ) { ?>
						<?php $image_2 = get_sub_field( 'image_2' ); ?>
						<!-- shape 3 -->
			            <div class="img-shape1">
			                <svg width="373" height="345" viewBox="0 0 373 345">
			                    <defs>
			                        <mask id="mask12" maskUnits="objectBoundingBox">
			                            <image width="373" height="345" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-sheet1.png" />
			                        </mask>
			                    </defs>
			                    <image mask="url(#mask12)" width="373" height="345" xlink:href="<?php echo $image_2['sizes']['373x345']; ?>" />
			                </svg>
			            </div>
					<?php } ?>

		            <!-- shape 4 -->
		            <div class="img-shape1"><img src="<?php echo get_template_directory_uri(); ?>/images/mask-green.png" alt=""></div>
					<?php if ( get_sub_field( 'image_3' ) ) { ?>
						<?php $image_3 = get_sub_field( 'image_3' ); ?>
						 <!-- shape 5 -->
			            <div class="img-shape1">
			                <svg width="470" height="380" viewBox="0 0 470 380">
			                    <defs>
			                        <mask id="mask13" maskUnits="objectBoundingBox">
			                            <image width="480" height="380" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-border-top.png" />
			                        </mask>
			                    </defs>
			                    <image mask="url(#mask13)" width="480" height="380" xlink:href="<?php echo $image_3['sizes']['470x380']; ?>" />
			                </svg>
			            </div>
					<?php } ?>

		            <!-- shape 6 -->
		            <div class="img-shape1"><img src="<?php echo get_template_directory_uri(); ?>/images/mask5.png" alt=""></div>
					<?php if ( get_sub_field( 'image_4' ) ) { ?>
						<?php $image_4 = get_sub_field( 'image_4' ); ?>
						 <div class="img-shape1">
			                <svg width="373" height="345" viewBox="0 0 373 345">
			                    <defs>
			                        <mask id="mask14" maskUnits="objectBoundingBox">
			                            <image width="373" height="345" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-sheet12.png" />
			                        </mask>
			                    </defs>
			                    <image mask="url(#mask14)" width="373" height="345" xlink:href="<?php echo $image_4['sizes']['373x345']; ?>" />
			                </svg>
			            </div>
					<?php } ?>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
		<!-- Gallery separator -->

		<!-- Oval separator -->
		<?php elseif ( get_row_layout() == 'oval_separator' ) : ?>
			<?php if ( get_sub_field( 'show_separator' ) == 1 ) { ?>
			    <!-- <section class="section7">
			    	<img class="shape1" src="<?php echo get_template_directory_uri(); ?>/images/green-shape.png" alt="">
			    </section> -->
			<?php } else { ?>
			 <?php echo 'Please check button to show separator' ?>
			<?php } ?>
		<!-- Oval separator -->

		<!-- Full imag separator -->
		<?php elseif ( get_row_layout() == 'full_width_image_separator' ) : ?>
			<?php if ( get_sub_field( 'image' ) ) { ?>
		    <section class="section3">
		        <div class="wrapper">
		            <img class ="shape1" src="<?php echo get_template_directory_uri(); ?>/images/green-shape.png" alt="">
		            <img class ="shape2" src="<?php echo get_template_directory_uri(); ?>/images/yellow-sheet.png" alt="">
		            <img class="center" src="<?php the_sub_field( 'image' ); ?>" alt="img">
		            <div class="green-sheet"></div>
		            <img class ="shape3" src="<?php echo get_template_directory_uri(); ?>/images/yellow-shape.png" alt="">
		            <img class ="shape4" src="<?php echo get_template_directory_uri(); ?>/images/green-sheet.png" alt="">
		        </div>
		        <!-- end wrapper -->
		    </section>
		    <!-- end section3 -->
			<?php } ?>
		<!-- Full imag separator -->

		<!-- Google map embed -->
		<?php elseif ( get_row_layout() == 'google_map_embed' ) : ?>
			<section class="google-maps">
				<?php the_sub_field( 'map' ); ?>
			</section>
		<!-- Google map embed -->
		
		<!-- Google map embed -->
		<?php elseif ( get_row_layout() == 'open_street_map' ) : ?>
			<!-- <section class="google-maps"> -->
				<?php the_sub_field( 'map' ); ?>
			<!-- </section> -->
		<!-- Google map embed -->

	<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>
