<?php
/**
 * Rejestrowanie i kolejkowanie skryptów JS.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

/**
 * Rejestruje i kolejkuje wszystkie pliki JS.
 */
function axel_scripts() {
	if ( ! is_admin() ) {
		wp_dequeue_script( 'jquery' );
		wp_deregister_script( 'jquery' );
	}

	wp_enqueue_script_module( 'axel-cookies', esc_url( THEME_SCRIPTS . 'cookies.js' ), array(), THEME_VERSION );
	wp_enqueue_script_module( 'axel-toggle-contrast', esc_url( THEME_SCRIPTS . 'toggle-contrast.js' ), array(), THEME_VERSION );

	wp_enqueue_script( 'axel-hamburger', esc_url( THEME_SCRIPTS . 'hamburger.js' ), array(), THEME_VERSION, true );
	wp_enqueue_script( 'axel-dropdown-menu', esc_url( THEME_SCRIPTS . 'dropdown-menu.js' ), array(), THEME_VERSION, true );
	wp_enqueue_script( 'axel-print', esc_url( THEME_SCRIPTS . 'print.js' ), array(), THEME_VERSION, true );
	wp_enqueue_script( 'axel-scroll-to-top', esc_url( THEME_SCRIPTS . 'scroll-to-top.js' ), array(), THEME_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'axel_scripts' );

/**
 * Rejestruje dodatkowe style bloków.
 */
function custom_block_styles() {
	wp_register_script( 'axel-block-styles', esc_url( THEME_SCRIPTS . 'custom-block-styles.js' ), array(), THEME_VERSION, true );
	wp_enqueue_script( 'axel-block-styles' );
}
add_action( 'enqueue_block_editor_assets', 'custom_block_styles' );
