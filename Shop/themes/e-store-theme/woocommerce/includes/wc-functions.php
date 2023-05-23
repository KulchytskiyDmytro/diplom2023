<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 03.11.2023
 * Time: 12:43
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

add_action( 'woocommerce_before_main_content', 'estore_add_breadcrumbs', 20 );
function estore_add_breadcrumbs(){
	?>
        <div class="sub-header container">
            <div class="sub-header__title icon-scuba subtitle">
                <?php woocommerce_breadcrumb(); ?>
            </div>
        </div>
<?php
}

///////////////////////////////////////////////////////////////////////////////////////////
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );

add_action( 'woocommerce_before_main_content', 'estore_output_content_wrapper_start', 10 );
function estore_output_content_wrapper_start() {
	?>
        <div class="product-page__container container">
	<?php
}

add_action( 'woocommerce_after_main_content', 'estore_output_content_wrapper_end', 10 );
function estore_output_content_wrapper_end() {
	?>
        </div>
	<?php
}

///////////////////////////////////////////////////////////////////////////////////////////
add_action( 'woocommerce_before_single_product_summary', 'estore_output_content_wrapper_start', 10 );