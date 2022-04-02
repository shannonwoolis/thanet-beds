<?php

$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;

$query = $GLOBALS['wp_query']->query_vars;
$query['posts_per_page'] = 8;
$context['posts'] = new Timber\PostQuery($query);

$context['query'] = get_search_query();

$templates = ['search.twig'];

Timber::render($templates, $context);
