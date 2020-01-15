<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * 
 * Template Name: Home Page
 * 
 * @package Tabut
 * @since 0.0.5
 * @version 1.0
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main front-page-template" class="site-main">
			<!-- Hero Section -->
			<?php get_template_part( 'sections/section', 'hero' ); ?>
			<!-- Here Secrtion End -->
	
			<!-- About Section -->
			<?php if ( get_theme_mod( 'about_toggle' ) == '' ) { ?>
				<?php get_template_part( 'sections/section', 'about' ); ?>
			<?php } // end if ?>
			<!-- About section End -->
	
			<!-- Services Section -->
			<?php if ( get_theme_mod( 'services_toggle' ) == '' ) { ?>
				<?php get_template_part( 'sections/section', 'service' ); ?>
			<?php } // end if ?>
	
			<!-- Services Section End -->
	
			<!-- Porfolio Section -->
			<?php if ( get_theme_mod( 'portfolio_toggle' ) == '' ) { ?>
				<?php get_template_part( 'sections/section', 'portfolio' ); ?>
			<?php } // end if ?>
	
			<!-- Portfolio Section End -->
	
			<!-- Contact Section -->
			<?php if ( get_theme_mod( 'contact_toggle' ) == '' ) { ?>
				<?php get_template_part( 'sections/section', 'contact' ); ?>
			<?php } // end if ?>
			<!-- Contact Section End -->

		
  
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php
get_footer();






