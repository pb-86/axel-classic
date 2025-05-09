<?php
/**
 * Skrót wpisu.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<article <?php post_class( 'excerpt' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

	<?php
	get_template_part( 'template-parts/shared/thumbnail' );
	get_template_part( 'template-parts/shared/title', 'link' );
	get_template_part( 'template-parts/shared/content' );
	?>

	<div class="post-meta">
		<?php
		get_template_part( 'template-parts/shared/date' );
		get_template_part( 'template-parts/shared/author' );
		?>
	</div>

</article>
