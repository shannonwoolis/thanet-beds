<?php 

if ( ! function_exists( 'yith_wcwl_selectively_dequeue_assets' ) ) {
	function yith_wcwl_selectively_dequeue_assets(){
		// if ( is_product() || yith_wcwl_is_wishlist_page() ) {
		// 	return;
		// }

		// dequeue assets
		wp_dequeue_style( 'jquery-selectBox' );
		wp_dequeue_style( 'yith-wcwl-font-awesome' );
		wp_dequeue_style( 'yith-wcwl-main' );
		wp_dequeue_style( 'yith-wcwl-theme' );

		// dequeue scripts
		wp_dequeue_script( 'jquery-selectBox' );
		// wp_dequeue_script( 'jquery-yith-wcwl' );
	}
	add_action( 'wp_enqueue_scripts', 'yith_wcwl_selectively_dequeue_assets', 15 );
}