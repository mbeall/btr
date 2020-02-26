***REMOVED***
***REMOVED***
***REMOVED*** The main template file
***REMOVED***
***REMOVED*** This is the most generic template file in a WordPress theme
***REMOVED*** and one of the two required files for a theme (the other being style.css).
***REMOVED*** It is used to display a page when nothing more specific matches a query.
***REMOVED*** E.g., it puts together the home page when no home.php file exists.
***REMOVED***
***REMOVED*** @link https://developer.wordpress.org/themes/basics/template-hierarchy/
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

get_header();
?>

***REMOVED***<div id="primary" class="content-area">
***REMOVED******REMOVED***<main id="main" class="site-main">

***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***if ( have_posts() ) :

***REMOVED******REMOVED******REMOVED***if ( is_home() && ! is_front_page() ) :
***REMOVED******REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED******REMOVED***<header>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<h1 class="page-title screen-reader-text">***REMOVED*** single_post_title(); ?></h1>
***REMOVED******REMOVED******REMOVED******REMOVED***</header>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
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
