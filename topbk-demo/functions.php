<?php
add_filter( 'template_include', function( $template ) {
	if ( is_front_page() || is_home() ) {
		$custom_template = get_stylesheet_directory() . '/demo-layout.php';
		if ( file_exists( $custom_template ) ) {
			return $custom_template;
		}
	}
	return $template;
});

add_action( 'wp_enqueue_scripts', function () {
	$ver = '1.0.0';
	
	wp_enqueue_style(
		'rubik-font',
		'https://fonts.googleapis.com/css2?family=Rubik:wght@300;500&display=swap',
		[],
		$ver
	);
	
	
	wp_enqueue_script(
		'star-animation',
		get_stylesheet_directory_uri() . '/js/star-animation.js',
		[],
		$ver,
		true
	);
}, 20 );





 add_action( 'rest_api_init', function () {
	 register_rest_route(
		 'test',
		 '/topbk',
		 [
			 'methods'             => WP_REST_Server::READABLE, 
			 'callback'            => 'test_topbk_handle_request',
			 'permission_callback' => '__return_true',
			 'args'                => [
				 'type' => [
					 'required'          => false,
					 'sanitize_callback' => 'sanitize_text_field',
				 ],
				 'id' => [
					 'required'          => false,
					 'sanitize_callback' => 'sanitize_text_field',
				 ],
			 ],
		 ]
	 );
 } );
 
 function test_topbk_handle_request( WP_REST_Request $request ) {
	 $type = $request->get_param( 'type' );
 
	 $data = [
		 [
			 'id'            => 1,
			 'logo'          => 'https://example.com/logo1.png',
			 'rating'        => 4.7,
			 'review_count'  => 123,
			 'bonus_amount'  => 10000,
			 'badge'         => 'exclusive',
			 'internal_link' => '/bk/1',
			 'external_link' => 'https://partner1.com',
		 ],
		 [
			 'id'            => 2,
			 'logo'          => 'https://example.com/logo2.png',
			 'rating'        => 4.2,
			 'review_count'  => 87,
			 'bonus_amount'  => 15000,
			 'badge'         => 'no-deposit',
			 'internal_link' => '/bk/2',
			 'external_link' => 'https://partner2.com',
		 ],
		 [
			 'id'            => 3,
			 'logo'          => 'https://example.com/logo3.png',
			 'rating'        => 3.9,
			 'review_count'  => 45,
			 'bonus_amount'  => 0,
			 'badge'         => 'no-deposit',
			 'internal_link' => '/bk/3',
			 'external_link' => 'https://partner3.com',
		 ],
		 [
			 'id'            => 4,
			 'logo'          => 'https://example.com/logo4.png',
			 'rating'        => 4.9,
			 'review_count'  => 240,
			 'bonus_amount'  => 5000,
			 'badge'         => 'exclusive',
			 'internal_link' => '/bk/4',
			 'external_link' => 'https://partner4.com',
		 ],
	 ];
 
	 switch ( $type ) {
		 case 'byuser':
			 usort( $data, static fn( $a, $b ) => $a['id'] <=> $b['id'] );
			 break;
 
		 case 'byeditors':
			 usort( $data, static fn( $a, $b ) => $b['rating'] <=> $a['rating'] );
			 break;
 
		 case 'bybonus':
			 usort( $data, static fn( $a, $b ) => $b['bonus_amount'] <=> $a['bonus_amount'] );
			 break;
 
		 case 'byreviews':
			 usort( $data, static fn( $a, $b ) => $b['review_count'] <=> $a['review_count'] );
			 break;
 
		 default:
			 return new WP_Error(
				 'invalid_type',
				 'Unsupported request type. Use: byuser, byeditors, bybonus, byreviews',
				 [ 'status' => 400 ]
			 );
	 }
 
	 return rest_ensure_response( $data );
 }
 

