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

$current_user = get_userdata( get_current_user_id() );

?>
<!doctype html>
<html***REMOVED*****REMOVED*** language_attributes(); ?>>
<head>
***REMOVED***<meta charset="***REMOVED*** bloginfo( 'charset' ); ?>">
***REMOVED***<meta name="viewport" content="width=device-width, initial-scale=1">
***REMOVED***<meta name="csm:token" value="***REMOVED*** echo bigt_csm_get_token(); ?>">
***REMOVED***<link rel="profile" href="https://gmpg.org/xfn/11">

***REMOVED******REMOVED*** wp_head(); ?>
</head>

<body***REMOVED*****REMOVED*** body_class(); ?>>
<div id="page" class="site">
***REMOVED***<a class="skip-link screen-reader-text" href="#content">***REMOVED*** esc_html_e( 'Skip to content', 'bigt' ); ?></a>

***REMOVED***<nav id="site-navigation" class="navbar navbar-expand-lg navbar-dark navbar-primary">
***REMOVED******REMOVED***<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
***REMOVED******REMOVED******REMOVED***<span class="navbar-toggler-icon"></span>
***REMOVED******REMOVED***</button>
***REMOVED******REMOVED***
***REMOVED******REMOVED***<div class="collapse navbar-collapse" id="navbar-content">
***REMOVED******REMOVED******REMOVED***<a class="navbar-brand" href="***REMOVED*** echo get_home_url(); ?>">***REMOVED*** echo get_bloginfo( 'title' ); ?></a>
***REMOVED******REMOVED******REMOVED***<ul class="navbar-nav ml-auto">
***REMOVED******REMOVED******REMOVED******REMOVED***<li class="nav-item"><a class="nav-link" href="***REMOVED*** echo get_home_url(); ?>">Home</a></li>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** if (is_user_logged_in()) : ?>
***REMOVED******REMOVED******REMOVED******REMOVED***<li class="nav-item dropdown">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i>***REMOVED*****REMOVED*** echo $current_user->display_name; ?></a>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***<div class="dropdown-menu" aria-labelledby="current_user">
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <a class="dropdown-item" href="***REMOVED*** echo get_home_url(); ?>/my-tickets">View Tickets</a>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED***  <a class="dropdown-item" href="***REMOVED*** echo wp_logout_url(); ?>">Logout</a>
***REMOVED******REMOVED******REMOVED******REMOVED***    </div>
***REMOVED******REMOVED******REMOVED******REMOVED***</li>
***REMOVED******REMOVED******REMOVED******REMOVED***<li class="nav-item"><a class="nav-link" href="***REMOVED*** echo wp_logout_url(); ?>"><i class="fa fa-sign-out-alt"></i></a></li>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*** else : ?>
***REMOVED******REMOVED******REMOVED******REMOVED***<li class="nav-item"><a class="nav-link" href="***REMOVED*** echo wp_login_url(); ?>">Login</a></li>
***REMOVED******REMOVED******REMOVED******REMOVED******REMOVED******REMOVED*****REMOVED*** ?>
***REMOVED******REMOVED******REMOVED***</ul>
***REMOVED******REMOVED***</div>
***REMOVED***</nav><!-- #site-navigation -->
***REMOVED***
***REMOVED******REMOVED*** if (is_front_page() || is_404()) : ?>

    <div class="container text-center">
***REMOVED***  <img src="https://www.thompsonschools.org/cms/lib/CO01900772/Centricity/Template/GlobalAssets/images/logos/TSD-Mountain-Line_Blue.png" class="mt-4" />
    </div>
***REMOVED***
***REMOVED******REMOVED******REMOVED*****REMOVED*** ?>

***REMOVED***<div id="content" class="container site-content my-4">
