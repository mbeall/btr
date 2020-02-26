***REMOVED***
***REMOVED***
***REMOVED*** Jetpack Compatibility File
***REMOVED***
***REMOVED*** @link https://jetpack.com/
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

***REMOVED***
***REMOVED*** Jetpack setup function.
***REMOVED***
***REMOVED*** See: https://jetpack.com/support/infinite-scroll/
***REMOVED*** See: https://jetpack.com/support/responsive-videos/
***REMOVED*** See: https://jetpack.com/support/content-options/
***REMOVED***/
function bigt_jetpack_setup() {
***REMOVED***// Add theme support for Infinite Scroll.
***REMOVED***add_theme_support( 'infinite-scroll', array(
***REMOVED******REMOVED***'container' => 'main',
***REMOVED******REMOVED***'render'    => 'bigt_infinite_scroll_render',
***REMOVED******REMOVED***'footer'    => 'page',
***REMOVED***) );

***REMOVED***// Add theme support for Responsive Videos.
***REMOVED***add_theme_support( 'jetpack-responsive-videos' );

***REMOVED***// Add theme support for Content Options.
***REMOVED***add_theme_support( 'jetpack-content-options', array(
***REMOVED******REMOVED***'post-details'    => array(
***REMOVED******REMOVED******REMOVED***'stylesheet' => 'bigt-style',
***REMOVED******REMOVED******REMOVED***'date'       => '.posted-on',
***REMOVED******REMOVED******REMOVED***'categories' => '.cat-links',
***REMOVED******REMOVED******REMOVED***'tags'       => '.tags-links',
***REMOVED******REMOVED******REMOVED***'author'     => '.byline',
***REMOVED******REMOVED******REMOVED***'comment'    => '.comments-link',
***REMOVED***,
***REMOVED******REMOVED***'featured-images' => array(
***REMOVED******REMOVED******REMOVED***'archive'    => true,
***REMOVED******REMOVED******REMOVED***'post'       => true,
***REMOVED******REMOVED******REMOVED***'page'       => true,
***REMOVED***,
***REMOVED***) );
***REMOVED***
add_action( 'after_setup_theme', 'bigt_jetpack_setup' );

***REMOVED***
***REMOVED*** Custom render function for Infinite Scroll.
***REMOVED***/
function bigt_infinite_scroll_render() {
***REMOVED***while ( have_posts() ) {
***REMOVED******REMOVED***the_post();
***REMOVED******REMOVED***if ( is_search() ) :
***REMOVED******REMOVED******REMOVED***get_template_part( 'template-parts/content', 'search' );
***REMOVED******REMOVED***else :
***REMOVED******REMOVED******REMOVED***get_template_part( 'template-parts/content', get_post_type() );
***REMOVED******REMOVED******REMOVED***
***REMOVED***
***REMOVED***
