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

if (!is_user_logged_in()) {
***REMOVED***header('Location: ' . wp_login_url( get_permalink() ) );
***REMOVED***

***REMOVED***
***REMOVED*** Search for tickets
***REMOVED***/


$user = bigt_csm_get_current_user();

$headers = array(
  'content-type' => 'application/json',
  'authorization' => 'Bearer ' . bigt_csm_get_token()
);

$query = '{
  "filters": [
    {
      "field": {
        "fieldName": "CustomerRecID",
        "searchTerm": "'.$user->RecID.'"
    ***REMOVED*****REMOVED*****REMOVED***
  ***REMOVED*****REMOVED*****REMOVED***
  ]
***REMOVED***';

$raw_results = wp_remote_post('https://thompson.cherwellondemand.com/CherwellAPI/api/V1/object/Incident/search?page=1&pageSize=100&api_key='.get_theme_mod('cw_api_key'), array('headers'=>$headers, 'body'=>$query));

$body = json_decode($raw_results['body']);


if (!empty($user->SiteName)) {
***REMOVED***switch ($user->SiteName) {
***REMOVED***  case 'Sarah Milner Elementary School':
***REMOVED******REMOVED***$tech = 'Cortez, Rick A SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Centennial Elementary School':
***REMOVED******REMOVED***$tech = 'Cortez, Rick A SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Berthoud Elementary School':
***REMOVED******REMOVED***$tech = 'Morrissey, Eric';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Berthoud High School':
***REMOVED******REMOVED***$tech = 'Sanchez, Luis A SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'BF Kitchen Elementary School':
***REMOVED******REMOVED***$tech = 'Cortez, Rick A SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Big Thompson Elementary School':
***REMOVED******REMOVED***$tech = 'Morrissey, Eric';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Bill Reed Middle School':
***REMOVED******REMOVED***$tech = 'Scott, Denise M SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Carrie Martin Elementary School':
***REMOVED******REMOVED***$tech = 'Morrissey, Eric';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Conrad Ball Middle School':
***REMOVED******REMOVED***$tech = 'Cordova, Elaine M SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Cottonwood Plains Elementary School':
***REMOVED******REMOVED***$tech = 'Gibbons, Jake D SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Coyote Ridge Elementary School':
***REMOVED******REMOVED***$tech = 'Rosenberger, Polly P SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Early Childhood Center':
***REMOVED******REMOVED***$tech = 'Beall, Matt B SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Ferguson High School':
***REMOVED******REMOVED***$tech = 'Cordova, Elaine M SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Garfield Elementary School':
***REMOVED******REMOVED***$tech = 'Rosenberger, Polly P SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Ivy Stockwell Elementary School':
***REMOVED******REMOVED***$tech = 'Scott, Denise M SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Laurene Edmondson Elementary School':
***REMOVED******REMOVED***$tech = 'Gibbons, Jake D SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Lincoln Elementary School':
***REMOVED******REMOVED***$tech = 'Morrissey, Eric';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Loveland High School':
***REMOVED******REMOVED***$tech = 'Cordova, Elaine M SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Lucile Erwin Middle School':
***REMOVED******REMOVED***$tech = 'Cole, Suzanne E SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Mary Blair Elementary School':
***REMOVED******REMOVED***$tech = 'Ruhle, Wachara M SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Monroe Elementary School':
***REMOVED******REMOVED***$tech = 'Cortez, Rick A SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Mountain View High School':
***REMOVED******REMOVED***$tech = 'Sanchez, Luis A SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Namaqua Elementary School':
***REMOVED******REMOVED***$tech = 'Ruhle, Wachara M SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Ponderosa Elementary School':
***REMOVED******REMOVED***$tech = 'Gibbons, Jake D SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Thompson Valley High School':
***REMOVED******REMOVED***$tech = 'Cole, Suzanne E SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Truscott Elementary School':
***REMOVED******REMOVED***$tech = 'Rosenberger, Polly P SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Turner Middle School':
***REMOVED******REMOVED***$tech = 'Scott, Denise M SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Walt Clark Middle School':
***REMOVED******REMOVED***$tech = 'Rosenberger, Polly P SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Winona Elementary School':
***REMOVED******REMOVED***$tech = 'Gibbons, Jake D SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Support Services Center':
***REMOVED******REMOVED***$tech = 'Beall, Matt B SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Administration':
***REMOVED******REMOVED***$tech = 'Beall, Matt B SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Facilities':
***REMOVED******REMOVED***$tech = 'Beall, Matt B SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Van Buren Elementary School':
***REMOVED******REMOVED***$tech = 'Cole, Suzanne E SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Ferguson High HOPE Program':
***REMOVED******REMOVED***$tech = 'Cordova, Elaine M SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Thompson Online Campus':
***REMOVED******REMOVED***$tech = 'Cordova, Elaine M SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'LEAP':
***REMOVED******REMOVED***$tech = 'Sanchez, Luis A SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Community Connections':
***REMOVED******REMOVED***$tech = 'Sanchez, Luis A SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Loveland Classical':
***REMOVED******REMOVED***$tech = 'Beall, Matt B SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'NewVision Charter':
***REMOVED******REMOVED***$tech = 'Beall, Matt B SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Transportation':
***REMOVED******REMOVED***$tech = 'Beall, Matt B SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'High Plains School':
***REMOVED******REMOVED***$tech = 'Ruhle, Wachara M SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Admin - Community Connections':
***REMOVED******REMOVED***$tech = 'Sanchez, Luis A SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Support Service - Innovative Technology':
***REMOVED******REMOVED***$tech = 'Beall, Matt B SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Stansberry Early Childhood':
***REMOVED******REMOVED***$tech = 'Beall, Matt B SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Lincoln Early Childhood':
***REMOVED******REMOVED***$tech = 'Morrissey, Eric';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Admin - Special Education':
***REMOVED******REMOVED***$tech = 'Beall, Matt B SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Harold Ferguson High School':
***REMOVED******REMOVED***$tech = 'Cordova, Elaine M SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Admin - Learning Services':
***REMOVED******REMOVED***$tech = 'Fussman, Chuck S SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Admin - Financial Services':
***REMOVED******REMOVED***$tech = 'Beall, Matt B SSC';
***REMOVED******REMOVED***break;
***REMOVED***  case 'Support Service - Innovative Technology':
***REMOVED******REMOVED***$tech = 'Beall, Matt B SSC';
***REMOVED******REMOVED***break;
***REMOVED***  default:
***REMOVED******REMOVED***$tech = 'Unassigned';
***REMOVED***
***REMOVED*** else {
***REMOVED***$tech = 'Unassigned';
***REMOVED***

//switch ($body->recordCount) {
//  case 0 :
//    $records = 0;
//    break;
//  case 1 :
//    break;
//  default :
//    break;
***REMOVED****REMOVED****REMOVED***
get_header();
?>
<div class="row">
***REMOVED***<header class="col text-center">
***REMOVED******REMOVED******REMOVED*** the_title( '<h2 class="entry-title">', '</h2>' ); ?>
***REMOVED***</header><!-- .entry-header -->
***REMOVED***</div>
    <div class="row mt-3">
      <div class="col pb-1">
  ***REMOVED*****REMOVED*****REMOVED*****REMOVED*****REMOVED*****REMOVED*****REMOVED*** foreach (array_reverse($body->records) as $raw_incident) {
          $incident = json_decode($raw_incident);
          $description = explode( '-----', $incident->Description );
***REMOVED***switch ($incident->Status) {
***REMOVED******REMOVED***case 'Closed' :
***REMOVED******REMOVED******REMOVED***$status_class = 'light';
***REMOVED******REMOVED******REMOVED***break;
***REMOVED******REMOVED***case 'Resolved' :
***REMOVED******REMOVED******REMOVED***$status_class = 'light';
***REMOVED******REMOVED******REMOVED***break;
***REMOVED******REMOVED***case 'Pending' :
***REMOVED******REMOVED******REMOVED***$status_class = 'info';
***REMOVED******REMOVED******REMOVED***break;
***REMOVED******REMOVED***default :
***REMOVED******REMOVED******REMOVED***$status_class = 'tsd';
***REMOVED******REMOVED******REMOVED***break;
***REMOVED***
***REMOVED******REMOVED***  ?>
        <div class="card mb-1">
          <div class="card-header">
            <div class="row">
              <div class="col-2"><a class="btn btn-***REMOVED*** echo $status_class; ?>" href="***REMOVED*** echo get_home_url(); ?>/incident/view/?csmi=***REMOVED*** echo $incident->IncidentID; ?>" >***REMOVED*** echo $incident->IncidentID; ?></a></div>
              <div class="col"><h5 class="mt-2" data-toggle="collapse" data-target="#collapse-***REMOVED*** echo $incident->IncidentID; ?>">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** echo $incident->Subcategory; ?>
***REMOVED******REMOVED******REMOVED******REMOVED***  </h5></div>
              <div class="col-1"><i class="fa fa-sort-down mt-2" data-toggle="collapse" data-target="#collapse-***REMOVED*** echo $incident->IncidentID; ?>"></i></div>
            </div>
          </div>
          <div id="collapse-***REMOVED*** echo $incident->IncidentID; ?>" class="collapse">
            <div class="card-body">
              <p class="card-text">***REMOVED*** echo $description[0]; ?></p>
            </div>
            <div class="card-footer text-muted">
***REMOVED******REMOVED******REMOVED******REMOVED***<div class="row">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="col text-left"><strong>Status</strong>:***REMOVED*****REMOVED*** echo $incident->Status; ?></div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="col text-right">Created at***REMOVED*****REMOVED*** echo $incident->CreatedDateTime; ?></div>
***REMOVED******REMOVED******REMOVED******REMOVED***</div>
            </div>
          </div>
        </div>
  ***REMOVED*****REMOVED*****REMOVED*****REMOVED*****REMOVED*****REMOVED*****REMOVED******REMOVED*****REMOVED*** ?>
      </div>
      <div class="col-md-3">
        <h6 style="font-variant:all-small-caps;">Client</h6>
        <p><strong>***REMOVED*** echo $user->FullName; ?></strong>
        <br>***REMOVED*** echo $user->SiteName; ?></p>

        <h6 style="font-variant:all-small-caps;">Primary Technician</h6>
        <p><strong>***REMOVED*** echo $tech; ?></strong>
        <br>Client Services</p>
      </div>
    </div><!-- .row -->

<div class="row">
***REMOVED***
</div>
***REMOVED***

***REMOVED***
get_footer();
