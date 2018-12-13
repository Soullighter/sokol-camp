<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                    </div>
                
                </div>
        </section>
    </div>



    <section class="news-content">
        <div class="wrapper padding">
            <div class="news">
                <div class="content">
                    <?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
						<?php the_post_thumbnail(); // Declare pixel size you need inside the array. ?>
					<?php endif; ?>
                   <?php the_content(); ?>
                </div>
            </div>
        </div>
        <!-- end wrapper -->
    </section>
    <!-- end section location -->
<?php
get_footer();
