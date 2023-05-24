<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estore
 */

get_header(); ?>

<main class="main">
        <div class="main__slider-main">
            <div class="slider-main__container">
                <div class="slider-main__body">
                    <div class="slider-main__slider">

                        <div class="slider-main__wrapper">
                            <div class="slider-main__slide">
                                <div data-swiper-parallax-opacity="1" data-swiper-parallax-y="0%"
                                    data-swiper-parallax-duration="1000" class="slider-main__image IEimg">
                                    <img src="img/photos/mike-meyers-LcZnOtKtOUc-unsplash.jpg" alt="">
                                </div>
                                <div class="slider-main__content">
                                    <div class="slider-main__content-container container">
                                        <div data-swiper-parallax-opacity="0" data-swiper-parallax-x="-50%"
                                            data-swiper-parallax-duration="1300" class="slider-main__description">
                                            <div class="slider-main__title midheader">DIVING MASK ONLY HERE FOR PRICE
                                            </div>
                                            <div class="slider-main__text smallheader">Lorem ipsum dolor, sit amet
                                                consectetur adipisicing elit. Quia vero quibusdam
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
                            <div class="recomend-slider__slide">
                                <div data-prodid="7" class="product-card">
                                    <div class="product-card__wrapper">
                                        <div class="product-card__labels">
                                            <div class="product-card__label product-card__label-new text">
                                                NEW
                                            </div>
                                            <div class="product-card__label product-card__label-sale text">
                                                SALE
                                            </div>
                                        </div>
                                        <a href="product_page.html" class="product-card__image IEimg">
                                            <img src="img/product-photo/recomend slider 2jpeg.jpg" alt="">
                                        </a>
                                        <a href="product_page.html" class="product-card__title subtitle _hover">Очки для
                                            плавания</a>
                                        <div class="product-card__prices">
                                            <div class="product-card__price subtitle">1,200 uah. </div>
                                            <div class="product-card__price product-card__price-old subtitle">
                                                1,
                                                900 uah.
                                            </div>
                                        </div>
                                        <a href="" class="product-card__cart-button buy-button _button"> В КОРЗИНУ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recomend-slider__slide">
                                <div data-prodid="2" class="product-card">
                                    <div class="product-card__wrapper">
                                        <div class="product-card__labels">
                                            <div class="product-card__label product-card__label-new text">
                                                NEW
                                            </div>
                                        </div>
                                        <a href="product_page.html" class="product-card__image IEimg">
                                            <img src="img/product-photo/9.jpg" alt="">
                                        </a>
                                        <a href="product_page.html" class="product-card__title subtitle _hover">Очки для
                                            плавания</a>
                                        <div class="product-card__prices">
                                            <div class="product-card__price subtitle">1,900 uah. </div>
                                        </div>
                                        <a href="" class="product-card__cart-button buy-button _button"> В КОРЗИНУ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recomend-slider__slide">
                                <div data-prodid="3" class="product-card">
                                    <div class="product-card__wrapper">
                                        <div class="product-card__labels">
                                            <div class="product-card__label product-card__label-sale text">
                                                SALE
                                            </div>
                                        </div>
                                        <a href="product_page.html" class="product-card__image IEimg">
                                            <img src="img/product-photo/recomend slider 1.jpeg" alt="">
                                        </a>
                                        <a href="product_page.html" class="product-card__title subtitle _hover">Маска
                                            для плавания</a>
                                        <div class="product-card__prices">
                                            <div class="product-card__price subtitle">2,000 uah. </div>
                                            <div class="product-card__price product-card__price-old subtitle">
                                                3,
                                                900 uah.
                                            </div>
                                        </div>
                                        <a href="" class="product-card__cart-button buy-button _button"> В КОРЗИНУ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recomend-slider__slide">
                                <div data-prodid="4" class="product-card">
                                    <div class="product-card__wrapper">
                                        <div class="product-card__labels">

                                        </div>
                                        <a href="product_page.html" class="product-card__image IEimg">
                                            <img src="img/product-photo/divemask.jpg" alt="">
                                        </a>
                                        <a href="product_page.html" class="product-card__title subtitle _hover">Маска
                                            для дайвинга</a>
                                        <div class="product-card__prices">
                                            <div class="product-card__price subtitle">1,600 uah. </div>
                                        </div>
                                        <a href="" class="product-card__cart-button buy-button _button"> В КОРЗИНУ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recomend-slider__slide">
                                <div data-prodid="5" class="product-card">
                                    <div class="product-card__wrapper">
                                        <div class="product-card__labels">
                                        </div>

                                        <a href="product_page.html" class="product-card__image IEimg">
                                            <img src="img/product-photo/divemask1.jpg" alt="">
                                        </a>
                                        <a href="product_page.html" class="product-card__title subtitle _hover">Маска
                                            Для ныряния </a>
                                        <div class="product-card__prices">
                                            <div class="product-card__price subtitle">900 uah. </div>
                                        </div>
                                        <a href="" class="product-card__cart-button buy-button _button"> В КОРЗИНУ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recomend-slider__slide">
                                <div data-prodid="6" class="product-card">
                                    <div class="product-card__wrapper">
                                        <div class="product-card__labels">
                                        </div>
                                        <div class="product-card__labels">
                                            <div class="product-card__label product-card__label-new text">
                                                NEW
                                            </div>
                                            <div class="product-card__label product-card__label-sale text">
                                                SALE
                                            </div>
                                        </div>
                                        <a href="product_page.html" class="product-card__image IEimg">
        
                                            <img src="img/product-photo/4.jpg" alt="">
                                        </a>
                                        <a href="product_page.html" class="product-card__title subtitle _hover">Маска
                                            Для ныряния для профи плавания на море с девушкой</a>
                                        <div class="product-card__prices">
                                            <div class="product-card__price subtitle">1,900 uah. </div>
                                            <div class="product-card__price product-card__price-old subtitle">
                                                1,
                                                900 uah.
                                            </div>
                                        </div>
                                        <a href="" class="product-card__cart-button buy-button _button"> В КОРЗИНУ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php

get_sidebar();
get_footer();
