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
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','image','video'));
add_theme_support('html5', array('search-form'));
/*
	==========================================
	 Theme support function END
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
			'after_title'   => '</h1>',
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
=================================================
Modify the read more link on the_excerpt() START
=================================================
*/
 
function et_excerpt_length($length) {
    return 220;
}
add_filter('excerpt_length', 'et_excerpt_length');
 
/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/
 
function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">View Full Post</a></div>;';
}
add_filter('excerpt_more', 'et_excerpt_more');	

/* 
=================================================
Modify the read more link on the_excerpt() END
=================================================
*/

/*
	==========================================
	 AJAX functions START
	==========================================
*/

/*
* initial posts display
 */

/*function load_more_posts(){
	$page = $_POST['page'];

	$query = new WP_Query( array(
			'post_type' => 'post',
			'post_per_page' =>'6',
			'paged' => $paged,
		));
	if ( $query-> have_posts() ) : 
       	while ( $query-> have_posts() ) : $query->the_post();

			get_template_part('content-eventsmain');

	    endwhile;
	endif; 
  	wp_reset_postdata();
	wp_die();
}

add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
add_action('wp_ajax_priv_load_more_posts', 'load_more_posts');
*/

/*
 load more script call back
 
function load_more_articles_posts(){
	$page = $_POST['page'];
	//echo $page;

	$query = new WP_Query( array(
			'post_type' => 'post',
			'category_name' => 'events',
			'post_per_page' =>'6',
			'paged' => $paged
		));

	$total_pages = $the_query->max_num_pages;
	print_r($total_pages);

	if ( $query-> have_posts() ) : 
        while ( $query-> have_posts() ) : $query->the_post();

			get_template_part('contents/content', get_post_format() );

		endwhile;
    endif; 
  	wp_die();
  	wp_reset_postdata();
}

/*
 * load more script ajax hooks
 
add_action('wp_ajax_nopriv_load_more_articles_posts', 'load_more_articles_posts');
add_action('wp_ajax_priv_load_more_articles_posts', 'load_more_articles_posts');
*/


add_action( 'wp_ajax_nopriv_load_more_articles_posts', 'load_more_articles_posts' );
add_action( 'wp_ajax_load_more_articles_posts', 'load_more_articles_posts' );
function load_more_articles_posts() {
	
	$paged = $_POST["page"]+1;
	
	$args = array(
	    	'category_name' => 'events',
	    	'posts_per_page' => '1',
	    	//'category_in' => array('15, 17, 30'),category by category name (post id)
	    	'paged' => $paged 
	    	//'category__not_in' => array('')parameter in which category our post doesnt have to be (post id)
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







/*
	==========================================
	 AJAX functions END
	==========================================
*/

	function permalink_thingy($atts) {
	extract(shortcode_atts(array(
		'id' => 188,
		'text' => ""  // default value if none supplied
    ), $atts));
    
    if ($text) {
        $url = get_permalink($id);
        return "<a href='$url'>$text</a>";
    } else {
	   return get_permalink($id);
	}
}
add_shortcode('permalink', 'permalink_thingy');


?>