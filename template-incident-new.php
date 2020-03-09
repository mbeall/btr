***REMOVED***
***REMOVED***
* Template Name: New Incident
*/

session_start();

if (!is_user_logged_in()) {
***REMOVED***header('Location: ' . wp_login_url( get_home_url() ) );
***REMOVED***

$csm_user = bigt_csm_get_current_user();

if (false === $csm_user) {
***REMOVED***$attempt_id = uniqid();
***REMOVED***$_SESSION[$attempt_id] = $_POST;
***REMOVED***header('Location: ' . get_home_url() . '/support/' . $_POST['category'] . '/?error=user&attempt=' . $attempt_id );
***REMOVED***

$mbui = uniqid();

$site = !empty($_POST['site']) ? filter_var($_POST['site'], FILTER_SANITIZE_STRING) : 'Unassigned';
$description = !empty($_POST['description']) ? filter_var( $_POST['description'], FILTER_SANITIZE_STRING ) : 'No description specified by user';

$urgency = (!empty($_POST['urgency']) && 'true' == $_POST['urgency']) ? true : false;
$scope = (!empty($_POST['scope']) && 'many' == $_POST['scope']) ? true : false;


if (!empty($_POST['category'])) {
***REMOVED***switch ($_POST['category']) {
***REMOVED******REMOVED***case 'presentation':
***REMOVED******REMOVED***  $service = array( 'New Presentation', 'New Presentation Incident' );
***REMOVED******REMOVED***  break;
***REMOVED******REMOVED***case 'printing':
***REMOVED******REMOVED***  $service = array( 'New Printing', 'New Printing Incident' );
***REMOVED******REMOVED***  break;
***REMOVED******REMOVED***case 'access':
***REMOVED******REMOVED***  $service = array( 'New Access', 'New Access Incident' );
***REMOVED******REMOVED***  break;
***REMOVED******REMOVED***case 'computer':
***REMOVED******REMOVED***  $service = array( 'New Computer', 'New Computer Incident' );
***REMOVED******REMOVED***  break;
***REMOVED******REMOVED***case 'telecom':
***REMOVED******REMOVED***  $service = array( 'New Telecom', 'New Telecom Incident' );
***REMOVED******REMOVED***  break;
***REMOVED******REMOVED***case 'intercom':
***REMOVED******REMOVED***  $service = array( 'New Intercom', 'New Intercom Incident' );
***REMOVED******REMOVED***  break;
***REMOVED******REMOVED***case 'software':
***REMOVED******REMOVED***  $service = array( 'New Software', 'New Software Incident' );
***REMOVED******REMOVED***  break;
***REMOVED******REMOVED***case 'surplus':
***REMOVED******REMOVED***  $service = array( 'Removal', 'Removal' );
***REMOVED******REMOVED***  break;
***REMOVED******REMOVED***default:
***REMOVED******REMOVED***  $service = array( 'New Computer', 'New Computer Incident' );
***REMOVED******REMOVED***  break;
***REMOVED***
***REMOVED*** else {
***REMOVED***$service = array( 'New Computer', 'New Computer Incident' );
***REMOVED***

$category = $service[0];
$subcategory = $service[1];

$priority = 7;
switch ($_POST['category']) {
***REMOVED***case 'presentation':
***REMOVED***  $priority = $priority - 1;
***REMOVED***  break;
***REMOVED***case 'printing':
***REMOVED***  $priority = $priority - 1;
***REMOVED***  break;
***REMOVED***case 'access':
***REMOVED***  $priority = $priority - 1;
***REMOVED***  break;
***REMOVED***case 'computer':
***REMOVED***  $priority = $priority - 1;
***REMOVED***  break;
***REMOVED***case 'telecom':
***REMOVED***  $priority = $priority - 2;
***REMOVED***  break;
***REMOVED***case 'intercom':
***REMOVED***  $priority = $priority - 3;
***REMOVED***  break;
***REMOVED***default:
***REMOVED***  $priority = $priority - 0;
***REMOVED***  break;
***REMOVED***
switch ($urgency) {
***REMOVED***case true:
***REMOVED***  $priority = $priority - 1;
***REMOVED***  break;
***REMOVED***default:
***REMOVED***  $priority = $priority - 0;
***REMOVED***  break;
***REMOVED***
switch ($scope) {
***REMOVED***case true:
***REMOVED***  $priority = $priority - 1;
***REMOVED***  break;
***REMOVED***default:
***REMOVED***  $priority = $priority - 0;
***REMOVED***  break;
***REMOVED***

if (!empty($site)) {
***REMOVED***switch ($site) {
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
***REMOVED***  default:
***REMOVED******REMOVED***$tech = 'Unassigned';
***REMOVED***
***REMOVED*** else {
***REMOVED***$tech = 'Unassigned';
***REMOVED***

$description = $description . '<br>-----<br>This incident was submitted';
if (!empty($_POST['asset_number'])) {
  $description = $description . ' about asset ' . filter_var( $_POST['asset_number'], FILTER_SANITIZE_STRING );
***REMOVED***
if (!empty($_POST['room'])) {
***REMOVED***$room = filter_var($_POST['room'], FILTER_SANITIZE_STRING);
***REMOVED***$description = $description . ' from ' . $site . ' Room ' . $room;
***REMOVED*** else {
***REMOVED***$description = $description . ' from ' . $site;
***REMOVED***
$description = $description . '.';
if (!empty($_POST['software'])) {
***REMOVED***$software = filter_var($_POST['software'], FILTER_SANITIZE_STRING);
***REMOVED***$description = $description . ' The client is requesting assistance with ' . $software . '.';
***REMOVED***
if (!empty($_POST['preferred_contact']) || !empty($_POST['contact_custom'])) {
  $description = $description . ' Please follow-up with the client at ';
  if (!empty($_POST['contact_custom'])) {
    $description = $description . filter_var( $_POST['contact_custom'], FILTER_SANITIZE_STRING );
***REMOVED*****REMOVED*****REMOVED*** else {
    $description = $description . filter_var( $_POST['preferred_contact'], FILTER_SANITIZE_STRING );
***REMOVED*****REMOVED*****REMOVED***
  $description = $description . '.';
***REMOVED***

$description = $description . '<br><br>MBUI: ' . $mbui;

$headers = array(
  'content-type' => 'application/json',
  'authorization' => 'Bearer ' . bigt_csm_get_token()
);

$_service = ('Removal' == $category) ? 'Removal' : 'New Incident';

$data = array(
  'Customer ID' => $csm_user->RecID,
  'createdBy' => $csm_user->FullName,
  'createdByID' => $csm_user->RecID,
  'ownedBy' => $tech,
  'ownedByTeam' => 'Client Services',
  'description' => $description,
  'priority' => $priority,
  'source' => 'ITS Help Desk',
  'service' => $_service,
  'category' => $category,
  'subcategory' => $subcategory,
  'site' => $site
);

$body = json_encode($data);
print('<pre>' . print_r($body, true) . '</pre>');

$response = wp_remote_post('https://thompson.cherwellondemand.com/CherwellAPI/api/V1/object/Incident?api_key='.get_theme_mod('cw_api_key'), array('headers' => $headers, 'body' => $body));

if ( 200 == $response['response']['code'] ) {
***REMOVED***header('Location: '. get_home_url() . '/support/progress/?mbui=' . $mbui );
***REMOVED*** else {
***REMOVED***print( '<pre>' . print_r($response, true) . '</pre>' );
***REMOVED***

