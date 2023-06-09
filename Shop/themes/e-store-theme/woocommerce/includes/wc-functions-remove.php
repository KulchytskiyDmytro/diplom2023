<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
//remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);



//remove_all_filters( 'woocommerce_after_single_product_summary');
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10); // remove tabs with description and reviews
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
// ================ leave only reviews


remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 20); // remove rating in product_page ("contetn-single-product")
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 ); // remove short description in single product
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 ); // remove sharing in  



