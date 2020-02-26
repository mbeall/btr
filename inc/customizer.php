***REMOVED***
***REMOVED***
***REMOVED*** Big Thompson River Theme Customizer
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

***REMOVED***
***REMOVED*** Add postMessage support for site title and description for the Theme Customizer.
***REMOVED***
***REMOVED*** @param WP_Customize_Manager $wp_customize Theme Customizer object.
***REMOVED***/
function bigt_customize_register( $wp_customize ) {
***REMOVED***$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
***REMOVED***$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
***REMOVED***$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

***REMOVED***if ( isset( $wp_customize->selective_refresh ) ) {
***REMOVED******REMOVED***$wp_customize->selective_refresh->add_partial( 'blogname', array(
***REMOVED******REMOVED******REMOVED***'selector'        => '.site-title a',
***REMOVED******REMOVED******REMOVED***'render_callback' => 'bigt_customize_partial_blogname',
***REMOVED*** );
***REMOVED******REMOVED***$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
***REMOVED******REMOVED******REMOVED***'selector'        => '.site-description',
***REMOVED******REMOVED******REMOVED***'render_callback' => 'bigt_customize_partial_blogdescription',
***REMOVED*** );
***REMOVED***
***REMOVED***$wp_customize->add_section( 'bigt_csm_api', array(
***REMOVED******REMOVED***'title' => __( 'Cherwell Service Management', 'bigt' ),
***REMOVED******REMOVED***'priority' => 30
***REMOVED***));
***REMOVED***$wp_customize->add_setting( 'cw_api_user', array(
***REMOVED***  'default' => '',
***REMOVED***  'sanitize_callback' => 'wp_filter_nohtml_kses',
***REMOVED***) );
***REMOVED***$wp_customize->add_control( 'cw_api_user', array(
***REMOVED***  'label' => __( 'Cherwell API User' ),
***REMOVED***  'type' => 'text',
***REMOVED***  'section' => 'bigt_csm_api',
***REMOVED***) );
***REMOVED***$wp_customize->add_setting( 'cw_api_pw', array(
***REMOVED***  'default' => '',
***REMOVED***  'sanitize_callback' => 'wp_filter_nohtml_kses',
***REMOVED***) );
***REMOVED***$wp_customize->add_control( 'cw_api_pw', array(
***REMOVED***  'label' => __( 'Cherwell API Password' ),
***REMOVED***  'type' => 'text',
***REMOVED***  'section' => 'bigt_csm_api',
***REMOVED***) );
***REMOVED***$wp_customize->add_setting( 'cw_api_key', array(
***REMOVED***  'default' => '',
***REMOVED***  'sanitize_callback' => 'wp_filter_nohtml_kses',
***REMOVED***) );
***REMOVED***$wp_customize->add_control( 'cw_api_key', array(
***REMOVED***  'label' => __( 'Cherwell API Key' ),
***REMOVED***  'type' => 'text',
***REMOVED***  'section' => 'bigt_csm_api',
***REMOVED***) );
***REMOVED***$wp_customize->add_setting( 'cw_base_url', array(
***REMOVED***  'default' => 'https://thompson.cherwellondemand.com',
***REMOVED***  'sanitize_callback' => 'esc_url_raw',
***REMOVED***) );
***REMOVED***$wp_customize->add_control( 'cw_base_url', array(
***REMOVED***  'label' => __( 'Cherwell Base URL' ),
***REMOVED***  'type' => 'url',
***REMOVED***  'section' => 'bigt_csm_api',
***REMOVED***) );
***REMOVED***
add_action( 'customize_register', 'bigt_customize_register' );

***REMOVED***
***REMOVED*** Render the site title for the selective refresh partial.
***REMOVED***
***REMOVED*** @return void
***REMOVED***/
function bigt_customize_partial_blogname() {
***REMOVED***bloginfo( 'name' );
***REMOVED***

***REMOVED***
***REMOVED*** Render the site tagline for the selective refresh partial.
***REMOVED***
***REMOVED*** @return void
***REMOVED***/
function bigt_customize_partial_blogdescription() {
***REMOVED***bloginfo( 'description' );
***REMOVED***

***REMOVED***
***REMOVED*** Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
***REMOVED***/
function bigt_customize_preview_js() {
***REMOVED***wp_enqueue_script( 'bigt-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
***REMOVED***
add_action( 'customize_preview_init', 'bigt_customize_preview_js' );
