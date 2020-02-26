***REMOVED***
***REMOVED***
* Template Name: View Incident
*/
session_start();
if (!is_user_logged_in()) {
***REMOVED***header('Location: ' . wp_login_url( get_site_url() .'/incident/view/?csmi=' . $_GET['csmi'] ) );
***REMOVED***
get_header();

$csm_user = bigt_csm_get_current_user();

if (!empty($_GET['mbui']) || !empty($_GET['csmi'])) {
***REMOVED***
  if (!empty($_GET['csmi'])) {
    $incident = bigt_csm_get_incident(filter_var($_GET['csmi'], FILTER_SANITIZE_NUMBER_INT));
***REMOVED***
***REMOVED***$comment_list = bigt_csm_get_incident_comment_list(filter_var($_GET['csmi'], FILTER_SANITIZE_NUMBER_INT));

***REMOVED*****REMOVED*****REMOVED*** else {
    $incident = bigt_csm_get_incident( filter_var( $_GET['mbui'], FILTER_SANITIZE_STRING ), 'mbui' );
***REMOVED*****REMOVED*****REMOVED***
***REMOVED***

$description = explode( '-----', str_replace( "\r", '<br>', $incident->Description) );

if (false == $incident) : ?>
***REMOVED***<div class="row">
***REMOVED******REMOVED***<div class="col">
***REMOVED******REMOVED******REMOVED***<div class="alert alert-danger">
***REMOVED******REMOVED******REMOVED******REMOVED***<strong>Error.</strong> This incident does not exist or session has expired. <a href="***REMOVED*** echo get_home_url(); ?>">Try again</a>
***REMOVED******REMOVED******REMOVED***</div>
***REMOVED******REMOVED***</div>
***REMOVED***</div>***REMOVED***
***REMOVED***get_footer();
***REMOVED***exit;
elseif ($_GET['mbui']) : 
***REMOVED***wp_mail( $csm_user->Email, "Incident $incident->IncidentID has been created", "<h2 style='padding:1em;background:#333399;text-align:center;color:#fff;'>Incident $incident->IncidentID</h2><p><strong>Description</strong>: $description[0]</p><p>We are pleased to inform you that your request has been submitted to the ITS Help Desk. Your record ID is $incident->IncidentID.  Please retain this number for reference purposes.</p><p>For minor issues and additional support, call the ITS Help Desk at (970) 613-7777 or go online to view more details: <a href='".get_home_url()."/incident/view/?csmi=$incident->IncidentID'>Incident $incident->IncidentID</a>.</p><p>This is an automatically generated message from the ITS Help Desk. Replies are not monitored or answered.</p>"); ?>
***REMOVED***<div class="row">
***REMOVED******REMOVED***<div class="col">
***REMOVED******REMOVED******REMOVED***<div class="alert alert-success">
***REMOVED******REMOVED******REMOVED******REMOVED***<strong>Success.</strong> Thank you for submitting this technical support request. Check your email for a copy of this incident. We will assist you as soon as possible.
***REMOVED******REMOVED******REMOVED***</div>
***REMOVED******REMOVED***</div>
***REMOVED***</div>
***REMOVED******REMOVED*****REMOVED*** ?>
***REMOVED***
$last_updated_by = ('ITS Help Desk API' == $incident->LastModBy) ? $incident->CustomerDisplayName : $incident->LastModBy;?> 

    <div class="row mt-3">
      <div class="col">
***REMOVED******REMOVED***  <h3>
***REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** echo $incident->IncidentType; ?>***REMOVED*****REMOVED*** echo $incident->IncidentID; ?> <span class="badge badge-secondary align-bottom">***REMOVED*** echo $incident->Status; ?></span>
***REMOVED******REMOVED***  </h3>
***REMOVED******REMOVED***  <p class="mb-0">***REMOVED*** echo $incident->Subcategory; ?></p>
***REMOVED******REMOVED***</div>
    </div>
    <div class="row mt-3">
      <div class="col pb-1">
***REMOVED******REMOVED***  <div class="card mb-4">
***REMOVED******REMOVED******REMOVED***  <div class="card-body">
***REMOVED******REMOVED******REMOVED******REMOVED***  <p class="mb-0">***REMOVED*** echo $description[0]; ?></p>
***REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED***  <div class="card-footer">
***REMOVED******REMOVED******REMOVED******REMOVED***  <div class="row">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div class="col-3 text-left">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <a class="btn btn-info" href="#add_note"><i class="fas fa-plus-square"></i> Add Note</a>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div class="col-9 text-muted text-right mt-2">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  Incident created at***REMOVED*****REMOVED*** echo $incident->CreatedDateTime; ?> by***REMOVED*****REMOVED*** echo $incident->CreatedBy; ?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  </div> 
***REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** foreach ($comment_list->comments as $_comment) : ?>
***REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** $comment = bigt_csm_get_journal( $_comment->recId ); ?>
***REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** // print('<pre>' . print_r($comment, true) . '</pre>'); ?>
***REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** if ('Journal - Mail History' == $comment->JournalTypeName || 'Journal - Note' == $comment->JournalTypeName) : ?>
***REMOVED******REMOVED***  <div class="row mb-4">
***REMOVED******REMOVED******REMOVED***  
***REMOVED******REMOVED******REMOVED***  <div class="col-3">
***REMOVED******REMOVED******REMOVED******REMOVED***  <p>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <strong>***REMOVED*** echo $comment->CreatedBy; ?></strong><br>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** echo $comment->CreatedDateTime; ?>
***REMOVED******REMOVED******REMOVED******REMOVED***  </p>
***REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED***  
***REMOVED******REMOVED******REMOVED***  <div class="col">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** if ('Journal - Note' == $comment->JournalTypeName) : ?>
***REMOVED******REMOVED******REMOVED******REMOVED***  <div class="card border-info">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div class="card-header border-info text-info">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <strong><i class="fas fa-comment"></i> Note</strong>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div class="card-body">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <p class="mb-0">***REMOVED*** echo str_replace( "\r", '<br>', $comment->Details); ?></p>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED******REMOVED*****REMOVED*** ?>
***REMOVED******REMOVED******REMOVED******REMOVED***  
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** if ('Journal - Mail History' == $comment->JournalTypeName) : ?>
***REMOVED******REMOVED******REMOVED******REMOVED***  <div class="card border-secondary">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div class="card-header border-secondary text-secondary" data-toggle="collapse" data-target="#collapse-***REMOVED*** echo $comment->RecID; ?>">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="row">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div class="col"><strong>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <i class="fas fa-envelope"></i> Email
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  </strong></div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div class="col-1"><i class="fa fa-sort-down" data-toggle="collapse" data-target="#collapse-***REMOVED*** echo $comment->RecID; ?>"></i></div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div id="collapse-***REMOVED*** echo $comment->RecID; ?>" class="collapse">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div class="card-body" id="collapse-***REMOVED*** echo $comment->RecID; ?>">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <p class="mb-0">***REMOVED*** echo str_replace( "\r", '<br>', $comment->Details); ?></p>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED******REMOVED*****REMOVED*** ?>
***REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED******REMOVED*****REMOVED*** ?>
***REMOVED*****REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED***  //print( '<p>Journal</p><pre>' . print_r($comment, true) . '</pre>'); ?>

***REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** endforeach; ?>
***REMOVED******REMOVED***  <div class="row mb-2">
***REMOVED******REMOVED******REMOVED***  <div class="col">
***REMOVED******REMOVED******REMOVED******REMOVED***  <div class="card border-info" id="add_note">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div class="card-header bg-info text-white"><strong><i class="fas fa-plus-square"></i>&emsp;Add Note</strong></div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <form action="***REMOVED*** echo get_home_url(); ?>/journal-new/" method="post">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <input type="hidden" name="incident_id" value="***REMOVED*** echo $incident->RecID; ?>">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <input type="hidden" name="csmi" value="***REMOVED*** echo $incident->IncidentID; ?>">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div class="card-body">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div class="form-group">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<textarea class="form-control" id="details" name="details" rows="3" required></textarea>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <div class="card-footer text-right">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <button type="submit" class="btn btn-info">Submit</button>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  </form>
***REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED***  </div>
      </div>
      <div class="col-md-3">***REMOVED******REMOVED***  
        <h6 style="font-variant:all-small-caps;">Client</h6>
        <p><strong>***REMOVED*** echo $incident->CustomerDisplayName; ?></strong>
        <br>***REMOVED*** echo $incident->Site; ?></p>

        <h6 style="font-variant:all-small-caps;">Technician</h6>
        <p><strong>***REMOVED*** echo $incident->OwnedBy; ?></strong>
        <br>***REMOVED*** echo $incident->OwnedByTeam; ?></p>

        <h6 style="font-variant:all-small-caps;">Last Update</h6>
        <p><strong>***REMOVED*** echo $last_updated_by; ?></strong>
        <br>***REMOVED*** echo $incident->LastModifiedDateTime; ?></p>
      </div>
    </div><!-- .row -->

***REMOVED*** get_footer();
