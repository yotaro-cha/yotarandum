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
<li>
  <a href="<?php the_permalink(); ?>">
    <?php $image = get_field('post_main'); if( empty($image) ): ?>
      <div class="postMainImg"><img src="/wp-content/uploads/2018/10/noimg.png" alt="noimg" /></div>
    <?php else: ?>
      <div class="postMainImg"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
    <?php endif; ?>
    <h3 class="u-ttl2"><?php the_title(); ?></h3>
    <div class="excerpt"><?php the_excerpt(); ?></div>
  </a>
</li>
