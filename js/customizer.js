***REMOVED***
***REMOVED*** File customizer.js.
***REMOVED***
***REMOVED*** Theme Customizer enhancements for a better user experience.
***REMOVED***
***REMOVED*** Contains handlers to make Theme Customizer preview reload changes asynchronously.
***REMOVED***/

( function( $ ) {

***REMOVED***// Site title and description.
***REMOVED***wp.customize( 'blogname', function( value ) {
***REMOVED******REMOVED***value.bind( function( to ) {
***REMOVED******REMOVED******REMOVED***$( '.site-title a' ).text( to );
***REMOVED*** );
***REMOVED*** );
***REMOVED***wp.customize( 'blogdescription', function( value ) {
***REMOVED******REMOVED***value.bind( function( to ) {
***REMOVED******REMOVED******REMOVED***$( '.site-description' ).text( to );
***REMOVED*** );
***REMOVED*** );

***REMOVED***// Header text color.
***REMOVED***wp.customize( 'header_textcolor', function( value ) {
***REMOVED******REMOVED***value.bind( function( to ) {
***REMOVED******REMOVED******REMOVED***if ( 'blank' === to ) {
***REMOVED******REMOVED******REMOVED******REMOVED***$( '.site-title, .site-description' ).css( {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'clip': 'rect(1px, 1px, 1px, 1px)',
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'position': 'absolute'
***REMOVED******REMOVED******REMOVED*** );
***REMOVED******REMOVED*** else {
***REMOVED******REMOVED******REMOVED******REMOVED***$( '.site-title, .site-description' ).css( {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'clip': 'auto',
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'position': 'relative'
***REMOVED******REMOVED******REMOVED*** );
***REMOVED******REMOVED******REMOVED******REMOVED***$( '.site-title a, .site-description' ).css( {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'color': to
***REMOVED******REMOVED******REMOVED*** );
***REMOVED******REMOVED***
***REMOVED*** );
***REMOVED*** );
***REMOVED*** )( jQuery );
