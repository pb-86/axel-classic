<?php
/**
 * Skrót wpisu w wynikach wyszukiwania
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<article <?php post_class( 'excerpt' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

	<?php	get_template_part( 'template-parts/shared/title', 'link' ); ?>

	<div class="excerpt__meta">
		<?php
		get_template_part( 'template-parts/shared/author' );
		get_template_part( 'template-parts/shared/date' );
		?>
	</div>

</article>
