***REMOVED***
***REMOVED***
***REMOVED*** Sample implementation of the Custom Header feature
***REMOVED***
***REMOVED*** You can add an optional custom header image to header.php like so ...
***REMOVED***
***REMOVED******REMOVED*** the_header_image_tag(); ?>
***REMOVED***
***REMOVED*** @link https://developer.wordpress.org/themes/functionality/custom-headers/
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

***REMOVED***
***REMOVED*** Set up the WordPress core custom header feature.
***REMOVED***
***REMOVED*** @uses bigt_header_style()
***REMOVED***/
function bigt_custom_header_setup() {
***REMOVED***add_theme_support( 'custom-header', apply_filters( 'bigt_custom_header_args', array(
***REMOVED******REMOVED***'default-image'          => '',
***REMOVED******REMOVED***'default-text-color'     => '000000',
***REMOVED******REMOVED***'width'                  => 1000,
***REMOVED******REMOVED***'height'                 => 250,
***REMOVED******REMOVED***'flex-height'            => true,
***REMOVED******REMOVED***'wp-head-callback'       => 'bigt_header_style',
***REMOVED***) ) );
***REMOVED***
add_action( 'after_setup_theme', 'bigt_custom_header_setup' );

if ( ! function_exists( 'bigt_header_style' ) ) :
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Styles the header image and text displayed on the blog.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** @see bigt_custom_header_setup().
***REMOVED******REMOVED***/
***REMOVED***function bigt_header_style() {
***REMOVED******REMOVED***$header_text_color = get_header_textcolor();

***REMOVED***
***REMOVED******REMOVED******REMOVED*** If no custom options for text are set, let's bail.
***REMOVED******REMOVED******REMOVED*** get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
***REMOVED******REMOVED******REMOVED***/
***REMOVED******REMOVED***if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
***REMOVED******REMOVED******REMOVED***return;
***REMOVED***

***REMOVED******REMOVED***// If we get this far, we have custom styles. Let's do this.
***REMOVED******REMOVED***?>
***REMOVED******REMOVED***<style type="text/css">
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***// Has the text been hidden?
***REMOVED******REMOVED***if ( ! display_header_text() ) :
***REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED***.site-title,
***REMOVED******REMOVED******REMOVED***.site-description {
***REMOVED******REMOVED******REMOVED******REMOVED***position: absolute;
***REMOVED******REMOVED******REMOVED******REMOVED***clip: rect(1px, 1px, 1px, 1px);
***REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***// If the user has set a custom color for the text use that.
***REMOVED******REMOVED***else :
***REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED***.site-title a,
***REMOVED******REMOVED******REMOVED***.site-description {
***REMOVED******REMOVED******REMOVED******REMOVED***color: #***REMOVED*** echo esc_attr( $header_text_color ); ?>;
***REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*** ?>
***REMOVED******REMOVED***</style>
***REMOVED******REMOVED******REMOVED***
***REMOVED***
***REMOVED***
