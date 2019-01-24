<?php

function awesome_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.1', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/gymnastics.css', array(), '1.0.0', 'all');
	wp_enqueue_style ('fontawesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css', array(), '5.1.0', 'all');
	wp_enqueue_style ('swiper', get_template_directory_uri() . '/css/swiper.min.css', array(), '4.3.5', 'all');

	
	//js
	wp_enqueue_script('jqueryjs', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.2.1', true);
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.1', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/gymnastics.js', array(), '1.0.0', true);
	wp_enqueue_script('swiperjs', get_template_directory_uri() . '/js/swiper.min.js', array(), '4.3.5', true);

}
add_action('wp_enqueue_scripts', 'awesome_script_enqueue');


/*
	==========================================
	 Activate menus START
	==========================================
*/
function awesome_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}
add_action('init', 'awesome_theme_setup');

/*
	==========================================
	 Activate menus END
	==========================================
*/

/*
	==========================================
	 Theme support function START
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails'); //To activate featured images for pages
add_theme_support('post-formats', array('aside','image','video'));
add_theme_support('html5', array('search-form'));
/*
	==========================================
	 Theme support function END
	==========================================
*/


/*
	==========================================
	put code in functions.php -> on dashboard Appearance -> Menus -> refresh page -> choose
	 Gallery-archive in nav bar START
	==========================================

add_action( 'init', function () {
    register_post_type( 'gallery-archive',
        array(
            'labels' => array(
                'name' => __( 'Gallery-archive' ),
                'singular_name' => __( 'Gallery-archive' ),
                'archives' => __( 'Gallery-archive' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array(
                'slug' => 'gallery-archive',
            ),
        )
    );
});
/*
	==========================================
	 Gallery-archive in nav bar END
	==========================================
*/


/*
	==========================================
	 Sidebar function START
	==========================================
*/
function gymnastics_widget_setup() {
	
	register_sidebar ( 
		array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar-1',
			'class'         => 'custom',
			'description'   => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>'
		)
	);

}

add_action('widgets_init', 'gymnastics_widget_setup');


/*Archive date format change START*/

add_filter('get_archives_link', 'translate_archive_month');
function translate_archive_month($list) {

	$patterns = array ( 
		'/January/', '/February/', '/March/', '/April/', '/May/', '/June/',
		'/July/', '/August/', '/September/', '/October/',  '/November/', '/December/'
	);

	/*$replacements = array( //PUT HERE WHATEVER YOU NEED
		'01.', '02.', '03.', '04.', '05.', '06.', 
		'07.', '08.', '09.', '10.', '11.', '12.'
	);*/

	$replacements = array ( //PUT HERE WHATEVER YOU NEED
		'Sausis', 'Vasaris', 'Kovas', 'Balandis', 'Gegužė', 'Birželis', 
		'Liepa', 'Rugpjūtis', 'Rugsėjis', 'Spalis', 'Lapkritis', 'Gruodis'
	);   

	$list = preg_replace ($patterns, $replacements, $list);
		return $list; 
}
/*
	==========================================
	 Sidebar function END
	==========================================
*/


/*
	==========================================
	 Social media share buttons START
	==========================================
*/

function wcr_share_buttons() {
    $url = urlencode(get_the_permalink());
    $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
    $media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));

    include( locate_template('contents/social-media-sidebar.php', false, false) );
}
/*
	==========================================
	 Social media share buttons END
	==========================================
*/

/*
	==========================================
	 Page.main content-mini-gallery.php START
	==========================================
*/

/* images from WP dashboard -> media library*/
function get_media_library_imgs(){
	$args = array(
        'post_type' => 'attachment',
        'posts_per_page' => 6,
        'post_mime_type' =>'image',
        'post_status' => 'inherit',
        'orderby' => 'rand'
	);

    $query_images = new WP_Query($args);
    $images = array();
	    foreach ($query_images->posts as $image) {
			$images[] = $image->guid;
		}

	return $images;
}

function display_media_library_imgs(){
	$imgs = get_media_library_imgs();
    $html = '<div id="media-gallery">';

		foreach($imgs as $img) {
			$html .= '<img src="' . $img . '" alt="" />';
		}

		$html .= '</div>';

	return $html;
}

/*
	==========================================
	 Page.main content-mini-gallery.php END
	==========================================
*/

/*
==========================================
 SEARCH WP AJAX LIVE SEARCH PLUGIN START
==========================================
*/
add_filter( 'searchwp_live_search_hijack_get_search_form', '__return_false' );


