<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Team-DE
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel='preload' href='https://static.everyaction.com/ea-actiontag/at.js' as='script' crossorigin='anonymous'>
 	<link rel='preload' href='https://static.everyaction.com/ea-actiontag/at.min.css' as='style'>
 	<script type='text/javascript' src='https://static.everyaction.com/ea-actiontag/at.js' crossorigin='anonymous'></script>
 	<link rel='preload' href='https://nvlupin.blob.core.windows.net/designs/CustomStylesheet_4dc81aac85fe05fa537ab6df61721eebf6e1b6701722d0a9270b0a66ce090d51.css' as='style'>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	 <script src="https://kit.fontawesome.com/6b35074062.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'Team-DE' ); ?></a>
	<header id="masthead" class="site-header">
		<div style="height=10px width=10px" class="site-branding">
			<?php
			the_custom_logo(); 
				?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> -->

			<input type="checkbox" id="checkbox3" aria-controls="primary-menu" aria-expanded="false" class="checkbox3 visuallyHidden menu-toggle">
        <label for="checkbox3">
            <div class="hamburger hamburger3">
                <span class="bar bar1"></span>
                <span class="bar bar2"></span>
                <span class="bar bar3"></span>
                <span class="bar bar4"></span>
            </div>
        </label>
	

			<!-- </button> -->
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->