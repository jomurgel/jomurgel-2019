<?php
/**
 * Template part for displaying photography posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jo_Theme
 * @since 1.0.0
 */

use function JoTheme\Functions\display_post_thumbnail;
use function JoTheme\Functions\display_posted_on;
use function JoTheme\Functions\display_read_more;
use function JoTheme\Functions\get_new_content;
use function JoTheme\Functions\get_new_excerpt;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-thumbnail' ); ?>>
	<header class="post-header display-flex">
		<span class="screen-reader-text"><?php the_title(); ?></span>
		<?php display_post_thumbnail(); ?>
	</header><!-- .post-header -->
</article><!-- .post -->
