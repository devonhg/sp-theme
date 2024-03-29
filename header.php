<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header style="background-image: url('<?php header_image(); ?>')"  id="masthead" class="site-header" role="banner">
		<div class='wrapper-line'>
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<?php if ( is_active_sidebar( 'header-area' ) ) { ?>
						<div class="sidebar-branding" role="complementary">
							<?php dynamic_sidebar( 'header-area' ); ?>
						</div><!-- #primary-sidebar -->
					<?php }  ?>
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', '_s' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<?php if ( is_active_sidebar( 'upper-sidebar' ) ) { ?>
		<div class="sidebar-upper" role="complementary">
			<?php dynamic_sidebar( 'upper-sidebar' ); ?>
		</div><!-- #primary-sidebar -->
	<?php } ?>
	
	<div id="content" class="site-content">
		<div class='content-row'>
