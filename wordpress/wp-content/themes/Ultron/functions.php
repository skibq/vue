<?php
function get_menu() {
    # Change 'menu' to your own navigation slug.
    return wp_get_nav_menu_items('main-menu');
}

add_action( 'rest_api_init', function () {
        register_rest_route( 'custom-routes', '/menu', array(
        'methods' => 'GET',
        'callback' => 'get_menu',
    ) );
} );



//REMOVE 'read more' link on excerp in post
function my_rest_prepare_post( $data, $post, $request ) {
	$_data = $data->data;
	$excerpt = get_extended( $post->post_content );
	$_data['my_excerpt'] = $excerpt['main'];
	$data->data = $_data;
	return $data;
}
add_filter( 'rest_prepare_post', 'my_rest_prepare_post', 10, 3 );