<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tabut
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
		// Must be inside a loop.
if ( has_post_thumbnail() ) {
	?>
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
			<?php echo '<section class="hero is-info is-medium fullBg blueOverlay" style="background: url(' . esc_html( $url ) . ')">'; ?>
			<div class="hero-body">
			  <div class="container">
				<h1 class="title">
				<?php the_title( '<h1 class="entry-title is-size-2">', '</h1>' ); ?>
				</h1>
			  </div>
			</div>
		  </section>
	<?php
} else {
	?>
		<div class="container">
		<h1 class="title">
	<?php the_title( '<h1 class="entry-title is-size-2">', '</h1>' ); ?>
		</h1>
	  </div>
	<?php
}
?>
				  


	<div class="columns">
	<div class="column is-three-fifths is-offset-one-fifth">
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tabut' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'tabut' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
	</div>
		</div>
</article><!-- #post-<?php the_ID(); ?> -->
