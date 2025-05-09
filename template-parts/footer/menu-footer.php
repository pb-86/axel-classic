<?php
/**
 * Menu w stopce.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<?php if ( has_nav_menu( 'axel_footer_menu' ) ) : ?>

	<nav class="navbar navbar--footer" aria-label="<?php esc_html_e( 'Dolne menu', 'axel' ); ?>">
		<div class="wrapper">

			<?php
			wp_nav_menu(
				array(
					'container'      => '',
					'menu'           => 'axel_footer_menu',
					'menu_id'        => 'menu-footer',
					'menu_class'     => 'menu menu--footer',
					'theme_location' => 'axel_footer_menu',
				)
			);
			?>

			<?php get_template_part( 'template-parts/footer/scroll-to-top' ); ?>

		</div>
	</nav>

<?php endif; ?>
