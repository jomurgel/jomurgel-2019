<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jo_Theme
 * @since 1.0.0
 */

use function JoTheme\Functions\categorized_blog;
use function JoTheme\Functions\display_page_title;
use function JoTheme\Functions\display_post_footer;
use function JoTheme\Functions\display_post_thumbnail;
use function JoTheme\Functions\display_posted_on;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="post-header">
		<div class="post-meta">
			<?php
			display_posted_on();

			$categories_list = get_the_category_list( ' ' );
			if ( $categories_list && categorized_blog() ) {
				/* translators: the post category */
				printf( '<span class="post-categories">%1$s</span>', $categories_list ); // WPCS: XSS OK.
			}
			?>
		</div><!-- .post-meta -->

		<?php display_page_title(); ?>
	</header><!-- .post-header -->

	<?php
	// Only show post thumbnail for writing posts.
	if ( is_category( 'writing' ) ) :
		display_post_thumbnail();
	endif;
	?>

	<div class="post-content">
		<?php the_content(); ?>
	</div><!-- .post-content -->

	<footer class="post-footer">
		<?php display_post_footer(); ?>
	</footer><!-- .post-footer -->
</article><!-- .post -->
