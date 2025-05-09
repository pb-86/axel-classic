<?php
/**
 * Główny szablon.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

get_header();
?>

<main class="main" id="tresc" tabindex="-1">
	
	<!-- Tytuł -->
	<h2 class="screen-reader-text">
		<?php esc_html_e( 'Najnowsze wpisy', 'axel' ); ?>
	</h2>
	
	<?php if ( have_posts() ) : ?>
		<!-- Lista wpisów -->
		<div class="wrapper wrapper--excerpts">
		
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<?php get_template_part( 'template-parts/loop/excerpt', 'default' ); ?>
			<?php endwhile; ?>
			<?php get_template_part( 'template-parts/loop/pagination' ); ?>

		</div>
	<?php else : ?>
		<?php get_template_part( 'template-parts/loop/no-posts' ); ?>
	<?php endif; ?>

</main>

<?php
get_sidebar();
get_footer();
