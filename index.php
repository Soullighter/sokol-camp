<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gulp-wordpress
 */

get_header('landing'); ?>
<div class="wrapper2">
        <header class="header wrapper">
                <div class="logo">
                    <a href="<?php echo home_url();
                            ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo">
                    </a>
                </div>

                <nav class="navmenu">
                    <div class="menuicon" onclick="openNav()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="close">
                        <a href="javascript:void(0)" onclick="closeNav()"> &times;</a>
                    </div>

                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'menu_id' => 'navmenu',
                                    'menu_class' => 'menu-list'
                                )
                            );
                        ?>
                </nav>
               
        </header>

        <section class="wrapper">
            <h1><?php single_post_title(); ?></h1>
            <div class="hero">
            
                    <div class="hero-inner">
                    <!-- hero image1 -->
                    <?php
                    if ( have_rows( 'image_group' ) ) : 
                        while ( have_rows( 'image_group' ) ) : the_row(); 
                            if ( get_sub_field( 'first_image' ) ) { 
                                $first_image = get_sub_field( 'first_image' );
                            } 
                            if ( get_sub_field( 'second_image' ) ) { 
                                $second_image = get_sub_field( 'second_image' ); 
                            } 
                        endwhile; 
                    endif;
                    ?>
                    <!-- hero image1 -->
                    <span class="image-shape1">
                        <svg width="660" height="470" viewBox="0 0 660 470">
                            <defs>
                                <mask id="mask-hero1"  maskUnits="objectBoundingBox">
                                    <image width="660" height="470" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-hero.png" />
                                </mask>
                            </defs>
                            <image mask="url(#mask-hero1)" width="660" max-height:"100%" xlink:href="http://dev.sokolcamp.com/wp-content/uploads/2018/11/Page-5-Image-60-660x470.png" />
                        </svg>
                    </span>
                    <!-- hero image2 -->
                    <span class="image-shape2">
                        <svg width="536" height="362" viewBox="0 0 536 362">
                            <defs>
                                <mask id="mask-hero2"  maskUnits="objectBoundingBox">
                                    <image width="536" height="362" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-hero22.png" />
                                </mask>
                            </defs>
                            <image mask="url(#mask-hero2)" width="536" height="362" xlink:href="http://dev.sokolcamp.com/wp-content/uploads/2018/11/Page-5-Image-60-536x362.png" />
                        </svg>
                    </span>
                    </div>
                
                </div>
        </section>
    </div>

	<section class="news-list">
        <div class="wrapper padding">
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

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
            </div>
            <?php 
					echo '<div class="pagination layout layout--flushtxt__desc">';
						theme_pagination();
					echo '</div>';
             ?>
        </div>
        <!-- end wrapper -->
    </section>
    <!-- end section4 -->


<?php
get_footer();
