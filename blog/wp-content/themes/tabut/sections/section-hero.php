<?php
/**
 * Hero Section
 */
?>

<section id="hero" class="hero is-medium">
  <div class="container">
	<div class="hero-body">
	  <div class="container">
		<h1 class="title"><?php bloginfo( 'name' ); ?></h1>
		<h2 class="subtitle"><?php bloginfo( 'description' ); ?></h2>
		<?php if ( get_theme_mod( 'primary_btn_toggle' ) == '' ) { ?>
		  <a href="<?php echo esc_url( get_theme_mod( 'btn_one_setting' ) ); ?>" class="button is-primary is-size-6 is-rounded"><?php echo esc_html( get_theme_mod( 'btn_one_setting_text', 'Primary' ) ); ?></a>
			<?php
		} // end if
		?>
		<?php if ( get_theme_mod( 'secondary_btn_toggle' ) == '' ) { ?>
		  <a href="<?php echo esc_url( get_theme_mod( 'btn_two_setting' ) ); ?>" class="button is-link is-size-6 is-rounded"><?php echo esc_html( get_theme_mod( 'btn_two_setting_text', 'Secondary' ) ); ?></a>
			<?php
		} // end if
		?>
	  </div>
	</div>
  </div>
</section> 
