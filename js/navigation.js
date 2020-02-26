***REMOVED***
***REMOVED*** File navigation.js.
***REMOVED***
***REMOVED*** Handles toggling the navigation menu for small screens and enables TAB key
***REMOVED*** navigation support for dropdown menus.
***REMOVED***/
( function() {
***REMOVED***var container, button, menu, links, i, len;

***REMOVED***container = document.getElementById( 'site-navigation' );
***REMOVED***if ( ! container ) {
***REMOVED******REMOVED***return;
***REMOVED***

***REMOVED***button = container.getElementsByTagName( 'button' )[0];
***REMOVED***if ( 'undefined' === typeof button ) {
***REMOVED******REMOVED***return;
***REMOVED***

***REMOVED***menu = container.getElementsByTagName( 'ul' )[0];

***REMOVED***// Hide menu toggle button if menu is empty and return early.
***REMOVED***if ( 'undefined' === typeof menu ) {
***REMOVED******REMOVED***button.style.display = 'none';
***REMOVED******REMOVED***return;
***REMOVED***

***REMOVED***menu.setAttribute( 'aria-expanded', 'false' );
***REMOVED***if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
***REMOVED******REMOVED***menu.className += ' nav-menu';
***REMOVED***

***REMOVED***button.onclick = function() {
***REMOVED******REMOVED***if ( -1 !== container.className.indexOf( 'toggled' ) ) {
***REMOVED******REMOVED******REMOVED***container.className = container.className.replace( ' toggled', '' );
***REMOVED******REMOVED******REMOVED***button.setAttribute( 'aria-expanded', 'false' );
***REMOVED******REMOVED******REMOVED***menu.setAttribute( 'aria-expanded', 'false' );
***REMOVED*** else {
***REMOVED******REMOVED******REMOVED***container.className += ' toggled';
***REMOVED******REMOVED******REMOVED***button.setAttribute( 'aria-expanded', 'true' );
***REMOVED******REMOVED******REMOVED***menu.setAttribute( 'aria-expanded', 'true' );
***REMOVED***
***REMOVED***;

***REMOVED***// Get all the link elements within the menu.
***REMOVED***links    = menu.getElementsByTagName( 'a' );

***REMOVED***// Each time a menu link is focused or blurred, toggle focus.
***REMOVED***for ( i = 0, len = links.length; i < len; i++ ) {
***REMOVED******REMOVED***links[i].addEventListener( 'focus', toggleFocus, true );
***REMOVED******REMOVED***links[i].addEventListener( 'blur', toggleFocus, true );
***REMOVED***

***REMOVED******REMOVED***
***REMOVED******REMOVED*** Sets or removes .focus class on an element.
***REMOVED******REMOVED***/
***REMOVED***function toggleFocus() {
***REMOVED******REMOVED***var self = this;

***REMOVED******REMOVED***// Move up through the ancestors of the current link until we hit .nav-menu.
***REMOVED******REMOVED***while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

***REMOVED******REMOVED******REMOVED***// On li elements toggle the class .focus.
***REMOVED******REMOVED******REMOVED***if ( 'li' === self.tagName.toLowerCase() ) {
***REMOVED******REMOVED******REMOVED******REMOVED***if ( -1 !== self.className.indexOf( 'focus' ) ) {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***self.className = self.className.replace( ' focus', '' );
***REMOVED******REMOVED******REMOVED*** else {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***self.className += ' focus';
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***

***REMOVED******REMOVED******REMOVED***self = self.parentElement;
***REMOVED***
***REMOVED***

***REMOVED******REMOVED***
***REMOVED******REMOVED*** Toggles `focus` class to allow submenu access on tablets.
***REMOVED******REMOVED***/
***REMOVED***( function( container ) {
***REMOVED******REMOVED***var touchStartFn, i,
***REMOVED******REMOVED******REMOVED***parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

***REMOVED******REMOVED***if ( 'ontouchstart' in window ) {
***REMOVED******REMOVED******REMOVED***touchStartFn = function( e ) {
***REMOVED******REMOVED******REMOVED******REMOVED***var menuItem = this.parentNode, i;

***REMOVED******REMOVED******REMOVED******REMOVED***if ( ! menuItem.classList.contains( 'focus' ) ) {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***e.preventDefault();
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***if ( menuItem === menuItem.parentNode.children[i] ) {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***continue;
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***menuItem.parentNode.children[i].classList.remove( 'focus' );
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***menuItem.classList.add( 'focus' );
***REMOVED******REMOVED******REMOVED*** else {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***menuItem.classList.remove( 'focus' );
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***;

***REMOVED******REMOVED******REMOVED***for ( i = 0; i < parentLink.length; ++i ) {
***REMOVED******REMOVED******REMOVED******REMOVED***parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
***REMOVED******REMOVED***
***REMOVED***
***REMOVED***( container ) );
***REMOVED*** )();
