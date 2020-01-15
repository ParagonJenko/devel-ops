<?php
/**
 * Portfolio Section
 */
?>

<section id="portfolio" class="section">
	<div class="container">
		<?php
		if ( get_theme_mod( 'tabut_portfolio_setting_id' ) ) {
			$queryabout = new WP_query( array( 'page_id' => get_theme_mod( 'tabut_portfolio_setting_id', true ) ) );
			while ( $queryabout->have_posts() ) :
				$queryabout->the_post();
				?>
				<div class="portfolio-section">
					<span class="span">
						<h1 class="title is-size-2 has-text-centered">
							<?php the_title(); ?>
						</h1>
					</span>
					<?php the_content(); ?>
				</div>
				<?php
				endwhile;
		} else {
			if ( current_user_can( 'edit_theme_options' ) ) {
				?>
				<div id="portfolio-not" class="notification is-warning">
					<button class="delete del-portfolio"></button>
					<h2 class="is-uppercase has-text-weight-bold is-size-4">
						<?php esc_html_e( 'Portfolio Section', 'tabut' ); ?>
					</h2>
					<p>
						<?php printf( __( 'To use <strong>Portfolio Section</strong> you need to install <strong>Tabut Companion</strong>, <strong>Tabut Companion</strong> is a WordPress Plugin that will add some extra features in <strong>Tabut Theme</strong>, This plugin is available free and also added in Recommended Plugins.', 'tabut' ) ); ?>
					</p>
					<p>
						<?php printf( __( 'All the other settings are available in <strong>Customize</strong> Menu', 'tabut' ) ); ?>
					</p>
		</div>
				<?php
			}
		}
		?>
	<div class="columns is-multiline">
		<?php
		$args = array(
			'post_type'      => 'portfolio',
			'posts_per_page' => 5000,
		);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : while ( $loop->have_posts() ) :
			$loop->the_post();
			?>
		<div class="column is-one-third front-portfolio-card">
			<?php
			if ( get_the_post_thumbnail( $post_id ) != '' ) {
				the_post_thumbnail();
			} else {
				echo '<img src="';
				echo tabut_first_image();
				echo '" alt="" />';
			}
			?>
			<div class="bottom-right">
				<?php the_tags( '<li>', '</li><li>', '</li>' ); ?>
				<h2>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
			</div>
		</div>
		<?php endwhile; else : ?>
		<?php printf( __( '<b>No Portfolio Item</b>', 'tabut' ) ); ?>
		<?php endif; ?>
	</div><!-- .is-multiline -->
	</div>
</section>
