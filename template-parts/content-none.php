***REMOVED***
***REMOVED***
***REMOVED*** Template part for displaying a message that posts cannot be found
***REMOVED***
***REMOVED*** @link https://developer.wordpress.org/themes/basics/template-hierarchy/
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

?>

<section class="no-results not-found">
***REMOVED***<header class="page-header">
***REMOVED******REMOVED***<h1 class="page-title">***REMOVED*** esc_html_e( 'Nothing Found', 'bigt' ); ?></h1>
***REMOVED***</header><!-- .page-header -->

***REMOVED***<div class="page-content">
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***if ( is_home() && current_user_can( 'publish_posts' ) ) :

***REMOVED******REMOVED******REMOVED***printf(
***REMOVED******REMOVED******REMOVED******REMOVED***'<p>' . wp_kses(
***REMOVED******REMOVED******REMOVED******REMOVED*** translators: 1: link to WP admin new post page.***REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bigt' ),
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'a' => array(
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'href' => array(),
***REMOVED******REMOVED******REMOVED******REMOVED***,
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED*** . '</p>',
***REMOVED******REMOVED******REMOVED******REMOVED***esc_url( admin_url( 'post-new.php' ) )
***REMOVED***;

***REMOVED******REMOVED***elseif ( is_search() ) :
***REMOVED******REMOVED******REMOVED***?>

***REMOVED******REMOVED******REMOVED***<p>***REMOVED*** esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bigt' ); ?></p>
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***get_search_form();

***REMOVED******REMOVED***else :
***REMOVED******REMOVED******REMOVED***?>

***REMOVED******REMOVED******REMOVED***<p>***REMOVED*** esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bigt' ); ?></p>
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***get_search_form();

***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***?>
***REMOVED***</div><!-- .page-content -->
</section><!-- .no-results -->
