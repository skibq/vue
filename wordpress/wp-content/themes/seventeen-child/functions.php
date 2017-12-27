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



?>