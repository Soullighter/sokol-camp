<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gulp-wordpress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header class="header">
        <div class="wrapper">

            <div class="logo">
            	<a href="<?php echo home_url();
					    ?>">
                	<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo">
                </a>
            </div>

            <nav class="navmenu">
                <div class="menuicon" onclick="openNav()">
                    <div></div>
                    <div></div>
                    <div></div>
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
            <div class="lang">
        	<style>
        		.wpml-ls-statics-shortcode_actions, .wpml-ls-statics-shortcode_actions .wpml-ls-sub-menu, .wpml-ls-statics-shortcode_actions a {
				width: auto;
				}
        	</style>
            <?php do_action('wpml_add_language_selector');  ?>
            </div>
        </div>
    </header>
    <?php $hero_type = get_field( 'hero_type' ); ?>
    <?php if ($hero_type === 'block-type'): ?>
        <section class="section1 background-wave negative">
            <div class="wrapper col-2 padd">
                <div>
                    <?php the_field( 'text_editor' ); ?>
                </div>
                <?php
                    $url = get_field( 'youtube_video' ); 
                    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
                        $youtube_id = $match[1];
                 ?>
                <div class="videoWrapper">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $youtube_id  ?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    <?php elseif ($hero_type === 'image type'): ?> 
        <section class="header-bottom background-wave">
            <div class="wrapper">
                <h1><?php the_title(); ?></h1>
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
                <span class="image-shape1"><?php echo get_template_directory_uri(); ?>
                    <svg width="732" height="530" viewBox="0 0 732 530">
                        <defs>
                            <mask id="mask-hero1"  maskUnits="objectBoundingBox">
                                <image width="732" height="530" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-hero.png" />
                            </mask>
                        </defs>
                        <image mask="url(#mask-hero1)" width="732" height="527" xlink:href="<?php echo $first_image; ?>" />
                    </svg>
                </span>
                <!-- hero image2 -->
                <span class="image-shape2">
                    <svg width="732" height="530" viewBox="0 0 732 530">
                        <defs>
                             <mask id="mask-hero2"  maskUnits="objectBoundingBox">
                                 <image width="732" height="530" xlink:href="<?php echo get_template_directory_uri(); ?>/images/mask-hero.png" />
                            </mask>
                        </defs>
                        <image mask="url(#mask-hero2)" width="732" height="527" xlink:href="<?php echo $second_image; ?>" />
                    </svg>
                </span>
            </div>
        </section>
    <?php endif ?>


	<div id="content" class="site-content">
