<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tabut
 */

get_header();
?>

<section class="section">
	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'tabut' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'tabut' ); ?></p>

					<div class="columns is-multiline">
						<div class="column is-full">
					<?php get_search_form(); ?>

						</div>
						<div class="column">
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

						</div>
						<div class="column">
						<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'tabut' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->
						</div>
						<div class="column">
						<?php
						/* translators: %1$s: smiley */
						$tabut_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'tabut' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$tabut_archive_content" );
						?>
						</div>
						<div class="column is-full card">
						<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

						</div>



					</div>



				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</section>
<?php
get_footer();
