<?php
/**
 * Szablon błędu 404.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

get_header();
?>

<main class="main" id="tresc" tabindex="-1">
	<div class="wrapper">

		<article>
			<?php get_template_part( 'template-parts/shared/title' ); ?>
	
			<div class="content">
				<p><?php esc_html_e( 'Przepraszamy, ale nie znaleźliśmy strony, której szukasz.', 'axel' ); ?></p>
			</div>
	
			<div class="post-meta post-meta--on-bottom">
				<?php get_template_part( 'template-parts/shared/back-to-home' ); ?>
			</div>
		</article>

	</div>
</main>

<?php
get_sidebar();
get_footer();
