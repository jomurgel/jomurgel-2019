<?php
/**
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jo_Theme
 * @since 1.0.0
 */

use function JoTheme\Functions\display_category_list;
use function JoTheme\Functions\display_footer_copyright;
use function JoTheme\Functions\display_social_menu;

?>

	<?php
	if ( ! is_category('photography') ) {
		display_category_list();
	}
	?>

	</main><!-- .site-content -->

	<footer class="site-footer">
		<div class="copyright">
			<?php display_footer_copyright(); ?>
		</div><!-- .copyright -->
		<?php display_social_menu(); ?>
	</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
