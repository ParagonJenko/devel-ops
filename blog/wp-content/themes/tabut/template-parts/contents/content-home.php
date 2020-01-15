<?php
 /**
  * Content Home Template Part
  */
?>

<section class="section">
	<div class="container is-mobile">
		<header class="entry-header is-mobile  container">
				<?php the_title( '<h2 class="entry-title is-size-2 has-text-centered fancy-font"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
				<div class="entry-meta has-text-centered container">
					<?php
					tabut_posted_on();
					tabut_posted_by();
					?>
				</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<?php if ( has_post_thumbnail() ) { // If blog page(home.php) have thumbnail ?>
			<figure class="image thumbnail-center">
				<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">
				<?php
				the_post_thumbnail(
					array( 750, 750 ),
					array(
						'class' => 'has-text-centered',
					)
				);
				?>
				</a>
			</figure>
			<?php
		}
		?>
		<div class="entry-content has-text-centered content">
			<?php
			the_excerpt(
				sprintf(
					wp_kses(
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
			?>
			<p class="buttons read-more-btn has-text-weight-bold is-uppercase"><a class="button is-light" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'tabut' ); ?></a></p>
			<?php 
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tabut' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
	</div>
</section>
