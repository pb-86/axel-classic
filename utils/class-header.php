<?php
/**
 * Nagłówek strony.
 *
 * @package WordPress
 * @subpackage Axel Classic
 */

namespace Axel;

/**
 * Klasa z funkcjami do nagłówka strony.
 */
class Header {
	/**
	 * Podmienia nazwy klas customowego loga.
	 *
	 * @param {string} $html Kod HTML loga.
	 * @return {string} $html Kod HTML loga po zmianach.
	 */
	public function add_logo_custom_classes( $html ) {
		$html = str_replace( 'custom-logo-link', 'site-logo__link', $html );
		$html = str_replace( 'custom-logo', 'site-logo__image', $html );
		return $html;
	}

	/**
	 * Jeśli obrazek nagłówka został ustawiony zwraca odpowiednią klasę.
	 */
	public static function get_background_class() {
		if ( ! has_header_image() ) {
			return false;
		}
		return 'header--has-background';
	}

	/**
	 * Jeśli obrazek nagłówka został ustawiony zwraca kod dodający obrazek.
	 */
	public static function get_background_image() {
		if ( ! has_header_image() ) {
			return false;
		}
		$custom_header = get_custom_header();
		return $custom_header->url;
	}
}
