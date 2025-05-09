import { addCookie } from './cookies.js';

document.addEventListener( 'DOMContentLoaded', function() {

	const body              = document.body;
	const toggleButton      = document.querySelector( '.js-toggle-contrast' );
	const toggleButtonDot   = toggleButton.querySelector( '.toggle-contrast__dot' );
	const toggleButtonLabel = toggleButton.querySelector( '.screen-reader-text' );

	if ( null !== body && null !== toggleButton ) {
		toggleButton.addEventListener( 'click', function() {

			// Włączenie animowanie przycisku
			toggleButtonDot.classList.add( 'toggle-contrast__dot--is-animated' );
			
			if ( 'true' === toggleButton.ariaPressed ) {
				body.classList.remove( 'contrast-mode' );
				toggleButton.classList.toggle( 'toggle-contrast__button--is-on' );
				toggleButton.setAttribute( 'aria-pressed', false );
				toggleButtonLabel.innerHTML = toggleButton.getAttribute( 'data-on-label' );
				addCookie( 'axel-contrast-mode', 'true', -1 );
			} else {
				body.classList.add( 'contrast-mode' );
				toggleButton.classList.toggle( 'toggle-contrast__button--is-on' );
				toggleButton.setAttribute( 'aria-pressed', true );
				toggleButtonLabel.innerHTML = toggleButton.getAttribute( 'data-off-label' );
				addCookie( 'axel-contrast-mode', 'true', 30 );
			}
		});
	}

});