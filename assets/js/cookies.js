export function addCookie( cookieName, cookieValue, daysToExpire ) {
	const date  = new Date();
	date.setTime( date.getTime() + ( daysToExpire * 24 * 60 * 60 * 1000 ) );

	let expires = 'expires=' + date.toUTCString();

	document.cookie = cookieName + '=' + cookieValue + ';' + expires + ';path=/; SameSite=Strict';
}

export function getCookie( cookieName ) {	
	const decodedCookie  = decodeURIComponent( document.cookie );
	const splitedCookies = decodedCookie.split( '; ' );
	let cookieValue      = '';
	
	splitedCookies.forEach( cookie => {
		if ( cookie.substring(0, cookieName.length) == cookieName ) {
			cookieValue = cookie.substring(cookieName.length + 1, cookie.length);
		}
	});

	return cookieValue;
}