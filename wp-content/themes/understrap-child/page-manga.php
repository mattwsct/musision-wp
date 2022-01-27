<?php
/**
 * Template Name: Manga
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
<main class="manga">
  <section class="wrapper bg-white" id="full-width-page-wrapper">
    <div class="container pt-3 px-4" id="content">
      <div class="row text-left text-center mb-5">
        <header class="col-12 mb-3">
          <h2>◆特集コンテンツ◆</h2>
        </header>
        <div class="col-12 mb-3">
          <p>漫画家が「趣味がみつかる部屋」に住むとしたら・・・<br>
          <a href="https://twitter.com/ringooooooooooz">アーノルズはせがわ</a>がオリジナル漫画で紹介！！</p>
        </div>
        <div class="manga-strips mb-5 pb-5">
          <div class="col-12">
            <img src="<?php echo get_template_directory_uri(); ?>-child/images/manga-01.jpg">
          </div>
          <div class="col-12">
            <img src="<?php echo get_template_directory_uri(); ?>-child/images/manga-02.png">
          </div>
          <div class="col-12">
            <img src="<?php echo get_template_directory_uri(); ?>-child/images/manga-03.png">
          </div>
          <div class="col-12">
            <img src="<?php echo get_template_directory_uri(); ?>-child/images/manga-04.png">
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <?php get_template_part( 'partials/new-arrival' ); ?>
</main>

<?php get_footer(); ?>
