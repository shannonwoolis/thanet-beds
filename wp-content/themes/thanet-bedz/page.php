<?php

$context = Timber::context();


$timber_post = new Timber\Post();
$context['post'] = $timber_post;

if(is_page('reviews')) {
    // Reviews
    $reviews = array(
        'post_type'           => 'reviews',
        'post_status'         => 'publish',
        'posts_per_page'      => -1,
    );
    $context['reviewsAll'] = new Timber\PostQuery($reviews);
}

Timber::render( [ 'page-'.$timber_post->slug.'.twig', 'page.twig' ], $context );