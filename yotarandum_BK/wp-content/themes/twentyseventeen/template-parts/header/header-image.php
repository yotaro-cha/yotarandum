<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<?php if(1==2): ?>
<div class="custom-header">
	<div class="custom-header-media">
		<?php the_custom_header_markup(); ?>
	</div>
</div><!-- .custom-header -->
<?php endif; ?>

<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
