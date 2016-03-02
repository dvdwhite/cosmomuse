<?php
/**
 * cosmomuse functions and definitions
 *
 * @package cosmomuse
 */

if ( ! function_exists( 'cosmomuse_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cosmomuse_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on cosmomuse, use a find and replace
	 * to change 'cosmomuse' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cosmomuse', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'cosmomuse' ),
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
	add_theme_support( 'custom-background', apply_filters( 'cosmomuse_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // cosmomuse_setup
add_action( 'after_setup_theme', 'cosmomuse_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cosmomuse_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cosmomuse_content_width', 640 );
}
add_action( 'after_setup_theme', 'cosmomuse_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function cosmomuse_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cosmomuse' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'cosmomuse_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cosmomuse_scripts() {
	wp_enqueue_style( 'cosmomuse-style', get_stylesheet_uri() );

	// wp_enqueue_script( 'cosmomuse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
    
    // deregister default jQuery included with Wordpress
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), '20150705', true );

	wp_enqueue_script( 'cosmomuse-javascript', get_template_directory_uri() . '/js/global.js', array(), '20150705', true );

	wp_enqueue_script( 'cosmomuse-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cosmomuse_scripts' );

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



/**
 * Add Horoscope custom post type.
 */

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'horoscope',
    array(
      'labels' => array(
        'name' => __( 'Horoscope' ),
        'singular_name' => __( 'Horoscope' )
      ),
        'public' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'supports' => array(
            'title',
            'editor',
            'custom-fields',
            'revisions',
            'author'),
        'taxonomies' => array('category', 'post_tag')
    )
  );
}

function customprefix_init() {
	add_post_type_support( 'horoscope', 'simple-page-sidebars' );
}
add_action( 'init', 'customprefix_init' );

/**
 * Add meta boxes.
 */

add_filter( 'rwmb_meta_boxes', 'cosmo_register_meta_boxes' );

