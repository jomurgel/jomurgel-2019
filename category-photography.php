<?php
/**
 * The template for displaying photography category page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jo_Theme
 * @since 1.0.0
 */

use function JoTheme\Functions\display_numeric_pagination;
use function JoTheme\Functions\display_page_title;

get_header();
?>

		<section class="post-river display-grid">

			<?php
			if ( have_posts() ) :
				?>

				<span class="screen-reader-text">
					<?php display_page_title(); ?>
				</span>

				<?php
				// Load posts loop.
				while ( have_posts() ) :
					the_post();

					// Don't show posts without a thumbnail.
					// Assume we're diligant about this.
					if ( ! has_post_thumbnail() ) {
						continue;
					}

					get_template_part( 'template-parts/content', 'photography' );
				endwhile;

				display_numeric_pagination();
			else :

				// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</section>

<?php
get_footer();
