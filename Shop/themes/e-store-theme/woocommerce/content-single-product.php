<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>


    <?php
    //=============================================================== PASSWORD form
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	//  do_action( 'woocommerce_before_single_product' );
	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
     //===========================================================================
    ?>




<!--    // =================================================== OPEN "product-page__content"-->
    <div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
    //===========================================================OPEN "content"======
    //================================================Create "content__characteristic"
    //===================================================Create "content__product-sliders"
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
    //========================================================================
	?><!-- .beforesummary -->


<!--	 //========================================================Create "content__buy"-->
	    <div class="content__buy">
		    <div calss="buy__top">
                <?php
                //======================================================="buy__top"
                    /**
                     * woocommerce_single_product_summary hook.
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 20
                     * @hooked woocommerce_template_single_price - 20
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 10
                     * @hooked woocommerce_template_single_sharing - 50
                     * @hooked WC_Structured_Data::generate_product_data() - 60
                     */
                    do_action( 'woocommerce_single_product_summary');

                ?>
		    </div>
            <?php
            //======================================================="buy__info-container"
                do_action( 'woocommerce_single_product_summary-custom' );
            ?>
	    </div>
	<!-- .summary -->





<!--    // =================================================== CLOSE "content"-->
</div><!-- #product-<?php // the_ID(); ?> -->
<!--    // =================================================== CLOSE "product-page__content"-->
</div>



<!--//========================================================== recomend slider call-->
<?php
/**
 * woocommerce_after_single_product_summary hook.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
do_action( 'woocommerce_after_single_product_summary' );
// woocommerce_output_product_data_tabs disabled
// woocommerce_upsell_display disabled  in wc-function-remove
?>


<?php //do_action('estore_after_main_content');  ?>
<!--recomend silder-->
<?php //do_action( 'woocommerce_after_single_product' ); ?>


<!--============================================================REVIEWS-->
<?php
//    wc_get_template( '/single-product-reviews.php' );
?>

