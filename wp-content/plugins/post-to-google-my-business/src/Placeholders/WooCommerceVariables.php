<?php

namespace PGMB\Placeholders;

use PGMB\Vendor\Html2Text\Html2Text;

class WooCommerceVariables implements VariableInterface {

	private $woocommerce;
	private $parent_post_id;
	private $do_links;

	public function __construct($parent_post_id, $do_links) {
		if(function_exists('wc_get_product') && get_post_type($parent_post_id) === 'product'){
			$this->woocommerce = true;
			$this->parent_post_id = $parent_post_id;
		}
		$this->do_links = $do_links;
	}

	public function variables() {
		if(!$this->woocommerce){ return []; }

		//Get the product
		$product = wc_get_product($this->parent_post_id);

		//Parse WooCommerce rich content fields.
		$product_description = wpautop($product->get_description()); //Add paragraph tags
		$product_description = preg_replace("~(?:\[/?)[^\]]+/?\]~s", '', $product_description);
		$product_description = new Html2Text($product_description,
			[
				'width' => 0,
				'do_links'  => $this->do_links,
			]
		);
		$short_description = new Html2Text($product->get_short_description(),
			[
				'width' => 0,
				'do_links'  => $this->do_links,
			]
		);

		//Create our new variables
		return [
			'%wc_product_price%'                => $product->get_price(),
			'%wc_product_name%'                 => $product->get_name(),
			'%wc_product_description%'          => trim($product_description->getText()),
			'%wc_product_short_description%'    => $short_description->getText(),
			'%wc_product_sku%'                  => $product->get_sku(),
			'%wc_product_virtual%'              => $product->get_virtual(),
			'%wc_product_regular_price%'        => $product->get_regular_price(),
			'%wc_product_sale_price%'           => $product->get_sale_price(),
			'%wc_product_price_including_tax%'  => function_exists('wc_get_price_including_tax') ? wc_get_price_including_tax( $product ) : '',
			'%wc_currency_symbol%'               => function_exists('get_woocommerce_currency_symbol') ? get_woocommerce_currency_symbol() : '',
		];

	}
}
