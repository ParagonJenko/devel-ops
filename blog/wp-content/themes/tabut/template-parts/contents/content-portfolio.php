<?php
/**
 * Content Page Portfolio Header Template
 */
?>
<div class="meta container has-text-centered notification">
	<?php echo esc_html( get_post_meta( $post->ID, 'portfolio', true ) ); ?>
		<?php the_post_thumbnail( 'medium-large' ); ?>
		<?php
		if ( get_post_meta( get_the_ID(), 'product_information_add_date', true ) ) :
			?>
		<p>
			<?php _e( 'Release Date:', 'tabut' ); ?> <?php echo esc_html( get_post_meta( $post->ID, 'product_information_add_date', true ) ); ?>
		</p>
			<?php
		endif;
		?>
	<?php
	if ( get_post_meta( get_the_ID(), 'product_information_add_link', true ) ) :
		?>
	<p>
		<?php _e( 'Product URL:', 'tabut' ); ?> 
			<a href="<?php echo esc_html( get_post_meta( $post->ID, 'product_information_add_link', true ) ); ?>">
				<?php echo esc_html( get_post_meta( $post->ID, 'product_information_add_link', true ) ); ?>
			</a>
	</p>
		<?php
	endif;
	?>
</div>
