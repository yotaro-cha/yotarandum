<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="l-inner">tag.php
	<div class="l-contRow2">
    <div id="primary" class="content-area">
    <?php if ( have_posts() ) : ?>
      <header class="page-header">
        <h1 class="pageTtl">札：<strong><?php single_tag_title(); ?></strong></h1>
      </header><!-- .page-header -->
    <?php endif; ?>

      <main id="main" class="site-main" role="main">

      <?php
      if ( have_posts() ) :
      ?>
        <?php
        /* Start the Loop */
        while ( have_posts() ) :
          the_post();

          /*
           * Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          //get_template_part( 'template-parts/post/content', get_post_format() );
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
        endwhile;

        the_posts_pagination(
          array(
            'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
            'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
          )
        );

      else :

        get_template_part( 'template-parts/post/content', 'none' );

      endif;
      ?>

      </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
	</div>
</div><!-- .l-inner -->

<?php
get_footer();
