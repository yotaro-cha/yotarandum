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

<!-- archive.php -->
<div class="l-inner">
	<div class="l-contRow2">
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >
          <header class="pageHeader">
            <h1>
              <?php if(is_category()): ?>
              <img src="/wp-content/uploads/2018/10/txt_category_s.png" alt="">
              <?php elseif(is_tag()): ?>
              <img src="/wp-content/uploads/2018/10/txt_tag_s.png" alt="">
              <?php elseif(is_date()): ?>
              <img src="/wp-content/uploads/2018/10/txt_archive_s.png" alt="">
              <?php endif; ?>

              <strong>：<?php single_tag_title(); ?></strong>
            </h1>
            <?php the_archive_description( '<div class="description">', '</div>' ); ?>
          </header><!-- .pageHeader -->

          <section class="archivePosts">
            <?php
            if ( have_posts() ) :
            ?>
            <ul class="u-postList1 col3">
              <?php
              /* Start the Loop */
              while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/page/content', 'archive' );
                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                //get_template_part( 'template-parts/post/content', get_post_format() );
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
          </ul>
        </section>

      </article><!-- #post-## -->

      </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
	</div>
</div><!-- .l-inner -->

<?php
get_footer();
