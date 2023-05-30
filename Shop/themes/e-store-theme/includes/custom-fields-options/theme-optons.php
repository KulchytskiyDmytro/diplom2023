<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'theme_options', 'Theme Option' )
	->set_icon( 'dashicons-carrot' )
	->add_tab( 'product page', array(

		Field::make( 'text', 'delivery_info', 'text for delivery info' ),
		Field::make( 'text', 'help_call', 'number for call help' ),
		Field::make( 'select', 'logic3', 'use addtitional info?' )
			->add_options(array(
				'yes' => 'yes',
				'no' => 'no',
			)),
		Field::make( 'text', 'add_info', 'additional information' )
			->set_conditional_logic(array(
				'relation' => 'AND',
				array(
					'field' => 'logic3',
					'value' => 'yes',
					'compare' => '=',
				)
			)),		
	) )
	->add_tab( 'footer', array(
		Field::make( 'text', 'crb_email', 'Notification Email' ),
		Field::make( 'text', 'crb_phone', 'Phone Number' ),
		Field::make( 'text', 'crd_adress', 'Adress' ),
	) )
    ->add_tab( 'index', array(
        Field::make('image', 'crb_image_field', 'Index image'),
        Field::make('text', 'crd_image_text', 'Index image text' ),
        Field::make('text', 'crd_image_subtext', 'Index image subtext' ),
    ) );




