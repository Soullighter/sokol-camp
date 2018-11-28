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
            
               <!--  <select name="lang" id="lang">
                    <option value="en">EN</option>
                    <option value="x">x</option>
                </select> -->
            </div>
        </div>
    </header>


	<div id="content" class="site-content">
