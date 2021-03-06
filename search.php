<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Jo_Theme
 * @since 1.0.0
 */

use function JoTheme\Functions\display_numeric_pagination;
use function JoTheme\Functions\display_page_title;

get_header();
?>

		<section class="post-river">

			<?php
			if ( have_posts() ) :

				display_page_title();

				// Load posts loop.
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'search' );
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
