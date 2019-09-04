<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<div class="l-inner">

	<?php the_custom_logo(); ?>

	<div class="site-branding-text">
		<h1 class="site-title" style="text-align: center;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/wp-content/uploads/2018/10/logo2.png" alt="<?php bloginfo( 'name' ); ?>" style="max-width: 100%;"></a></h1>
	<?php if ( 1!=2 ) : ?>
		<?php if ( is_front_page() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>
	<?php endif; ?>

		<?php
		$description = get_bloginfo( 'description', 'display' );

		if ( $description || is_customize_preview() ) :
		?>
			<p class="site-description"><?php echo $description; ?></p>
		<?php endif; ?>
	</div><!-- .site-branding-text -->

	<?php if ( 1==2 && ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
	<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
<?php endif; ?>

</div><!-- .l-inner -->
