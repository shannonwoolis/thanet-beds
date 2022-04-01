<?php

$context = Timber::context();


$timber_post = new Timber\Post();
$context['post'] = $timber_post;

Timber::render( [ 'single-'.$timber_post->post_type.'.twig', 'single.twig' ], $context );