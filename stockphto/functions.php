<?php
require_once get_template_directory() . '/inc/plugin.php';
include 'assets/lib/code.php';
function stockphoto_scripts(){
	$uri                       =get_template_directory_uri();
	wp_enqueue_style('all_min_css',$uri.'/assets/css/all.min.css',[],true,'all');
	wp_enqueue_style('bootstrap_min_css',$uri.'/assets/css/bootstrap.min.css',[],true,'all');
	wp_enqueue_style('main_style',get_stylesheet_uri());
	wp_enqueue_script('popper',$uri.'/assets/js/popper.min.js',[],true,true);
	wp_enqueue_script('all_min_js',$uri.'/assets/js/all.min.js',[],true,true);
	wp_enqueue_script('jquery_min',$uri.'/assets/js/jquery-3.6.0.min.js',[],true,true);
	wp_enqueue_script('bootstrap_min_js',$uri.'/assets/js/bootstrap.min.js',[],true,true);
	wp_enqueue_script('custom',$uri.'/assets/js/custom.js',[],true,true);
}
function stockphoto_setup(){
	add_theme_support('post-thumbnails');
	add_theme_support( 'html5', array( 'search-form' ) );
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	register_nav_menu('primary',__('Primary Menu','stockphoto'));
}
function stockphoto_widgets(){
	register_sidebar(array(
		'name'                =>__('About Us','stockphoto'),
		'id'                  =>'about_us',
		'description'         =>'This a about us section',
		'before_widget'       =>'<div class="row about-text">',
		'after_widget'        =>'</div>',
		'before_title'        =>'<h2 class="d-flex justify-content-center mt-5 mb-5">',
		'after_title'         =>'</h2>',
	));
	register_sidebar(array(
		'name'                =>__('Footer One','stockphoto'),
		'id'                  =>'footer1',
		'description'         =>'This a footer section',
		'before_widget'       =>'<div class="col-12 col-md-6 col-xl-3 mt-4 footer1">',
		'after_widget'        =>'</div>',
		'before_title'        =>'<h3 class="text-light footer-text">',
		'after_title'         =>'</h3>',
	));
	register_sidebar(array(
		'name'                =>__('Footer Two','stockphoto'),
		'id'                  =>'footer2',
		'description'         =>'This a footer section',
		'before_widget'       =>'<div class="col-12 col-md-6 col-xl-3 mt-4 footer1">',
		'after_widget'        =>'</div>',
		'before_title'        =>'<h3 class="text-light footer-text">',
		'after_title'         =>'</h3>',
	));
	register_sidebar(array(
		'name'                =>__('Footer Three','stockphoto'),
		'id'                  =>'footer3',
		'description'         =>'This a footer section',
		'before_widget'       =>'<div class="col-12 col-md-6 col-xl-3 mt-4 footer1">',
		'after_widget'        =>'</div>',
		'before_title'        =>'<h3 class="text-light footer-text">',
		'after_title'         =>'</h3>',
	));
	register_sidebar(array(
		'name'                =>__('Footer Four','stockphoto'),
		'id'                  =>'footer4',
		'description'         =>'This a footer section',
		'before_widget'       =>'<div class="col-12 col-md-6 col-xl-3 mt-4 footer1">',
		'after_widget'        =>'</div>',
		'before_title'        =>'<h3 class="text-light footer-text">',
		'after_title'         =>'</h3>',
	));
	register_sidebar(array(
		'name'                =>__('Copyright','stockphoto'),
		'id'                  =>'copyright',
		'description'         =>'This a copyright section',
		'before_widget'       =>'<div class="mt-3 d-flex justify-content-center copyright">',
		'after_widget'        =>'</div>',
	));
}
//Bootstrap pagination start
function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true, $params = [] ) {
	if ( null === $wp_query ) {
		global $wp_query;
	}

	$add_args = [];

	$pages = paginate_links( array_merge( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 3,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( '« Prev' ),
			'next_text'    => __( 'Next »' ),
			'add_args'     => $add_args,
			'add_fragment' => ''
		], $params )
	);

	if ( is_array( $pages ) ) {
		//$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		$pagination = '<div class="pagination"><ul class="pagination">';

		foreach ( $pages as $page ) {
			$pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
		}

		$pagination .= '</ul></div>';

		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}

	return null;
}
//Bootstrap pagination end
add_action('widgets_init','stockphoto_widgets');
add_action('after_setup_theme','stockphoto_setup');
add_action('wp_enqueue_scripts','stockphoto_scripts');