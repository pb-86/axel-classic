<?php
/**
 * Szablon stron.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

get_header();
?>

<main class="main" id="tresc" tabindex="-1">
	<div class="wrapper">

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">
				<?php
				get_template_part( 'template-parts/shared/title' );
				get_template_part( 'template-parts/shared/thumbnail' );
				get_template_part( 'template-parts/shared/content' );
				?>

				<div class="post-meta post-meta--on-bottom">
					<?php
					get_template_part( 'template-parts/shared/back-to-home' );
					get_template_part( 'template-parts/shared/print' );
					?>
				</div>
			</article>

			<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			wp_link_pages();
			?>
		<?php endwhile; ?>

	</div>
</main>

<?php
get_sidebar();
get_footer();
