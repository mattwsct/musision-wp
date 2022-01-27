<?php
/**
 * Template Name: Landing Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header('landing');
$container = get_theme_mod( 'understrap_container_type' );
?>
<main class="landing">
	<section>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-pause="false">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="sliding-bg landing-bg-1">
						<div class="container text-white">
							<h1>大迫力の映画鑑賞</h1>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="sliding-bg landing-bg-2">
						<div class="container text-white">
							<h1>お家でカラオケ</h1>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="sliding-bg landing-bg-3">
						<div class="container text-white">
							<h1>お家が音楽スタジオ</h1>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="sliding-bg landing-bg-4">
						<div class="container text-white">
							<h1>自宅で撮影・生配信</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="wrapper" id="full-width-page-wrapper">
		<div class="container py-5 bg-white" id="content">
			<div class="row text-left text-md-center py-5 px-4 floating-box">
				<div class="col">
					<h1 class="mb-4">音のストレスフリー生活を始めよう</h1>
					<p>ミュージションは業界最高基準の防⾳性能。<br>※24時間いつでも友達や家族とカラオケや楽器、ホームシネマ、スポーツ観戦、動画配信やゲームなどが楽しめる「趣味がみつかる部屋」。生活の騒音トラブルリスクから解放された、音のストレスフリー生活を提案します。</p>
				</div>
			</div>
			<div class="row text-center text-primary mt-5 mb-5">
				<div class="col">
					<h1>さあ、自宅で趣味をみつけよう</h1>
				</div>
			</div>
			<div class="cards row">
				<div class="col-md-6 col-lg-4">
					<a href="<?php echo get_permalink(); ?>manga">
						<div class="card mb-4">
							<div class="card-img-top card-bg-7">
							</div>
							<div class="card-body card-primary">
								<h1>特集コンテンツ</h1>
								<h2>趣味がみつかる部屋に住むなら・・</h2>
								<p class="card-text">漫画家「アーノルズはせがわ」が趣味がみつかる部屋を漫画で紹介!</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-8">
					<a href="<?php echo get_permalink(); ?>karaoke">
						<div class="card mb-4">
							<div class="card-img-top card-bg-2">
								<div class="overlay">
									<img src="<?php echo get_template_directory_uri(); ?>-child/images/overlay-joysound.png" alt="">
								</div>
							</div>
							<div class="card-body">
								<h1>みんなでカラオケ</h1>
								<h2>歌いたい時にいつでも歌える！</h2>
								<p class="card-text">※24時間いつでも自宅でカラオケの練習をしたり、友達を集まって、パーティ出来るって本当!?</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4">
					<a href="<?php echo get_permalink(); ?>studio">
						<div class="card mb-4">
							<div class="card-img-top card-bg-1">
								<div class="overlay">
									<img src="<?php echo get_template_directory_uri(); ?>-child/images/overlay-roland.png" alt="">
								</div>
							</div>
							<div class="card-body">
								<h1>音楽スタジオに</h1>
								<h2>いつでも音楽スタジオに！</h2>
								<p class="card-text">※24時間いつでも楽器の練習やDTMで作曲が出来るって本当！？</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card card-quote mb-4">
						<div class="card-body">
							<p class="card-text">趣味が<br>みつかる<br>部屋</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<a href="<?php echo get_permalink(); ?>family">
						<div class="card mb-4">
							<div class="card-img-top card-bg-5">
								<div class="overlay">
									<img src="<?php echo get_template_directory_uri(); ?>-child/images/overlay-joysound-roland.png" alt="">
								</div>
							</div>
							<div class="card-body card-teal">
								<h1>家族で趣味をみつける</h1>
								<h2>いつでも家族と一緒に笑顔！</h2>
								<p class="card-text">ミュージションは家族で過ごせる共通の趣味を見つけ、絆を深める生活を提案します</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-8">
					<a href="<?php echo get_permalink(); ?>video-editing">
						<div class="card mb-4">
							<!-- <div class="coming-soon coming-soon-salmon">
								<p>Coming soon</p>
							</div> -->
							<div class="card-img-top card-bg-3">
								<div class="overlay">
									<img src="<?php echo get_template_directory_uri(); ?>-child/images/Teac_Pastille@2x.png" alt="">
								</div>
							</div>
							<div class="card-body card-salmon">
								<h1>気軽に動画撮影、配信</h1>
								<h2>いつでも動画撮影、生配信！</h2>
								<p class="card-text">※24時間いつでも楽しい動画を撮影したり、配信サイトへの配信が出来るって本当！？</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 d-none">
					<div class="card mb-4">
						<div class="coming-soon coming-soon-orange">
							<p>Coming soon</p>
						</div>
						<div class="card-img-top card-bg-4">
						</div>
						<div class="card-body card-teal">
							<h1>映画やスポーツを大音量で</h1>
							<h2>いつでもパブリックビューイング！</h2>
							<p class="card-text">※24時間いつでも大音量、大迫力での映画鑑賞やスポージ観戦が出来るって本当！？</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 d-none">
					<div class="card mb-4">
						<div class="coming-soon">
							<p>Coming soon</p>
						</div>
						<div class="card-img-top card-bg-6">
						</div>
						<div class="card-body">
							<h1>みんなでゲーム</h1>
							<h2>いつでもゲームで熱くなれる！</h2>
							<p class="card-text">※24時間いつでも仲間や家族で集まってゲームでパーティが出来るって本当！？</p>
						</div>
					</div>
				</div>
				<div class="col-12 text-left text-md-center">
					<p>※演奏可能楽器および可能時間は、物件により異なります。詳しくはお問合せください。</p>
				</div>
			</div>
			<?php if ($posts = get_posts('posts_per_page=3')) : ?>
				<div class="row text-center mt-5">
					<div class="col">
						<h1>新着お知らせ</h1>
					</div>
				</div>
				<?php foreach($posts as $post) : setup_postdata( $post ) ?>
					<div class="row articles mt-5">
						<div class="col">
							<?php get_template_part( 'loop-templates/content', 'post' ); ?>
						</div>
					</div>
				<?php endforeach; ?>
				<div class="row text-center py-5">
					<div class="col text-white">
						<a class="btn btn-large btn-black" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">お知らせ一覧</a>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>