***REMOVED***
***REMOVED***
***REMOVED*** The template for the Roadmap page
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

get_header();
?>
<div class="container mt-4">
  <div class="row">
    <main id="primary" class="site-main col-12 col-md-8">

***REMOVED*****REMOVED*****REMOVED*****REMOVED*****REMOVED*****REMOVED*****REMOVED***
***REMOVED******REMOVED***while ( have_posts() ) :
***REMOVED******REMOVED******REMOVED***the_post();

***REMOVED******REMOVED******REMOVED***get_template_part( 'template-parts/content', 'page' );

***REMOVED******REMOVED******REMOVED***// If comments are open or we have at least one comment, load up the comment template.
***REMOVED******REMOVED******REMOVED***if ( comments_open() || get_comments_number() ) :
***REMOVED******REMOVED******REMOVED******REMOVED***comments_template();
***REMOVED******REMOVED******REMOVED******REMOVED***

***REMOVED******REMOVED***endwhile; // End of the loop.
***REMOVED******REMOVED***?>

    </main><!-- #main -->

    <aside id="secondary" class="col-12 col-md-4">
      <a class="btn btn-outline-purple btn-block" href="https://docs.google.com/forms/d/e/1FAIpQLSc1atSLcC19YfF5sTAlunrTec07UMsooEDUCD6c6klHlpkvuA/viewform" target="_blank">Report an Issue / Feature Request</a>
      <hr>
      <h4>Release Schedule</h4>
      <figure class="figure mb-3">
        <table class="table table-sm table-hover table-striped mb-2">
          <thead class="thead-dark text-center">
            <tr>
              <th scope="col">Release</th>
              <th scope="col">Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Big Thompson River 1.0</td>
              <td>February 14, 2020</td>
            </tr>
            <tr>
              <td>Phillip 1.0-Alpha</td>
              <td>June 17, 2020</td>
            </tr>
            <tr>
              <td>Phillip 1.0-Beta</td>
              <td>July 9, 2020*</td>
            </tr>
            <tr>
              <td>Phillip 1.0-RC</td>
              <td>July 23, 2020*</td>
            </tr>
            <tr>
              <td>Phillip 1.0</td>
              <td>August 6, 2020*</td>
            </tr>
            <tr>
              <td>Big Thompson River 2.0</td>
              <td>September 3, 2020*</td>
            </tr>
            <tr>
              <td>Phillip 1.1</td>
              <td>October 1, 2020*</td>
            </tr>
            <tr>
              <td>Big Thompson River 2.1</td>
              <td>October 29, 2020*</td>
            </tr>
            <tr>
              <td>Phillip 1.2</td>
              <td>December 10, 2020*</td>
            </tr>
          </tbody>
        </table>
        <figcaption class="figure-caption text-center">*Planned</figcaption>
      </figure>
      <hr>
      <h5>Known Issues</h5>
      <ul class="pl-4">
        <li>Handling of token expiration is not consistent, though v1.0.0-alpha2 tried to address this issue</li>
      </ul>
    </aside><!-- #secondary -->

  </div><!-- .row -->
</div><!-- .container -->
***REMOVED***
get_footer();

