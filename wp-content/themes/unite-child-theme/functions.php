<?php
add_action( 'after_setup_theme', 'my_child_theme_setup' );
function my_child_theme_setup() {
	load_child_theme_textdomain( 'my-child-theme', get_stylesheet_directory() . '/languages' );
}

add_image_size( 'film_thumb', 360, 1000, true );

add_filter( 'excerpt_length', function(){
	return 20;
} );

add_filter( 'excerpt_more', 'unite_excerpt_more_rewrite', 20 );
function unite_excerpt_more_rewrite( $more ) {
	return '...';
}


add_shortcode( 'latest_films', 'latest_films_shortcode' );
function latest_films_shortcode( $atts, $shortcode_content = null ) {
	$params = shortcode_atts( array(
		'numberposts' => 5,
		'post_type' => 'film'
	), $atts );

	$args = array( 'numberposts' => $params['numberposts'], 'post_type' => $params['post_type'] );
	$lastposts = get_posts( $args );

	foreach( $lastposts as $post ){

		$res .= '<div class="row widget-film-container"> 
					<div class="col-md-4"> '.get_the_post_thumbnail($post->ID, 'film_thumb').' </div>
					<div class="col-md-8"> 
						<h2><a href="'.$post->guid.'">'.$post->post_title.'</a></h2> 
						<br>'.$post->post_content.'
					</div>
				</div>';

	}
	
	return $res;
}

?>
