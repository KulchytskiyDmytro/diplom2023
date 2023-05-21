<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */

?>

	</div><!-- #content -->
	<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$email = carbon_get_theme_option('crb_email');
$phone = carbon_get_theme_option('crb_phone');
?>

	<footer class="footer">
        <div class="footer__container container">
            <div class="footer__body">
                <div class="footer__info footer__column">
                    <div class="info__client-info info__column">
                        <button class="info__title subtitle">КЛІЄНТАМ</button>
                        <ul class="info__list">
                            <li class="info__item"><a href="" class="info__link _hover text">Питання</a></li>
                            <li class="info__item"><a href="delivery.html" class="info__link _hover text">Замовлення й Доставка</a>
                            </li>
                            <li class="info__item"><a href="privat_policy.html" class="info__link _hover text">FAQ</a></li>
                            <li class="info__item"><a href="map.html" class="info__link _hover text">КОНТАКТЫ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__social-media footer__column">
                    <div class="social-media">
                        <a href="#" class="social-media__phone _hover text"><?php echo $phone;?></a>
						<a href="#" class="social-media__phone _hover text"><?php echo $email;?></a>
                        <div class="social-media__adress text">м.Київ Хрещатик</div>
                        <div class="social-media__sm">
                            <a href="" class="social-media__icon icon-facebook  _hover text"></a>
                            <a href="" class="social-media__icon icon-telegram _hover text"></a>
                            <a href="" class="social-media__icon icon-viber  _hover text"></a>
                            <a href="" class="social-media__icon icon-instagram  _hover text"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="technical">
        <div class="preloader">
            <div class="preloader__wrapper">
                <div class="preloader__body">
                    <div class="bounceball">
                        <div class="ball">
                            <span class="ball__lines">
                                <span class="ball__lines-1"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
