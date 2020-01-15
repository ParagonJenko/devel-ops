<?php
/** Customizer CSS */

function Tabut_Theme_Customize_css() {  ?>

<style type="text/css">
#hero {
	background-image: linear-gradient(to top, #000000b0 50%, transparent 80%), url('<?php echo esc_url( get_theme_mod( 'Hero_background_image_setting' ) ); ?>');
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}
#contact {
	background-image: linear-gradient(to top, #000000b0 50%, transparent 80%),url('<?php echo esc_url( get_theme_mod( 'contact_background_image_setting' ) ); ?>');
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}

#about .title,
#services .title,
#portfolio .title,
#contact .contact-title .title {
	color: <?php echo esc_html( get_theme_mod( 'primary_font_color' ) ); ?>;
}

#about p,
#services p,
#services li,
#services li,
#portfolio p {
	color: <?php echo esc_html( get_theme_mod( 'secondry_font_color' ) ); ?>;
}

.entry-title a {
	color: <?php echo esc_html( get_theme_mod( 'heading_color' ) ); ?>;
}

.entry-title a:hover {
	color: <?php echo esc_html( get_theme_mod( 'heading_hover_color' ) ); ?>;
}

.entry-content,
.entry-content h1,
.entry-content h2,
.entry-content h3,
.entry-content h4,
.entry-content h5,
.entry-content h6,
.entry-meta {
	color: <?php echo esc_html( get_theme_mod( 'paragraph_color' ) ); ?>;
}

.entry-meta a,
.entry-content a {
	color: <?php echo esc_html( get_theme_mod( 'link_color' ) ); ?>;
}

.entry-meta a:hover,
.entry-content a:hover {
	color: <?php echo esc_html( get_theme_mod( 'link_hover_color' ) ); ?>;
}

</style>

	<?php
}

add_action( 'wp_head', 'Tabut_Theme_Customize_css' );

