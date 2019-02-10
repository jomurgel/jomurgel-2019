<?php
/**
 * The template for displaying the search form.
 *
 * @package Jo_Theme
 * @since 1.0.0
 */

?>

<form
	method="get"
	class="search-form"
	role="search"
	action="<?php echo esc_url( home_url( '/' ) ); ?>"
>
	<label for="search-field">
		<span class="screen-reader-text">
			<?php esc_html_e( 'To search this site, enter a search term', 'jo-theme' ); ?>
		</span>
		<input
			class="search-field"
			id="search-field"
			type="search"
			name="s"
			value="<?php echo get_search_query(); ?>"
			aria-required="false"
			autocomplete="off"
			placeholder="<?php echo esc_attr_e( 'Search', 'jo-theme' ); ?>"
		/>
	</label>
	<button
		type="submit"
		id="search-submit"
		class="button-search"
		aria-label="<?php esc_attr_e( 'Submit' ); ?>"
	></button>
</form>
