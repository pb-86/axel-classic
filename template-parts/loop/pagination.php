<?php
/**
 * Informacja o braku wpisów.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

the_posts_pagination(
	array(
		'prev_text' => '<div class="icon-prev">' . esc_attr__( 'Poprzednia strona', 'axel' ) . '</div>',
		'next_text' => '<div class="icon-next">' . esc_attr__( 'Następna strona', 'axel' ) . '</div>',
	)
);
