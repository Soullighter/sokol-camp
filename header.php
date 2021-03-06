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
    <?php if ( get_field( 'hero_type' ) === 'block-type'): 

        $block_type_class = 'home';

        endif;
    ?>
<div id="page" class="site <?php echo $block_type_class ?>">
    <div class="wrapper2">
        <header class="header wrapper">
                <div class="logo">
                    <a href="<?php echo home_url();
                            ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo">
                    </a>
                </div>

                <nav class="navmenu">
                    <div class="menuicon2" onclick="openNav()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="menu">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'menu_id' => 'navmenu',
                                    'menu_class' => 'menu-list'
                                )
                            );
                        ?>
                        <div class="lang2">
                            <?php do_action('wpml_add_language_selector');  ?>
                            </div>
                        </div>
                      
                </nav>
               
        </header>
        <?php $hero_type = get_field( 'hero_type' ); ?>
        <?php if ($hero_type === 'block-type'): ?>
            <section class="wrapper col-2 hero11">
                <div>
                    <?php the_field( 'text_editor' ); ?>
                </div>
                <?php
                    $url = get_field( 'youtube_video' ); 
                    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
                        $youtube_id = $match[1];
                ?>
                <div class="videoWrapper">
                    <div class='youtube_codegena' id='<?php echo $youtube_id; ?>' src='http://i3.ytimg.com/vi/<?php echo $youtube_id; ?>/hqdefault.jpg'>
                        <script src='https://rawgit.com/shaneapen/Async-Youtube-Player/master/async_youtube_player.js'></script>
                    </div>
                </div>
            </section>
            <div class="hero section11"></div>

        <div class="header-top"></div>

        <?php elseif ($hero_type === 'image type'): ?> 
                    
        <section class="wrapper">
            <h1><?php the_title(); ?></h1>
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
                            <image mask="url(#mask-hero1)" width="660" height="100%" xlink:href="<?php echo $first_image['sizes']['660x470']; ?>" />
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
                            <image mask="url(#mask-hero2)" width="536" height="362" xlink:href="<?php echo $second_image['sizes']['536x362']; ?>" />
                        </svg>
                    </span>
                    </div>
                
                </div>
        </section>

        
        <?php endif ?> 
        
    </div>
	<div id="content" class="site-content">
