<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tabut
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title is-size-3 has-text-centered"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta has-text-centered">
			<?php
			tabut_posted_on();
			tabut_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

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

	<div class="entry-summary has-text-centered">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<hr class="hr-text" data-content="&">
</article><!-- #post-<?php the_ID(); ?> -->
