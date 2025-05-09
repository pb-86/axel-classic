<?php
/**
 * Nagłówek strony.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

$background_class = Axel\Header::get_background_class();
$background_image = Axel\Header::get_background_image();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php get_template_part( 'template-parts/header/skip-links' ); ?>
	<?php get_template_part( 'template-parts/header/menu', 'header' ); ?>

	<header class="header <?php echo esc_attr( $background_class ); ?>" style="background-image:url(<?php echo esc_url( $background_image ); ?>)">
		<div class="wrapper">

			<?php
			get_template_part( 'template-parts/header/site-name' );
			get_search_form();
			?>

		</div>
	</header>
