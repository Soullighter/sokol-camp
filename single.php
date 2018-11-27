<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gulp-wordpress
 */

get_header(); ?>
<section class="header-bottom background-wave">
    <div class="wrapper">
        <h3><?php the_title(); ?></h3>
    </div>
</section>


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
