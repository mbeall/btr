***REMOVED***
***REMOVED***
***REMOVED*** Functions which enhance the theme by hooking into WordPress
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

***REMOVED***
***REMOVED*** Adds custom classes to the array of body classes.
***REMOVED***
***REMOVED*** @param array $classes Classes for the body element.
***REMOVED*** @return array
***REMOVED***/
function bigt_body_classes( $classes ) {
***REMOVED***// Adds a class of hfeed to non-singular pages.
***REMOVED***if ( ! is_singular() ) {
***REMOVED******REMOVED***$classes[] = 'hfeed';
***REMOVED***

***REMOVED***// Adds a class of no-sidebar when there is no sidebar present.
***REMOVED***if ( ! is_active_sidebar( 'sidebar-1' ) ) {
***REMOVED******REMOVED***$classes[] = 'no-sidebar';
***REMOVED***

***REMOVED***return $classes;
***REMOVED***
add_filter( 'body_class', 'bigt_body_classes' );

***REMOVED***
***REMOVED*** Add a pingback url auto-discovery header for single posts, pages, or attachments.
***REMOVED***/
function bigt_pingback_header() {
***REMOVED***if ( is_singular() && pings_open() ) {
***REMOVED******REMOVED***printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
***REMOVED***
***REMOVED***
add_action( 'wp_head', 'bigt_pingback_header' );
