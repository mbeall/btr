***REMOVED***
***REMOVED***
***REMOVED*** Custom template tags for this theme
***REMOVED***
***REMOVED*** Eventually, some of the functionality here could be replaced by core features.
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

if ( ! function_exists( 'bigt_posted_on' ) ) :
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Prints HTML with meta information for the current post-date/time.
***REMOVED******REMOVED***/
***REMOVED***function bigt_posted_on() {
***REMOVED******REMOVED***$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
***REMOVED******REMOVED***if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
***REMOVED******REMOVED******REMOVED***$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
***REMOVED***

***REMOVED******REMOVED***$time_string = sprintf( $time_string,
***REMOVED******REMOVED******REMOVED***esc_attr( get_the_date( DATE_W3C ) ),
***REMOVED******REMOVED******REMOVED***esc_html( get_the_date() ),
***REMOVED******REMOVED******REMOVED***esc_attr( get_the_modified_date( DATE_W3C ) ),
***REMOVED******REMOVED******REMOVED***esc_html( get_the_modified_date() )
***REMOVED***

***REMOVED******REMOVED***$posted_on = sprintf(
***REMOVED******REMOVED*** translators: %s: post date.***REMOVED***/
***REMOVED******REMOVED******REMOVED***esc_html_x( 'Posted on %s', 'post date', 'bigt' ),
***REMOVED******REMOVED******REMOVED***'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
***REMOVED***

***REMOVED******REMOVED***echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

***REMOVED***
***REMOVED***

if ( ! function_exists( 'bigt_posted_by' ) ) :
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Prints HTML with meta information for the current author.
***REMOVED******REMOVED***/
***REMOVED***function bigt_posted_by() {
***REMOVED******REMOVED***$byline = sprintf(
***REMOVED******REMOVED*** translators: %s: post author.***REMOVED***/
***REMOVED******REMOVED******REMOVED***esc_html_x( 'by %s', 'post author', 'bigt' ),
***REMOVED******REMOVED******REMOVED***'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
***REMOVED***

***REMOVED******REMOVED***echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

***REMOVED***
***REMOVED***

if ( ! function_exists( 'bigt_entry_footer' ) ) :
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Prints HTML with meta information for the categories, tags and comments.
***REMOVED******REMOVED***/
***REMOVED***function bigt_entry_footer() {
***REMOVED******REMOVED***// Hide category and tag text for pages.
***REMOVED******REMOVED***if ( 'post' === get_post_type() ) {
***REMOVED******REMOVED*** translators: used between list items, there is a space after the comma***REMOVED***/
***REMOVED******REMOVED******REMOVED***$categories_list = get_the_category_list( esc_html__( ', ', 'bigt' ) );
***REMOVED******REMOVED******REMOVED***if ( $categories_list ) {
***REMOVED******REMOVED******REMOVED*** translators: 1: list of categories.***REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED***printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'bigt' ) . '</span>', $categories_list ); // WPCS: XSS OK.
***REMOVED******REMOVED***

***REMOVED******REMOVED*** translators: used between list items, there is a space after the comma***REMOVED***/
***REMOVED******REMOVED******REMOVED***$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'bigt' ) );
***REMOVED******REMOVED******REMOVED***if ( $tags_list ) {
***REMOVED******REMOVED******REMOVED*** translators: 1: list of tags.***REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED***printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'bigt' ) . '</span>', $tags_list ); // WPCS: XSS OK.
***REMOVED******REMOVED***
***REMOVED***

***REMOVED******REMOVED***if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
***REMOVED******REMOVED******REMOVED***echo '<span class="comments-link">';
***REMOVED******REMOVED******REMOVED***comments_popup_link(
***REMOVED******REMOVED******REMOVED******REMOVED***sprintf(
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***wp_kses(
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** translators: %s: post title***REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'bigt' ),
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'span' => array(
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'class' => array(),
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***,
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***,
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***get_the_title()
***REMOVED******REMOVED***
***REMOVED***;
***REMOVED******REMOVED******REMOVED***echo '</span>';
***REMOVED***

***REMOVED******REMOVED***edit_post_link(
***REMOVED******REMOVED******REMOVED***sprintf(
***REMOVED******REMOVED******REMOVED******REMOVED***wp_kses(
***REMOVED******REMOVED******REMOVED******REMOVED*** translators: %s: Name of current post. Only visible to screen readers***REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***__( 'Edit <span class="screen-reader-text">%s</span>', 'bigt' ),
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'span' => array(
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'class' => array(),
***REMOVED******REMOVED******REMOVED******REMOVED***,
***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED***,
***REMOVED******REMOVED******REMOVED******REMOVED***get_the_title()
***REMOVED***,
***REMOVED******REMOVED******REMOVED***'<span class="edit-link">',
***REMOVED******REMOVED******REMOVED***'</span>'
***REMOVED***
***REMOVED***
***REMOVED***

if ( ! function_exists( 'bigt_post_thumbnail' ) ) :
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Displays an optional post thumbnail.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Wraps the post thumbnail in an anchor element on index views, or a div
***REMOVED******REMOVED*** element when on single views.
***REMOVED******REMOVED***/
***REMOVED***function bigt_post_thumbnail() {
***REMOVED******REMOVED***if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
***REMOVED******REMOVED******REMOVED***return;
***REMOVED***

***REMOVED******REMOVED***if ( is_singular() ) :
***REMOVED******REMOVED******REMOVED***?>

***REMOVED******REMOVED******REMOVED***<div class="post-thumbnail">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** the_post_thumbnail(); ?>
***REMOVED******REMOVED******REMOVED***</div><!-- .post-thumbnail -->

***REMOVED******REMOVED******REMOVED*** else : ?>

***REMOVED******REMOVED***<a class="post-thumbnail" href="***REMOVED*** the_permalink(); ?>" aria-hidden="true" tabindex="-1">
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***the_post_thumbnail( 'post-thumbnail', array(
***REMOVED******REMOVED******REMOVED******REMOVED***'alt' => the_title_attribute( array(
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'echo' => false,
***REMOVED******REMOVED*** ),
***REMOVED*** );
***REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED***</a>

***REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED*** // End is_singular().
***REMOVED***
***REMOVED***
