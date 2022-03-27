<?php

/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.9.0
 */

if (!defined('ABSPATH')) {
  exit;
}

if ($related_products) : ?>

    <section class="py-8 related products bg-primary-dark md:py-12 lg:py-16">
        <div class="container relative flex flex-wrap sm:flex-row-reverse sm:flex-nowrap">
            <div class="w-full text-white sm:w-auto text-vertical-right bar-right bg-primary-dark"><span class="text-white bg-primary-dark">Related Products</span></div>
            
            <div class="w-full">

                <h2 class="!mb-0 text-white">You might also be interested in</h2>
                
                <div class="flex flex-wrap mt-8 -mx-4 -mb-2 products">
                    <?php woocommerce_product_loop_start(); ?>

                    <?php foreach ($related_products as $related_product) : ?>

                    <?php
                    $post_object = get_post($related_product->get_id());

                    setup_postdata($GLOBALS['post'] = &$post_object); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

                    // wc_get_template_part('content', 'product');
                    $context['post'] = $post_object;

                    $template = ['_shop/tease-product.twig'];

                    Timber::render($template, $context);
                    ?>

                    <?php endforeach; ?>

                    <?php woocommerce_product_loop_end(); ?>
                    
                </div>
            </div>
    
        </div>
    </section>
<?php
endif;

wp_reset_postdata();
