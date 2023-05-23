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
                <div class="sub-header__title icon-slider-right-arrow subtitle">
                    <!-- <a href="" class="subtitle _hover"> ВОДНЫЙ СПОРТ</a>
                    <a href="" class="subtitle _hover"> ОЧКИ ДЛЯ ПЛАВАНИЯ</a>
                    <span href="" class="subtitle"> EASYBREATH </span> -->
                    <?php woocommerce_breadcrumb(); ?>
                </div>
            </div>
<?php
}

///////////////////////////////////////////////////////////////////////////////////////////

add_action( 'woocommerce_before_single_product', 'estore_wrapper_product_start', 5 );
function estore_wrapper_product_start() {
	?>
        <div class="product-page__content container">
	<?php
}

add_action( 'woocommerce_after_single_product', 'estore_wrapper_product_end', 5 );
function estore_wrapper_product_end() {
	?>
        </div>
	<?php
}

///////////////////////////////////////////////////////////////////////////////////////////
