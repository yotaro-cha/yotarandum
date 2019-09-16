<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <aside class="entry-meta">
      <ul class="catTags">
        <li class="cat-links">
          <span class="screen-reader-text">カテゴリー</span>
          <i class="fas fa-folder-open"></i>
          <?php the_category(", ", "multiple"); ?>
        </li>
        <li class="tag-links">
          <span class="screen-reader-text">タグ</span>
          <i class="fas fa-tag"></i>
          <?php the_tags("", ", ", ""); ?>
        </li>
      </ul>
      <ul class="days">
        <li class="dayPost">
          <span class="screen-reader-text">投稿日</span>
          <i class="fas fa-file-signature"></i>
          <time datetime="<?php the_time('Y-m-d'); ?>T<?php the_time('H:i:sP'); ?>"><?php the_time('Y年n月j日'); ?></time>
        </li>
        <?php if(get_the_modified_time('Y-m-d') != get_the_time('Y-m-d')) : ?>
        <li class="dayUpdate">
          <span class="screen-reader-text">更新日</span>
          <i class="fas fa-redo-alt"></i>
          <time datetime="<?php the_modified_time('Y-m-d'); ?>T<?php the_modified_time('H:i:sP'); ?>"><?php the_modified_time('Y年n月j日'); ?></time>
        </li>
        <?php endif; ?>
      </ul>
    </aside>

		<?php
		if ( is_single() ) {
			the_title( '<h1 class="singleTtl">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="u-ttl2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="u-ttl2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<?php $image = get_field('post_main'); if( empty($image) ): ?>
		<div class="postMainImg"><img src="/wp-content/uploads/2018/10/noimg.png" alt="noimg" /></div>
	<?php else: ?>
		<div class="postMainImg"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
	<?php endif; ?>

	<div class="bassui"><?php the_excerpt(); ?></div>

	<div class="entry-content">
		<div class="mySinglePost">
		<?php
		/* translators: %s: Name of current post */
		the_content(
			sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
		?>
		</div><!-- #mySinglePost -->
	</div><!-- .entry-content -->


</article><!-- #post-## -->
