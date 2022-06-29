<?php

global $wpdb;

$results = $wpdb->get_results(
    "SELECT location_code FROM adtrakwp_woocommerce_shipping_zone_locations"
);

$zones = fopen(get_template_directory() . "/postcodes.json", "w");
fwrite($zones,json_encode($results));

// return $results;