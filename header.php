***REMOVED***
***REMOVED***
***REMOVED*** The header for our theme
***REMOVED***
***REMOVED*** This is the template that displays all of the <head> section and everything up until <div id="content">
***REMOVED***
***REMOVED*** @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
***REMOVED***
***REMOVED*** @package Big_Thompson_River
***REMOVED***/

$user_data = get_userdata( get_current_user_id() );
?>

<!doctype html>
<html***REMOVED*****REMOVED*** language_attributes(); ?>>
***REMOVED***<head>
***REMOVED******REMOVED***<meta charset="***REMOVED*** bloginfo( 'charset' ); ?>">
***REMOVED******REMOVED***<meta name="viewport" content="width=device-width, initial-scale=1">
***REMOVED******REMOVED***<meta name="csm:token" value="***REMOVED*** echo esc_attr( bigt_csm_get_token() ); ?>">
***REMOVED******REMOVED***<link rel="profile" href="https://gmpg.org/xfn/11">

***REMOVED******REMOVED******REMOVED*** wp_head(); ?>
***REMOVED***</head>

***REMOVED***<body***REMOVED*****REMOVED*** body_class(); ?>>
***REMOVED******REMOVED***<div id="page" class="site">
***REMOVED******REMOVED******REMOVED***<a class="skip-link screen-reader-text" href="#content">***REMOVED*** esc_html_e( 'Skip to content', 'bigt' ); ?></a>

***REMOVED******REMOVED******REMOVED***<nav id="site-navigation" class="navbar navbar-expand-lg navbar-dark navbar-primary">
***REMOVED******REMOVED******REMOVED******REMOVED***<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<span class="navbar-toggler-icon"></span>
***REMOVED******REMOVED******REMOVED******REMOVED***</button><!-- .navbar-toggler -->

***REMOVED******REMOVED******REMOVED******REMOVED***<div class="collapse navbar-collapse" id="navbar-content">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<a class="navbar-brand" href="***REMOVED*** echo esc_url( get_home_url() ); ?>">***REMOVED*** echo esc_html( get_bloginfo( 'title' ) ); ?></a>

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<ul class="navbar-nav ml-auto">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<li class="nav-item"><a class="nav-link" href="***REMOVED*** echo esc_url( get_home_url() ); ?>">Home</a></li>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** Check if the user is logged in.
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** If the user is logged in, display username with dropdown action menu.
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***if ( is_user_logged_in() ) :
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***?>

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<li class="nav-item dropdown">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i>***REMOVED*****REMOVED*** echo esc_html( $user_data->display_name ); ?></a>

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="dropdown-menu" aria-labelledby="current_user">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<a class="dropdown-item" href="***REMOVED*** echo esc_url( get_home_url() . '/my-tickets' ); ?>">View Tickets</a>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<a class="dropdown-item" href="***REMOVED*** echo esc_url( wp_logout_url() ); ?>">Logout</a>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- .dropdown-menu -->
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</li><!-- .nav-item .dropdown -->

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<li class="nav-item"><a class="nav-link" href="***REMOVED*** echo esc_url( wp_logout_url() ); ?>"><i class="fa fa-sign-out-alt"></i></a></li>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** If user is not logged in, display a link for the user to login.
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***/
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***else :
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***?>

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<li class="nav-item"><a class="nav-link" href="***REMOVED*** echo esc_url( wp_login_url() ); ?>">Login</a></li>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*** // End: is_user_logged_in. ?>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***</ul><!-- .navbar-nav -->
***REMOVED******REMOVED******REMOVED******REMOVED***</div><!-- #navbar-content -->
***REMOVED******REMOVED******REMOVED***</nav><!-- #site-navigation -->

***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED***
***REMOVED******REMOVED******REMOVED******REMOVED*** Check if current page is the Front Page or a 404 error page.
***REMOVED******REMOVED******REMOVED******REMOVED*** If it is, display the TSD logo at the top of the page.
***REMOVED******REMOVED******REMOVED******REMOVED***/
***REMOVED******REMOVED******REMOVED***if ( is_front_page() || is_404() || is_page( 80 ) ) :
***REMOVED******REMOVED******REMOVED******REMOVED***?>

***REMOVED******REMOVED******REMOVED***<div class="container text-center">
***REMOVED******REMOVED******REMOVED******REMOVED***<img src="https://www.thompsonschools.org/cms/lib/CO01900772/Centricity/Template/GlobalAssets/images/logos/TSD-Mountain-Line_Blue.png" class="mt-4" />
***REMOVED******REMOVED******REMOVED***</div>

***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*** // End: is_front_page OR is_404. ?>

***REMOVED******REMOVED******REMOVED***<div id="content" class="container site-content my-4">
