<?php
/**
 * Glass-is-Life functions and definitions
 *
 * @package Glass-is-Life
 */

if ( ! function_exists( 'glass_is_life_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function glass_is_life_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Glass-is-Life, use a find and replace
     * to change 'glass-is-life' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'glass-is-life', get_template_directory() . '/languages' );

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
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'glass-is-life' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    /*
     * Enable support for Post Formats.
     * See http://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'glass_is_life_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
endif; // glass_is_life_setup
add_action( 'after_setup_theme', 'glass_is_life_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function glass_is_life_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'glass_is_life_content_width', 640 );
}
add_action( 'after_setup_theme', 'glass_is_life_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function glass_is_life_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'glass-is-life' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'glass_is_life_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function glass_is_life_scripts() {
    wp_enqueue_style( 'glass-is-life-style', get_stylesheet_uri() );

    wp_enqueue_script( 'glass-is-life-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

    wp_enqueue_script( 'glass-is-life-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'glass_is_life_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// add_action( 'glass_is_life', 'register_my_menu' );
// function register_my_menu() {
//   register_nav_menu( 'primary', __( 'Primary Menu', 'glass-is-life' ) );
// }

register_nav_menus( array(
    'primary_menu' => 'Primary Menu',
    'article_menu' => 'Article Menu',
) );


function custom_main_nav() {
    global $post;
    $menu_name = 'Article'; // specify custom menu slug
    $menu = wp_get_nav_menu_object($menu_name);

    if ($menu) {
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = "\n". '' ."\n";
        $menu_list .= '<ul id="articlemenu" class="list-unstyled list-inline">' ."\n";
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;

            $menu_list .= "  ". '<li class="'.strtolower($menu_item->title).' ';
            // var_dump($menu_item->object_id);
            // var_dump($post->ID);

            if (is_single($menu_item->object_id) == $post->ID ) {
                // $menu_list .= $title.'"';
                $menu_list .= 'active';
            }

            //$menu_list .= '><a href="'. $url .'">'. $title .'</a>' ."\n";
            $menu_list .= '">
            <a href="'.$url.'">
                <img src="'.get_template_directory_uri().'/assets/img/'.strtolower($title).'-tab.jpg"><div>'.$title.'</div>
            </a>
            '."\n";
            $menu_list .= '</li>'."\n";
        }
        $menu_list .= '</ul>' ."\n";
        $menu_list .= '' ."\n";
    } else {
        $menu_list = '<!-- no list defined -->';
    }

    echo $menu_list;
}

function mobile_main_nav() {
    global $post;
    $menu_name = 'Primary Menu'; // specify custom menu slug
    $menu = wp_get_nav_menu_object($menu_name);

    if ($menu) {
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = "\n". '' ."\n";
        $menu_list .= '' ."\n";
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;

            //$menu_list .= "  ". '<a class="'.strtolower($menu_item->title).' ';
            // var_dump($menu_item->object_id);
            // var_dump($post->ID);

            if (is_single($menu_item->object_id) == $post->ID ) {
                // $menu_list .= $title.'"';
                //$menu_list .= 'active';
            }

            //$menu_list .= '><a href="'. $url .'">'. $title .'</a>' ."\n";
            $menu_list .= '
            <a href="'.$url.'">
                '.$title.'
            </a>
            '."\n";
            $menu_list .= ''."\n";
        }
        $menu_list .= '' ."\n";
        $menu_list .= '' ."\n";
    } else {
        $menu_list = '<!-- no list defined -->';
    }

    echo $menu_list;
}

function mobile_second_nav() {
    global $post;
    $menu_name = 'Article'; // specify custom menu slug
    $menu = wp_get_nav_menu_object($menu_name);

    if ($menu) {
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = "\n". '' ."\n";
        $menu_list .= '' ."\n";
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;

            //$menu_list .= "  ". '<a class="'.strtolower($menu_item->title).' ';
            // var_dump($menu_item->object_id);
            // var_dump($post->ID);

            if (is_single($menu_item->object_id) == $post->ID ) {
                // $menu_list .= $title.'"';
                //$menu_list .= 'active';
            }

            //$menu_list .= '><a href="'. $url .'">'. $title .'</a>' ."\n";
            $menu_list .= '
            <a href="'.$url.'">
                '.$title.'
            </a>
            '."\n";
            $menu_list .= ''."\n";
        }
        $menu_list .= '' ."\n";
        $menu_list .= '' ."\n";
    } else {
        $menu_list = '<!-- no list defined -->';
    }

    echo $menu_list;
}


/**
 * Register our sidebars and widgetized areas.
 *
 */
function prologue_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<summary>',
        'after_widget'  => '</summary>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'prologue_widgets_init' );