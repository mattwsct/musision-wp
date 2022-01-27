<?php
/**
 * Template Name: Studio 音楽スタジオ
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<main class="studio">
  <section class="studio-header">
  </section>
  <section class="wrapper family-details">
    <div class="container powered-by py-5">
      <div class="row mx-0">
        <div class="col-md-6 studio-picture">
        </div>
        <div class="col-md-6 p-3">
          <h1>あなたの部屋が音楽スタジオに</h1>
          <p>自宅で本格楽器演奏！趣味でも本格派でも自宅をスタジオとして使える環境がここにあります！</p>
        </div>
      </div>
      <div class="row mx-0">
        <div class="offset-md-2 col-md-10 shadow-lg bg-white p-5 floating-karaoke text-center">
          <div class="row">
            <div class="col-md-5 p-4 floating-karaoke-left text-left text-md-center">
              <p>MUSISIONの防音性能とRolandの「れんため！」で手軽に気兼ねなく楽器演奏が楽しめるのです！</p>
            </div>
            <div class="col-md-7 my-auto h-100 pt-5 pt-md-0">
              <div class="row">
                <div class="col-xl-4 pl-xl-5 pr-xl-0 my-auto h-100 text-xl-right">
                  <span class="mb-0">POWERED BY</span>
                </div>
                <div class="col-xl-8 pl-xl-0">
                  <img src="../wp-content/themes/understrap-child/images/Roland_Logo.svg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white wrapper py-4 mb-5 youtube">
    <div class="container pt-3 px-4">
      <div class="row text-center">
        <div class="col-12 p-4 text-left text-md-center">
          <h3>そんなにすごいの？MUSISION。実際に住んでいる人達が演奏した映像をチェック！</h3>
        </div>
        <div class="col-12 mt-4">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uL1CpcIjA-0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="instruments-detail text-white wrapper">
    <div class="container py-5">
      <div class="row text-center">
        <div class="col-12">
          <h3>使用機材：TD-1DMK</h3>
          <p class="pt-5 text-left text-md-center">一人ひとりのドラマーに最適なセッティングが可能各パッドの高さ・位置はナット一つで簡単に調節できるので、キッズ・ドラムとしてもお使いいただけます。叩く頻度の高いスネアとハイハットはそれぞれ独立して調整可能、シンバルの調整範囲も広い為、一人ひとりのドラマーに適した自由度の高いセッティングが可能です。
          </p>
        </div>
        <div class="col-md-6 offset-md-3">
          <img class="pt-5" src="../wp-content/themes/understrap-child/images/td-1dmk_overhead_gal@2x.png">
        </div>
      </div>
      <div class="container instruments-slider text-center text-white py-5">
        <div class="row">
          <div class="col">
            <img class="py-5" src="../wp-content/themes/understrap-child/images/Rentame_Logo_White.svg">
            <p class="text-left text-md-center">短期、長期で選べる楽器レンタルサービス！手軽に借りて、挑戦したかった楽器に今すぐチャレンジ！</p>
          </div>
        </div>
        <div class="row py-5">
          <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-pause="false">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="sliding-instruments-bg instruments-bg-1">
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="sliding-instruments-bg instruments-bg-2">
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="sliding-instruments-bg instruments-bg-3">
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="sliding-instruments-bg instruments-bg-4">
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="sliding-instruments-bg instruments-bg-5">
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="sliding-instruments-bg instruments-bg-6">
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col">
            <a href="https://store.roland.co.jp/html/page37.html?utm_source=musision_site&utm_medium=lp&utm_campaign=musision&utm_content=rental_btn" class="btn btn-lg btn-light btn-white-orange shadow">公式サイトはこちら</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper bg-white text-center mb-5 installed-equipment">
    <div class="container py-5 px-5">
      <div class="row">
        <div class="col">
          <p class="mb-5 text-left text-md-center">さらに、同室設置のJOYSOUND MAX2ならカラオケに楽器を繫いで本格的な演奏が可能！ギターやベース、電子ドラムなどの電子楽器をつないで楽器の練習ができます。</p>
          <div class="row">
            <div class="col-12 px-5">
              <img style="max-height: 100px" src="../wp-content/themes/understrap-child/images/joysound-max-2-logo.jpg">
            </div>
            <div class="col-12 mb-4">
              <img style="max-height: 400px" src="../wp-content/themes/understrap-child/images/joysound-max-2@2x.png">
            </div>
          </div>
          <a href="https://www.joysound.com/web/s/joy/gakki" class="btn btn-blue btn-lg btn-joysound mb-5">詳細はこちら</a>
          <div class="small-text text-left text-md-center">
            <p>* JOYSOUND MAX2の「ハイレゾ」とは、マイク音声入力を24bit/192kHzで音響処理したものとなります。<br>ミュージックは、CDスペックの素材波形を音響処理によりハイレゾ相当に変換したものとなります。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part( 'partials/new-arrival' ); ?>
</main>

<?php get_footer(); ?>
