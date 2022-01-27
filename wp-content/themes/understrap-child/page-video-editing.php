<?php
/**
 * Template Name: Video Editing
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
  <section class="video-editing-header">
  </section>
  <section class="wrapper family-details">
    <div class="container powered-by py-5">
      <div class="row mx-0">
        <div class="col-md-6 video-editing-picture">
        </div>
        <div class="col-md-6 p-3">
          <h1>自宅で動画撮影！ライブ配信！</h1>
          <p>いつでも気兼ねなく動画収録&ライブ配信!「雑談」、「歌ってみた」、「演奏してみた」などを心置きなく楽しめます! </p>
        </div>
      </div>
      <div class="row mx-0">
        <div class="offset-md-2 col-md-10 shadow-lg bg-white p-5 floating-karaoke text-center">
          <div class="row">
            <div class="col-md-5 p-4 floating-karaoke-left text-left text-md-center">
              <p>MUSISIONの防音性能とTASCAMの配信機器なら、近所の目を気にせずいつでも好きな時間に、あなたの趣向に合ったライブ配信を自宅から行えちゃいます！</p>
            </div>
            <div class="col-md-7 my-auto h-100 pt-5 pt-md-0">
              <div class="row">
                <div class="col-xl-4 pl-xl-5 pr-xl-0 my-auto h-100 text-xl-right">
                  <span class="mb-0">POWERED BY</span>
                </div>
                <div class="col-xl-8 pl-xl-0">
                  <img src="../wp-content/themes/understrap-child/images/Logo_TEAC.svg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white wrapper py-4 mb-5 youtube">
    <div class="container text-center pt-3 px-4">
      <div class="row">
        <div class="col-12 p-4 text-left text-md-center">
          <h3>自宅からライブ配信！2018年開催の売れフェス番外編マンションフェス supported by MUSISIONの様子をチェック！</h3>
        </div>
        <div class="col-12 mt-4">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DORRRrmeQIc" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="mt-5">
        <small>※当配信にはTASCAM MiNiSTUDIOは利用されてません。</small>
      </div>
    </div>
  </section>
  <section class="instruments-detail text-white wrapper">
    <div class="container py-5">
      <div class="row text-center">
        <div class="col-12">
          <h3>設置機材</h3>
          <p class="pt-5 text-left text-md-center">これ一台で、どこでも放送室。<br>高音質マイクも内蔵、インターネット生放送に絞ったシンプルなエントリーモデル。<br>家庭用放送機器(USBオーディオインターフェース)TASCAM MiNiSTUDIO PERSONAL US-32
          </p>
        </div>
      </div>
      <div class="container instruments-slider text-center text-white">
        <div class="pb-3">
          <div id="carousel1" class="carousel slide my-5" data-ride="carousel" data-pause="false">
            <ol class="carousel-indicators">
              <li data-target="#carousel1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel1" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="sliding-instruments-bg tascam-bg-1">
                </div>
              </div>
              <div class="carousel-item">
                <div class="sliding-instruments-bg tascam-bg-2">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="py-3">
          <div id="carousel2" class="carousel slide my-5" data-ride="carousel" data-pause="false">
            <ol class="carousel-indicators">
              <li data-target="#carousel2" data-slide-to="0" class="active"></li>
              <li data-target="#carousel2" data-slide-to="1"></li>
              <li data-target="#carousel2" data-slide-to="2"></li>
              <li data-target="#carousel2" data-slide-to="3"></li>
              <li data-target="#carousel2" data-slide-to="4"></li>
              <li data-target="#carousel2" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="sliding-instruments-bg video-editing-bg-1">
                </div>
              </div>
              <div class="carousel-item">
                <div class="sliding-instruments-bg video-editing-bg-2">
                </div>
              </div>
              <div class="carousel-item">
                <div class="sliding-instruments-bg video-editing-bg-3">
                </div>
              </div>
              <div class="carousel-item">
                <div class="sliding-instruments-bg video-editing-bg-4">
                </div>
              </div>
              <div class="carousel-item">
                <div class="sliding-instruments-bg video-editing-bg-5">
                </div>
              </div>
              <div class="carousel-item">
                <div class="sliding-instruments-bg video-editing-bg-6">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <div class="row pt-5">
          <div class="col">
            <a href="https://tascam.jp/jp/special/ministudio" class="btn btn-lg btn-light btn-white-orange shadow">公式サイトはこちら</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper bg-white text-center mb-5 installed-equipment">
    <div class="container py-5 px-5">
      <h2>他にも生放送の為の備品も設置完備!!</h2>
      <div class="black-carousel-icons">
          <div id="carousel3" class="carousel slide my-5" data-ride="carousel" data-pause="false">
            <ol class="carousel-indicators" style="bottom:-50px">
              <li data-target="#carousel3" data-slide-to="0" class="active"></li>
              <li data-target="#carousel3" data-slide-to="1"></li>
              <li data-target="#carousel3" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <p class="py-3">密閉型ステレオモニターヘッドホンTH-02</p>
                <div class="sliding-instruments-bg equipment-bg-1">
                </div>
              </div>
              <div class="carousel-item">
                <p class="py-3">インターネット生放送用グースネックコンデンサーマイクTM-95GN</p>
                <div class="sliding-instruments-bg equipment-bg-2">
                </div>
              </div>
              <div class="carousel-item">
                <p class="py-3">配信用パソコン / USBカメラ / 簡易照明 / 各種ケーブル等</p>
                <div class="sliding-instruments-bg equipment-bg-3">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    </div>
  </section>
  <?php get_template_part( 'partials/new-arrival' ); ?>
</main>

<?php get_footer(); ?>
