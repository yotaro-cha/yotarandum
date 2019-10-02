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
          <ul class="days">
            <li class="dayPost">
              <i class="fas fa-file-signature"></i>
              <time datetime="<?php the_time('Y-m-d'); ?>T<?php the_time('H:i:sP'); ?>"><?php the_time('Y年n月j日'); ?></time>
            </li>
            <?php if(get_the_modified_time('Y-m-d') != get_the_time('Y-m-d')) : ?>
            <li class="dayUpdate">
              <i class="fas fa-redo-alt"></i>
              <time datetime="<?php the_modified_time('Y-m-d'); ?>T<?php the_modified_time('H:i:sP'); ?>"><?php the_modified_time('Y年n月j日'); ?></time>
            </li>
            <?php endif; ?>
          </ul>
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
