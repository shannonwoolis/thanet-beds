<?php

$context = Timber::context();
$context['sidebar'] = Timber::get_widgets('shop-sidebar');

if (is_singular('product')) {
    $context['post'] = Timber::get_post();
    $product = wc_get_product($context['post']->ID);
    $context['product'] = $product;

    // Get related products
    $related_limit = wc_get_loop_prop('columns');
    $related_ids = wc_get_related_products($context['post']->id, $related_limit);
    $context['related_products'] =  Timber::get_posts($related_ids);

    // Restore the context and loop back to the main query loop.
    wp_reset_postdata();

    Timber::render('woocommerce/single-product.twig', $context);
} else {
    $context['post'] = new Timber\Term();
    $posts = new Timber\PostQuery();
    $context['products'] = $posts;

    if (is_product_category()) {
        $queried_object = get_queried_object();
        $term_id = $queried_object->term_id;
        $context['termID'] = $term_id;
        $context['category'] = get_term($term_id, 'product_cat');
        $context['title'] = single_term_title('', false);

        $cat_args = array(
            'hide_empty' => false,
            'parent' => $term_id,
        );
        $childCategories = get_terms( 'product_cat', $cat_args);

        $hiddenChildren = array();
        foreach($childCategories as $term) {
            if(get_field('hidden_category',$term) == true) {
                array_push($hiddenChildren,$term->term_id);
            }
        }

        $cat_args = array(
            'hide_empty' => false,
            'parent' => $term_id,
            'exclude'  => $hiddenChildren,
        );
        $childCategories = get_terms( 'product_cat', $cat_args);
        $context['childCategories'] = $childCategories;
    }

    Timber::render('woocommerce/archive.twig', $context);
}
