<?php
/**
 * Template Name: Karaoke カラオケ
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
<main class="karaoke">
  <section class="karaoke-header">
  </section>
  <section class="wrapper bg-white pb-4" id="full-width-page-wrapper">
    <div class="container powered-by py-5 px-4" id="content">
      <div class="row">
        <div class="col-md-6 karaoke-picture">
        </div>
        <div class="col-md-6 p-3">
          <h1>趣味がみつかる部屋で全力カラオケ</h1>
          <p>「趣味がみつかる部屋」でのカラオケなら、「周囲への音漏れが気になって中々全力で楽しめない」という悩みを解決！「家族・友達を呼んでカラオケを自宅で全力で楽しみたい！練習したい！パーティしたい！」　そんな要望を叶えます！！</p>
        </div>
      </div>
      <div class="row">
        <div class="offset-md-2 col-md-10 shadow-lg bg-white p-4 floating-karaoke text-center">
          <div class="row mx-0">
            <div class="col-md-5 p-4 floating-karaoke-left text-left text-md-center">
              <p>MUSISIONの防音性能とJOYSOUNDのカラオケならカラオケBOXさながらのお家カラオケが何時でも全力で楽しめるのです！</p>
            </div>
            <div class="col-md-7 my-auto h-100 pt-5 pt-md-0">
              <div class="row">
                <div class="col-xl-4 pl-xl-5 pr-xl-0 my-auto h-100 text-xl-right">
                  <span class="mb-0">カラオケ機器提供</span>
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
  <?php get_template_part( 'partials/youtube' ); ?>
  <?php get_template_part( 'partials/installed-equipment' ); ?>
  <?php get_template_part( 'partials/new-arrival' ); ?>
</main>

<?php get_footer(); ?>
