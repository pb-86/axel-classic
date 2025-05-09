<?php
/**
 * Data dodania wpisu
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

printf(
	'<time class="date" datetime="%s" itemprop="datePublished">
		<span class="screen-reader-text">
			%s
		</span>
		%s %s
	</time>',
	esc_attr( get_the_time( 'Y-m-d H:i' ) ),
	esc_html__( 'Opublikowano', 'axel' ),
	esc_html( human_time_diff( get_post_timestamp(), time() ) ),
	esc_html__( ' temu', 'axel' )
);
