<?php
	
function customtheme_script_enqueue() {
	
	wp_register_style( 'customstyle', get_template_directory_uri() . '/css/customtheme.css', array(), null, 'all');
	wp_register_style( 'colorbox', get_template_directory_uri() . '/css/colorbox.css', array(), null, 'all' );
	wp_register_script( 'jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), null, 'all' );
	wp_register_script( 'dragend', get_template_directory_uri() . '/js/dragend.js', array(), null, 'all' );
	wp_register_script( 'headroom', get_template_directory_uri() . '/js/headroom.js', array(), null, 'all' );
	wp_register_script( 'swipe-controls', get_template_directory_uri() . '/js/swipe-controls.js', array(), null, 'all' );
	wp_register_script( 'colorbox-min', get_template_directory_uri() . '/js/jquery.colorbox-min.js', array(), null, 'all' );
	wp_register_script( 'scripts', get_template_directory_uri() . '/js/script.js', array(), null, 'all' );
	wp_register_script( 'script-news', get_template_directory_uri() . '/js/script-news.js', array(), null, 'all' );

	if ( is_front_page() ) {
		wp_enqueue_style( 'customstyle' );
		wp_enqueue_style( 'colorbox' );
		wp_enqueue_script( 'jquery-min' );
		wp_enqueue_script( 'dragend' );
		wp_enqueue_script( 'headroom' );
		wp_enqueue_script( 'swipe-controls' );
		wp_enqueue_script( 'colorbox-min' );
		wp_enqueue_script( 'scripts' );	
	 } else {
		wp_enqueue_style( 'customstyle' );
		wp_enqueue_script( 'headroom' );
		wp_enqueue_script( 'script-news' );
	 }
	
	
}

add_action( 'wp_enqueue_scripts', 'customtheme_script_enqueue');
add_theme_support( 'post-thumbnails' ); 

function custom_post_enque() {
	if ( is_page_template( 'single-post.php' ) ) {
		wp_enqueue_script( 'headroom' );
		wp_enqueue_script( 'script-news', get_template_directory_uri() . '/js/script-news.js', array(), null, 'all' );
	}
}
add_action( 'wp_enqueue_scripts', 'custom_post_enque');

function time_ago( $type = 'post' ) {
    $d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';

    return human_time_diff($d('U'), current_time('timestamp')) . " " . __('ago');

}

function custom_load_post_type($thepost){
	$custom_category = $thepost;
	$lastposts = get_posts( array(
		'category_name' => $custom_category,
		'posts_per_page' => 5,
		'orderby' => 'date'
	) );

	if ( $lastposts ) {
		foreach ( $lastposts as $post ) :
			setup_postdata( $post ); ?>
			<div class="item">
				<a class="iframe" title="<span><?php the_title(); ?></span>" transition="fade" href="<?php the_permalink(); ?>">
				<div class="image"><img src="<?php the_post_thumbnail(); ?>" alt="image">
				<div class="description"><?php the_title(); ?></div>
			</div>																
		<?php
		endforeach; 
		wp_reset_postdata();
	}
}