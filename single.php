<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Jo_Theme
 * @since 1.0.0
 */

get_header();
?>

		<section class="post-single">

			<?php
			while ( have_posts() ) :

				the_post();

				get_template_part( 'template-parts/content', 'single' );



				// If comments are open or we have at least one comment, load up the comment template.
				if ( ( comments_open() || get_comments_number() ) && is_category( 'writing' ) ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>

	</section><!-- .post-single -->

<?php
get_footer();
