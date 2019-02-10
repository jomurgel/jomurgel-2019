<?php
/**
 * Alcatraz Customizer functionality.
 *
 * @package Jo_Theme
 * @since 1.0.0
 */

namespace JoTheme\Functions;

/**
 * Enqueue scripts for the customizer.
 *
 * @package Jo_Theme
 * @since 1.0.0
 */
function customizer_preview_js() {

	wp_enqueue_script(
		'jo-theme-customizer-scripts',
		JO_THEME_URL . '/dist/customizer.js',
		array( 'customize-preview' ),
		JO_VERSION,
		true
	);
}
add_action( 'customize_preview_init', 'JoTheme\Functions\customizer_preview_js' );

/**
 * Modify the $wp_customize object.
 * Add live preview support via postMessage.
 *
 * @package Jo_Theme
 * @since 1.0.0
 *
 * @param array $wp_customize The Customizer object.
 * @link https://codex.wordpress.org/Theme_Customization_API#Part_3:_Configure_Live_Preview_.28Optional.29.
 */
function customize_register( $wp_customize ) {

	$wp_customize->remove_control( 'blogdescription' );
	$wp_customize->remove_control( 'blogname' );

	$wp_customize->selective_refresh->add_partial( 'search_toggle', array(
		'selector' => '.search-toggle',
	) );

	$wp_customize->selective_refresh->add_partial( 'nav_toggle', array(
		'selector' => '.primary',
	) );

	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector' => '.copyright-language',
	) );

	// Footer section.
	$wp_customize->add_section(
		'jo_theme_footer_section',
		array(
			'title'      => __( 'Footer', 'jo-theme' ),
			'priority'   => 140,
			'capability' => 'edit_theme_options',
		)
	);

	// Add section.
	$wp_customize->add_setting(
		'footer_copyright',
		array(
			'default'               => '',
			'type'                  => 'theme_mod',
			'capability'            => 'edit_theme_options',
			'sanitization_callback' => 'wp_filter_post_kses',
		)
	);

	// Add field type.
	$wp_customize->add_control(
		'footer_copyright',
		array(
			'type'    => 'textarea',
			'label'   => __( 'Footer Copyright Text', 'jo-theme' ),
			'section' => 'jo_theme_footer_section',
		)
	);

	// Search toggle section.
	$wp_customize->add_section(
		'jo_theme_theme_options',
		array(
			'title'      => __( 'Theme Options', 'jo-theme' ),
			'priority'   => 140,
			'capability' => 'edit_theme_options',
		)
	);

	// Add section.
	$wp_customize->add_setting(
		'search_toggle',
		array(
			'default'               => false,
			'type'                  => 'theme_mod',
			'capability'            => 'edit_theme_options',
			'sanitization_callback' => 'wp_filter_post_kses',
		)
	);

	// Add field type.
	$wp_customize->add_control(
		'search_toggle',
		array(
			'type'    => 'checkbox',
			'label'   => __( 'Show Search Button and Form Globally?', 'jo-theme' ),
			'section' => 'jo_theme_theme_options',
		)
	);

	// Add section.
	$wp_customize->add_setting(
		'nav_toggle',
		array(
			'default'               => true,
			'type'                  => 'theme_mod',
			'capability'            => 'edit_theme_options',
			'sanitization_callback' => 'wp_filter_post_kses',
		)
	);

	// Add field type.
	$wp_customize->add_control(
		'nav_toggle',
		array(
			'type'    => 'checkbox',
			'label'   => __( 'Hide nav in off-screen drawer?', 'jo-theme' ),
			'section' => 'jo_theme_theme_options',
		)
	);

}
add_action( 'customize_register', 'JoTheme\Functions\customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @package Jo_Theme
 * @since 1.0.0
 * @return void
 */
function customize_partial_blogname() {
	bloginfo( 'name' );
}
