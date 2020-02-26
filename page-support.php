***REMOVED***
***REMOVED***
***REMOVED*** The template for displaying all pages
***REMOVED***
***REMOVED*** This is the template that displays all pages by default.
***REMOVED*** Please note that this is the WordPress construct of pages
***REMOVED*** and that other 'pages' on your WordPress site may use a
***REMOVED*** different template.
***REMOVED***
***REMOVED*** @link https://developer.wordpress.org/themes/basics/template-hierarchy/
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/
if (!is_user_logged_in()) {
***REMOVED***header('Location: ' . wp_login_url( get_permalink() ) );
***REMOVED***

get_header();
?>

***REMOVED***<div id="primary" class="content-area">
***REMOVED******REMOVED***<main id="main" class="site-main">
***REMOVED******REMOVED******REMOVED***<article id="post-***REMOVED*** the_ID(); ?>"***REMOVED*****REMOVED*** post_class(); ?>>
***REMOVED***<header class="entry-header text-center">
***REMOVED******REMOVED******REMOVED*** the_title( '<h1 class="entry-title">', '</h1>' ); ?>
***REMOVED***</header><!-- .entry-header -->

***REMOVED******REMOVED*** bigt_post_thumbnail(); ?>

***REMOVED***<div class="entry-content">
***REMOVED******REMOVED***
    <div class="row text-center mt-3">
      <div class="col pb-1">
        <div class="card text-white bg-tsd h-100">
          <a class="card-body cw-link stretched-link" href="***REMOVED*** echo get_home_url(); ?>/support/presentation/">
            <i class="fas fa-tv fa-3x pt-1 pb-3"></i>
            <h3 class="card-text">Presentation Support</h3>
            <p class="card-text">Projection Systems, Mirroring TVs, Projectors, etc.</p>
          </a>
        </div>
      </div>

      <div class="col pb-1">
        <div class="card text-white bg-tsd h-100">
          <a class="card-body cw-link stretched-link" href="***REMOVED*** echo get_home_url(); ?>/support/printing/">
            <i class="fas fa-file-export fa-3x pt-1 pb-3"></i>
            <h3 class="card-text">Copier/Printer Support</h3>
            <p class="card-text">Konica Minolta copiers, eFax, 3D printers, scanners, etc.</p>
          </a>
        </div>
      </div>

      <div class="col pb-1">
        <div class="card text-white bg-tsd h-100">
          <a class="card-body cw-link stretched-link" href="***REMOVED*** echo get_home_url(); ?>/support/access/">
            <i class="fa fa-key fa-3x pt-1 pb-3"></i>
            <h3 class="card-text">Access Support</h3>
            <p class="card-text">Login issues, password reset, new accounts, network connectivity, web filtering, etc.</p>
          </a>
        </div>
      </div>
    </div><!-- .row -->

    <div class="row text-center">
      <div class="col mt-4 pb-1">
        <div class="card text-white bg-tsd h-100">
          <a class="card-body cw-link stretched-link" href="***REMOVED*** echo get_home_url(); ?>/support/computer/">
            <i class="fas fa-laptop fa-3x pt-2 pb-3"></i>
            <h4 class="card-text">Computer Support</h4>
            <p class="card-text">Computers, Chromebooks, iPads, etc.</p>
          </a>
        </div>
      </div>

      <div class="col mt-4 pb-1">
        <div class="card text-white bg-tsd h-100">
          <a class="card-body cw-link stretched-link" href="***REMOVED*** echo get_home_url(); ?>/support/telecom/">
            <i class="fa fa-phone fa-3x pt-2 pb-3"></i>
            <h4 class="card-text">Telecom Support</h4>
            <p class="card-text">District Phone and Voicemail</p>
          </a>
        </div>
      </div>

      <div class="col mt-4 pb-1">
        <div class="card text-white bg-tsd h-100">
          <a class="card-body cw-link stretched-link" href="***REMOVED*** echo get_home_url(); ?>/support/intercom/">
            <i class="fas fa-volume-up fa-3x pt-2 pb-3"></i>
            <h4 class="card-text">Intercom Support</h4>
            <p class="card-text">Intercom, clocks, bells, etc.</p>
          </a>
        </div>
      </div>

      <div class="col mt-4 pb-1">
        <div class="card text-white bg-tsd h-100">
          <a class="card-body cw-link stretched-link" href="***REMOVED*** echo get_home_url(); ?>/support/software/">
            <i class="fa fa-save fa-3x pt-2 pb-3"></i>
            <h4 class="card-text">Software Support</h4>
            <p class="card-text">Clever, G Suite, Chrome, Infinite Campus, etc.</p>
          </a>
        </div>
      </div>
  </div>
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
<?
***REMOVED******REMOVED***endwhile; // End of the loop.
***REMOVED******REMOVED***?>

***REMOVED******REMOVED***</main><!-- #main -->
***REMOVED***</div><!-- #primary -->

***REMOVED***
get_footer();
