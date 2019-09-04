<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

  <link rel="icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">

  <meta name="theme-color" content="#c5c56a">

  <?php wp_head(); ?>
  <link rel='stylesheet'  href='https://yotarandum.net/wp-content/themes/twentyseventeen/mycustom/font/awesome.min.css' type='text/css' media='all' />
  <link rel='stylesheet'  href='https://yotarandum.net/wp-content/themes/twentyseventeen/mycustom/css/plugin/prism.css' type='text/css' media='all' />
  <link rel='stylesheet'  href='https://yotarandum.net/wp-content/themes/twentyseventeen/mycustom/css/common.css' type='text/css' media='all' />
  <link rel='stylesheet'  href='https://yotarandum.net/wp-content/themes/twentyseventeen/mycustom/css/class.css' type='text/css' media='all' />
  <script type='text/javascript' src='https://yotarandum.net/wp-content/themes/twentyseventeen/mycustom/js/prism.js'></script>
  <script type='text/javascript' src='https://yotarandum.net/wp-content/themes/twentyseventeen/mycustom/js/common.js'></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

			<div class="site-branding-container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .site-branding-container -->

			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						twentynineteen_post_thumbnail();
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
					if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
						$classes = 'entry-header has-discussion';
					}
					?>
					<div class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div><!-- .entry-header -->
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
