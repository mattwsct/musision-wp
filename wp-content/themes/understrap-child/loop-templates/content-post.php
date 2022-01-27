<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="row article-summary">
		<div class="col-md-2">
			<?php if ($post_thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID))) : ?>
			<a href="<?php the_permalink(); ?>"><div class="img-shadow" style="background-image: url('<?php echo $post_thumbnail; ?>')">
				<!-- <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> -->
			</div></a>
			<?php else : ?>
			<a href="<?php the_permalink(); ?>"><div class="img-shadow default-background">
				<!-- <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> -->
			</div></a>
			<?php endif ?>
		</div>
		<div class="col-md-6">
			<header class="entry-header mt-3">
				<h2 class="entry-date"><?php the_time( 'Y/m/j' ) ; ?></h2>
				<a href="<?php the_permalink(); ?>"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
			</header><!-- .entry-header -->
			<div class="entry-content mt-2">
				<?php the_content(); ?>
				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
			<footer class="entry-footer mt-2">
				<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-footer -->
		</div>
		<div class="col-md-4 text-center text-md-right mt-4">
			<a class="btn btn-lg btn-light btn-article" href="<?php the_permalink(); ?>">続きを読む <i class="fas fa-chevron-right"></i></a>
		</div>
	</div>
</article><!-- #post-## -->