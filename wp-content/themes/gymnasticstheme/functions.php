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
	==========================================
	 Smooth Scrollspy Scrolling Effect START
	==========================================
*/

//wp_enqueue_script( 'feature-one', get_template_directory_uri() . '/js/gymnastics.js', array( 'jquery' ), '', true );
// header.php 'apie mus' ir gymnastics.js failai

/*
	==========================================
	 Smooth Scrollspy Scrolling Effect END
	==========================================
*/



/*
	==========================================
	 AJAX functions START
	==========================================
*/


// add_action( 'wp_ajax_nopriv_gymnastics_load_more', 'gymnastics_load_more' );
// add_action( 'wp_ajax_gymnastics_load_more', 'gymnastics_load_more' );
// 	function gymnastics_load_more() {
		
// 		$paged = $_POST["page"]+1;
		
// 		$query = new WP_Query( array(
// 			'post_type' => 'post',
// 			'paged' => $paged
// 		) );
		
// 		if( $query->have_posts() ):

// 			while( $query->have_posts() ): $query->the_post();

// 				get_template_part( '/contents/content', get_post_format() );

// 			endwhile;

// 		endif;

// 		wp_reset_postdata();

// 		die();

// 	}

/*
* initial posts display
 */
function script_load_more($args = array()) {
    //initial posts load
    echo '<div id="ajax-primary" class="content-area">';
        echo '<div id="ajax-content" class="content-area">';
            ajax_script_load_more($args);
        echo '</div>';
        echo '<a href="#" id="loadMore"  data-page="1" data-url="'.admin_url("admin-ajax.php").'" >Load More</a>';
    echo '</div>';
}


/*
 * create short code.
 */
add_shortcode('ajax_posts', 'script_load_more');

/*
* load more script call back
 */
// function ajax_script_load_more($args) {
//     //init ajax
//     $ajax = false;
//     //check ajax call or not
//     if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
//         strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
//         $ajax = true;
//     }
//     //number of posts per page default
//     $num = 5;
//     //page number
//     $paged = $_POST['page'] + 1;
//     //args
//     $args = array(
//         'post_type' => 'post',
//         'post_status' => 'publish',
//         'posts_per_page' =>$num,
//         'paged'=>$paged
//     );
//     //query
//     $query = new WP_Query($args);
//     //check

//     // if ($query->have_posts()):
//     //     //loop articales
//     //     while ($query->have_posts()): $query->the_post();
//     //         //include articles template
//     //         include 'ajax-content.php';
//     //     endwhile;
//     // else:
//     //     echo 0;
//     // endif;
//     // //reset post data
//     // wp_reset_postdata();
//     //check ajax call


//     if($ajax) die();
// }

function ajax_script_load_more() {
	
	$paged = $_POST["page"]+1;
	
	$query = new WP_Query( array(
		'post_type' => 'post',
		'paged' => $paged
	) );
	
	if ( $query->have_posts() ): 
			while ( $query->have_posts() ): $query->the_post(); 

			get_template_part('contents/content', get_post_format() );

			endwhile; 
		endif; 

		wp_reset_postdata();
		
	die();
	
}



/*
 * load more script ajax hooks
 */
add_action('wp_ajax_nopriv_ajax_script_load_more', 'ajax_script_load_more');
add_action('wp_ajax_ajax_script_load_more', 'ajax_script_load_more');


/*
	==========================================
	 AJAX functions END
	==========================================
*/



?>