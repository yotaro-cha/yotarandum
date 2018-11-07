<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<a class="l-toTop" href=""></a>

		<footer class="l-footer" role="contentinfo">
			<div class="brwn"></div>
			<div class="grn"></div>
			<div class="blk">
				<div class="l-inner">
					<p id="copyright">&copy; YotaRandum All Rights Reserved.</p>


					<?php if(1==2): ?>
					<?php
					get_template_part( 'template-parts/footer/footer', 'widgets' );

					if ( has_nav_menu( 'social' ) ) :
					?>
						<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
									)
								);
							?>
						</nav><!-- .social-navigation -->
					<?php
					endif;

					get_template_part( 'template-parts/footer/site', 'info' );
					?>
					<?php endif; ?>
				</div><!-- .l-inner -->
			</div>
		</footer><!-- .l-footer -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
