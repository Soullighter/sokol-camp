<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gulp-wordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail(); // Declare pixel size you need inside the array. ?>
		</a>
	<?php endif; ?>
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
</article><!-- #post-## -->
