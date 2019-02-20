<?php
/**
 * This is the template that displays all of the <head> section and everything up until <div id="page">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jo_Theme
 * @since 1.0.0
 */

use function JoTheme\Functions\display_google_analytics;
use function JoTheme\Functions\display_site_branding;
use function JoTheme\Functions\display_search_toggle;

?><!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() . '/src/favicon/apple-touch-icon.png' ); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() . '/src/favicon/favicon-32x32.png' ); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() . '/src/favicon/favicon-16x16.png' ); ?>">
	<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() . '/src/favicon/site.webmanifest' ); ?>">
	<link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() . '/src/favicon/safari-pinned-tab.svg' ); ?>" color="#d7046b">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<?php display_google_analytics(); ?>

	<?php wp_head(); ?>
</head>

<body id="site" <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e( 'Skip to Content', 'jo-theme' ); ?></a>

	<header class="site-header">

		<div class="site-branding"><?php display_site_branding(); ?></div><!-- .site-branding -->

		<?php if ( has_nav_menu( 'primary' ) ) : ?>

			<button id="menu-toggle" aria-label="<?php esc_attr_e( 'Toggle Menu Visibility' ); ?>"><span></span></button><!-- #menu-toggle -->

			<nav id="primary" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'jo-theme' ); ?>" aria-hidden="true">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-navigation',
					'menu_class'     => 'menu primary-menu',
					'container'      => '',
					'depth'          => 1,
				) );
				?>
			</nav><!-- #primary -->

		<?php endif; ?>

		<?php display_search_toggle(); ?>
	</header><!-- .site-header-->

	<main id="site-content" class="site-content container" role="main">
