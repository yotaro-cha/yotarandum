<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="l-inner">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
        <div class="sorryBox">
          <div class="img"><img src="/wp-content/uploads/2019/10/yotaro_sorry.png" alt="ごめんなさい"></div>
          <div class="txt">
					  <h1 class="page-title">ごめんよぉ！</h1>
            <p>お探しのページはこのサイトには無いんだよぉ。<br>
            役立たずなオイラを許しておくれよぉ……</p>
            <p>もし良かったら下のリンクから色々見てっとくれよぉ</p>
            <p>本当にごめんよぉ……</p>
          </div>
        </div>

				<div class="page-content">
					<?php get_search_form(); ?>

          <h2 class="u-ttl1"><img src="/wp-content/uploads/2018/10/txt_category_s.png" alt=""></h2>
          <h2 class="u-ttl1"><img src="/wp-content/uploads/2018/10/txt_tag_s.png" alt=""></h2>
          <h2 class="u-ttl1"><img src="/wp-content/uploads/2018/10/txt_archive_s.png" alt=""></h2>
				</div><!-- .page-content -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .l-inner -->

<?php
get_footer();
