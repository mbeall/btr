***REMOVED***
***REMOVED*** File skip-link-focus-fix.js.
***REMOVED***
***REMOVED*** Helps with accessibility for keyboard only users.
***REMOVED***
***REMOVED*** Learn more: https://git.io/vWdr2
***REMOVED***/
( function() {
***REMOVED***var isIe = /(trident|msie)/i.test( navigator.userAgent );

***REMOVED***if ( isIe && document.getElementById && window.addEventListener ) {
***REMOVED******REMOVED***window.addEventListener( 'hashchange', function() {
***REMOVED******REMOVED******REMOVED***var id = location.hash.substring( 1 ),
***REMOVED******REMOVED******REMOVED******REMOVED***element;

***REMOVED******REMOVED******REMOVED***if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
***REMOVED******REMOVED******REMOVED******REMOVED***return;
***REMOVED******REMOVED***

***REMOVED******REMOVED******REMOVED***element = document.getElementById( id );

***REMOVED******REMOVED******REMOVED***if ( element ) {
***REMOVED******REMOVED******REMOVED******REMOVED***if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***element.tabIndex = -1;
***REMOVED******REMOVED******REMOVED***

***REMOVED******REMOVED******REMOVED******REMOVED***element.focus();
***REMOVED******REMOVED***
***REMOVED***, false );
***REMOVED***
***REMOVED*** )();
