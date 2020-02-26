***REMOVED***
***REMOVED***
***REMOVED*** The template for displaying all single posts
***REMOVED***
***REMOVED*** @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

get_header();
?>

***REMOVED***<div id="primary" class="content-area">
***REMOVED******REMOVED***<main id="main" class="site-main">

***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***while ( have_posts() ) :
***REMOVED******REMOVED******REMOVED***the_post();

***REMOVED******REMOVED******REMOVED***get_template_part( 'template-parts/content', get_post_type() );

***REMOVED******REMOVED******REMOVED***the_post_navigation();

***REMOVED******REMOVED******REMOVED***// If comments are open or we have at least one comment, load up the comment template.
***REMOVED******REMOVED******REMOVED***if ( comments_open() || get_comments_number() ) :
***REMOVED******REMOVED******REMOVED******REMOVED***comments_template();
***REMOVED******REMOVED******REMOVED******REMOVED***

***REMOVED******REMOVED***endwhile; // End of the loop.
***REMOVED******REMOVED***?>

***REMOVED******REMOVED***</main><!-- #main -->
***REMOVED***</div><!-- #primary -->

***REMOVED***
get_footer();
