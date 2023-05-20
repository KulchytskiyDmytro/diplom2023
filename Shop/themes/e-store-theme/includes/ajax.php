<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action('wp_ajax_search_action', 'esp_search_ajax_action_callback');  //hook
add_action('wp_ajax_nopriv_search_action', 'esp_search_ajax_action_callback');
function esp_search_ajax_action_callback(){
	
	if (!wp_verify_nonce($_POST['nonce'], 'search-nonce')){ //check spam
		wp_die('error search');
	}
	
	$arg = array(  // 
		'post_type' => array('post', 'product'), // where to look for by param (productn)
		'post_status' => 'publish', // look for only published prod
		's' => $_POST['s'] // get a value of seach
	);
	$query_ajax = new WP_Query($arg); // add args

	$json_data['out'] = ob_start(PHP_OUTPUT_HANDLER_CLEANABLE); // buffer opening 
	if ( $query_ajax->have_posts()) {
		while ($query_ajax->have_posts()) {
			$query_ajax->the_post();
			?>
			<div class="title-searche"><?php echo get_the_title();?></div>
<?php 
		       }
	}
	$json_data['out'] .= ob_get_clean(); // close buffer
	wp_send_json($json_data);
	wp_die();
}