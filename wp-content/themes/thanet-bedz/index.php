<?php

$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;

$context['tax'] = new Timber\Term();

$context['posts'] = new Timber\PostQuery();

$context['categories'] = get_categories([
    'orderby' => 'name',
    'order'   => 'ASC',
    'exclude' => array(1)
]);

$context['archives'] = wp_get_archives([
    'type'            => 'monthly',
    'echo'            => false,
]);

$templates = ['index.twig'];

Timber::render($templates, $context);
