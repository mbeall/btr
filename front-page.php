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
if (is_user_logged_in()) {
***REMOVED***$token = bigt_csm_get_token();
***REMOVED***
get_header();
?>

    <div class="row text-center">
      <div class="col pb-1">
        <div class="card text-white bg-tsd h-100">
          <div class="card-body cw-link">
            <i class="fas fa-laptop fa-3x pt-1 pb-3"></i>
            <a href="http://itsweb.thompsonschools.org/" class="stretched-link" target="_blank">
              <h3 class="card-text">Visit Hardware Store</h3>
            </a>
          </div>
        </div>
      </div>

      <div class="col pb-1">
        <div class="card text-white bg-tsd h-100">
          <div class="card-body cw-link">
            <i class="fas fa-window-restore fa-3x pt-1 pb-3"></i>
            <a href="https://sites.google.com/thompsonschools.org/tsd-digital-catalog/home" class="stretched-link" target="_blank">
              <h3 class="card-text">Visit Digital Resources Catalog</h3>
            </a>
          </div>
        </div>
      </div>

      <div class="col pb-1">
        <div class="card text-white bg-orange h-100">
          <div class="card-body cw-link">
            <i class="fas fa-tools fa-3x pt-1 pb-3"></i>
            <a href="***REMOVED*** echo get_home_url(); ?>/support/" class="stretched-link"><h3 class="card-text">Request Technical Support</h3></a>
          </div>
        </div>
      </div>

      <div class="col pb-1">
        <div class="card text-white bg-tsd h-100">
          <div class="card-body cw-link">
            <i class="fas fa-chalkboard-teacher fa-3x pt-1 pb-3"></i>
            <a href="https://docs.google.com/document/d/10tQCpe5qgCnAWLNrhP_36S--hlAI6qkUhtrszttHwZU/edit?usp=sharing"
               class="stretched-link" target="_blank">
              <h3 class="card-text">Request <br>ITS <br>Training</h3>
            </a>
          </div>
        </div>
      </div>

      <div class="col pb-1">
        <div class="card text-white bg-tsd h-100">
          <div class="card-body cw-link">
            <i class="fas fa-list fa-3x pt-1 pb-3"></i>
            <a href="***REMOVED*** echo get_home_url(); ?>/my-tickets/" class="stretched-link"><h3 class="card-text">View <br>My <br>Tickets</h3></a>
          </div>
        </div>
      </div>
    </div><!-- .row -->
    <div class="row text-center">
      <div class="col mt-4 pb-1">
        <div class="card text-white bg-tsd">
          <div class="card-body cw-link">
***REMOVED******REMOVED***    <a href="***REMOVED*** echo get_home_url(); ?>/support/surplus/" class="stretched-link"><h3 class="card-text">Request Pickup of Unused Equipment</h3></a>
          </div>
        </div>
      </div>
      <div class="col mt-4 pb-1">
        <div class="card cw-card-outline">
          <div class="card-body card-tsd-outline">
            <a class="stretched-link" href="***REMOVED*** echo get_home_url(); ?>/sspr/">
              <h3 class="card-text">Manage Password</h3>
            </a>
          </div>
        </div>
      </div>
    </div>

***REMOVED***
get_footer();
