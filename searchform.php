<?php
/**
 * Formularz wyszukiwania.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<form class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<!-- Etykieta -->
	<label class="screen-reader-text" for="search">
		<?php esc_html_e( 'Wyszukiwarka', 'axel' ); ?>
	</label>

	<!-- Pole wyszukiwania -->
	<input class="search-form__input" type="search" id="search" name="s" placeholder="<?php esc_html_e( 'Wpisz wyszukiwaną frazę…', 'axel' ); ?>" autocomplete="on">

	<!-- Przycisk wyszukiwania -->
	<button class="search-form__button button" type="submit">
		<span class="search-form__button-text">
			<?php esc_html_e( 'Szukaj', 'axel' ); ?>
		</span>
	</button>

</form>
