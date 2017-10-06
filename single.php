

<?php get_header(); ?>

<div class="wrap">
    <div id="primary" class="content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <main id="main" class="site-main" role="main">

                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/post/content', get_post_format() );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                            // the_post_navigation( array(
                            //     'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'dolphin' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'dolphin' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . dolphin_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
                            //     'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'dolphin' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'dolphin' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . dolphin_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
                            // ) );

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
