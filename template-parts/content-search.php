***REMOVED***
***REMOVED***
***REMOVED*** Template part for displaying results in search pages
***REMOVED***
***REMOVED*** @link https://developer.wordpress.org/themes/basics/template-hierarchy/
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

?>

<article id="post-***REMOVED*** the_ID(); ?>"***REMOVED*****REMOVED*** post_class(); ?>>
***REMOVED***<header class="entry-header">
***REMOVED******REMOVED******REMOVED*** the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

***REMOVED******REMOVED******REMOVED*** if ( 'post' === get_post_type() ) : ?>
***REMOVED******REMOVED***<div class="entry-meta">
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***bigt_posted_on();
***REMOVED******REMOVED******REMOVED***bigt_posted_by();
***REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED***</div><!-- .entry-meta -->
***REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*** ?>
***REMOVED***</header><!-- .entry-header -->

***REMOVED******REMOVED*** bigt_post_thumbnail(); ?>

***REMOVED***<div class="entry-summary">
***REMOVED******REMOVED******REMOVED*** the_excerpt(); ?>
***REMOVED***</div><!-- .entry-summary -->

***REMOVED***<footer class="entry-footer">
***REMOVED******REMOVED******REMOVED*** bigt_entry_footer(); ?>
***REMOVED***</footer><!-- .entry-footer -->
</article><!-- #post-***REMOVED*** the_ID(); ?> -->
