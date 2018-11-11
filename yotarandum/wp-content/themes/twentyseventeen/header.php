<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<link rel='stylesheet' id='mystyle'  href='https://yotarandum.net/wp-content/themes/twentyseventeen/mycustom/font/awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='mystyle'  href='https://yotarandum.net/wp-content/themes/twentyseventeen/mycustom/css/plugin/prism.css' type='text/css' media='all' />
<link rel='stylesheet' id='mystyle'  href='https://yotarandum.net/wp-content/themes/twentyseventeen/mycustom/css/common.css' type='text/css' media='all' />
<link rel='stylesheet' id='mystyle'  href='https://yotarandum.net/wp-content/themes/twentyseventeen/mycustom/css/class.css' type='text/css' media='all' />
<script type='text/javascript' src='https://yotarandum.net/wp-content/themes/twentyseventeen/mycustom/js/prism.js'></script>
<script type='text/javascript' src='https://yotarandum.net/wp-content/themes/twentyseventeen/mycustom/js/common.js'></script>
</head>

<body <?php body_class(); ?>>
<div class="hdColor">
	<span class="blk"></span>
	<span class="grn"></span>
	<span class="brwn"></span>
</div>

<div id="page" class="site">

	<header class="l-header" role="banner">
		<?php if ( is_front_page() ) : ?>
			<div class="l-inner">
				<h1 class="logo">
					<div><img src="/wp-content/uploads/2018/10/logo2.png" alt="<?php bloginfo( 'name' ); ?>" style="max-width: 100%;"></div>
					<p class="siteDesc"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
				</h1>
			</div><!-- .l-inner -->
		<?php else : ?>
			<div class="pageLowerHd">
				<div class="spHd">
					<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<div><img src="/wp-content/uploads/2018/10/logo2.png" alt="<?php bloginfo( 'name' ); ?>" style="max-width: 100%;"></div>
						<p class="siteDesc"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
					</a>
					<a class="spNavBtn" href="">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
				<div class="spNav">
					<nav class="hdNav">
						<a href="">全記事一覧</a>
						<a href="">カテゴリー</a>
						<a href="">タグ</a>
						<a href="/?tag=summary">まとめ系</a>
						<span href="">ゲーム</span>
					</nav>
				</div>
			</div><!-- .pageLowerHd -->
		<?php endif; ?>



		<?php if(1 == 2): ?>
			<p class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
		<?php endif; ?>
		<?php if ( 1==2 && has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="l-inner">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .l-inner -->
			</div><!-- .navigation-top -->
		<?php endif; ?>
	</header><!-- .l-header -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
