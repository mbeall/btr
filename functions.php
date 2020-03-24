<?php
/**
 * Big Thompson River functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Big_Thompson_River
 */

if ( ! function_exists( 'bigt_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bigt_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Big Thompson River, use a find and replace
		 * to change 'bigt' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bigt', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'bigt' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'bigt_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		if ( ! current_user_can( 'administrator' ) && ! is_admin() ) {
			show_admin_bar( false );
		}
	}
endif;
add_action( 'after_setup_theme', 'bigt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bigt_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bigt_content_width', 640 );
}
add_action( 'after_setup_theme', 'bigt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bigt_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bigt' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bigt' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bigt_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bigt_scripts() {
	wp_enqueue_style( 'bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1' );

	wp_enqueue_style( 'bigt-style', get_stylesheet_uri(), array(), '20200317' );

	wp_enqueue_script( 'jquery-ui-autocomplete' );

	wp_enqueue_script( 'bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', array( 'jquery' ) );

	wp_enqueue_script( 'font-awesome', '//kit.fontawesome.com/8a550cd28e.js' );

	wp_enqueue_script( 'bigt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bigt-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_script( 'jquery-ui-datepicker' );
}
add_action( 'wp_enqueue_scripts', 'bigt_scripts' );

/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */
function bigt_login_redirect( $redirect_to, $request, $user ) {
	// is there a user to check?
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		// check for admins
		if ( in_array( 'administrator', $user->roles, true ) ) {
			// redirect them to the default place
			return $redirect_to;
		} else {
			return home_url();
		}
	} else {
		return $redirect_to;
	}
}

