<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Jo_Theme
 * @since 1.0.0
 */

use function JoTheme\Functions\display_page_title;

get_header();
?>

		<section class="error-404 not-found">

			<?php display_page_title(); ?>

			<div class="post-content">

				<p><?php esc_html_e( 'Hmm. Well, it looks like the content you\'re looking for isn\'t available. That\'s a 404 error if anyone cares.', 'jo-theme' ); ?></p>

			</div><!-- .page-content -->

		</section>

<?php
get_footer();
