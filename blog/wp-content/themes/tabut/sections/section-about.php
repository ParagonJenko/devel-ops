<?php
/**
 * About Section
 */
?>

<section id="about" class="section">
  <div class="container">
	<?php
	if ( get_theme_mod( 'tabut_about_setting_id' ) ) {
		$queryabout = new WP_query( array( 'page_id' => get_theme_mod( 'tabut_about_setting_id', true ) ) );
		while ( $queryabout->have_posts() ) :
			$queryabout->the_post();
			?>
	  <div class="columns">
		<div class="column has-text-centered is-flex about_image">
		  <figure> <?php the_post_thumbnail( 'full' ); ?> </figure>
		</div>
		<div class="column content">
		  <h1 class="title is-size-1"> <?php the_title(); ?> </h1>
		  <p><?php echo esc_html( wp_trim_words( get_the_content(), 90, '...' ) ); ?></p>
			<?php if ( get_theme_mod( 'aboutMore_btn_toggle' ) == '' ) { ?>
			<p>
			  <a class="button is-link is-rounded" href="<?php echo esc_url( get_permalink() ); ?>">
				<span><?php esc_html_e( 'Learn More', 'tabut' ); ?></span>
				<span class="icon is-small"><i class="fas fa-angle-right"></i></span>
			  </a>
			  </p>
			<?php } // end if ?>
			</div>
			</div>
			<?php
		endwhile;
	} else {
		?>
			<?php if ( current_user_can( 'edit_theme_options' ) ) { ?>
			  <div id="about-not" class="notification is-link">
				<button class="delete del-about"></button>
				<h2 class="is-uppercase has-text-weight-bold is-size-4"><?php esc_html_e( 'About Section', 'tabut' ); ?></h2>
				<p><?php printf( __( 'You can select a page which contain <strong>Featured Image</strong> and a <strong>Title</strong> with some <strong>Content</strong>, and the theme will automaticaly display all information here with style. Anyway you can also hide this section if you want!', 'tabut' ) ); ?>
				</p>
				<p><?php printf( __( 'All the settings are available in <strong>Customize</strong> Menu', 'tabut' ) ); ?>
				</p>
				</div>
				<?php
			}
	}
	?>
  </div>
</section>
