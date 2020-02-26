***REMOVED***
***REMOVED***
***REMOVED*** Template part for displaying page content in page.php
***REMOVED***
***REMOVED*** @link https://developer.wordpress.org/themes/basics/template-hierarchy/
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

?>

<article id="post-***REMOVED*** the_ID(); ?>"***REMOVED*****REMOVED*** post_class(); ?>>
***REMOVED***<header class="entry-header text-center">
***REMOVED******REMOVED******REMOVED*** the_title( '<h1 class="entry-title">', '</h1>' ); ?>
***REMOVED***</header><!-- .entry-header -->

***REMOVED******REMOVED*** bigt_post_thumbnail(); ?>

***REMOVED***<div class="entry-content">
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***the_content();

***REMOVED******REMOVED***wp_link_pages( array(
***REMOVED******REMOVED******REMOVED***'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bigt' ),
***REMOVED******REMOVED******REMOVED***'after'  => '</div>',
***REMOVED*** );
***REMOVED******REMOVED***?>
***REMOVED***</div><!-- .entry-content -->

***REMOVED******REMOVED*** if ( get_edit_post_link() ) : ?>
***REMOVED******REMOVED***<footer class="entry-footer">
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***edit_post_link(
***REMOVED******REMOVED******REMOVED******REMOVED***sprintf(
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***wp_kses(
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** translators: %s: Name of current post. Only visible to screen readers***REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***__( 'Edit <span class="screen-reader-text">%s</span>', 'bigt' ),
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'span' => array(
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'class' => array(),
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***,
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***,
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***get_the_title()
***REMOVED******REMOVED***,
***REMOVED******REMOVED******REMOVED******REMOVED***'<span class="edit-link">',
***REMOVED******REMOVED******REMOVED******REMOVED***'</span>'
***REMOVED***;
***REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED***</footer><!-- .entry-footer -->
***REMOVED******REMOVED******REMOVED*****REMOVED*** ?>
</article><!-- #post-***REMOVED*** the_ID(); ?> -->
