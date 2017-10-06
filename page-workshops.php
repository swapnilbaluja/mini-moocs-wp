<?php get_header(); ?>
<div class="wrap">
	<div id="primary" class="content-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-10">
					<main id="main" class="site-main" role="main">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/page/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</div>
				<div class="col-xs-12 col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
		
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
