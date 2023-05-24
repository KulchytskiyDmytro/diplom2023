<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>




    <form method="post" class="signup" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

        

        <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
            <div class="signup__name">
                <input type="text" class="_input" name="username" id="reg_username" autocomplete="username" placeholder="<?php esc_html_e( 'Username', 'woocommerce' ); ?>" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
            </div>  
        <?php endif; ?>

        
        <div class="signup__email">
            <input type="email" class="_input" name="email" id="reg_email" autocomplete="email" placeholder="<?php esc_html_e( 'Email address', 'woocommerce' ); ?>" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
        </div>
                                       

        <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
            <div class="signup__password">
                <input type="password" class="_input" name="password" id="reg_password" autocomplete="new-password" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" />
            </div>
        <?php else : ?>
            <p><?php esc_html_e( 'A link to set a new password will be sent to your email address.', 'woocommerce' ); ?></p>
        <?php endif; ?>


        <div class="signup__button">
            <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
            <button type="submit" class="_button <?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?> woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
        </div>

        

    </form>


