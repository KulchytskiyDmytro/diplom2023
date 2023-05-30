<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estore
 */

$image = carbon_get_theme_option('crb_image_field');
$text = carbon_get_theme_option('crd_image_text');
$subtext = carbon_get_theme_option('crd_image_subtext');
?>

<div class="main__slider-main">
    <div class="slider-main__container">
        <div class="slider-main__body">
            <div class="slider-main__slider">

                <div class="slider-main__wrapper">
                    <div class="slider-main__slide">
                        <div data-swiper-parallax-opacity="1" data-swiper-parallax-y="0%"
                             data-swiper-parallax-duration="1000" class="slider-main__image IEimg">
                            <img src="<?php echo wp_get_attachment_url($image); ?>" alt="error">
                        </div>
                        <div class="slider-main__content">
                            <div class="slider-main__content-container container">
                                <div data-swiper-parallax-opacity="0" data-swiper-parallax-x="-50%"
                                     data-swiper-parallax-duration="1300" class="slider-main__description">
                                    <div class="slider-main__title midheader"><?php echo $text ?>
                                    </div>
                                    <div class="slider-main__text smallheader"><?php echo $subtext ?>
                                    </div>
                                </div>
                                <div class="slider-main__action">
                                    <div data-swiper-parallax-opacity="0.9" data-swiper-parallax-x="40%"
                                         data-swiper-parallax-duration="700" class="slider-main__product-card">
                                        <div data-prodid="10" class="product-card">
                                            <div class="product-card__wrapper">
                                                <div class="product-card__labels">
                                                    <div data-swiper-parallax-opacity="0"
                                                         data-swiper-parallax-x="100%"
                                                         class="product-card__label product-card__label-new text">
                                                        NEW
                                                    </div>
                                                    <div data-swiper-parallax-opacity="0"
                                                         data-swiper-parallax-x="-100%"
                                                         class="product-card__label product-card__label-sale text">
                                                        SALE
                                                    </div>
                                                </div>
                                                <a href="product_page.html" class="product-card__image IEimg">
                                                    <img src="img/product-photo/6.jpg" alt="">
                                                </a>
                                                <a href="product_page.html"
                                                   class="product-card__title subtitle _hover">Очки для
                                                    плавания</a>
                                                <div class="product-card__prices">
                                                    <div class="product-card__price subtitle">1,200 uah. </div>
                                                    <div
                                                            class="product-card__price product-card__price-old subtitle">
                                                        1,
                                                        900 uah.
                                                    </div>
                                                </div>
                                                <a href="" class="product-card__cart-button buy-button _button">
                                                    В КОРЗИНУ</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" data-swiper-parallax-opacity="0"
                                       data-swiper-parallax-duration="1100" data-swiper-parallax-y="-100%"
                                       class="slider-main__button subtitle _button icon-link-arrow-right">
                                        СМОТРЕТЬ
                                        ВСЁ</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="slider-main__navigation">
                    <div class="slider-main__navigation-container container">
                        <div class="slider-main__arrows">
                            <div class="slider-main__prev icon-menu-arrow-right"></div>
                            <div class="slider-main__next icon-menu-arrow-right"></div>
                        </div>
                        <div class="slider-main__dots"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
woocommerce_product_loop_start();
?>
        <?php
        $products = wc_get_products(array(
            'status' => 'publish', // Retrieve only published products
            'limit' => 10, // Adjust the number of products to display
        ));
        ?>
<div class="recomend-slider">
    <div class="recomend-slider__container container">
        <div class="recomend-slider__body">
            <div class="recomend-slider__recomend-header">
    <div class="recomend-header">
        <div class="recomend-header__title title">ТАКЖЕ ВАМ ПОНРАВИТЬСЯ</div>
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
            <div class="recomend-slider__slider">
                <div class="recomend-slider__wrapper">
        <?php
        if (!empty($products)) {
            foreach ($products as $product) {
                // Display product information
                echo '                            
                            <div class="recomend-slider__slide">
                                <div data-prodid="7" class="product-card">
                                    <div class="product-card__wrapper">          ';

                echo '<a href="'. get_permalink($product->get_id()) .'" class="product-card__image IEimg">';
                echo ' <img src="'. get_the_post_thumbnail($product->get_id()).'" alt="">';
                echo '</a>';

                echo '<a href="'. get_permalink($product->get_id()) .'" class="product-card__title subtitle _hover">';
                echo $product->get_name();
                echo '</a>';
                echo '<div class="product-card__prices"><div class="product-card__price subtitle">' .$product->get_price_html()  . '</div> </div> ';
                // ... Add more product details as needed
                
                echo '
                    </div>
                </div>
            </div>';

            }
        }
        ?>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php woocommerce_product_loop_end(); ?>


