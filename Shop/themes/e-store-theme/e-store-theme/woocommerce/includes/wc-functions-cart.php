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

















// =====================================================================add  cart__icon and span counter to it.
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


//================================================================= get counter of all product 
if ( ! function_exists( 'estore_woocommerce_cart_prodCount' ) ) {
	function estore_woocommerce_cart_prodCount() {	
		?>
            <span><?php echo wp_kses_data( WC()->cart->get_cart_contents_count() ) ;?></span>
		<?php
	}
}
//================================================================= get sub total maney of all products added to cart
if ( ! function_exists( 'estore_woocommerce_cart_prodSum' ) ) {
	function estore_woocommerce_cart_prodSum() {	
		?>
            <span><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ) ;?></span>
		<?php 
	}
}


// ======================================== cart menu products inside generate
function display_products_in_cart() {
	// Check if WooCommerce is active
	if ( class_exists( 'WooCommerce' ) ) {
	 // Get the cart instance
	 $cart = WC()->cart;
 
	 // Get cart items
	 $cart_items = $cart->get_cart();
 
	 // Output the products in a list
	 echo '<ul class="cart__cart-list cart-list">';
 
	 foreach ( $cart_items as $cart_item_key => $cart_item ) {
		 // Get the product information
		 $product_id = $cart_item['product_id'];
		 $product_name = get_the_title( $product_id );
		 $product_permalink = get_permalink( $product_id );
		 $product_price = wc_price( $cart_item['data']->get_price() );
		 $product_image = get_the_post_thumbnail_url( $product_id, 'thumbnail' );
		 $product_quantity = $cart_item['quantity'];
 
		 // Output each product as a list item
		 echo '<li class="cart-list__item">';
		 echo '<a href="' . $product_permalink . '" class="cart-list__image IEimg"><img src="' . $product_image . '" alt=""></a>';
		 echo '<div class="cart-list__body">';
		 echo '<a href="' . $product_permalink . '" class="cart-list__title">' . $product_name . '</a>';
		 echo '<div class="cart-list__price">' . $product_price . '</div>';
		 echo '<div class="cart-list__bottom">';
		 echo '<div class="cart-list__quantity">';
		 echo '<span> Кількість: ' . $product_quantity . '</span>';
		 echo '</div>';
		 echo '<a href="' . esc_url( wc_get_cart_remove_url( $cart_item_key ) ) . '" class="cart-list__delete">видалити</a>';
		 echo '</div>';
		 echo '</div>';
		 echo '</li>';
	 }
 
	 echo '</ul>';
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



