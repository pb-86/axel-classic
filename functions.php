<?php
/**
 * Ustawienia motywu.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

// Lista stałych do dalszego użycia.
define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'THEME_SCRIPTS', get_template_directory_uri() . '/assets/js/' );
define( 'THEME_STYLES', get_template_directory_uri() . '/assets/css/' );
define( 'THEME_IMAGES', get_template_directory_uri() . '/assets/img/' );
define( 'THEME_VENDOR', get_template_directory_uri() . '/assets/vendor/' );

// Główna konfiguracja motywu.
require_once get_template_directory() . '/config/setup.php';

// Rejestrowanie i kolejkowanie styli CSS.
require_once get_template_directory() . '/config/styles.php';

// Rejestrowanie i kolejkowanie skryptów JS.
require_once get_template_directory() . '/config/scripts.php';

// Rejestrowanie menu.
require_once get_template_directory() . '/config/menus.php';

// Rejestrowanie sidebarów.
require_once get_template_directory() . '/config/sidebars.php';

// Przyspieszanie działania strony.
require_once get_template_directory() . '/config/optimisation.php';

// Klasa z funkcjami do trybu kontrastowego.
require_once get_template_directory() . '/utils/class-contrast-mode.php';

// Klasa z funkcjami do nagłówka strony.
require_once get_template_directory() . '/utils/class-header.php';

// Inicjalizacja dodatkowych klas.
$axel_contrast_mode = new Axel\Contrast_Mode();
$axel_header        = new Axel\Header();

// Dodaje klasę trybu kontrastowego jeśli jest włączony.
add_filter( 'body_class', array( $axel_contrast_mode, 'add_body_class' ) );

// Podmienia nazwy klas customowego loga.
add_filter( 'get_custom_logo', array( $axel_header, 'add_logo_custom_classes' ) );
