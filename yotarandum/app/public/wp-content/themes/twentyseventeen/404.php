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
          <div class="img"><img src="/wp-content/uploads/assets/yotaro_sorry.png" alt="ごめんなさい"></div>
          <div class="txt">
					  <h1 class="page-title">ごめんよぉ！</h1>
            <p>お探しのページはこのサイトには無いんだよぉ。<br>
            役立たずなオイラを許しとくれ、、、</p>
            <p>もし良かったら下のリンクから色々見てっとくれよぉ</p>
            <p>本当にごめんよぉ……</p>
          </div>
        </div>

				<div class="page-content">
					<?php get_search_form(); ?>

          <section class="secNews">
            <h2 class="u-ttl1"><img src="/wp-content/uploads/assets/txt_news_s.png" alt="直近の投稿"></h2>
            <ul class="u-postList1 col1">
              <?php
                $wp_query = new WP_Query();
                $my_posts01 = array(
                  'post_type' => 'post',
                  'posts_per_page'=> '5',
                );
                $wp_query->query( $my_posts01 );
                if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
              ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <ul class="days">
                    <?php if(get_the_modified_time('Y-m-d') != get_the_time('Y-m-d')) : ?>
                    <li class="dayUpdate">
                      <i class="fas fa-redo-alt"></i>
                      <time datetime="<?php the_modified_time('Y-m-d'); ?>T<?php the_modified_time('H:i:sP'); ?>"><?php the_modified_time('Y年n月j日'); ?></time>
                    </li>
                    <?php else : ?>
                    <li class="dayPost">
                      <i class="fas fa-file-signature"></i>
                      <time datetime="<?php the_time('Y-m-d'); ?>T<?php the_time('H:i:sP'); ?>"><?php the_time('Y年n月j日'); ?></time>
                    </li>
                    <?php endif; ?>
                  </ul>
                  <h3 class="u-ttl2"><?php the_title(); ?></h3>
                  <?php $image = get_field('post_main'); if( empty($image) ): ?>
                    <div class="postMainImg"><img src="/wp-content/uploads/assets/noimg.png" alt="noimg" /></div>
                  <?php else: ?>
                    <div class="postMainImg"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
                  <?php endif; ?>
                  <div class="excerpt"><?php the_excerpt(); ?></div>
                </a>
              </li>
              <?php endwhile; endif; wp_reset_postdata(); ?>
            </ul>
          </section>


          <section class="secCategories">
            <h2 class="u-ttl1"><img src="/wp-content/uploads/assets/txt_category_s.png" alt="分類"></h2>
            <ul>
              <?php wp_list_categories(array(
                "title_li" => "",
                "show_count" => 1
              )); ?>
            </ul>
          </section>


          <section class="secTags">
            <h2 class="u-ttl1"><img src="/wp-content/uploads/assets/txt_tag_s.png" alt="札"></h2>
            <ul>
              <?php the_tags_with_count(); ?>
            </ul>
          </section>


          <section class="secArchives">
            <h2 class="u-ttl1"><img src="/wp-content/uploads/assets/txt_archive_s.png" alt="資料群"></h2>
            <ul>
              <?php wp_get_archives('type=monthly&limit=12&show_post_count=true'); ?>
            </ul>
          </section>

				</div><!-- .page-content -->

        

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .l-inner -->

<?php
get_footer();
