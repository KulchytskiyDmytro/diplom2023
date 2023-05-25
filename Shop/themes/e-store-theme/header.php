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
                                        <div class="search__result-close text"></div>
                                    </form>
                                    <div class="search__result">
                                    </div>
                                </div>
                            </div>
                            <div class="header-main__account">
                                <div class="account">
                                    <a href="#popup-account" class="account__icon icon-storage _hover popup-link"></a>
                                </div>
                            </div>
                            <div class="header-main__cart">
                                <div class="cart">

                                    <!-- cart widget -->
                                     <?php the_widget('WC_Widget_Cart', 'title=');?>

                                        <!-- counter on icon cart  -->
                                    <?php estore_woocommerce_cart_link();?>
                                    
                                    <!-- the same as above  <a href="" class="cart__icon icon-cart _hover"></a> -->
                                    <div class="cart__body">
                                        <div class="cart__up">
                                            <div class="cart__title subtitle">КОРЗИНА</div>
                                            <ul class="cart__cart-list cart-list">
                                            </ul>
                                        </div>
                                        <div class="cart__down">
                                             <div class="cart__total subtitle">
                                                <span>КІЛЬКІСТЬ ТОВАРІВ:</span>
                                                <!-- <span id="total"></span> -->
                                                <?php estore_woocommerce_cart_prodCount();?>
                                            </div>
                                            <div class="cart__total subtitle">
                                                <span>ПІДСУМОК:</span>
                                                <!-- <span id="total"></span> -->
                                                <?php estore_woocommerce_cart_prodSum();?>
                                            </div>
                                            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="cart__goto text _button">ПЕРЕЙТИ ДО КОРЗИНИ</a>
                                            <div class="cart__info smalltext">доставка розраховується при оформленні замовлення</div>
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
                            <div class="header-main__logo"><a href="  <?php echo home_url('/');?> " class="">
                                    <div>Sport</div>
                                    <div>
                                        <div class="header-main__logo-dot"></div> Shop.ua
                                    </div>
                                </a></div>
                            <div class="header-main__menu">
                                <div class="header-main__wrapper">
                                    <div class="menu">
                                        <div class="menu__container">
                                            

                                            <?php estore_primary_menu();?>
                                            
                                            
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
