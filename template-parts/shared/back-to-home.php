<?php
/**
 * Treść wpisu
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

printf(
	'<a class="back-to-home" href="%s" rel="home">%s</a>',
	esc_url( home_url() ),
	esc_html__( 'Wróć do strony głównej', 'axel' )
);
