***REMOVED***
***REMOVED***
***REMOVED*** The template for displaying search results pages
***REMOVED***
***REMOVED*** @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

get_header();
?>

***REMOVED***<section id="primary" class="content-area">
***REMOVED******REMOVED***<main id="main" class="site-main">

***REMOVED******REMOVED******REMOVED*** if ( have_posts() ) : ?>

***REMOVED******REMOVED******REMOVED***<header class="page-header">
***REMOVED******REMOVED******REMOVED******REMOVED***<h1 class="page-title">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED*** translators: %s: search query.***REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***printf( esc_html__( 'Search Results for: %s', 'bigt' ), '<span>' . get_search_query() . '</span>' );
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED******REMOVED***</h1>
***REMOVED******REMOVED******REMOVED***</header><!-- .page-header -->

***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED*** Start the Loop***REMOVED***/
***REMOVED******REMOVED******REMOVED***while ( have_posts() ) :
***REMOVED******REMOVED******REMOVED******REMOVED***the_post();

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** Run the loop for the search to output the results.
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** If you want to overload this in a child theme then include a file
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** called content-search.php and that will be used instead.
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED***get_template_part( 'template-parts/content', 'search' );

***REMOVED******REMOVED******REMOVED***endwhile;

***REMOVED******REMOVED******REMOVED***the_posts_navigation();

***REMOVED******REMOVED***else :

***REMOVED******REMOVED******REMOVED***get_template_part( 'template-parts/content', 'none' );

***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***?>

***REMOVED******REMOVED***</main><!-- #main -->
***REMOVED***</section><!-- #primary -->

***REMOVED***
get_sidebar();
get_footer();
