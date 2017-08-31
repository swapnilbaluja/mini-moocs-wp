<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="wrap">
		<?php
		get_template_part( 'template-parts/footer/footer', 'widgets' );

		if ( has_nav_menu( 'social' ) ) : ?>
			<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'dolphin' ); ?>">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'social',
						'menu_class'     => 'social-links-menu',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>' . dolphin_get_svg( array( 'icon' => 'chain' ) ),
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif;

		get_template_part( 'template-parts/footer/site', 'info' );
		?>
	</div><!-- .wrap -->
</footer>
<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>
	window.sr = ScrollReveal({reset: true});
	sr.reveal(' .slide.one .content .header, .slide.one .content .sub-header', {duration: 1000}, 200 );
	sr.reveal(' .slide.two .content header, .slide.two .content h2,.slide.two .content p', {duration: 1000}, 200);
	sr.reveal(' .slide.three .content header, .slide.three .content p', {duration: 1000}, 200);
	sr.reveal(' .slide.four .content header, .slide.four .content p', {duration: 1000}, 200);			
</script>

<?php wp_footer(); ?>
</body>

</html>