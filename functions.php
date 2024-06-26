<?php
/**
 * TalenkoTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TalenkoTheme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function talenkotheme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on TalenkoTheme, use a find and replace
		* to change 'talenkotheme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'talenkotheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'talenkotheme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'talenkotheme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'talenkotheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function talenkotheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'talenkotheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'talenkotheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function talenkotheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'talenkotheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'talenkotheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'talenkotheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function talenkotheme_scripts() {
    wp_enqueue_style('reset-css', get_template_directory_uri(). "/assets/css/reset.css", array());
    wp_enqueue_style('fonts-css', get_template_directory_uri(). "/assets/css/fonts.css", array());
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array());
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri(). "/assets/css/main.css", array());

    // Enqueue scripts with 'async' attribute
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11.1.3/swiper-bundle.min.js', array(), '11', true);
	wp_script_add_data('swiper-js', 'async', true);
    wp_enqueue_script('main-js', get_template_directory_uri(). "/js/main.js", '', '', true);
    wp_script_add_data('main-js', 'async', true);
}
add_action('wp_enqueue_scripts', 'talenkotheme_scripts');

add_filter('show_admin_bar', '__return_false');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
function weichie_load_more2() {
    // Sanitize and retrieve the 'paged', 'count', and 'id' parameters
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
    $count = isset($_POST['count']) ? intval($_POST['count']) : 0;
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;

    $post = get_post($id);
    $output = '';  // Initialize $output

    if ($post) {
        ob_start();

        if (have_rows('pacientet', $id)) {
            while (have_rows('pacientet', $id)) {
                the_row();

                if (have_rows('imazhet')) {
                    $i = 0;
                    // Calculate the start index based on 'paged' and limit
                    $start_index = ($paged) * 8;
                    $end_index = min($start_index + 8, $count);  // Ensure not to exceed total count
                    while (have_rows('imazhet', $id)) {
                        the_row();
                        if ($i >= $start_index && $i < $count ) {
                            $pas_mobile = get_sub_field('pas_mobile');
                            $pas_desktop = get_sub_field('pas_desktop');
                            $para_mobile = get_sub_field('para_mobile');
                            $para_desktop = get_sub_field('para_desktop');
                            get_template_part('template-parts/content', 'teeth', array(
                                'after_mobile' => $pas_mobile,
                                'after_desktop' => $pas_desktop,
                                'before_mobile' => $para_mobile,
                                'before_desktop' => $para_desktop
                            ));

							
                        }
                        $i++;
                        if ($i >= $end_index) {
                            break; // Stop once we've processed the required items
                        }
                    }
                }
            }

            $output = ob_get_clean();
        } else {
            $output = ob_get_clean();  // Ensure $output is defined
        }
    }

    $result = [
        'max' => $count,
        'html' => $output,
    ];

    echo json_encode($result);
    wp_reset_postdata();
    exit;
}

add_action('wp_ajax_weichie_load_more2', 'weichie_load_more2');
add_action('wp_ajax_nopriv_weichie_load_more2', 'weichie_load_more2');

add_action('wp_ajax_weichie_load_more2', 'weichie_load_more2');
add_action('wp_ajax_nopriv_weichie_load_more2', 'weichie_load_more2');

add_action('wp_ajax_weichie_load_more2', 'weichie_load_more2');
add_action('wp_ajax_nopriv_weichie_load_more2', 'weichie_load_more2');