add_filter( 'login_redirect', 'bigt_login_redirect', 10, 3 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

function bigt_remove_private_prefix( $title ) {
	$title = str_replace( 'Private: ', '', $title );
	return $title;
}
add_filter( 'the_title', 'bigt_remove_private_prefix' );

add_action( 'template_redirect', 'bigt_private_content_redirect_to_login', 9 );
function bigt_private_content_redirect_to_login() {
	global $wp_query,$wpdb;
	if ( is_404() ) {
		$private  = $wpdb->get_row( $wp_query->request );
		$location = wp_login_url( $_SERVER['REQUEST_URI'] );
		if ( 'private' === $private->post_status ) {
			wp_safe_redirect( $location );
			exit;
		}
	}
}

function bigt_csm_get_token( $retry = false ) {
	$now = new DateTime();
	if ( ! empty( $_SESSION['token_expires'] ) && $now < $_SESSION['token_expires'] ) {
		return $_SESSION['token'];
	} else {
		if ( ! empty( $_SESSION['token_expires'] ) ) {
			unset( $_SESSION['token'] );
			unset( $_SESSION['token_expires'] );
		}
		$auth_response = wp_remote_post(
			get_theme_mod( 'cw_base_url' ) . '/CherwellAPI/token?auth_mode=Internal&api_key=' . get_theme_mod( 'cw_api_key' ),
			array(
				'body' => 'grant_type=password&client_id=' . get_theme_mod( 'cw_api_key' ) . '&username=cherwell%5C' . get_theme_mod( 'cw_api_user' ) . '&password=' . get_theme_mod( 'cw_api_pw' ) . '',
			)
		);
		if ( true === is_wp_error( $auth_response ) ) {
			if ( false === $retry ) {
				return bigt_csm_get_token( true );
			} else {
				trigger_error( 'Failed to acquire token. ' . $auth_response->get_error_message() );
				return false;
			}
		} else {
			$response_body = json_decode( $auth_response['body'] );
			if ( ! empty( $response_body->access_token ) ) {
				$_SESSION['token']         = $response_body->access_token;
				$_SESSION['token_expires'] = new DateTime( $response_body->{'.expires'} );
				return $response_body->access_token;
			} else {
				if ( false === $retry ) {
					return bigt_csm_get_token( true );
				} else {
					trigger_error( 'Failed to acquire token. $auth_response:' . $auth_response );
					return false;
				}
			}
		}
	}
}

function bigt_csm_get_current_user() {
	$user = get_userdata( get_current_user_id() );
	if ( false !== bigt_csm_get_token() ) {
		$headers  = array(
			'content-type'  => 'application/json',
			'authorization' => 'Bearer ' . bigt_csm_get_token(),
		);
		$_results = wp_remote_post(
			get_theme_mod( 'cw_base_url' ) .
			'/CherwellAPI/api/V1/object/Customer/search?page=1&pageSize=1&api_key=' .
			get_theme_mod( 'cw_api_key' ),
			array(
				'headers' => $headers,
				'body'    => '{ "filters": [ { "searchTerm": "' . $user->user_email . '" } ] }',
			)
		);
		if ( true === is_wp_error( $_results ) ) {
			trigger_error( 'Failed to get current user object. ' . print_r( $_results, true ) );
			return false;
		} else {
			if ( 200 === $_results['response']['code'] ) {
				$results = json_decode( $_results['body'] );
				return json_decode( $results->records[0] );
			} else {
				trigger_error( 'No CSM user exists with ' . $user->user_email . '.' );
				return false;
			}
		}
	} else {
		trigger_error( 'No token available to run bigt_csm_get_current_user().' );
		return false;
	}
}

function bigt_csm_get_incident( $incident_id, $method = 'csmi' ) {
	if ( false !== bigt_csm_get_token() ) {
		$headers = array(
			'content-type'  => 'application/json',
			'authorization' => 'Bearer ' . bigt_csm_get_token(),
		);
		switch ( $method ) {
			case 'mbui': {
				$_results = wp_remote_post(
					get_theme_mod( 'cw_base_url' ) .
					'/CherwellAPI/api/V1/object/Incident/search?page=1&pageSize=1&api_key=' .
					get_theme_mod( 'cw_api_key' ),
					array(
						'headers' => $headers,
						'body'    => '{ "filters": [ { "searchTerm": "' . $incident_id . '" } ] }',
					)
				);
				if ( 200 === $_results['response']['code'] ) {
					$results = json_decode( $_results['body'] );
					return json_decode( $results->records[0] );
				} else {
					trigger_error( 'No incident exists with MBUI:' . $incident_id . '.' );
					return false;
				}
			}
			default: {
				$_result = wp_remote_get(
					get_theme_mod( 'cw_base_url' ) .
					'/CherwellAPI/api/V1/object/Incident/' .
					$incident_id .
					'?api_key=' .
					get_theme_mod( 'cw_api_key' ),
					array(
						'headers' => $headers,
						'body'    => array(),
					)
				);
				if ( 200 === $_result['response']['code'] ) {
					$_incident = json_decode( $_result['body'] );
					return $_incident->properties;
				} else {
					trigger_error( 'No incident exists with ID:' . $incident_id . '.' );
					return false;
				}
			}
		}
	} else {
		trigger_error( 'No token available to run bigt_csm_get_incident().' );
		return false;
	}
}

function bigt_csm_get_incident_comment_list( $incident_id ) {
	if ( false !== bigt_csm_get_token() ) {
		$headers  = array(
			'content-type'  => 'application/json',
			'authorization' => 'Bearer ' . bigt_csm_get_token(),
		);
		$_results = wp_remote_get(
			get_theme_mod( 'cw_base_url' ) .
			'/CherwellAPI/api/V1/object/Incident/' .
			$incident_id .
			'/comments?page=1&pageSize=10',
			array(
				'headers' => $headers,
				'body'    => '',
			)
		);
		if ( 200 === $_results['response']['code'] ) {
			return json_decode( $_results['body'] );
		} else {
			trigger_error( 'No comments for Incident ID:' . $incident_id . '.' );
			return false;
		}
	} else {
		trigger_error( 'No token available to run bigt_csm_get_incident_comments().' );
		return false;
	}
}

function bigt_csm_get_incident_comments( $incident_id ) {
	$comment_list = bigt_csm_get_incident_comment_list( $incident_id );
	if ( false !== bigt_csm_get_token() ) {
		$headers = array(
			'content-type'  => 'application/json',
			'authorization' => 'Bearer ' . bigt_csm_get_token(),
		);
		foreach ( $comment_list->comments as $comment_item ) {
			$_result = wp_remote_get(
				get_theme_mod( 'cw_base_url' ) .
				'/CherwellAPI/api/V1/object/Journal/' .
				$comment_item->recId // phpcs:ignore WordPress.NamingConventions.ValidVariableName
			);
			if ( 200 === $_result['response']['code'] ) {
			} else {
				trigger_error( 'No comments for Incident ID:' . $incident_id . '.' );
				return false;
			}
		}
	} else {
		trigger_error( 'No token available to run bigt_csm_get_incident_comments().' );
		return false;
	}
}

function bigt_csm_get_journal( $journal_id ) {
	if ( false !== bigt_csm_get_token() ) {
		$headers = array(
			'content-type'  => 'application/json',
			'authorization' => 'Bearer ' . bigt_csm_get_token(),
		);
		$_result = wp_remote_get(
			get_theme_mod( 'cw_base_url' ) .
			'/CherwellAPI/api/V1/object/Journal/' .
			$journal_id .
			'?api_key=' .
			get_theme_mod( 'cw_api_key' ),
			array(
				'headers' => $headers,
				'body'    => array(),
			)
		);
		if ( 200 === $_result['response']['code'] ) {
			$_journal = json_decode( $_result['body'] );
			return $_journal->properties;
		} else {
			trigger_error( 'No journal exists with ID:' . $journal_id . '.' );
			return false;
		}
	} else {
		trigger_error( 'No token available to run bigt_csm_get_journal().' );
		return false;
	}
}

function bigt_csm_add_journal( $incident_id, $details, $csm_user ) {
	if ( false !== bigt_csm_get_token() ) {
		$headers = array(
			'content-type'  => 'application/json',
			'authorization' => 'Bearer ' . bigt_csm_get_token(),
		);
		$_result = wp_remote_post(
			get_theme_mod( 'cw_base_url' ) .
			'/CherwellAPI/api/V1/object/Journal?api_key=' .
			get_theme_mod( 'cw_api_key' ),
			array(
				'headers' => $headers,
				'body'    => '{
				  "journalTypeID": "934d8181ba9d3a6a506d7643e1bc71f70fa9b47412",
				  "journalTypeName": "Journal - Note",
				  "createdBy": "' . $csm_user->FullName /* phpcs:ignore WordPress.NamingConventions.ValidVariableName */ . '",
				  "createdByID": "' . $csm_user->RecID /* phpcs:ignore WordPress.NamingConventions.ValidVariableName */ . '",
				  "parentRecID": "' . $incident_id . '",
				  "details": "' . $details . '"
				}',
			)
		);
		if ( 200 === $_result['response']['code'] ) {
			return json_decode( $_result['body'] );
		} else {
			trigger_error( 'New journal entry failed.' );
			return false;
		}
	} else {
		trigger_error( 'No token available to run bigt_csm_add_journal().' );
		return false;
	}
}

