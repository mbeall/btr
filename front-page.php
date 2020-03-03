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

session_start();
if ( is_user_logged_in() ) {
***REMOVED***$token = bigt_csm_get_token();
***REMOVED***
get_header();
?>

<div class="row text-center">
***REMOVED***<div class="col pb-1">
***REMOVED******REMOVED***<div class="card text-white bg-tsd h-100">
***REMOVED******REMOVED******REMOVED***<div class="card-body cw-link">
***REMOVED******REMOVED******REMOVED******REMOVED***<i class="fas fa-laptop fa-3x pt-1 pb-3"></i>

***REMOVED******REMOVED******REMOVED******REMOVED***<a href="http://itsweb.thompsonschools.org/" class="stretched-link" target="_blank">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<h3 class="card-text">Visit Hardware Store</h3>
***REMOVED******REMOVED******REMOVED******REMOVED***</a><!-- .stretched-link -->
***REMOVED******REMOVED******REMOVED***</div><!-- .card-body -->
***REMOVED******REMOVED***</div><!-- .card -->
***REMOVED***</div><!-- .col -->

***REMOVED***<div class="col pb-1">
***REMOVED******REMOVED***<div class="card text-white bg-tsd h-100">
***REMOVED******REMOVED******REMOVED***<div class="card-body cw-link">
***REMOVED******REMOVED******REMOVED******REMOVED***<i class="fas fa-window-restore fa-3x pt-1 pb-3"></i>

***REMOVED******REMOVED******REMOVED******REMOVED***<a href="https://sites.google.com/thompsonschools.org/tsd-digital-catalog/home" class="stretched-link" target="_blank">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<h3 class="card-text">Visit Digital Resources Catalog</h3>
***REMOVED******REMOVED******REMOVED******REMOVED***</a><!-- .stretched-link -->
***REMOVED******REMOVED******REMOVED***</div><!-- .card-body -->
***REMOVED******REMOVED***</div><!-- .card -->
***REMOVED***</div><!-- .col -->

***REMOVED***<div class="col pb-1">
***REMOVED******REMOVED***<div class="card text-white bg-orange h-100">
***REMOVED******REMOVED******REMOVED***<div class="card-body cw-link">
***REMOVED******REMOVED******REMOVED******REMOVED***<i class="fas fa-tools fa-3x pt-1 pb-3"></i>
***REMOVED******REMOVED******REMOVED******REMOVED***<a href="***REMOVED*** echo esc_url( get_home_url( null, 'support' ) ); ?>" class="stretched-link"><h3 class="card-text">Request Technical Support</h3></a>
***REMOVED******REMOVED******REMOVED***</div><!-- .card-body -->
***REMOVED******REMOVED***</div><!-- .card -->
***REMOVED***</div><!-- .col -->

***REMOVED***<div class="col pb-1">
***REMOVED******REMOVED***<div class="card text-white bg-tsd h-100">
***REMOVED******REMOVED******REMOVED***<div class="card-body cw-link">
***REMOVED******REMOVED******REMOVED******REMOVED***<i class="fas fa-chalkboard-teacher fa-3x pt-1 pb-3"></i>

***REMOVED******REMOVED******REMOVED******REMOVED***<a href="https://docs.google.com/document/d/10tQCpe5qgCnAWLNrhP_36S--hlAI6qkUhtrszttHwZU/edit?usp=sharing"
***REMOVED******REMOVED******REMOVED******REMOVED***class="stretched-link" target="_blank">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<h3 class="card-text">Request <br>ITS <br>Training</h3>
***REMOVED******REMOVED******REMOVED******REMOVED***</a><!-- .stretched-link -->
***REMOVED******REMOVED******REMOVED***</div><!-- .card-body -->
***REMOVED******REMOVED***</div><!-- .card -->
***REMOVED***</div><!-- .col -->

***REMOVED***<div class="col pb-1">
***REMOVED******REMOVED***<div class="card text-white bg-tsd h-100">
***REMOVED******REMOVED******REMOVED***<div class="card-body cw-link">
***REMOVED******REMOVED******REMOVED******REMOVED***<i class="fas fa-list fa-3x pt-1 pb-3"></i>

***REMOVED******REMOVED******REMOVED******REMOVED***<a href="***REMOVED*** echo esc_url( get_home_url( null, 'my-tickets' ) ); ?>" class="stretched-link">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<h3 class="card-text">View <br>My <br>Tickets</h3>
***REMOVED******REMOVED******REMOVED******REMOVED***</a>
***REMOVED******REMOVED******REMOVED***</div><!-- .card-body -->
***REMOVED******REMOVED***</div><!-- .card -->
***REMOVED***</div><!-- .col -->
</div><!-- .row -->

<div class="row text-center">
***REMOVED***<div class="col mt-4 pb-1">
***REMOVED******REMOVED***<div class="card text-white bg-tsd">
***REMOVED******REMOVED******REMOVED***<div class="card-body cw-link">
***REMOVED******REMOVED******REMOVED******REMOVED***<a href="***REMOVED*** echo esc_url( get_home_url( null, 'support/surplus' ) ); ?>" class="stretched-link"><h3 class="card-text">Request Pickup of Unused Equipment</h3></a>
***REMOVED******REMOVED******REMOVED***</div><!-- .card-body -->
***REMOVED******REMOVED***</div><!-- .card -->
***REMOVED***</div><!-- .col -->

***REMOVED***<div class="col mt-4 pb-1">
***REMOVED******REMOVED***<div class="card cw-card-outline">
***REMOVED******REMOVED******REMOVED***<div class="card-body card-tsd-outline">
***REMOVED******REMOVED******REMOVED******REMOVED***<a class="stretched-link" href="***REMOVED*** echo esc_url( get_home_url( null, 'sspr' ) ); ?>">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<h3 class="card-text">Manage Password</h3>
***REMOVED******REMOVED******REMOVED******REMOVED***</a><!-- .stretched-link -->
***REMOVED******REMOVED******REMOVED***</div><!-- .card-body -->
***REMOVED******REMOVED***</div><!-- .card -->
***REMOVED***</div><!-- .col -->
</div><!-- .row -->

***REMOVED***
get_footer();
