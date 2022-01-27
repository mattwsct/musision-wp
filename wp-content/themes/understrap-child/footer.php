<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<footer class="wrapper bg-black text-white text-center" id="wrapper-footer">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-md-12">
				<footer class="site-footer container text-center" id="colophon">
					<div class="site-info row mt-4">
						<div class="col-md-6 mb-5 footer-left text-md-left">
							<a href="https://www.musision.jp/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>-child/images/Logo_White@2x.png"></a>
							<div class="row social-media-icons">
								<div class="col-3">
									<a href="https://youtube.com/user/MUSISIONTV" target="_blank"><i class="fab fa-youtube"></i></a>
								</div>
								<div class="col-3">
									<a href="https://twitter.com/musision_ls" target="_blank"><i class="fab fa-twitter"></i></a>
								</div>
								<div class="col-3">
									<a href="https://instagram.com/musision_japan/" target="_blank"><i class="fab fa-instagram"></i></a>
								</div>
								<div class="col-3">
									<a href="https://facebook.com/musision.ls/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-5 footer-right pl-md-4">
							<p>賃貸や取材、プレス関連のお問い合わせはこちら</p>
							<a href="https://www.musision.jp/contact" class="btn btn-light btn-lg text-black btn-footer">
								問い合わせ
							</a>
						</div>
					</div><!-- .site-info -->
					<div class="row text-center">
						<div class="col-12">
							<p>2019 © <a href="http://www.livlan.com/">LIVLAN CO LTD.</a> 趣味がみつかる部屋プロジェクト</p>
						</div>
						<div class="col-12 text-primary">
							<p><a href="#page">ページトップへ戻る</a></p>
						</div>
					</div>
				</footer><!-- #colophon -->
			</div><!--col end -->
		</div><!-- row end -->
	</div><!-- container end -->
</footer><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
</body>
</html>