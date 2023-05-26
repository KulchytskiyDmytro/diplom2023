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
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

    <div class="recomend-slider">
        <div class="recomend-slider__container container">
            <div class="recomend-slider__body">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
            <div class="recomend-slider__recomend-header">
                <div class="recomend-header">
                    <div class="recomend-header__title title"><?php echo esc_html( $heading ); ?></div>
                    <div class="recomend-header__line"></div>
                    <div class="recomend-header__arrows">
                        <button
                                class="recomend-header__arrow
                                        recomend-header__button-prev slider-recomend-header__button-prev icon-slider-right-arrow "></button>
                        <button
                                class="recomend-header__arrow
                                        recomend-header__button-next slider-recomend-header__button-next icon-slider-right-arrow "></button>
                    </div>
                </div>
            </div>
		<?php endif; ?>
                <div class="recomend-slider__slider">
                    <div class="recomend-slider__wrapper">
		            <?php woocommerce_product_loop_start(); ?>

                        <?php foreach ( $related_products as $related_product ) : ?>

                                <?php
                                $post_object = get_post( $related_product->get_id() );

                                setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

                                wc_get_template_part( 'content', 'product' ); // link to wp-content/plugins/woocommerce/templates/content-product.php
                                ?>

                        <?php endforeach; ?>

                    <?php woocommerce_product_loop_end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
endif;

wp_reset_postdata();
