<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if(1==2): ?>
		<?php
		if ( has_post_thumbnail() ) :
			$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );
			// Calculate aspect ratio: h / w * 100%.
			$ratio = $thumbnail[2] / $thumbnail[1] * 100;
			?>
			<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
				<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
			</div><!-- .panel-image -->
		<?php endif; ?>
	<?php endif; ?>

	<?php if(1==2): ?>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->

	<?php
		/* translators: %s: Name of current post */
		the_content(
			sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			)
		);
	?>
	<?php endif; ?>

	<section class="u-appsZone">
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_pc.png" alt="">
			<p>パソコンの<br>基礎知識</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_design.png" alt="">
			<p>色、フォントや<br>レイアウトなど</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_html.png" alt="">
			<p>html</p>
		</span>
		<a href="/?category_name=css">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_css.png" alt="">
			<p>css</p>
		</a>
		<a href="/?category_name=js">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_js.png" alt="">
			<p>javascript</p>
		</a>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_php.png" alt="">
			<p>php</p>
		</span>
		<a href="/?category_name=wp">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_wp.png" alt="">
			<p>wordpress</p>
		</a>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_git.png" alt="">
			<p>gitや<br>sourcetree</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_server.png" alt="">
			<p>FTPなど</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_xl.png" alt="">
			<p>excel</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_ai.png" alt="">
			<p>illustrator</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_ps.png" alt="">
			<p>photoshop</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_dw.png" alt="">
			<p>dreamweaver</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_ability.png" alt="">
			<p>webに関する<br>知識と技術</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_term.png" alt="">
			<p>調べた用語</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_unknown.png" alt="">
			<p>まだ調べてない用語</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_wander.png" alt="">
			<p>定期的に見た方が良いサイト</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_game.png" alt="">
			<p>ミニゲーム</p>
		</span>
		<a href="/?tag=summary">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_summary.png" alt="">
			<p>一覧のメモ</p>
		</a>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_parts.png" alt="">
			<p>コピペ用<br>コード集</p>
		</span>
		<span href="">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_all_articles.png" alt="">
			<p>全記事一覧</p>
		</span>
		<a href="/?page_id=49">
			<img src="https://yotarandum.net/wp-content/uploads/2018/10/icn_about.png" alt="">
			<p>このサイトの説明</p>
		</a>
	</section>

	<section class="newPosts">
		<h2 class="u-ttl1"><img src="https://yotarandum.net/wp-content/uploads/2018/10/txt_news_s.png" alt=""></h2>
		<ul>
			<?php
				$args = array(
				'posts_per_page' => 5 // 表示件数の指定
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ): // ループの開始
				setup_postdata( $post ); // 記事データの取得
			?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<h3 class="u-ttl2"><?php the_title(); ?></h3>
					<?php $image = get_field('post_main'); if( !empty($image) ): ?>
						<div class="postMainImg"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
					<?php endif; ?>
					<div class="excerpt"><?php the_excerpt(); ?></div>
				</a>
			</li>
			<?php
				endforeach; // ループの終了
				wp_reset_postdata(); // 直前のクエリを復元する
			?>
			</ul>
	</section>


</article><!-- #post-## -->
