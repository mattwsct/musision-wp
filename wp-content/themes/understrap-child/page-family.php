<?php
/**
 * Template Name: Family ファミリー向け
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
<main class="family">
  <section class="family-header">
  </section>
  <section class="wrapper bg-white family-intro" id="full-width-page-wrapper">
    <div class="container pt-5 px-4" id="content">
      <div class="row text-left text-md-center mb-5">
        <div class="col">
          <h2>家族の音に囲まれた、笑顔溢れる暮らし</h2>
          <h2>音のストレスフリー生活を始めよう</h2>
          <p>MUSISIONは業界最高基準の防⾳性能。<br>
          ※24時間いつでも家族や友達とカラオケや楽器、ホームシネマ、スポーツ観戦、動画配信やゲームなどが楽しめる「趣味がみつかる部屋  」生活の騒音トラブルリスクから解放された音のストレスフリー生活を提案します。 </p>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper family-details">
    <div class="container powered-by">
      <div class="row">
        <div class="col-md-6 family-picture">
        </div>
        <div class="col-md-6 p-3 orange-h1">
          <h1>家族でカラオケ</h1>
          <h2>歌いたい時にいつでも歌える！</h2>
          <p>時間を気にせず家族とカラオケパーティを楽しめます！友達も呼んでパーティしませんか？</p>
        </div>
      </div>
      <div class="row mx-0">
        <div class="offset-md-2 col-md-10 shadow-lg bg-white p-5 floating-karaoke text-center">
          <div class="row">
            <div class="col-md-5 p-4 floating-karaoke-left text-left text-md-center">
              <p>MUSISIONの防音性能とJOYSOUNDのカラオケならお家で家族カラオケが思いっきり楽しめるのです！</p>
            </div>
            <div class="col-md-7 my-auto h-100 pt-5 pt-md-0">
              <div class="row">
                <div class="col-xl-4 pl-xl-5 pr-xl-0 my-auto h-100 text-xl-right">
                  <span class="mb-0">カラオケ機材提供</span>
                </div>
                <div class="col-xl-8 pl-xl-0">
                  <img src="../wp-content/themes/understrap-child/images/joysound.jpg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part( 'partials/installed-equipment' ); ?>
  <section class="instruments-detail text-white wrapper">
    <div class="container powered-by pt-3 my-5">
      <div class="row">
        <div class="col-md-6 family-instruments-picture">
        </div>
        <div class="col-md-6 p-4">
          <h1>子供と一緒に音楽に触れる</h1>
          <h2>家族で音楽を始めよう！</h2>
          <p>子供は音楽に触れることで表現力や感性が豊かになります。家族でセッションしませんか？</p>
        </div>
      </div>
      <div class="row mx-0">
        <div class="offset-md-2 col-md-10 shadow-lg bg-white text-dark p-5 floating-karaoke text-center">
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
      <div class="row text-center my-5 pt-5">
        <div class="col-12">
          <h1>使用機材：TD-1DMK</h1>
          <p class="pt-5 text-left text-md-center">一人ひとりのドラマーに最適なセッティングが可能各パッドの高さ・位置はナット一つで簡単に調節できるので、
            キッズ・ドラムとしてもお使いいただけます。叩く頻度の高いスネアとハイハットはそれぞれ独立して調整可能、
          シンバルの調整範囲も広い為、一人ひとりのドラマーに適した自由度の高いセッティングが可能です。</p>
        </div>
        <div class="col-md-6 offset-md-3">
          <img class="pt-5" src="../wp-content/themes/understrap-child/images/td-1dmk_overhead_gal@2x.png">
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper">
    <div class="container instruments-slider black-carousel-icons text-center bg-white text-dark pt-3 pb-5">
      <div class="row">
        <div class="col">
          <img class="py-5" src="../wp-content/themes/understrap-child/images/Rentame_Logo_Color.svg">
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
      <div class="row text-center my-5">
        <div class="col">
          <a href="https://store.roland.co.jp/html/page37.html?utm_source=musision_site&utm_medium=lp&utm_campaign=musision&utm_content=rental_btn" class="btn btn-lg btn-primary btn-orange-white">公式サイトはこちら</a>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part( 'partials/new-arrival' ); ?>
</main>

<?php get_footer(); ?>
