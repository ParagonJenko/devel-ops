<?php
/**
 * The template for displaying author pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tabut
 */

get_header();
?>
<section class="section">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php $author = get_the_author(); ?>      
			<?php if ( have_posts() ) : ?>
			<div class="author-page">
				<header class="page-header content">
					<div class="columns">
						<div class="column author-image">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 300 ); ?>
						</div>
						<div class="column">
							<h1 class="page-title author fancy-text">
								<span class="vcard is-size-4">
									<?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?>
								</span>
							</h1>
							<p>
							<a href="<?php echo esc_url( get_the_author_meta( 'user_url' ) ); ?>">
								<?php echo esc_html( get_the_author_meta( 'user_url' ) ); ?>
							</a>
							</p>
							<?php echo esc_html( get_the_author_meta( 'description' ) ); ?>
						</div>
					</div>
					<p><h6 class="has-text-centered"><?php esc_html_e( 'Posts by ', 'tabut' ) . the_author_posts_link(); ?></h5></p>
				</header><!-- .page-header -->
			</div>
				<?php
				/* Start the Loop */while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
				the_posts_navigation();
			else :
				get_template_part( 'template-parts/content', 'none' );

				endif;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
</section>
<?php
get_sidebar();
get_footer();
