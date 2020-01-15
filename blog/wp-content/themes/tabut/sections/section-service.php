<?php
/**
 * Services Section
 */
?>

<section id="services" class="section">
  <div class="container">
	<?php
	if ( get_theme_mod( 'tabut_services_setting_id' ) ) {
		$queryabout = new WP_query( array( 'page_id' => get_theme_mod( 'tabut_services_setting_id', true ) ) );
		while (
		  $queryabout->have_posts() ) :
			$queryabout->the_post();
			?>
		  <span class="span">
			<h1 class="title is-size-2 has-text-centered"> 
			  <?php the_title(); ?> 
			</h1>
		  </span>
		  <div class="columns">
			<div class="column">
			  <?php the_content(); ?>
			</div>
			<div class="column">
			  <figure><?php the_post_thumbnail(); ?></figure>
			</div>
		  </div>
			<?php
		endwhile;
	} else {
		if ( current_user_can( 'edit_theme_options' ) ) {
			?>
		<div id="services-not" class="notification is-info">
		  <button class="delete del-services"></button>
		  <h2 class="is-uppercase has-text-weight-bold is-size-4">
			<?php esc_html_e( 'Service Section', 'tabut' ); ?>
		  </h2>
		  <p>
			<?php printf( __( 'You can select a page which contain <strong>Featured Image</strong> and a <strong>Title</strong> with some <strong>Content</strong> you can write your services as <strong>List Itms</strong> to get the same look as in demo. Theme will display all information here with styles. Anyway you can also hide this section if you want!', 'tabut' ) ); ?>
		  </p>
		  <p>
			<?php printf( __( 'All the settings are available in <strong>Customize</strong> Menu', 'tabut' ) ); ?>
		  </p>
		</div>
			<?php
		}
	}
	?>
  </div>
</section>
