<?php
/**
 * Tytuł wpisu z odnośnikiem
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

if ( is_home() || is_front_page() ) {
	$header = 'h3';
} else {
	$header = 'h2';
}

printf(
	'<%s class="title" itemprop="headline"><a href="%s">%s</a></%s>',
	esc_attr( $header ),
	esc_url( get_permalink() ),
	esc_html( get_the_title() ),
	esc_attr( $header )
);
