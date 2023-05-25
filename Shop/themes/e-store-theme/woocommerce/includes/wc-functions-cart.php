<?php

if ( ! function_exists( 'estore_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function estore_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		estore_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'estore_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'estore_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function estore_woocommerce_cart_link() {
		
		?>
			<!-- <a href="<?php // echo esc_url( wc_get_cart_url() ); ?>" class="cart__icon icon-cart _hover"  title="<?php // esc_attr_e( 'View your shopping cart', 'estore' ); ?>"> -->
			<a href class="cart__icon icon-cart _hover"  title="<?php esc_attr_e( 'View your shopping cart', 'estore' ); ?>">
				<?php /* translators: number of items in the mini cart. */ ?>
                <span class="count"><?php echo wp_kses_data( WC()->cart->get_cart_contents_count() ) ;?></span>
			</a>
		<?php
	}
}

if ( ! function_exists( 'estore_woocommerce_cart_prodCount' ) ) {
	function estore_woocommerce_cart_prodCount() {	
		?>
            <span><?php echo wp_kses_data( WC()->cart->get_cart_contents_count() ) ;?></span>
		<?php
	}
}

if ( ! function_exists( 'estore_woocommerce_cart_prodSum' ) ) {
	function estore_woocommerce_cart_prodSum() {	
		?>
            <span><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ) ;?></span>
		<?php 
	}
}



if ( ! function_exists( 'estore_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function estore_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php estore_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
					$instance = array(
						'title' => '',
					);

					the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}



