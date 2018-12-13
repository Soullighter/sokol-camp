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
			<?php the_post_thumbnail('blog-block-thumb'); // Declare pixel size you need inside the array. ?>
		</a>
	<?php endif; ?>
	<a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
</article><!-- #post-## -->
