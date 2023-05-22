<?php           // secutity unable  
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



register_nav_menus(array(
	'primary' => 'Основное',
	'secodary' => 'Вторичное'
));




function estore_primary_menu() {
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'container_class'=> 'menu__body',
        'menu_class'     => 'menu__list',
        'walker'         => new Custom_Walker_Nav_Menu(), // Use the custom walker class
    ) );
}

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
        function start_lvl(&$output, $depth = 0, $args = array()) {
            if ($depth  === 0) {
                $output .= '<div class="katalog">';
                $output .= '<div class="katalog__container container">';
                $output .= '<div class="katalog__body">';
                $output .= '<ul class="katalog__list">';
                
                if ($args->walker->has_children) {
                    $output .= '<li class="katalog__item goback"><button class="goback__link subtitle">НАЗАД</button></li>';
                }
            } elseif ($depth === 1) {
                $output .= '<div class="sub-katalog">';
                $output .= '<div class="sub-katalog__container">';
                $output .= '<div class="sub-katalog__body">';
                $output .= '<ul class="sub-katalog__list">';
                if ($args->walker->has_children) {
                $output .= '<li class="sub-katalog__item goback"><button class="sub-katalog__link goback__link subtitle"><span class="goback__arrow-left"></span>НАЗАД</button></li>';
                }
            }
        }
    
        function end_lvl(&$output, $depth = 0, $args = array()) {
            if ($depth === 0) {
                
                $output .= "</ul>";
                $output .= "</div>";
                $output .= "</div>";
                $output .= "</div>";
                // $output .= '</ul></div></div></div>';
            } elseif ($depth === 1) {
                $output .= "</ul>";
                $output .= "</div>";
                $output .= "</div>";
                $output .= "</div>";
                // $output .= "</ul>";
            //     $output .= '</ul></div></div></div></div>';
            }
        }
    
        function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
            if ($depth === 0) {
                $has_children = ! empty( $args->walker->has_children ); // Check if the item has children
                $item_classes = $has_children ? 'menu__item menu__item-katalog' : 'menu__item'; // Set the appropriate class based on the presence of children
    
                $output .= '<li class="' . esc_attr( $item_classes ) . '">';
    
                if ($has_children) {
                    $output .= '<div href="" class="menu__link menu__link-katalog flipping-button subtitle">';
                    $output .= $item->title;
                    $output .= '<span class="arrow-right-drop"></span>';
                    $output .= '</div>';
                } else {
                    $output .= '<a href="' . $item->url . '" class="menu__link _hover subtitle">' . $item->title . '</a>';
                }
                
            } elseif ($depth === 1) {
                $has_children = ! empty( $args->walker->has_children ); // Check if the child item has children
                $item_classes = $has_children ? 'katalog__item' : 'katalog__item no-children'; // Set the appropriate class based on the presence of children
    
                $output .= '<li class="' . esc_attr( $item_classes ) . '">';
                $output .= '<a class="katalog__link _hover subtitle" href="' . $item->url . '">' . $item->title . '</a>';
    
                if ($has_children) {
                    $output .= '<button class="arrow-right-drop flipping-button"></button>';
                }
            } elseif ($depth === 2) {
                $output .= '<li class="sub-katalog__item">';
                $output .= '<a class="sub-katalog__link _hover text" href="' . $item->url . '">' . $item->title . '</a>';
            }
            
        }
    
        function end_el(&$output, $item, $depth = 0, $args = array()) {
            if ($depth === 0) {
                $output .= '</li>';
            } elseif ($depth === 1) {
                $output .= '</li>';
            } elseif ($depth === 2) {
                $output .= '</li>';
            }
        }
    }
    