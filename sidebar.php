<?php
/**
 * Szablon sidebara.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

	<aside class="sidebar">
		<div class="wrapper wrapper--widgets">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</div>
	</aside>

<?php endif; ?>
