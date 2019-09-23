<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="l-inner">
	<div class="l-contRow2">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

        <section class="u-appsZone">
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_pc.png" alt="">
            <p>パソコンの<br>基礎知識</p>
          </span>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_design.png" alt="">
            <p>色、フォントや<br>レイアウトなど</p>
          </span>
          <a href="/?category_name=html">
            <img src="/wp-content/uploads/2018/10/icn_html.png" alt="">
            <p>html</p>
          </a>
          <a href="/?category_name=css">
            <img src="/wp-content/uploads/2018/10/icn_css.png" alt="">
            <p>css</p>
          </a>
          <a href="/?category_name=js">
            <img src="/wp-content/uploads/2018/10/icn_js.png" alt="">
            <p>javascript</p>
          </a>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_php.png" alt="">
            <p>php</p>
          </span>
          <a href="/?category_name=wp">
            <img src="/wp-content/uploads/2018/10/icn_wp.png" alt="">
            <p>wordpress</p>
          </a>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_git.png" alt="">
            <p>gitや<br>sourcetree</p>
          </span>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_server.png" alt="">
            <p>FTPなど</p>
          </span>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_xl.png" alt="">
            <p>excel</p>
          </span>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_ai.png" alt="">
            <p>illustrator</p>
          </span>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_ps.png" alt="">
            <p>photoshop</p>
          </span>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_dw.png" alt="">
            <p>dreamweaver</p>
          </span>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_ability.png" alt="">
            <p>webに関する<br>知識と技術</p>
          </span>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_term.png" alt="">
            <p>調べた用語</p>
          </span>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_unknown.png" alt="">
            <p>まだ調べてない用語</p>
          </span>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_wander.png" alt="">
            <p>定期的に見た方が良いサイト</p>
          </span>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_game.png" alt="">
            <p>ミニゲーム</p>
          </span>
          <a href="/?tag=summary">
            <img src="/wp-content/uploads/2018/10/icn_summary.png" alt="">
            <p>一覧のメモ</p>
          </a>
          <a href="/?tag=parts">
            <img src="/wp-content/uploads/2018/10/icn_parts.png" alt="">
            <p>コピペ用<br>コード集</p>
          </a>
          <span href="">
            <img src="/wp-content/uploads/2018/10/icn_all_articles.png" alt="">
            <p>全記事一覧</p>
          </span>
          <a href="/?page_id=49">
            <img src="/wp-content/uploads/2018/10/icn_about.png" alt="">
            <p>このサイトの説明</p>
          </a>
        </section>

        <section class="newPosts">
          <h2 class="u-ttl1"><img src="/wp-content/uploads/2018/10/txt_news_s.png" alt=""></h2>
          <ul>

            <?php
            // Show the selected front page content.
            if ( have_posts() ) :
              while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/page/content', 'front-page' );
              endwhile;
            else :
              get_template_part( 'template-parts/post/content', 'none' );
            endif;
            ?>
          </ul>
        </section>


      </article><!-- #post-## -->

			<?php
			// Get each of our panels and show the post data.
			if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

				/**
				 * Filter number of front page sections in Twenty Seventeen.
				 *
				 * @since Twenty Seventeen 1.0
				 *
				 * @param int $num_sections Number of front page sections.
				 */
				$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
				global $twentyseventeencounter;

				// Create a setting and control for each of the sections available in the theme.
				for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
					$twentyseventeencounter = $i;
					twentyseventeen_front_page_section( null, $i );
				}

		endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
	</div>
</div><!-- .l-inner -->

<?php
get_footer();