function cosmo_register_meta_boxes( $meta_boxes )
{
    $prefix = 'cosmo_';

    // 1st meta box
    $meta_boxes[] = array(
        'id'       => 'cosmo_content_data',
        'title'    => 'CosmoMuse Content Data',
        'post_types' => array( 'post' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
			// SELECT ADVANCED BOX
			array(
				'name'        => __( 'Sign', 'cosmo_' ),
				'id'          => "{$prefix}sign",
				'type'        => 'select_advanced',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'aries' => __( 'Aries', 'cosmo_' ),
					'taurus' => __( 'Taurus', 'cosmo_' ),
                    'gemini' => __( 'Gemini', 'cosmo_' ),
					'cancer' => __( 'Cancer', 'cosmo_' ),
					'leo' => __( 'Leo', 'cosmo_' ),
                    'virgo' => __( 'Virgo', 'cosmo_' ),
                    'libra' => __( 'Libra', 'cosmo_' ),
                    'scorpio' => __( 'Scorpio', 'cosmo_' ),
					'sagittarius' => __( 'Sagittarius', 'cosmo_' ),
					'capricorn' => __( 'Capricorn', 'cosmo_' ),
					'aquarius' => __( 'Aquarius', 'cosmo_' ),
					'pisces' => __( 'Pisces', 'cosmo_' ),
					
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				//'std'         => 'Capricorn',
				'placeholder' => __( 'Select an Item', 'cosmo_' ),
			),
			// IMAGE ADVANCED (WP 3.5+)
			array(
				'name'             => __( 'Post Images', 'cosmo_' ),
				'id'               => "{$prefix}post_images",
				'type'             => 'image_advanced',
				'max_file_uploads' => 12,
			),
			// IMAGE ADVANCED (WP 3.5+)
			array(
				'name'             => __( 'Post Thumbnail', 'cosmo_' ),
				'id'               => "{$prefix}post_thumb",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
            // TEXT
			array(
				// Field name - Will be used as label
				'name'  => __( 'List Title', 'cosmo_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}list_title",
				// Field description (optional)
				'desc'  => __( 'Text description', 'cosmo_' ),
				'type'  => 'text',
				// Default value (optional)
				'std'   => __( 'Default text value', 'cosmo_' ),
			),            
			// WYSIWYG/RICH TEXT EDITOR
			array(
				'name'    => __( 'List Contents', 'cosmo_' ),
				'id'      => "{$prefix}list",
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				'std'     => __( 'WYSIWYG default value', 'cosmo_' ),
				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),
			// IMAGE ADVANCED (WP 3.5+)
			array(
				'name'             => __( 'List Image', 'cosmo_' ),
				'id'               => "{$prefix}list_image",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),            
        )
    );

    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'cosmo_home_meta_boxes' );

function cosmo_home_meta_boxes( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'cosmo_home_';
	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'cosmo_home_page',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => __( 'Home Page Features', 'cosmo_home_' ),
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'page' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,
		// Register this meta box for posts matched below conditions
        'include' => array(
            // List of post slugs. Can be array or comma separated. Optional.
            'slug'       => array( 'cosmo-home' ),
        ),

		// List of meta fields
		'fields'     => array(
			// POST
			array(
				'name'        => __( 'Center/Top Feature', 'cosmo_home_' ),
				'id'          => "{$prefix}main_feature",
				'type'        => 'post',
				// Post type
				'post_type'   => 'post',
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type'  => 'select_advanced',
				'placeholder' => __( 'Select an Item', 'cosmo_home_' ),
				// Query arguments (optional). No settings means get all published posts
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				),
			),
            
			// POST
			array(
				'name'        => __( 'Top Left Position', 'cosmo_home_' ),
				'id'          => "{$prefix}top_left",
				'type'        => 'post',
				// Post type
				'post_type'   => 'post',
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type'  => 'select_advanced',
				'placeholder' => __( 'Select an Item', 'cosmo_home_' ),
				// Query arguments (optional). No settings means get all published posts
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				),
			),
            
			// POST
			array(
				'name'        => __( 'Lower Left Position', 'cosmo_home_' ),
				'id'          => "{$prefix}lower_left",
				'type'        => 'post',
				// Post type
				'post_type'   => 'post',
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type'  => 'select_advanced',
				'placeholder' => __( 'Select an Item', 'cosmo_home_' ),
				// Query arguments (optional). No settings means get all published posts
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				),
			),
            
			// POST
			array(
				'name'        => __( 'Top Right Position', 'cosmo_home_' ),
				'id'          => "{$prefix}top_right",
				'type'        => 'post',
				// Post type
				'post_type'   => 'post',
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type'  => 'select_advanced',
				'placeholder' => __( 'Select an Item', 'cosmo_home_' ),
				// Query arguments (optional). No settings means get all published posts
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				),
			),
            
			// POST
			array(
				'name'        => __( 'Lower Right Position', 'cosmo_home_' ),
				'id'          => "{$prefix}lower_right",
				'type'        => 'post',
				// Post type
				'post_type'   => 'post',
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type'  => 'select_advanced',
				'placeholder' => __( 'Select an Item', 'cosmo_home_' ),
				// Query arguments (optional). No settings means get all published posts
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				),
			), 
            
            // TEXT
			array(
				// Field name - Will be used as label
				'name'  => __( 'Horoscope Blurb', 'cosmo_home_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}horoscope",
				// Field description (optional)
				'desc'  => __( 'Text description', 'cosmo_home_' ),
				'type'  => 'text',
				// Default value (optional)
				'std'   => __( 'Default text value', 'cosmo_home_' ),
			),              

		)
	);    
	return $meta_boxes;
}    

add_filter( 'rwmb_meta_boxes', 'cosmo_horoscope_meta_boxes' );

