<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wpautomate
 */
$wpautomate_post_type = get_post_type();
$wpautomate_post_wrapper = $wpautomate_post_type . '--single';


?>

<section id="post-<?php the_ID(); ?>" <?php post_class($wpautomate_post_wrapper); ?>>
	<?php if (has_post_thumbnail()) : ?>
	<div class="<?php echo esc_attr($wpautomate_post_type); ?>--image">
		<?php the_post_thumbnail('thumbnail'); ?>
	</div>
	<?php endif; ?>
	<header class="<?php echo esc_attr( $wpautomate_post_type );?>--entry-header entry-header">
		<?php the_title( '<h1 class="entry-single-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php wpautomate_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="<?php echo esc_attr( $wpautomate_post_type );?>--entry-content entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wpautomate' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer <?php echo esc_attr( $wpautomate_post_type );?>--entry-footer">
		<?php wpautomate_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

