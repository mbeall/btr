***REMOVED***
***REMOVED***
***REMOVED*** Template Name: Request Support
***REMOVED***/
session_start();
if ( ! is_user_logged_in() ) {
***REMOVED***header( 'Location: ' . wp_login_url( get_permalink() ) );
***REMOVED***

if ( ! empty( $_GET['error'] ) ) {
***REMOVED***if ( 'user' === $_GET['error'] ) {
***REMOVED******REMOVED***$csm_user = false;
***REMOVED*** else {
***REMOVED******REMOVED***$csm_user = bigt_csm_get_current_user();
***REMOVED***
***REMOVED***if ( ! empty( $_GET['attempt'] ) ) {
***REMOVED******REMOVED***$attempt_id = $_GET['attempt'];
***REMOVED******REMOVED***$data       = $_SESSION[ $attempt_id ];
***REMOVED*** else {
***REMOVED******REMOVED***$data = false;
***REMOVED***
***REMOVED*** else {
***REMOVED***$csm_user = bigt_csm_get_current_user();
***REMOVED***$data     = false;
***REMOVED***

get_header();

while ( have_posts() ) :
***REMOVED***the_post();
***REMOVED***global $post;

***REMOVED***switch ( $post->post_name ) {
***REMOVED******REMOVED***case 'surplus':
***REMOVED******REMOVED******REMOVED***$description_label = 'Please describe the unused electronic devices you would like to be picked up.';
***REMOVED******REMOVED******REMOVED***break;
***REMOVED******REMOVED***case 'virtual-meeting':
***REMOVED******REMOVED******REMOVED***$description_label = 'Please describe the virtual meeting and how we can assist you.';
***REMOVED******REMOVED******REMOVED***break;
***REMOVED******REMOVED***default:
***REMOVED******REMOVED******REMOVED***$description_label = 'Please describe the issue you are experiencing.';
***REMOVED***
***REMOVED***?>

<div class="row">
***REMOVED***<header class="col text-center">
***REMOVED******REMOVED******REMOVED*** the_title( '<h1 class="entry-title">', '</h1>' ); ?>
***REMOVED***</header><!-- .entry-header -->
</div><!-- .row -->

***REMOVED******REMOVED*** if ( false === $csm_user ) : ?>
<div class="row mt-4">
***REMOVED***<div class="col">
***REMOVED******REMOVED***<div class="alert alert-danger">
***REMOVED******REMOVED******REMOVED***<strong>User object unavailable.</strong> Please refresh the page or call the ITS Help Desk at (970) 613-7777 to report this error.
***REMOVED******REMOVED***</div>
***REMOVED***</div>
</div>
***REMOVED******REMOVED*****REMOVED*** ?>

***REMOVED******REMOVED*** if ( false !== $data ) : ?>
<div class="row mt-4">
***REMOVED***<div class="col">
***REMOVED******REMOVED***<div class="alert alert-warning">
***REMOVED******REMOVED******REMOVED***<strong>Submission failed.</strong> Something went wrong on our end. Please try again or call the ITS Help Desk at (970) 613-7777 to report this error.
***REMOVED******REMOVED***</div>
***REMOVED***</div>
</div>
***REMOVED******REMOVED******REMOVED*****REMOVED*** ?>

<div class="row mt-4">
***REMOVED***<div class="col pb-1">
***REMOVED******REMOVED***<form action="***REMOVED*** echo get_home_url(); ?>/incident/new/" method="post">
***REMOVED******REMOVED******REMOVED******REMOVED***<input type="hidden" name="category" id="category" value="***REMOVED*** echo $post->post_name; ?>"/>

***REMOVED******REMOVED******REMOVED******REMOVED*** if ( 'virtual-meeting' == $post->post_name ) : ?>

***REMOVED******REMOVED******REMOVED***<div class="form-group form-row">
***REMOVED******REMOVED******REMOVED******REMOVED***<div class="col">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<input type="text" name="meeting_date" required>
***REMOVED******REMOVED******REMOVED******REMOVED***</div>
***REMOVED******REMOVED******REMOVED******REMOVED***<div class="col-2">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<input type="text" name="meeting_time" required>
***REMOVED******REMOVED******REMOVED******REMOVED***</div>
***REMOVED******REMOVED******REMOVED***</div>

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*** ?>

***REMOVED******REMOVED******REMOVED******REMOVED*** if ( 'software' == $post->post_name ) : ?>
***REMOVED******REMOVED******REMOVED******REMOVED***<div class="form-group">
***REMOVED******REMOVED******REMOVED******REMOVED***  <label for="software">Software</label>
***REMOVED******REMOVED******REMOVED******REMOVED***  <input type="text" class="form-control" id="software" name="software" placeholder="Start typing the name of the software" required
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***if ( ! empty( $data['software'] ) ) {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***echo 'value="' . $data['software'] . '"';***REMOVED*****REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** />
***REMOVED******REMOVED******REMOVED******REMOVED***</div>
***REMOVED******REMOVED******REMOVED***<script>
  jQuery( function() {
***REMOVED***var availableTags = [
***REMOVED******REMOVED***'AD Manager',
***REMOVED******REMOVED***'Absence Management (AESOP)',
***REMOVED******REMOVED***'Achieve 3000',
***REMOVED******REMOVED***'Adobe Creative Cloud',
***REMOVED******REMOVED***'AimsWeb Plus',
***REMOVED******REMOVED***'Alpine Achievement',
***REMOVED******REMOVED***'Apple Keynote',
***REMOVED******REMOVED***'Apple Numbers',
***REMOVED******REMOVED***'Apple Pages',
***REMOVED******REMOVED***'Big Ideas (Math)',
***REMOVED******REMOVED***'Blackboard',
***REMOVED******REMOVED***'Business Plus',
***REMOVED******REMOVED***'Clever',
***REMOVED******REMOVED***'Discovery Education',
***REMOVED******REMOVED***'Employee Online',
***REMOVED******REMOVED***'eSpark',
***REMOVED******REMOVED***'Fast',
***REMOVED******REMOVED***'Fast Math',
***REMOVED******REMOVED***'Frontline',
***REMOVED******REMOVED***'Gmail',
***REMOVED******REMOVED***'Gold',
***REMOVED******REMOVED***'Google Calendar',
***REMOVED******REMOVED***'Google Classroom',
***REMOVED******REMOVED***'Google Docs',
***REMOVED******REMOVED***'Google Drive',
***REMOVED******REMOVED***'Google Education Suite',
***REMOVED******REMOVED***'Google Forms',
***REMOVED******REMOVED***'Google Sheets',
***REMOVED******REMOVED***'Google Sites',
***REMOVED******REMOVED***'Google Slides',
***REMOVED******REMOVED***'HMH',
***REMOVED******REMOVED***'Illuminate',
***REMOVED******REMOVED***'Infinite Campus',
***REMOVED******REMOVED***'iReady',
***REMOVED******REMOVED***'iWork',
***REMOVED******REMOVED***'Learning Pro',
***REMOVED******REMOVED***'Lexia',
***REMOVED******REMOVED***'Microsoft Office Suite',
***REMOVED******REMOVED***'NWEA Map',
***REMOVED******REMOVED***'Pearson Realize',
***REMOVED******REMOVED***'Precision Exams',
***REMOVED******REMOVED***'Public Schoolworks',
***REMOVED******REMOVED***'Randa',
***REMOVED******REMOVED***'ReadyGen',
***REMOVED******REMOVED***'Renaissance Place',
***REMOVED******REMOVED***'School Dude',
***REMOVED******REMOVED***'Schoology',
***REMOVED******REMOVED***'State Assessments',
***REMOVED******REMOVED***'Think Central',
***REMOVED******REMOVED***'TimeClock Plus',
***REMOVED******REMOVED***'WIDA'
***REMOVED***];
***REMOVED***jQuery( "#software" ).autocomplete({
***REMOVED***  source: availableTags
***REMOVED***);
***REMOVED*****REMOVED*****REMOVED*** );
  </script>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*** ?>
***REMOVED******REMOVED******REMOVED******REMOVED***<div class="form-group">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<label for="description">***REMOVED*** echo $description_label; ?></label>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<textarea class="form-control" id="description" name="description" rows="3" required>***REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***if ( ! empty( $data['description'] ) ) {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***echo $data['description'];***REMOVED*****REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***?></textarea>
***REMOVED******REMOVED******REMOVED******REMOVED***</div>

***REMOVED******REMOVED******REMOVED******REMOVED***<label for="site">Location&emsp;<span class="text-muted">Where would you like the technician to respond?</span></label>
***REMOVED******REMOVED******REMOVED******REMOVED***<div class="form-group form-row">
***REMOVED******REMOVED******REMOVED******REMOVED***  <div class="col">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<select class="form-control" id="site" name="site" required>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option value="">Please select your site.</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***if ( ! empty( $data['site'] ) ) {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***echo '<option selected>' . $data['site'] . '</option>';***REMOVED*****REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** if ( ! empty( $csm_user->SiteName ) ) { ?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>***REMOVED*** echo $csm_user->SiteName; ?></option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED******REMOVED*****REMOVED*** ?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Admin - Community Connections</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Admin - Learning Services</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Admin - Special Education</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Administration</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>BF Kitchen Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Berthoud Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Berthoud High School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Big Thompson Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Bill Reed Middle School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Carrie Martin Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Centennial Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Community Connections</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Conrad Ball Middle School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Cottonwood Plains Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Coyote Ridge Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Early Childhood Center</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Facilities</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Ferguson High HOPE Program</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Ferguson High School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Garfield Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Harold Ferguson High School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>High Plains School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Ivy Stockwell Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>LEAP</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Laurene Edmondson Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Lincoln Early Childhood</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Lincoln Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Loveland Classical</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Loveland High School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Lucile Erwin Middle School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Mary Blair Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Monroe Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Mountain View High School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Namaqua Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>NewVision Charter</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Ponderosa Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>SWAP</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Sarah Milner Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Stansberry Early Childhood</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Support Service - Innovative Technology</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Support Services Center</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Thompson Online Campus</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Thompson Valley High School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Transportation</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Truscott Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Turner Middle School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Van Buren Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Walt Clark Middle School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option>Winona Elementary School</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <option value="Unassigned">Other</option>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</select>
***REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED***  <div class="col-sm-3">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<input type="text" class="form-control" name="room" placeholder="Room"
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***if ( ! empty( $data['room'] ) ) {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***echo 'value="' . $data['room'] . '"';***REMOVED*****REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***/>
***REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED***</div>

***REMOVED******REMOVED******REMOVED******REMOVED***<div class="form-group">
***REMOVED******REMOVED******REMOVED******REMOVED***  <label for="contact_method">How may we contact you if we have questions?</label><br>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** if ( ! empty( $csm_user->Phone ) ) { ?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="form-check form-check-inline">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <input class="form-check-input" type="radio" name="preferred_contact" id="contact_phone" value="***REMOVED*** echo $csm_user->Phone; ?>">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <label class="form-check-label" for="contact_phone">***REMOVED*** echo $csm_user->Phone; ?></label>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED******REMOVED*****REMOVED*** ?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED*** if ( ! empty( $csm_user->Email ) ) { ?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="form-check form-check-inline">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <input class="form-check-input" type="radio" name="preferred_contact" id="contact_email" value="***REMOVED*** echo $csm_user->Email; ?>">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <label class="form-check-label" for="contact_email">***REMOVED*** echo $csm_user->Email; ?></label>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*****REMOVED******REMOVED*****REMOVED*** ?>
***REMOVED******REMOVED******REMOVED******REMOVED***  <div class="form-check form-check-inline">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<input class="form-check-input" type="radio" name="preferred_contact" id="contact_other" value="other">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<input type="text" class="form-control" placeholder="Other" id="contact_custom" name="contact_custom"
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***if ( ! empty( $data['contact_custom'] ) ) {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***echo 'value="' . $data['contact_custom'] . '"';***REMOVED*****REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***/>
***REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED***</div>

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** if ( 'telecom' != $post->post_name && 'intercom' != $post->post_name && 'surplus' != $post->post_name ) : ?>
***REMOVED******REMOVED******REMOVED******REMOVED***<div class="form-group">
***REMOVED******REMOVED******REMOVED******REMOVED***  <label for="asset_number">TSD Asset Tag Number&emsp;<span class="text-muted">ex. #####</span></label>
***REMOVED******REMOVED******REMOVED******REMOVED***  <input type="text" class="form-control" id="asset_number" name="asset_number" required
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***if ( ! empty( $data['asset_number'] ) ) {
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***echo 'value="' . $data['asset_number'] . '"';***REMOVED*****REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** />
***REMOVED******REMOVED******REMOVED******REMOVED***</div>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*** ?>

***REMOVED******REMOVED******REMOVED******REMOVED***<div class="form-group">
***REMOVED******REMOVED******REMOVED******REMOVED***  <label for="urgency">Does this issue prevent you from doing your work?</label><br>
***REMOVED******REMOVED******REMOVED******REMOVED***  <div class="form-check form-check-inline">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<input class="form-check-input" type="radio" name="urgency" id="urgency_false" value="false" checked>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<label class="form-check-label" for="urgency_false">No</label>
***REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED***  <div class="form-check form-check-inline">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<input class="form-check-input" type="radio" name="urgency" id="urgency_true" value="true">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<label class="form-check-label" for="urgency_true">Yes</label>
***REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED***</div>

***REMOVED******REMOVED******REMOVED******REMOVED***<div class="form-group">
***REMOVED******REMOVED******REMOVED******REMOVED***  <label for="scope">Does this issue affect multiple users?</label><br>
***REMOVED******REMOVED******REMOVED******REMOVED***  <div class="form-check form-check-inline">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<input class="form-check-input" type="radio" name="scope" id="scope_one" value="one" checked>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<label class="form-check-label" for="scope_one">No</label>
***REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED***  <div class="form-check form-check-inline">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<input class="form-check-input" type="radio" name="scope" id="scope_many" value="many">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<label class="form-check-label" for="scope_many">Yes</label>
***REMOVED******REMOVED******REMOVED******REMOVED***  </div>
***REMOVED******REMOVED******REMOVED******REMOVED***</div>
***REMOVED******REMOVED******REMOVED***<div class="form-group">
***REMOVED******REMOVED******REMOVED******REMOVED***<button type="submit" class="btn btn-tsd">Submit</button>
***REMOVED******REMOVED******REMOVED***</div>

***REMOVED******REMOVED***</form>
***REMOVED***</div><!-- .col -->
***REMOVED***<div class="col-md-4">
***REMOVED******REMOVED******REMOVED*** the_content(); ?>
***REMOVED***</div><!-- .col-md-4 -->
</div><!-- .row -->
***REMOVED******REMOVED***
endwhile; // End of the loop.
get_footer();
?>