/*ajax live search config START*/
function my_searchwp_live_search_configs( $configs ) {
	// override some defaults
	$configs['default'] = array(
		'engine' => 'default',                      // search engine to use (if SearchWP is available)
		'input' => array(
			'delay'     => 500,                 // wait 500ms before triggering a search
			'min_chars' => 3,                   // wait for at least 3 characters before triggering a search
		),
		'results' => array(
			'position'  => 'bottom',            // where to position the results (bottom|top)
			'width'     => 'auto',              // whether the width should automatically match the input (auto|css)
			'offset'    => array(
				'x' => 0,                   // x offset (in pixels)
				'y' => 5                    // y offset (in pixels)
			),
		),
		'spinner' => array(                         // powered by http://fgnass.github.io/spin.js/
			'lines'         => 10,              // number of lines in the spinner
			'length'        => 8,               // length of each line
			'width'         => 4,               // line thickness
			'radius'        => 8,               // radius of inner circle
			'corners'       => 1,               // corner roundness (0..1)
			'rotate'        => 0,               // rotation offset
			'direction'     => 1,               // 1: clockwise, -1: counterclockwise
			'color'         => '#000',          // #rgb or #rrggbb or array of colors
			'speed'         => 1,               // rounds per second
			'trail'         => 60,              // afterglow percentage
			'shadow'        => false,           // whether to render a shadow
			'hwaccel'       => false,           // whether to use hardware acceleration
			'className'     => 'spinner',       // CSS class assigned to spinner
			'zIndex'        => 2000000000,      // z-index of spinner
			'top'           => '50%',           // top position (relative to parent)
			'left'          => '50%',           // left position (relative to parent)
		),
	);
	// add an additional config called 'my_config'
	$configs['my_config'] = array(
		'engine' => 'supplemental',                 // search engine to use (if SearchWP is available)
		'input' => array(
			'delay'     => 300,                 // wait 500ms before triggering a search
			'min_chars' => 2,                   // wait for at least 3 characters before triggering a search
		),
		'results' => array(
			'position'  => 'top',               // where to position the results (bottom|top)
			'width'     => 'css',               // whether the width should automatically match the input (auto|css)
			'offset'    => array(
				'x' => 0,                   // x offset (in pixels)
				'y' => 0                    // y offset (in pixels)
			),
		),
		'spinner' => array(                         // powered by http://fgnass.github.io/spin.js/
			'lines'         => 8,               // number of lines in the spinner
			'length'        => 6,               // length of each line
			'width'         => 5,               // line thickness
			'radius'        => 6,               // radius of inner circle
			'corners'       => 1,               // corner roundness (0..1)
			'rotate'        => 0,               // rotation offset
			'direction'     => 1,               // 1: clockwise, -1: counterclockwise
			'color'         => '#000',          // #rgb or #rrggbb or array of colors
			'speed'         => 1,               // rounds per second
			'trail'         => 60,              // afterglow percentage
			'shadow'        => false,           // whether to render a shadow
			'hwaccel'       => false,           // whether to use hardware acceleration
			'className'     => 'spinner',       // CSS class assigned to spinner
			'zIndex'        => 2000000000,      // z-index of spinner
			'top'           => '50%',           // top position (relative to parent)
			'left'          => '50%',           // left position (relative to parent)
		),
	);
	
	return $configs;
}
add_filter( 'searchwp_live_search_configs', 'my_searchwp_live_search_configs' );

/*ajax live search config START*/

/*
==========================================
 AJAX LIVE SEARCH PLUGIN END
==========================================
*/


/*
======================================================
 AJAX function load more button page-events.php START
======================================================
*/

/*load-more ajax button events.php START*/
add_action( 'wp_ajax_nopriv_load_more_articles_posts', 'load_more_articles_posts' );
add_action( 'wp_ajax_load_more_articles_posts', 'load_more_articles_posts' );

function load_more_articles_posts() {

	$paged = $_POST["page"] + 1;

		$args = array(
	    	'category_name' => 'renginiai',
	    	'posts_per_page' => '3',
	    	'paged' => $paged
	    );

	$lastBlog = new WP_Query ($args);

	if ( $lastBlog->have_posts() ): ?>
		<?php while ( $lastBlog->have_posts() ): $lastBlog->the_post(); 

		get_template_part('contents/content','eventsmain'); //content is in content-eventsmain.php?>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php
	
	wp_die();
	 
	wp_reset_postdata();
}
/*load-more ajax button events.php END*/

/*
==========================================
 AJAX function load more button END
==========================================
*/

/*
==========================================
 AJAX function load more on scroll START
==========================================
*/


/*
==========================================
 AJAX function load more on scroll END
==========================================
*/






?>