function bigt_get_tech_by_site( $site ) {
	switch ($site) {
		case 'Admin - Community Connections':
			return 'Sanchez, Luis A SSC';
		case 'Admin - Financial Services':
			return 'Beall, Matt B SSC';
		case 'Admin - Learning Services':
			return 'Beall, Matt B SSC';
		case 'Admin - Special Education':
			return 'Beall, Matt B SSC';
		case 'Administration':
			return 'Beall, Matt B SSC';
		case 'BF Kitchen Elementary School':
			return 'Cortez, Rick A SSC';
		case 'Berthoud Elementary School':
			return 'Morrissey, Eric';
		case 'Berthoud High School':
			return 'Sanchez, Luis A SSC';
		case 'Big Thompson Elementary School':
			return 'Morrissey, Eric';
		case 'Bill Reed Middle School':
			return 'Scott, Denise M SSC';
		case 'Carrie Martin Elementary School':
			return 'Morrissey, Eric';
		case 'Centennial Elementary School':
			return 'Cortez, Rick A SSC';
		case 'Community Connections':
			return 'Sanchez, Luis A SSC';
		case 'Conrad Ball Middle School':
			return 'Cordova, Elaine M SSC';
		case 'Cottonwood Plains Elementary School':
			return 'Gibbons, Jake D SSC';
		case 'Coyote Ridge Elementary School':
			return 'Rosenberger, Polly P SSC';
		case 'Early Childhood Center':
			return 'Beall, Matt B SSC';
		case 'Facilities':
			return 'Beall, Matt B SSC';
		case 'Ferguson High HOPE Program':
			return 'Cordova, Elaine M SSC';
		case 'Ferguson High School':
			return 'Cordova, Elaine M SSC';
		case 'Garfield Elementary School':
			return 'Rosenberger, Polly P SSC';
		case 'Harold Ferguson High School':
			return 'Cordova, Elaine M SSC';
		case 'High Plains School':
			return 'Ruhle, Wachara M SSC';
		case 'Ivy Stockwell Elementary School':
			return 'Scott, Denise M SSC';
		case 'LEAP':
			return 'Sanchez, Luis A SSC';
		case 'Laurene Edmondson Elementary School':
			return 'Gibbons, Jake D SSC';
		case 'Lincoln Early Childhood':
			return 'Morrissey, Eric';
		case 'Lincoln Elementary School':
			return 'Morrissey, Eric';
		case 'Loveland Classical':
			return 'Beall, Matt B SSC';
		case 'Loveland High School':
			return 'Cordova, Elaine M SSC';
		case 'Lucile Erwin Middle School':
			return 'Cole, Suzanne E SSC';
		case 'Mary Blair Elementary School':
			return 'Ruhle, Wachara M SSC';
		case 'Monroe Elementary School':
			return 'Cortez, Rick A SSC';
		case 'Mountain View High School':
			return 'Sanchez, Luis A SSC';
		case 'Namaqua Elementary School':
			return 'Ruhle, Wachara M SSC';
		case 'NewVision Charter':
			return 'Beall, Matt B SSC';
		case 'Ponderosa Elementary School':
			return 'Gibbons, Jake D SSC';
		case 'Sarah Milner Elementary School':
			return 'Cortez, Rick A SSC';
		case 'Stansberry Early Childhood':
			return 'Beall, Matt B SSC';
		case 'Support Service - Innovative Technology':
			return 'Beall, Matt B SSC';
		case 'Support Services Center':
			return 'Beall, Matt B SSC';
		case 'Thompson Online Campus':
			return 'Cordova, Elaine M SSC';
		case 'Thompson Valley High School':
			return 'Cole, Suzanne E SSC';
		case 'Transportation':
			return 'Beall, Matt B SSC';
		case 'Truscott Elementary School':
			return 'Rosenberger, Polly P SSC';
		case 'Turner Middle School':
			return 'Scott, Denise M SSC';
		case 'Van Buren Elementary School':
			return 'Cole, Suzanne E SSC';
		case 'Walt Clark Middle School':
			return 'Rosenberger, Polly P SSC';
		case 'Winona Elementary School':
			return 'Gibbons, Jake D SSC';
		default:
			return 'Unassigned';
	}
}

