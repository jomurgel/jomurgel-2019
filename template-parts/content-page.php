<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Jo_Theme
 * @since 1.0.0
 */

use function JoTheme\Functions\display_post_thumbnail;
use function JoTheme\Functions\display_post_footer;
use function JoTheme\Functions\display_page_title;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php display_page_title(); ?>

	<div class="post-content">
		<?php the_content(); ?>
	</div><!-- .post-content -->

	<footer class="post-footer">
		<?php display_post_footer(); ?>
	</footer><!-- .post-footer -->
</article><!-- .post -->
