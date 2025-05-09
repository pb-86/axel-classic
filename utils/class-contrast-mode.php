<?php
/**
 * Tryb kontrastowy
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

namespace Axel;

/**
 * Klasa z funkcjami do trybu kontrastowego.
 */
class Contrast_Mode {
	/**
	 * Dodaje klasę .contrast-mode do <body> jeśli tryb kontrastowy został ustawiony w pliku cookie.
	 *
	 * @param array $classes Lista klas.
	 */
	public function add_body_class( $classes ) {
		if ( $this->is_on() ) {
			$classes[] = 'contrast-mode';
		}
		return $classes;
	}

	/**
	 * Sprawdza czy tryb kontrastowy został ustawiony w pliku cookie.
	 */
	public static function is_on() {
		if ( ! isset( $_COOKIE['axel-contrast-mode'] ) ) {
			return false;
		}

		if ( 'true' !== $_COOKIE['axel-contrast-mode'] ) {
			return false;
		}

		return true;
	}

	/**
	 * Sprawdza czy przycisk powinien być oznaczony jako wciśnięty i drukuje odpowiednią wartość.
	 *
	 * @param string $which Określa, którą wartość wyświetlić: stan czy nazwę klasy.
	 */
	public static function get_button_info( $which ) {
		switch ( $which ) {
			case 'aria':
				$value = ( self::is_on() ) ? 'true' : 'false';
				break;
			case 'class':
				$value = ( self::is_on() ) ? 'toggle-contrast__button--is-on' : null;
				break;
			case 'label':
				$value = ( self::is_on() ) ? __( 'Wyłącz tryb kontrastowy', 'axel' ) : __( 'Włącz tryb kontrastowy', 'axel' );
				break;
			default:
				$value = '';
		}
		return $value;
	}
}
