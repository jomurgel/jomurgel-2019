<?php
/**
 * Custom scripts and styles.
 *
 * @package Jo_Theme
 * @since 1.0.0
 */

namespace JoTheme\Functions;

/**
 * Enqueue scripts and styles.
 *
 * @package Jo_Theme
 * @since 1.0.0
 */
function init_scripts() {

	// Array of script locations.
	$scripts = array(
		'error'  => is_404(),
		'home'   => is_front_page() && ! is_home(),
		'index'  => is_home() || ( is_home() && is_front_page() ) || is_archive(),
		'page'   => is_page() && ! is_front_page(),
		'search' => is_search(),
		'single' => is_single(),
	);

	// Loop through and register dynamically.
	foreach ( $scripts as $script_name => $script_location ) {

		if ( $script_location ) {
			wp_enqueue_style(
				'jo-theme-' . $script_name . 'style',
				JO_STYLE_URL . '/dist/' . $script_name . '.css',
				array(),
				JO_VERSION
			);
			wp_enqueue_script(
				'jo-theme-' . $script_name . 'scripts',
				JO_THEME_URL . '/dist/' . $script_name . '.js',
				array(),
				JO_VERSION,
				true
			);
		}
	}

	wp_style_add_data( 'jo-theme-style', 'rtl', 'replace' );

	// Comments.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'JoTheme\Functions\init_scripts' );
