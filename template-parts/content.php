***REMOVED***
***REMOVED***
***REMOVED*** Template part for displaying posts
***REMOVED***
***REMOVED*** @link https://developer.wordpress.org/themes/basics/template-hierarchy/
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

?>

<article id="post-***REMOVED*** the_ID(); ?>"***REMOVED*****REMOVED*** post_class(); ?>>
***REMOVED***<header class="entry-header">
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***if ( is_singular() ) :
***REMOVED******REMOVED******REMOVED***the_title( '<h1 class="entry-title">', '</h1>' );
***REMOVED******REMOVED***else :
***REMOVED******REMOVED******REMOVED***the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
***REMOVED******REMOVED******REMOVED***

***REMOVED******REMOVED***if ( 'post' === get_post_type() ) :
***REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED***<div class="entry-meta">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED***bigt_posted_on();
***REMOVED******REMOVED******REMOVED******REMOVED***bigt_posted_by();
***REMOVED******REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED***</div><!-- .entry-meta -->
***REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*** ?>
***REMOVED***</header><!-- .entry-header -->

***REMOVED******REMOVED*** bigt_post_thumbnail(); ?>

***REMOVED***<div class="entry-content">
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***the_content( sprintf(
***REMOVED******REMOVED******REMOVED***wp_kses(
***REMOVED******REMOVED******REMOVED*** translators: %s: Name of current post. Only visible to screen readers***REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED***__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bigt' ),
***REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'span' => array(
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'class' => array(),
***REMOVED******REMOVED******REMOVED***,
***REMOVED******REMOVED***
***REMOVED***,
***REMOVED******REMOVED******REMOVED***get_the_title()
***REMOVED*** );

***REMOVED******REMOVED***wp_link_pages( array(
***REMOVED******REMOVED******REMOVED***'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bigt' ),
***REMOVED******REMOVED******REMOVED***'after'  => '</div>',
***REMOVED*** );
***REMOVED******REMOVED***?>
***REMOVED***</div><!-- .entry-content -->

***REMOVED***<footer class="entry-footer">
***REMOVED******REMOVED******REMOVED*** bigt_entry_footer(); ?>
***REMOVED***</footer><!-- .entry-footer -->
</article><!-- #post-***REMOVED*** the_ID(); ?> -->
