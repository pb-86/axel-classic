<?php
/**
 * Informacje o wykonawcy.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<div class="credits">
	<?php
	printf(
		'<a class="credits__link" href="https://red-dog.pl/">%s <strong>%s</strong></a>',
		esc_html__( 'Projekt i wykonanie', 'axel' ),
		esc_html__( 'Reddog Systems', 'axel' )
	);
	?>
</div>
