***REMOVED***
***REMOVED***
***REMOVED*** My Tickets Page
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

session_start();

***REMOVED***
***REMOVED*** If user is not logged in, send user to login and redirect back to current page upon successful login.
***REMOVED***/
if ( ! is_user_logged_in() ) {
***REMOVED***header( 'Location: ' . wp_login_url( get_permalink() ) );
***REMOVED***

***REMOVED***
***REMOVED*** Search for tickets where the current user is listed as the Customer
***REMOVED***/
$user           = bigt_csm_get_current_user();
$user_id        = $user->RecID; // phpcs:ignore WordPress.NamingConventions.ValidVariableName
$site_name      = $user->SiteName; // phpcs:ignore WordPress.NamingConventions.ValidVariableName
$user_full_name = $user->FullName; // phpcs:ignore WordPress.NamingConventions.ValidVariableName

$headers = array(
***REMOVED***'content-type'  => 'application/json',
***REMOVED***'authorization' => 'Bearer ' . bigt_csm_get_token(),
);

$query = '{
***REMOVED***"filters": [{
***REMOVED******REMOVED***"field": {
***REMOVED******REMOVED******REMOVED***"fieldName": "CustomerRecID",
***REMOVED******REMOVED******REMOVED***"searchTerm": "' . $user_id . '"
***REMOVED***
***REMOVED***]
***REMOVED***';

$raw_results = wp_remote_post(
***REMOVED***'https://thompson.cherwellondemand.com/CherwellAPI/api/V1/object/Incident/search?page=1&pageSize=100&api_key=' . get_theme_mod( 'cw_api_key' ),
***REMOVED***array(
***REMOVED******REMOVED***'headers' => $headers,
***REMOVED******REMOVED***'body'    => $query,
***REMOVED***)
);

$body = json_decode( $raw_results['body'] );


$tech = ! empty( $site_name ) ? bigt_get_tech_by_site( $site_name ) : 'Unassigned';

get_header();
?>

<div class="row">
***REMOVED***<header class="col text-center" id="entry-header">
***REMOVED******REMOVED******REMOVED*** the_title( '<h2 class="entry-title">', '</h2>' ); ?>
***REMOVED***</header><!-- #entry-header -->
</div><!-- .row -->

<div class="row mt-3">
***REMOVED***<div class="col pb-1">
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***foreach ( array_reverse( $body->records ) as $raw_incident ) {
***REMOVED******REMOVED******REMOVED***$incident            = json_decode( $raw_incident );
***REMOVED******REMOVED******REMOVED***$incident_id         = $incident->IncidentID; // phpcs:ignore WordPress.NamingConventions.ValidVariableName
***REMOVED******REMOVED******REMOVED***$i_subcategory       = $incident->Subcategory; // phpcs:ignore WordPress.NamingConventions.ValidVariableName
***REMOVED******REMOVED******REMOVED***$i_status            = $incident->Status; // phpcs:ignore WordPress.NamingConventions.ValidVariableName
***REMOVED******REMOVED******REMOVED***$i_created_date_time = $incident->CreatedDateTime; // phpcs:ignore WordPress.NamingConventions.ValidVariableName
***REMOVED******REMOVED******REMOVED***$i_description       = explode( '-----', $incident->Description ); // phpcs:ignore WordPress.NamingConventions.ValidVariableName

***REMOVED******REMOVED******REMOVED***switch ( $incident->Status ) { // phpcs:ignore WordPress.NamingConventions.ValidVariableName
***REMOVED******REMOVED******REMOVED******REMOVED***case 'Closed':
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***$status_class = 'light';
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***break;
***REMOVED******REMOVED******REMOVED******REMOVED***case 'Resolved':
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***$status_class = 'light';
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***break;
***REMOVED******REMOVED******REMOVED******REMOVED***case 'Pending':
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***$status_class = 'info';
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***break;
***REMOVED******REMOVED******REMOVED******REMOVED***default:
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***$status_class = 'tsd';
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***break;
***REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***?>

***REMOVED******REMOVED******REMOVED***<div class="card mb-1">
***REMOVED******REMOVED******REMOVED******REMOVED***<div class="card-header">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="row">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="col-2">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<a class="btn btn-***REMOVED*** echo esc_attr( $status_class ); ?>" href="***REMOVED*** echo esc_url( get_home_url( '/incident/view/?csmi=' . esc_attr( $incident_id ) ) ); ?>" >***REMOVED*** echo esc_html( $incident_id ); ?></a>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- .col-2 -->

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="col">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<h5 class="mt-2" data-toggle="collapse" data-target="#collapse-***REMOVED*** echo esc_attr( $incident_id ); ?>">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** echo esc_html( $i_subcategory ); ?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</h5>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- .col -->

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="col-1">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<i class="fa fa-sort-down mt-2" data-toggle="collapse" data-target="#collapse-***REMOVED*** echo esc_attr( $incident_id ); ?>"></i>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- .col-1 -->
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- .row -->
***REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- .card-header -->

***REMOVED******REMOVED******REMOVED******REMOVED***<div id="collapse-***REMOVED*** echo esc_attr( $incident_id ); ?>" class="collapse">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="card-body">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<p class="card-text">***REMOVED*** echo esc_html( $i_description[0] ); ?></p>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- .card-body -->

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="card-footer text-muted">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="row">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="col text-left"><strong>Status</strong>:***REMOVED*****REMOVED*** echo esc_html( $i_status ); ?></div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="col text-right">Created at***REMOVED*****REMOVED*** echo esc_html( $i_created_date_time ); ?></div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- .row -->
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- .card-footer -->
***REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- .collapse -->
***REMOVED******REMOVED******REMOVED***</div><!-- .card -->
***REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*** // End foreach. ?>
***REMOVED***</div>

***REMOVED***<div class="col-md-3">
***REMOVED******REMOVED***<h6 style="font-variant:all-small-caps;">Client</h6>
***REMOVED******REMOVED***<p><strong>***REMOVED*** echo esc_html( $user_full_name ); ?></strong>
***REMOVED******REMOVED***<br>***REMOVED*** echo esc_html( $site_name ); ?></p>

***REMOVED******REMOVED***<h6 style="font-variant:all-small-caps;">Primary Technician</h6>
***REMOVED******REMOVED***<p><strong>***REMOVED*** echo esc_html( $tech ); ?></strong>
***REMOVED******REMOVED***<br>Client Services</p>
***REMOVED***</div>
</div><!-- .row -->

***REMOVED***
get_footer();
