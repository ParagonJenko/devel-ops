<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tabut
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
/**************************************
 * Single page (single.php) start
 * ***************************************/
?>
<?php if ( is_single() ) { ?>
	<?php
	if ( has_post_thumbnail() ) { // If Single Page have thumbnail
		?>
				 <?php $post_thumbnail = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
				   <?php echo '<section class="hero is-info is-medium fullBg blueOverlay" style="background: url(' . esc_url( $post_thumbnail ) . ')">'; ?>
					<div class="hero-body">
						<div class="container">
						   <?php the_title( '<h1 class="entry-title is-size-2">', '</h1>' ); ?>
						</div>
					</div>
				   </section>
		 <?php
	} else { //If Single Page do not have thumbnail
		?>
			<div class="container">
				<?php the_title( '<h1 class="entry-title is-size-2 has-text-centered">', '</h1>' ); ?>
			</div>
	<?php	} ?>
	 <!-- Portfolio Section Header Start -->
		<?php
		if ( is_singular( 'portfolio' ) ) {
			get_template_part( 'template-parts/contents/content', 'portfolio' );
		}
		?>
	 <!-- Portfolio Section Header End -->
	
	<div class="entry-meta has-text-centered">
	<?php
	if ( ! is_singular( 'portfolio' ) ) {
		 tabut_posted_on();
		 tabut_posted_by();
	}
	?>
		</div><!-- .entry-meta -->
			<div class="columns is-centered">
				<div CLASS="column .is-narrow-desktop is-8">
					<div class="entry-content">
						<?php
						the_content(
							sprintf( // Content
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tabut' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							)
						);
						wp_link_pages(
							array(
								'before' => '<div class="page-links container">' . esc_html__( 'Pages:', 'tabut' ),
								'after'  => '</div>',
							)
						);
						?>
						<footer class="entry-footer">
							<?php tabut_entry_footer(); ?>
						</footer><!-- .entry-footer -->
					</div><!-- .entry-content -->
				</div>
			</div>
		<?php
		/***************************
		 * Single page (single.php) End
		 * ****************************/
		?>
		<!-- Blog page(home.php) start -->
	<?php
} else {
	get_template_part( 'template-parts/contents/content', 'home' );
}
?>
		<!-- Blog page(home.php) End -->

<hr class="hr-text" data-content="&">
</article><!-- #post-<?php the_ID(); ?> -->
