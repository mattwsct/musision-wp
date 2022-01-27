<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<section class="article-breadcrumb">
	<div class="container pt-3">
		<div class="row">
			<div class="col">
				<p><a href="/">ホーム</a> > <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">お知らせ</a> > <strong><a href="<?php get_page_link(); ?>"><?php the_title(); ?></a></strong></p>
			</div>
		</div>
	</div>
</section>
<div class="wrapper" id="single-wrapper">
	<div class="container-fluid pb-5" id="content" tabindex="-1">
		<div class="container">
		<div class="row">
			<main class="site-main" id="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop-templates/content', 'single' ); ?>
				<?php endwhile; // end of the loop. ?>
			</main><!-- #main -->
		</div><!-- .row -->
	</div><!-- #content -->
</div>
</div><!-- #single-wrapper -->

<?php get_footer(); ?>
