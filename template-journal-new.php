***REMOVED***
***REMOVED***
* Template Name: New Journal Entry
*/
session_start();
$incident_id = !empty($_POST['incident_id']) ? filter_var($_POST['incident_id'], FILTER_SANITIZE_STRING) : false;
$details = !empty($_POST['details']) ? sanitize_text_field($_POST['details']) : false;
$csmi = !empty($_POST['csmi']) ? filter_var($_POST['csmi'], FILTER_SANITIZE_NUMBER_INT) : false;
$csm_user = bigt_csm_get_current_user();
if (is_user_logged_in()) {
***REMOVED***if (!empty($incident_id) && !empty($details)) {
***REMOVED******REMOVED***$journal = bigt_csm_add_journal( $incident_id, $details, $csm_user );
***REMOVED*** else {
***REMOVED******REMOVED***$journal = false;
***REMOVED***
***REMOVED*** else {
***REMOVED***$journal = false;
***REMOVED***

if (false != $journal) {
***REMOVED***header('Location: '. get_home_url() . '/incident/view/?csmi=' . $csmi );
***REMOVED*** else {
***REMOVED***echo 'Journal save failed.';
***REMOVED***
