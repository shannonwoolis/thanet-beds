<?php

$context = Timber::context();
$context['post'] = new Timber\Post();

// Featured products
$tax_query[] = array(
    'taxonomy' => 'product_visibility',
    'field'    => 'name',
    'terms'    => 'featured',
    'operator' => 'IN', 
);
$query = array(
    'post_type'           => 'product',
    'post_status'         => 'publish',
    'posts_per_page'      => 8,
    'tax_query'           => $tax_query
);
$context['featured'] = new Timber\PostQuery($query);

// Reviews
$reviews = array(
    'post_type'           => 'reviews',
    'post_status'         => 'publish',
    'posts_per_page'      => 6,
);
$context['reviews'] = new Timber\PostQuery($reviews);

Timber::render( [ 'front-page.twig' ], $context );