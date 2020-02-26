***REMOVED***
***REMOVED***
***REMOVED*** The template for displaying 404 pages (not found)
***REMOVED***
***REMOVED*** @link https://codex.wordpress.org/Creating_an_Error_404_Page
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

get_header();
?>

***REMOVED***<div id="primary" class="content-area">
***REMOVED******REMOVED***<main id="main" class="site-main">

***REMOVED******REMOVED******REMOVED***<section class="error-404 not-found">
***REMOVED******REMOVED******REMOVED******REMOVED***<header class="page-header">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<h1 class="page-title">***REMOVED*** esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bigt' ); ?></h1>
***REMOVED******REMOVED******REMOVED******REMOVED***</header><!-- .page-header -->

***REMOVED******REMOVED******REMOVED******REMOVED***<div class="page-content">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<p>***REMOVED*** esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bigt' ); ?></p>

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***get_search_form();

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***the_widget( 'WP_Widget_Recent_Posts' );
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***?>

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="widget widget_categories">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<h2 class="widget-title">***REMOVED*** esc_html_e( 'Most Used Categories', 'bigt' ); ?></h2>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<ul>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***wp_list_categories( array(
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'orderby'    => 'count',
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'order'      => 'DESC',
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'show_count' => 1,
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'title_li'   => '',
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'number'     => 10,
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** );
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</ul>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- .widget -->

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED*** translators: %1$s: smiley***REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***$bigt_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'bigt' ), convert_smilies( ':)' ) ) . '</p>';
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$bigt_archive_content" );

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***the_widget( 'WP_Widget_Tag_Cloud' );
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***?>

***REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- .page-content -->
***REMOVED******REMOVED******REMOVED***</section><!-- .error-404 -->

***REMOVED******REMOVED***</main><!-- #main -->
***REMOVED***</div><!-- #primary -->

***REMOVED***
get_footer();
