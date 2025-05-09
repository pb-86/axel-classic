<?php
/**
 * Link do strony autora
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

printf(
	'<address class="post-author" itemscope itemtype="http://schema.org/Person" itemprop="author">
		<span itemprop="name">%s</span>
	</address>',
	esc_html( get_the_author_meta( 'display_name' ) )
);
