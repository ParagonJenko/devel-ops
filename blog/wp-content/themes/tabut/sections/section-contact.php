<?php
/**
 * Contact Section
 */
?>

<section id="contact" class="hero">
	<div class="hero-body">
		<?php
		if ( get_theme_mod( 'tabut_contact_setting_id' ) ) {
			$queryabout = new WP_query( array( 'page_id' => get_theme_mod( 'tabut_contact_setting_id', true ) ) );
			while ( $queryabout->have_posts() ) :
				$queryabout->the_post();
				?>
				<div class="contact-title">
				  <h1 class="title "> <?php the_title(); ?> </h1>
				</div>
				<div class="container">
				  <div class="tabut-contact-form">
					<div class="columns">
					  <div class="column">
						<?php the_content(); ?>
					  </div>
					</div>
				  </div>
				</div>
				<?php
			endwhile;
		} else {
			?>
			<?php if ( current_user_can( 'edit_theme_options' ) ) { ?>
			  <div id="contact-not" class="notification">
				<button class="delete del-contact"></button>
				<h2 class="is-uppercase has-text-weight-bold is-size-4"><?php esc_html_e( 'Contact Section', 'tabut' ); ?></h2>
				<p><?php printf( __( 'This section require <strong>Contact Form 7</strong>, Install Contact Form 7 Plugin and than create a form and add shortcode to a new page and select that page from <strong>Customize Control</strong>.', 'tabut' ) ); ?></p>
				<p><?php printf( __( 'To Match the Form style with theme check <strong>Theme info</strong> menu in your <strong>WordPress Dashboard</strong>.', 'tabut' ) ); ?></p>
				</div> 
				<?php
			}
			?>
			<?php
		}
		?>
  </div>
</section>
