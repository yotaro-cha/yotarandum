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
					<?php $image = get_field('post_main'); if( empty($image) ): ?>
						<div class="postMainImg"><img src="/wp-content/uploads/2018/10/noimg.png" alt="noimg" /></div>
					<?php else: ?>
						<div class="postMainImg"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
					<?php endif; ?>
					<div class="excerpt"><?php the_excerpt(); ?></div>
				</a>
			</li>
			<?php
				endforeach; // ループの終了
				wp_reset_postdata(); // 直前のクエリを復元する
			?>
