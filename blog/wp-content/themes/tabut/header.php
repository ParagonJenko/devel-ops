<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tabut
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="custom-container">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tabut' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="container">


	<nav id="site-navigation" class="navbar tabut-navigation" role="navigation" aria-label="main navigation">
  <div class="brand">
	
	<div class="site-branding brand">
		<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
		<?php $logo = wp_get_attachment_image_src( $custom_logo_id, 'small' ); ?>
		<?php
		if ( has_custom_logo() ) {
			echo '<img src="' . esc_url( $logo[0] ) . '" width="112" height="28">';
		} else {
			?>
			<a class="navbar-item is-size-4 fancy-font" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		<?php } ?>
		</div><!-- .site-branding -->


	<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
	  <span aria-hidden="true"></span>
	  <span aria-hidden="true"></span>
	  <span aria-hidden="true"></span>
	</a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
	<div class="navbar-end">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

		
	</div>
  </div>
</nav><!-- #site-navigation -->
</div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
