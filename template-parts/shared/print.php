<?php
/**
 * Przycisk drukowania strony
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

printf(
	'<button class="print js-print">%s</button>',
	esc_html__( 'Drukuj stronę', 'axel' )
);
