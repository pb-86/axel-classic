<?php
/**
 * Tytuł wpisu
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

$itemprop = '';

if ( is_404() ) {
	$main_title = __( 'Nie znaleziono strony', 'axel' );
} elseif ( is_category() ) {
	$main_title = single_cat_title( '', false );
} elseif ( is_search() ) {
	$main_title = __( 'Wyniki wyszukiwania', 'axel' );
	$itemprop   = 'itemprop="headline"';
} else {
	$main_title = get_the_title();
	$itemprop   = 'itemprop="headline"';
}

printf(
	'<h1 class="title" %s>%s</h1>',
	esc_attr( $itemprop ),
	esc_html( $main_title )
);
