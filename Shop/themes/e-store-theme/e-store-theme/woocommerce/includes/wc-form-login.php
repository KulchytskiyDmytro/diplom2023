<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
 ?>




<form class=" login" method="post">
	<div class="login__name">
		<input type="text" class="_input" name="username" id="username" placeholder="<?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>"
			value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) :
				''; ?>"/> <?php // @codingStandardsIgnoreLine ?>
	</div>
	<div class="login__password">
		<input class="_input" type="password" name="password"
			id="password" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>"/>
	</div>
	<div class="login__checkbox">
		<label class="_checkbox text"> 
            <input class="" name="rememberme" type="checkbox" id="rememberme" value="forever"/>
            <span></span>
            <?php esc_html_e( 'Remember me', 'woocommerce' ); ?>
		</label>
	</div>
    <div class="login__button">
        <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?> 
        <button type="submit" class="_button" name="login"
			value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>"><?php esc_html_e( 'Login', 'woocommerce' ); ?></button>
    </div>
	<div class="login__forgotPass">
		<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="_text link"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
	</div>

</form>