<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tabut
 */

if ( ! is_active_sidebar( 'footer' ) ) {
	return;
}
?>

<footer id="secondary footer-widget" class="widget-area tabut-footer">
	<section class="section">
		<div class="container">
	<div class="columns is-multiline">
		<?php dynamic_sidebar( 'footer' ); ?>
	</div>			
		</div>
	</section>
</footer><!-- #secondary -->
