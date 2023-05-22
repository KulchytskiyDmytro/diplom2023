<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'theme_options', 'Theme Option' )
	->set_icon( 'dashicons-carrot' )
	->add_tab( 'header', array(
		Field::make( 'image', 'est_header_logo', 'logotype' )
			->set_width( 30 ),
		Field::make( 'text', 'crb_last_name', 'Last Name' )
		     ->set_width( 70 ),
	) )
	->add_tab( 'footer', array(
		Field::make( 'text', 'crb_email', 'Notification Email' ),
		Field::make( 'text', 'crb_phone', 'Phone Number' ),
	) );