<?php

if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}

function dolphin_theme_setup(){

    load_theme_textdomain( 'dolphin' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_image_size( 'dolphin-featured-image', 2000, 1200, true );

    add_image_size( 'dolphin-thumbnail-avatar', 100, 100, true );

    // Set the default content width.
    $GLOBALS['content_width'] = 525;
    
    register_nav_menus( array(
        'top'    => __( 'Top Menu', 'dolphin' ),
        'social' => __( 'Social Links Menu', 'dolphin' ),
    ) );

    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ) );

    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
    ) );

    add_theme_support( 'customize-selective-refresh-widgets' );

    add_editor_style( array( 'css/editor-style.css' ) );

}
// add_action( 'init', 'dolphin_theme_setup' );
add_action( 'after_setup_theme', 'dolphin_theme_setup' );


function dolphin_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'dolphin' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'dolphin' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'dolphin' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'dolphin' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'dolphin' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'dolphin' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'dolphin_widgets_init' );

function dolphin_excerpt_more( $link ) {
    if ( is_admin() ) {
        return $link;
    }

    $link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
        esc_url( get_permalink( get_the_ID() ) ),
        /* translators: %s: Name of current post */
        sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dolphin' ), get_the_title( get_the_ID() ) )
    );
    return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'dolphin_excerpt_more' );

function dolphin_javascript_detection() {
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'dolphin_javascript_detection', 0 );

function dolphin_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
    }
}
add_action( 'wp_head', 'dolphin_pingback_header' );

function dolphin_colors_css_wrap() {
    if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
        return;
    }

    require_once( get_parent_theme_file_path( '/inc/color-patterns.php' ) );
    $hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );
?>
    <style type="text/css" id="custom-theme-colors" <?php if ( is_customize_preview() ) { echo 'data-hue="' . $hue . '"'; } ?>>
        <?php echo dolphin_custom_colors_css(); ?>
    </style>
<?php }
add_action( 'wp_head', 'dolphin_colors_css_wrap' );

function dolphin_scripts() {
    
    // Theme stylesheet.
    wp_enqueue_style( 'dolphin-style', get_stylesheet_uri(), array(), null,'all' );
    wp_enqueue_style('gridsystem',get_template_directory_uri().'/css/bootstrap-gridsystem-only.min.css',array(), null,'all');
    wp_enqueue_style('maincss',get_template_directory_uri().'/css/main.css',array(), null,'all');
    // Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
    if ( is_customize_preview() ) {
        wp_enqueue_style( 'dolphin-ie9', get_theme_file_uri( '/css/ie9.css' ), array( 'dolphin-style' ), '1.0' );
        wp_style_add_data( 'dolphin-ie9', 'conditional', 'IE 9' );
    }

    // Load the Internet Explorer 8 specific stylesheet.
    wp_enqueue_style( 'dolphin-ie8', get_theme_file_uri( '/css/ie8.css' ), array( 'dolphin-style' ), '1.0' );
    wp_style_add_data( 'dolphin-ie8', 'conditional', 'lt IE 9' );

    // Load the html5 shiv.
    wp_enqueue_script( 'html5', get_theme_file_uri( '/js/html5.js' ), array(), '3.7.3' );
    wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'dolphin-skip-link-focus-fix', get_theme_file_uri( '/js/skip-link-focus-fix.js' ), array(), '1.0', true );

    $dolphin_l10n = array(
        'quote'          => dolphin_get_svg( array( 'icon' => 'quote-right' ) ),
    );

    if ( has_nav_menu( 'top' ) ) {
        wp_enqueue_script( 'dolphin-navigation', get_theme_file_uri( '/js/navigation.js' ), array( 'jquery' ), '1.0', true );
        $dolphin_l10n['expand']         = __( 'Expand child menu', 'dolphin' );
        $dolphin_l10n['collapse']       = __( 'Collapse child menu', 'dolphin' );
        $dolphin_l10n['icon']           = dolphin_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) );
    }

    wp_enqueue_script( 'dolphin-global', get_theme_file_uri( '/js/global.js' ), array( 'jquery' ), '1.0', true );

     wp_enqueue_script( 'dolphin-main', get_theme_file_uri( '/js/main.js' ), array( 'jquery' ), '1.0', true );

    wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

    wp_localize_script( 'dolphin-skip-link-focus-fix', 'dolphinScreenReaderText', $dolphin_l10n );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'dolphin_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );
