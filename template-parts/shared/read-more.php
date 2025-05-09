<?php
/**
 * Przycisk *Czytaj dalej*
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<div class="read-more">

	<?php
	printf(
		'<a class="read-more__link" href="%s" tabindex="-1">%s</a>',
		esc_url( get_permalink() ),
		esc_html__( 'Czytaj dalej', 'axel' )
	);
	?>

</div>
