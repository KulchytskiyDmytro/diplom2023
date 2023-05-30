<?php
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	load_template( get_template_directory() . '/includes/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'estore_register_custom_fields' );
function estore_register_custom_fields() {
	require get_template_directory() . '/includes/custom-fields-options/metabox.php';
	require get_template_directory() . '/includes/custom-fields-options/theme-optons.php';
}

//
require get_template_directory() . '/includes/ajax.php';

/*
 * themes
 */
require get_template_directory() . '/includes/theme-settings.php';
/*
 * widgets
 */
require get_template_directory() . '/includes/widget-areas.php';
/*
 * Scrips and stypes
 */
require get_template_directory() . '/includes/enqueue-script-style.php';
/*
 * functions add
 */
require get_template_directory() . '/includes/helpers.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	//require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-cart.php';
}

///////// Color define

// Define a custom product query filter for sorting by color
function custom_product_orderby( $args ) {
    if ( isset( $_GET['color'] ) ) {
        $args['meta_query'][] = array(
            'key' => 'pa_color', // Change 'pa_color' to the appropriate attribute slug for color in your WooCommerce setup
            'value' => sanitize_text_field( $_GET['color'] ),
            'compare' => 'LIKE'
        );
    }
    return $args;
}
add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_product_orderby' );

// Add a custom sorting option for color
function custom_product_orderby_options_color( $options ) {
    $options['color'] = 'Sort by Color';
    return $options;
}
add_filter( 'woocommerce_catalog_orderby', 'custom_product_orderby_options_color' );


// Add custom sorting options for color
function add_color_sorting_options( $options ) {
    $options['color_white'] = 'Sort by White Color';
    return $options;
}
add_filter( 'woocommerce_catalog_orderby', 'add_color_sorting_options' );

// Modify the product query to sort by white color
function sort_products_by_white_color( $query ) {
    if ( $query->is_main_query() && is_shop() && isset( $_GET['orderby'] ) && $_GET['orderby'] === 'color_white' ) {
        $tax_query = array(
            array(
                'taxonomy' => 'pa_color', // Change 'pa_color' to the appropriate attribute slug for color in your WooCommerce setup
                'field'    => 'slug',
                'terms'    => 'white', // Change 'white' to the appropriate term slug for white color in your WooCommerce setup
            ),
        );
        $query->set( 'tax_query', $tax_query );
    }
}
add_action( 'pre_get_posts', 'sort_products_by_white_color' );


