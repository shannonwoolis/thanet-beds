<?php

namespace PGMB\Placeholders;

use PGMB\Vendor\Html2Text\Html2Text;

class WooCommerceVariables implements VariableInterface {

	private $woocommerce;
	private $parent_post_id;

	public function __construct($parent_post_id) {
		if(function_exists('wc_get_product') && get_post_type($parent_post_id) === 'product'){
			$this->woocommerce = true;
			$this->parent_post_id = $parent_post_id;
		}
	}

	public function variables() {
		if(!$this->woocommerce){ return []; }

		//Get the product
		$product = wc_get_product($this->parent_post_id);

		//Parse WooCommerce rich content fields.
		$product_description = new Html2Text($product->get_description(),['width' => 0]);
		$short_description = new Html2Text($product->get_short_description(),['width' => 0]);

		//Create our new variables
		return [
			'%wc_product_price%'                => $product->get_price(),
			'%wc_product_name%'                 => $product->get_name(),
			'%wc_product_description%'          => $product_description->getText(),
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
