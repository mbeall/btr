***REMOVED***
***REMOVED***
* Template Name: Submission Progress
*/
session_start();

$mbui = filter_var( $_GET['mbui'], FILTER_SANITIZE_STRING );

header('Refresh: 10; URL='.get_home_url().'/incident/view/?mbui='.$mbui);
get_header();


?>

  <div class="container text-center">
***REMOVED***  <div class="mt-2">
***REMOVED******REMOVED***  <i class="fas fa-spinner fa-2x fa-spin" style="color:#333399"></i>
***REMOVED***  </div>
    <div class="mt-2 alert alert-info">Your information has been saved. Please wait a moment while we process your request.</div>
  </div>

***REMOVED*** get_footer(); ?>

