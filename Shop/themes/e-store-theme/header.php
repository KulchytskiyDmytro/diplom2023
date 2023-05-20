<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="site">

	
<header class="header">
        <div class="header__wrapper">
            <div class="header-color"></div>
            <div class="header-main">
                <div class="header-main__container container">
                    <div class="header-main__body">
                        <div class="header-main__right">
                            <div class="header-main__search">
                                <div class="search search_form">
                                    <form class="search__form" method="post" action="<?php esc_url( home_url( '/' ) );?>" > 
                                        <button type="button" class="search__icon icon-search "></button>
                                        <input class="search__input text" type="text" value="<?php get_search_query();?>" name="s" placeholder="Пошук"
                                            autocomplete="off">    
                                    </form>
                                    <div class="search__result">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="header-main__cart">
                                <div class="cart">
                                    <a href="" class="cart__icon icon-cart _hover"></a>
                                    <div class="cart__body">
                                        <div class="cart__up">
                                            <div class="cart__title subtitle">КОРЗИНА</div>
                                            <ul class="cart__cart-list cart-list">
                                            </ul>
                                        </div>
                                        <div class="cart__down">
                                            <div class="cart__total subtitle">
                                                <span>ИТОГ:</span>
                                                <span id="total">1999 uah.</span>
                                            </div>
                                            <a href="cart.html" class="cart__goto text _button">ПЕРЕЙТИ В КОРЗИНУ</a>
                                            <div class="cart__info smalltext">доставка рассчитывается при оформлении
                                                заказа</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-main__burger">
                                <div>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="header-main__left">
                            <div class="header-main__logo"><a href="index.html" class="">
                                    <div>Sport</div>
                                    <div>
                                        <div class="header-main__logo-dot"></div> Shop.ua
                                    </div>
                                </a></div>
                            <div class="header-main__menu">
                                <div class="header-main__wrapper">
                                    <div class="menu">
                                        <div class="menu__container">

                                            <div class="menu__body">
                                                <ul class="menu__list">
                                                    <li class="menu__item menu__item-katalog">
                                                        <div href=""
                                                            class="menu__link menu__link-katalog   flipping-button subtitle">
                                                            КАТАЛОГ <span class="arrow-right-drop"></span> </div>
                                                        <div class="katalog">
                                                            <div class="katalog__container container">
                                                                <div class="katalog__body">
                                                                    <ul class="katalog__list">
                                                                        <li class="katalog__item goback">
                                                                            <button class="goback__link subtitle">
                                                                                НАЗАД </button>
                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-bumbbelts subtitle"
                                                                                href="">
                                                                                ЗАЛ/ФИТНЕС
                                                                            </a>
                                                                            <button
                                                                                class="arrow-right-drop   flipping-button "></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">

                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>

                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text "
                                                                                                    href="">перчатки</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text "
                                                                                                    href="">утяжелители</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover  text"
                                                                                                    href="">гантели</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover  text"
                                                                                                    href="">лестници
                                                                                                    и
                                                                                                    паршуты</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text "
                                                                                                    href="">скалка</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover  text"
                                                                                                    href="">спортиваня
                                                                                                    лента
                                                                                                    и резинки</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-yoga subtitle"
                                                                                href="">
                                                                                АЭРОБИКА/ЙОГА</a>
                                                                            <button
                                                                                class="arrow-right-drop   flipping-button"></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">
                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">коврик
                                                                                                    для
                                                                                                    йоги</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">кирпич</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">гимнастичиский
                                                                                                    ролик</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">круги</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-lader subtitle"
                                                                                href="">
                                                                                ТРЕНЕЖЕРЫ</a>
                                                                            <button
                                                                                class="arrow-right-drop   flipping-button"></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">
                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">стенка</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">турники</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">скамя</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-football subtitle"
                                                                                href="">
                                                                                ФУТБОЛ</a>
                                                                            <button
                                                                                class="arrow-right-drop   flipping-button"></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">
                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">футбольный
                                                                                                    мяч</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">одежда</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text "
                                                                                                    href="">перчатки</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">наколеники</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">экипировка
                                                                                                    для
                                                                                                    тренеровки</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-basketball subtitle"
                                                                                href="">
                                                                                БАСКЕТБОЛ</a>
                                                                            <button
                                                                                class="arrow-right-drop   flipping-button"></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">
                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">баскетбольный
                                                                                                    мяч</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-volleyball subtitle"
                                                                                href="">
                                                                                ВОЛЕЙБОЛ</a>
                                                                            <button
                                                                                class="arrow-right-drop   flipping-button"></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">
                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text "
                                                                                                    href="">волейбольный
                                                                                                    мяч</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover  text"
                                                                                                    href="">наколеники</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-billiards subtitle"
                                                                                href="">
                                                                                БИЛЬЯРД</a>
                                                                            <button
                                                                                class="arrow-right-drop   flipping-button"></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">
                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">мел
                                                                                                    для кия</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">кий</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">насадка
                                                                                                    для
                                                                                                    кия</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-boxing subtitle"
                                                                                href="">
                                                                                БОКС</a>
                                                                            <button
                                                                                class="arrow-right-drop   flipping-button"></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">

                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text "
                                                                                                    href="">груши</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">защита
                                                                                                    паха</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">перчатки</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">капы</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">лапы</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">другое</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-scuba subtitle"
                                                                                href="">
                                                                                ВОДНЫЙ
                                                                                СПОРТ</a><button
                                                                                class="arrow-right-drop   flipping-button"></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">
                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">очки</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">маски</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">шапки</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">круги
                                                                                                    и
                                                                                                    нарукавники</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-judo subtitle"
                                                                                href="">
                                                                                ДЗЮДО</a><button
                                                                                class="arrow-right-drop   flipping-button"></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">
                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">кимоно</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-bottle subtitle"
                                                                                href="">
                                                                                ДРУГОЕ</a><button
                                                                                class="arrow-right-drop   flipping-button"></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">
                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">еспандеры</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">бутылки</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">напульсники</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-shuttlecock subtitle"
                                                                                href="">
                                                                                БАМБИНТОН</a><button
                                                                                class="arrow-right-drop   flipping-button"></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">
                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">воланчики</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">ракетки</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-pingpong subtitle"
                                                                                href="">
                                                                                ПИНГ_ПОНГ</a><button
                                                                                class="arrow-right-drop   flipping-button"></button>
                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">
                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">ракетки</a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">мячики</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link  _hover  icon-hockey subtitle"
                                                                                href="">
                                                                                ХОКЕЙ</a><button
                                                                                class="arrow-right-drop   flipping-button"></button>

                                                                            <div class="sub-katalog">
                                                                                <div class="sub-katalog__container">
                                                                                    <div class="sub-katalog__body">
                                                                                        <ul class="sub-katalog__list">
                                                                                            <li
                                                                                                class="sub-katalog__item goback">
                                                                                                <button
                                                                                                    class="sub-katalog__link goback__link subtitle">
                                                                                                    <span
                                                                                                        class="goback__arrow-left "></span>
                                                                                                    НАЗАД
                                                                                                </button>
                                                                                            </li>
                                                                                            <li
                                                                                                class="sub-katalog__item">
                                                                                                <a class="sub-katalog__link _hover text"
                                                                                                    href="">клюшки</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link _hover  icon-skate subtitle"
                                                                                href="">
                                                                                СКЕЙТ</a>
                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link _hover  icon-kickscooter subtitle"
                                                                                href="">
                                                                                САМОКАТЫ</a>
                                                                        </li>
                                                                        <li class="katalog__item">
                                                                            <a class="katalog__link _hover  icon-rollerskates subtitle"
                                                                                href="">
                                                                                РОЛИКИ</a>
                                                                        </li>
                                                                        <li class="katalog__item ">
                                                                            <a class="katalog__link _hover  icon-skates subtitle"
                                                                                href="">
                                                                                КОНЬКИ</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="menu__item">
                                                        <a href="delivery.html"
                                                            class="menu__link _hover  subtitle">ДОСТАВКА</a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <a href="map.html" class="menu__link _hover  subtitle">ГДЕ
                                                            МЫ</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="menu__contacts">
                                                <div class="contacts-text subtitle">КОНТАКТЫ</div>
                                                <a href="tel: +380689595990"
                                                    class="contacts-phone text">+380(68)959-59-90</a>
                                                <div class="contacts-text subtitle">АДРЕСС</div>
                                                <div class="contacts-adress text">г. Нежин Гоголевская</div>
                                                <div class="contact-sn">
                                                    <a href="" class="contacts-icon icon-telegram"></a>
                                                    <a href="" class="contacts-icon icon-viber"></a>
                                                    <a href="" class="contacts-icon icon-instagram"></a>
                                                    <a href="" class="contacts-icon icon-facebook"></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	

<div id="content" class="site-content">
