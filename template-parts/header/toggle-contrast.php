<?php
/**
 * Przycisk przełączający tryb kontrastowy.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

$button_class = Axel\Contrast_Mode::get_button_info( 'class' );
$button_aria  = Axel\Contrast_Mode::get_button_info( 'aria' );
$button_label = Axel\Contrast_Mode::get_button_info( 'label' );
?>

<div class="toggle-contrast">
	<button class="toggle-contrast__button js-toggle-contrast <?php echo esc_attr( $button_class ); ?>" aria-pressed="<?php echo esc_attr( $button_aria ); ?>" data-on-label="<?php esc_html_e( 'Włącz tryb kontrastowy', 'axel' ); ?>" data-off-label="<?php esc_html_e( 'Wyłącz tryb kontrastowy', 'axel' ); ?>">
		<span class="screen-reader-text"><?php echo esc_html( $button_label ); ?></span>
		<div class="toggle-contrast__dot"></div>
	</button>
</div>
