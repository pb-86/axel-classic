<?php
/**
 * Menu w nagłówku.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<?php if ( has_nav_menu( 'axel_header_menu' ) ) : ?>

	<nav class="navbar navbar--header" aria-label="<?php esc_html_e( 'Górne menu', 'axel' ); ?>">
		<div class="wrapper">

			<?php get_template_part( 'template-parts/header/hamburger' ); ?>

			<?php
			wp_nav_menu(
				array(
					'container'      => '',
					'menu'           => 'axel_header_menu',
					'menu_id'        => 'menu-header',
					'menu_class'     => 'menu menu--header js-menu-header',
					'theme_location' => 'axel_header_menu',
				)
			);
			?>

			<?php get_template_part( 'template-parts/header/toggle-contrast' ); ?>

		</div>
	</nav>

<?php endif; ?>
