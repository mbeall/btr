***REMOVED***
***REMOVED***
***REMOVED*** WooCommerce Compatibility File
***REMOVED***
***REMOVED*** @link https://woocommerce.com/
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

***REMOVED***
***REMOVED*** WooCommerce setup function.
***REMOVED***
***REMOVED*** @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
***REMOVED*** @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
***REMOVED***
***REMOVED*** @return void
***REMOVED***/
function bigt_woocommerce_setup() {
***REMOVED***add_theme_support( 'woocommerce' );
***REMOVED***add_theme_support( 'wc-product-gallery-zoom' );
***REMOVED***add_theme_support( 'wc-product-gallery-lightbox' );
***REMOVED***add_theme_support( 'wc-product-gallery-slider' );
***REMOVED***
add_action( 'after_setup_theme', 'bigt_woocommerce_setup' );

***REMOVED***
***REMOVED*** WooCommerce specific scripts & stylesheets.
***REMOVED***
***REMOVED*** @return void
***REMOVED***/
function bigt_woocommerce_scripts() {
***REMOVED***wp_enqueue_style( 'bigt-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );

***REMOVED***$font_path   = WC()->plugin_url() . '/assets/fonts/';
***REMOVED***$inline_font = '@font-face {
***REMOVED******REMOVED******REMOVED***font-family: "star";
***REMOVED******REMOVED******REMOVED***src: url("' . $font_path . 'star.eot");
***REMOVED******REMOVED******REMOVED***src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
***REMOVED******REMOVED******REMOVED******REMOVED***url("' . $font_path . 'star.woff") format("woff"),
***REMOVED******REMOVED******REMOVED******REMOVED***url("' . $font_path . 'star.ttf") format("truetype"),
***REMOVED******REMOVED******REMOVED******REMOVED***url("' . $font_path . 'star.svg#star") format("svg");
***REMOVED******REMOVED******REMOVED***font-weight: normal;
***REMOVED******REMOVED******REMOVED***font-style: normal;
***REMOVED***';

***REMOVED***wp_add_inline_style( 'bigt-woocommerce-style', $inline_font );
***REMOVED***
add_action( 'wp_enqueue_scripts', 'bigt_woocommerce_scripts' );

***REMOVED***
***REMOVED*** Disable the default WooCommerce stylesheet.
***REMOVED***
***REMOVED*** Removing the default WooCommerce stylesheet and enqueing your own will
***REMOVED*** protect you during WooCommerce core updates.
***REMOVED***
***REMOVED*** @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
***REMOVED***/
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

***REMOVED***
***REMOVED*** Add 'woocommerce-active' class to the body tag.
***REMOVED***
***REMOVED*** @param  array $classes CSS classes applied to the body tag.
***REMOVED*** @return array $classes modified to include 'woocommerce-active' class.
***REMOVED***/
function bigt_woocommerce_active_body_class( $classes ) {
***REMOVED***$classes[] = 'woocommerce-active';

***REMOVED***return $classes;
***REMOVED***
add_filter( 'body_class', 'bigt_woocommerce_active_body_class' );

***REMOVED***
***REMOVED*** Products per page.
***REMOVED***
***REMOVED*** @return integer number of products.
***REMOVED***/
function bigt_woocommerce_products_per_page() {
***REMOVED***return 12;
***REMOVED***
add_filter( 'loop_shop_per_page', 'bigt_woocommerce_products_per_page' );

***REMOVED***
***REMOVED*** Product gallery thumnbail columns.
***REMOVED***
***REMOVED*** @return integer number of columns.
***REMOVED***/
function bigt_woocommerce_thumbnail_columns() {
***REMOVED***return 4;
***REMOVED***
add_filter( 'woocommerce_product_thumbnails_columns', 'bigt_woocommerce_thumbnail_columns' );

***REMOVED***
***REMOVED*** Default loop columns on product archives.
***REMOVED***
***REMOVED*** @return integer products per row.
***REMOVED***/
function bigt_woocommerce_loop_columns() {
***REMOVED***return 3;
***REMOVED***
add_filter( 'loop_shop_columns', 'bigt_woocommerce_loop_columns' );

***REMOVED***
***REMOVED*** Related Products Args.
***REMOVED***
***REMOVED*** @param array $args related products args.
***REMOVED*** @return array $args related products args.
***REMOVED***/
function bigt_woocommerce_related_products_args( $args ) {
***REMOVED***$defaults = array(
***REMOVED******REMOVED***'posts_per_page' => 3,
***REMOVED******REMOVED***'columns'        => 3,
***REMOVED***

***REMOVED***$args = wp_parse_args( $defaults, $args );

***REMOVED***return $args;
***REMOVED***
add_filter( 'woocommerce_output_related_products_args', 'bigt_woocommerce_related_products_args' );

if ( ! function_exists( 'bigt_woocommerce_product_columns_wrapper' ) ) {
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Product columns wrapper.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** @return  void
***REMOVED******REMOVED***/
***REMOVED***function bigt_woocommerce_product_columns_wrapper() {
***REMOVED******REMOVED***$columns = bigt_woocommerce_loop_columns();
***REMOVED******REMOVED***echo '<div class="columns-' . absint( $columns ) . '">';
***REMOVED***
***REMOVED***
add_action( 'woocommerce_before_shop_loop', 'bigt_woocommerce_product_columns_wrapper', 40 );

if ( ! function_exists( 'bigt_woocommerce_product_columns_wrapper_close' ) ) {
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Product columns wrapper close.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** @return  void
***REMOVED******REMOVED***/
***REMOVED***function bigt_woocommerce_product_columns_wrapper_close() {
***REMOVED******REMOVED***echo '</div>';
***REMOVED***
***REMOVED***
add_action( 'woocommerce_after_shop_loop', 'bigt_woocommerce_product_columns_wrapper_close', 40 );

***REMOVED***
***REMOVED*** Remove default WooCommerce wrapper.
***REMOVED***/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'bigt_woocommerce_wrapper_before' ) ) {
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Before Content.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Wraps all WooCommerce content in wrappers which match the theme markup.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** @return void
***REMOVED******REMOVED***/
***REMOVED***function bigt_woocommerce_wrapper_before() {
***REMOVED******REMOVED***?>
***REMOVED******REMOVED***<div id="primary" class="content-area">
***REMOVED******REMOVED******REMOVED***<main id="main" class="site-main" role="main">
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED***
***REMOVED***
add_action( 'woocommerce_before_main_content', 'bigt_woocommerce_wrapper_before' );

if ( ! function_exists( 'bigt_woocommerce_wrapper_after' ) ) {
***REMOVED******REMOVED***
***REMOVED******REMOVED*** After Content.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Closes the wrapping divs.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** @return void
***REMOVED******REMOVED***/
***REMOVED***function bigt_woocommerce_wrapper_after() {
***REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED***</main><!-- #main -->
***REMOVED******REMOVED***</div><!-- #primary -->
***REMOVED******REMOVED******REMOVED***
***REMOVED***
***REMOVED***
add_action( 'woocommerce_after_main_content', 'bigt_woocommerce_wrapper_after' );

***REMOVED***
***REMOVED*** Sample implementation of the WooCommerce Mini Cart.
***REMOVED***
***REMOVED*** You can add the WooCommerce Mini Cart to header.php like so ...
***REMOVED***
***REMOVED******REMOVED***
***REMOVED******REMOVED***if ( function_exists( 'bigt_woocommerce_header_cart' ) ) {
***REMOVED******REMOVED******REMOVED***bigt_woocommerce_header_cart();
***REMOVED***
***REMOVED***?>
***REMOVED***/

if ( ! function_exists( 'bigt_woocommerce_cart_link_fragment' ) ) {
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Cart Fragments.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Ensure cart contents update when products are added to the cart via AJAX.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** @param array $fragments Fragments to refresh via AJAX.
***REMOVED******REMOVED*** @return array Fragments to refresh via AJAX.
***REMOVED******REMOVED***/
***REMOVED***function bigt_woocommerce_cart_link_fragment( $fragments ) {
***REMOVED******REMOVED***ob_start();
***REMOVED******REMOVED***bigt_woocommerce_cart_link();
***REMOVED******REMOVED***$fragments['a.cart-contents'] = ob_get_clean();

***REMOVED******REMOVED***return $fragments;
***REMOVED***
***REMOVED***
add_filter( 'woocommerce_add_to_cart_fragments', 'bigt_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'bigt_woocommerce_cart_link' ) ) {
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Cart Link.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Displayed a link to the cart including the number of items present and the cart total.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** @return void
***REMOVED******REMOVED***/
***REMOVED***function bigt_woocommerce_cart_link() {
***REMOVED******REMOVED***?>
***REMOVED******REMOVED***<a class="cart-contents" href="***REMOVED*** echo esc_url( wc_get_cart_url() ); ?>" title="***REMOVED*** esc_attr_e( 'View your shopping cart', 'bigt' ); ?>">
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED***$item_count_text = sprintf(
***REMOVED******REMOVED******REMOVED*** translators: number of items in the mini cart.***REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED***_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'bigt' ),
***REMOVED******REMOVED******REMOVED******REMOVED***WC()->cart->get_cart_contents_count()
***REMOVED***;
***REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED***<span class="amount">***REMOVED*** echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count">***REMOVED*** echo esc_html( $item_count_text ); ?></span>
***REMOVED******REMOVED***</a>
***REMOVED******REMOVED******REMOVED***
***REMOVED***
***REMOVED***

if ( ! function_exists( 'bigt_woocommerce_header_cart' ) ) {
***REMOVED******REMOVED***
***REMOVED******REMOVED*** Display Header Cart.
***REMOVED******REMOVED***
***REMOVED******REMOVED*** @return void
***REMOVED******REMOVED***/
***REMOVED***function bigt_woocommerce_header_cart() {
***REMOVED******REMOVED***if ( is_cart() ) {
***REMOVED******REMOVED******REMOVED***$class = 'current-menu-item';
***REMOVED*** else {
***REMOVED******REMOVED******REMOVED***$class = '';
***REMOVED***
***REMOVED******REMOVED***?>
***REMOVED******REMOVED***<ul id="site-header-cart" class="site-header-cart">
***REMOVED******REMOVED******REMOVED***<li class="***REMOVED*** echo esc_attr( $class ); ?>">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** bigt_woocommerce_cart_link(); ?>
***REMOVED******REMOVED******REMOVED***</li>
***REMOVED******REMOVED******REMOVED***<li>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED***$instance = array(
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***'title' => '',
***REMOVED******REMOVED***;

***REMOVED******REMOVED******REMOVED******REMOVED***the_widget( 'WC_Widget_Cart', $instance );
***REMOVED******REMOVED******REMOVED******REMOVED***?>
***REMOVED******REMOVED******REMOVED***</li>
***REMOVED******REMOVED***</ul>
***REMOVED******REMOVED******REMOVED***
***REMOVED***
***REMOVED***
