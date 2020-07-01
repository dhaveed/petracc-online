<?php


add_action( 'rest_api_init', function () {
    register_rest_route( 'wp/v2', 'ohio_get_acf_options', [
        'methods' => 'GET',
        'callback' => function() {
            global $wpdb;

            $options = $wpdb->get_results( 'SELECT option_name, option_value FROM ' . $wpdb->options .' WHERE option_name LIKE "%options_global%"' );
            return json_encode( $options );
        }
    ]);
});