function cosmo_horoscope_meta_boxes( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'cosmo_horoscope_';
	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'cosmo_horoscope',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => __( 'Horoscope Signs Content', 'cosmo_horoscope_' ),
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'horoscope' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
            
			// SIGN SELECT BOX
			array(
				'name'        => __( 'Sign', 'cosmo_horoscope_' ),
				'id'          => "{$prefix}sign",
				'type'        => 'select_advanced',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'aries' => __( 'Aries', 'cosmo_horoscope_' ),
					'taurus' => __( 'Taurus', 'cosmo_horoscope_' ),
                    'gemini' => __( 'Gemini', 'cosmo_horoscope_' ),
					'cancer' => __( 'Cancer', 'cosmo_horoscope_' ),
					'leo' => __( 'Leo', 'cosmo_horoscope_' ),
                    'virgo' => __( 'Virgo', 'cosmo_horoscope_' ),
                    'libra' => __( 'Libra', 'cosmo_horoscope_' ),
                    'scorpio' => __( 'Scorpio', 'cosmo_horoscope_' ),
					'sagittarius' => __( 'Sagittarius', 'cosmo_horoscope_' ),
					'capricorn' => __( 'Capricorn', 'cosmo_horoscope_' ),
					'aquarius' => __( 'Aquarius', 'cosmo_horoscope_' ),
					'pisces' => __( 'Pisces', 'cosmo_horoscope_' ),
					
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				//'std'         => 'Capricorn',
				'placeholder' => __( 'Select an Item', 'cosmo_horoscope_' ),
			), 
            
			// ARIES TEXTAREA
			array(
				'name' => __( 'Aries', 'cosmo_horoscope_' ),
				'desc' => __( 'Aries horoscope', 'cosmo_horoscope_' ),
				'id'   => "{$prefix}aries",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),  
            
			// TAURUS TEXTAREA
			array(
				'name' => __( 'Taurus', 'cosmo_horoscope_' ),
				'desc' => __( 'Taurus horoscope', 'cosmo_horoscope_' ),
				'id'   => "{$prefix}taurus",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),  
            
			// GEMINI TEXTAREA
			array(
				'name' => __( 'Gemini', 'cosmo_horoscope_' ),
				'desc' => __( 'Gemini horoscope', 'cosmo_horoscope_' ),
				'id'   => "{$prefix}gemini",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),  
            
			// CANCER TEXTAREA
			array(
				'name' => __( 'Cancer', 'cosmo_horoscope_' ),
				'desc' => __( 'Cancer horoscope', 'cosmo_horoscope_' ),
				'id'   => "{$prefix}cancer",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),  
            
			// LEO TEXTAREA
			array(
				'name' => __( 'Leo', 'cosmo_horoscope_' ),
				'desc' => __( 'Leo horoscope', 'cosmo_horoscope_' ),
				'id'   => "{$prefix}leo",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),  
            
			// VIRGO TEXTAREA
			array(
				'name' => __( 'Virgo', 'cosmo_horoscope_' ),
				'desc' => __( 'Virgo horoscope', 'cosmo_horoscope_' ),
				'id'   => "{$prefix}virgo",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),  
            
			// LIBRA TEXTAREA
			array(
				'name' => __( 'Libra', 'cosmo_horoscope_' ),
				'desc' => __( 'Libra horoscope', 'cosmo_horoscope_' ),
				'id'   => "{$prefix}libra",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),  
            
			// SCORPIO TEXTAREA
			array(
				'name' => __( 'Scorpio', 'cosmo_horoscope_' ),
				'desc' => __( 'Scorpio horoscope', 'cosmo_horoscope_' ),
				'id'   => "{$prefix}scorpio",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),  
            
			// SAGITTARIUS TEXTAREA
			array(
				'name' => __( 'Sagittarius', 'cosmo_horoscope_' ),
				'desc' => __( 'Sagittarius horoscope', 'cosmo_horoscope_' ),
				'id'   => "{$prefix}sagittarius",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),  
            
			// CAPRICORN TEXTAREA
			array(
				'name' => __( 'Capricorn', 'cosmo_horoscope_' ),
				'desc' => __( 'Capricorn horoscope', 'cosmo_horoscope_' ),
				'id'   => "{$prefix}capricorn",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),  
            
			// AQUARIUS TEXTAREA
			array(
				'name' => __( 'Aquarius', 'cosmo_horoscope_' ),
				'desc' => __( 'Aquarius horoscope', 'cosmo_horoscope_' ),
				'id'   => "{$prefix}aquarius",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),  
            
			// PISCES TEXTAREA
			array(
				'name' => __( 'Pisces', 'cosmo_horoscope_' ),
				'desc' => __( 'Pisces horoscope', 'cosmo_horoscope_' ),
				'id'   => "{$prefix}pisces",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),             

		)
	);    
	return $meta_boxes;
}


add_filter( 'rwmb_meta_boxes', 'cosmo_about_meta_boxes' );

function cosmo_about_meta_boxes( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'cosmo_about_';
	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'cosmo_about',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => __( 'About Content', 'cosmo_about_' ),
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'page' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,
		// Register this meta box for posts matched below conditions
        'include' => array(
            // List of post slugs. Can be array or comma separated. Optional.
            'slug'       => array( 'about' ),
        ),
		// List of meta fields
		'fields'     => array(
            
			// ALLIE BIO TEXTAREA
			array(
				'name' => __( 'Allie', 'cosmo_about_' ),
				'desc' => __( 'Allie Bio', 'cosmo_about_' ),
				'id'   => "{$prefix}allie_bio",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 4,
			),  
                        

		)
	);    
	return $meta_boxes;
}

