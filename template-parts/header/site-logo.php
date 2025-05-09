<?php
/**
 * Logo strony
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<?php if ( has_custom_logo() ) : ?>
	<div class="site-logo">
		<?php the_custom_logo(); ?>
	</div>
<?php endif; ?>
