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
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

	<header class="entry-header">
    <div class="entry-meta">
      <span class="posted-on">
        <span class="screen-reader-text">投稿日:</span>
        <a href="http://yotarandum.local/?p=20" rel="bookmark">
          <time class="entry-date published updated" datetime="2019-09-10T22:18:54+09:00">2019年9月10日</time>
        </a>
      </span>
    </div>
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
			if ( is_single() ) {
				twentyseventeen_posted_on();
			} else {
				echo twentyseventeen_time_link();
				twentyseventeen_edit_link();
			};
			echo '</div><!-- .entry-meta -->';
		};

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
