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

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-thumbnail' ); ?>>
	<header class="post-header">
		<span class="screen-reader-text">
			<?php the_title(); ?>
			<div class="post-meta">
				<?php display_posted_on(); ?>
			</div><!-- .post-meta -->
		</span>
		<?php
		display_post_thumbnail(
			[
				'thumbnail_linked' => 'river-photo-retina',
			]
		);
		?>
	</header><!-- .post-header -->
</article><!-- .post -->
