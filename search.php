<?php
/**
 * Szablon wyników wyszukiwania.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

get_header();
?>

<main class="main" id="tresc" tabindex="-1">
	<div class="wrapper">

		<!-- Tytuł -->
		<?php get_template_part( 'template-parts/shared/title' ); ?>

		<?php if ( get_search_query() ) : ?>
			<!-- Szukana fraza -->
			<div class="search-query">
				<?php
				printf(
					'%s: <strong>%s</strong>',
					esc_html__( 'Szukałeś', 'axel' ),
					get_search_query()
				);
				?>
			</div>
		<?php endif; ?>

		<?php if ( have_posts() ) : ?>
			<!-- Lista wpisów -->
			<div class="wrapper wrapper--search">
		
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<?php get_template_part( 'template-parts/loop/excerpt', 'search' ); ?>
				<?php endwhile; ?>
				<?php get_template_part( 'template-parts/loop/pagination' ); ?>

			</div>
		<?php else : ?>
			<?php get_template_part( 'template-parts/loop/no-posts' ); ?>
		<?php endif; ?>

	</div>
</main>

<?php
get_sidebar();
get_footer();
