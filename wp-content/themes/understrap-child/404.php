<?php
/**
 * 404 Page
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
<main class="404">
  <section class="wrapper bg-white pb-4" id="full-width-page-wrapper">
    <div class="container py-5 px-4" id="content">
      <div class="row text-center mb-5">
        <div class="col">
          <h1 class="text-primary">お探しのページが見つかりませんでした。</h1>
          <p class="py-3">URLが間違っているか、ページが存在しません。
          下のリンク一覧から他のページをご覧ください。</p>
          <p><a href="/">ホームへ</a></p>
          <p><a href="https://www.musision.jp/">MUSISION公式サイトへ</a></p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
