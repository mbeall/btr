***REMOVED***
***REMOVED***
***REMOVED*** The template for displaying comments
***REMOVED***
***REMOVED*** This is the template that displays the area of the page that contains both the current comments
***REMOVED*** and the comment form.
***REMOVED***
***REMOVED*** @link https://developer.wordpress.org/themes/basics/template-hierarchy/
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

/*
***REMOVED*** If the current post is protected by a password and
***REMOVED*** the visitor has not yet entered the password we will
***REMOVED*** return early without loading the comments.
***REMOVED***/
if ( post_password_required() ) {
***REMOVED***return;
***REMOVED***
?>

<div id="comments" class="comments-area">

***REMOVED******REMOVED***
***REMOVED***// You can start editing here -- including this comment!
***REMOVED***if ( have_comments() ) :
***REMOVED******REMOVED***?>
***REMOVED******REMOVED***<h2 class="comments-title">
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***$bigt_comment_count = get_comments_number();
***REMOVED******REMOVED******REMOVED***if ( '1' === $bigt_comment_count ) {
***REMOVED******REMOVED******REMOVED******REMOVED***printf(
***REMOVED******REMOVED******REMOVED******REMOVED*** translators: 1: title.***REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'bigt' ),
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'<span>' . get_the_title() . '</span>' // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
***REMOVED******REMOVED***;
***REMOVED******REMOVED*** else {
***REMOVED******REMOVED******REMOVED******REMOVED***printf(
***REMOVED******REMOVED******REMOVED******REMOVED*** translators: 1: comment count number, 2: title.***REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $bigt_comment_count, 'comments title', 'bigt' ) ),
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***number_format_i18n( $bigt_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'<span>' . get_the_title() . '</span>' // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
***REMOVED******REMOVED***;
***REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED***</h2><!-- .comments-title -->

***REMOVED******REMOVED******REMOVED*** the_comments_navigation(); ?>

***REMOVED******REMOVED***<ol class="comment-list">
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***wp_list_comments(
***REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'style'      => 'ol',
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'short_ping' => true,
***REMOVED******REMOVED***
***REMOVED***;
***REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED***</ol><!-- .comment-list -->

***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***the_comments_navigation();

***REMOVED******REMOVED***// If comments are closed and there are comments, let's leave a little note, shall we?
***REMOVED******REMOVED***if ( ! comments_open() ) :
***REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED***<p class="no-comments">***REMOVED*** esc_html_e( 'Comments are closed.', 'bigt' ); ?></p>
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***

***REMOVED******REMOVED*** // Check for have_comments().

***REMOVED***comment_form();
***REMOVED***?>

</div><!-- #comments -->
