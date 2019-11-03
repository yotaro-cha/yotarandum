<?php
/**
 * The template for displaying about pages
 *
 * This is the template that displays about pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="pageAbout">
<div class="l-inner">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
        <div class="aboutBox">
          <div class="img"><img src="/wp-content/uploads/assets/yotaro.png" alt="与太郎"></div>
          <div class="txt">
					  <p>
              与太郎です<br>
              僕の名前は与太郎です<br>
              お仕事はコーダーです<br>
              フロントエンドの範囲が広過ぎてとても出来る気がしません<br>
              最近忘れっぽいので備忘録をつけるようにしました<br>
              このサイトは個人的なメモです<br>
              参考にしてくれた方への責任は負いませんので悪しからず<br>
              間違いなどは優しく教えて頂ければ幸いです<br>
              僕の名前は与太郎です<br>
            </p>
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
</div><!-- /#pageAbout -->

<?php
get_footer();
