***REMOVED***
***REMOVED***
***REMOVED*** The template for displaying archive pages
***REMOVED***
***REMOVED*** @link https://developer.wordpress.org/themes/basics/template-hierarchy/
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

get_header();
?>

***REMOVED***<div id="primary" class="content-area">
***REMOVED******REMOVED***<main id="main" class="site-main">

***REMOVED******REMOVED******REMOVED*** if ( have_posts() ) : ?>

***REMOVED******REMOVED******REMOVED***<header class="page-header">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED***the_archive_title( '<h1 class="page-title">', '</h1>' );
***REMOVED******REMOVED******REMOVED******REMOVED***the_archive_description( '<div class="archive-description">', '</div>' );
***REMOVED******REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED***</header><!-- .page-header -->

***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED*** Start the Loop***REMOVED***/
***REMOVED******REMOVED******REMOVED***while ( have_posts() ) :
***REMOVED******REMOVED******REMOVED******REMOVED***the_post();

***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** Include the Post-Type-specific template for the content.
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** If you want to override this in a child theme, then include a file
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** called content-___.php (where ___ is the Post Type name) and that will be used instead.
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED***get_template_part( 'template-parts/content', get_post_type() );

***REMOVED******REMOVED******REMOVED***endwhile;

***REMOVED******REMOVED******REMOVED***the_posts_navigation();

***REMOVED******REMOVED***else :

***REMOVED******REMOVED******REMOVED***get_template_part( 'template-parts/content', 'none' );

***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***?>

***REMOVED******REMOVED***</main><!-- #main -->
***REMOVED***</div><!-- #primary -->

***REMOVED***
get_sidebar();
get_footer();
