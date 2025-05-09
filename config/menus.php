<?php
/**
 * Rejestrowanie menu.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

add_action( 'after_setup_theme', 'axel_menus' );

/**
 * Rejestruje wszystkie menu.
 */
function axel_menus() {
	$locations = array(
		'axel_header_menu' => __( 'Górne menu', 'axel' ),
		'axel_footer_menu' => __( 'Dolne menu', 'axel' ),
	);
	register_nav_menus( $locations );
}
