<?php
	function ajax_start_session() {
		if( !session_id() ) {
			session_start();
		}
		
		die;
	}
	add_action( 'wp_ajax_nopriv_ajax_start_session', 'ajax_start_session' );
	add_action( 'wp_ajax_ajax_start_session', 'ajax_start_session' );
	
	function get_mail_price() {
		extract($_POST);
		
		if(empty($mail)){
			$result = array(
		'error' => true
		);
			echo json_encode($result);
		die;
		}
		$options = get_fields('options');
		$order_mail = $mail ? "E-mail: $mail"."\n\n" : '';
		$order_brand = $brand ? "Бренд: $brand"."\n\n" : '';
	
		$subject = "Заявка на прайс ".$brand;
		
		$content = "
		$order_mail
		$order_brand
		";
		$email_to = $options['cb_email'];
		if($email_to){
			$email_to_arr = explode(',', $email_to);
			foreach($email_to_arr as $et){
				$headers_to = 'From: ladyluxe <'.$et.'>' . "\r\n";
				
				$sshell[] = wp_mail($et, $subject, $content, $headers_to);
			}
		}
		
		//$admin = wp_mail($admin_email, $subject, $content, $headers);
		$options = get_fields('options');
		$result = array(
		'sshell' => $sshell,
		'error' => false
		);
		
		echo json_encode($result);
		
		die;
	}
	add_action( 'wp_ajax_nopriv_get_mail_price', 'get_mail_price' );
	add_action( 'wp_ajax_get_mail_price', 'get_mail_price' );
	
	function get_brand_products() {
		extract($_POST);
		
		$tax_query = array(
		'relation' => 'AND'
		);
		
		$tax_query[] = array(
		'taxonomy' => 'product_cat', // Название таксономии категорий товаров
		'field' => 'term_id',
		'terms' => $category,
		);
		
		$tax_query[] = array(
		'taxonomy' => 'brand', // Название таксономии категорий товаров
		'field' => 'term_id',
		'terms' => $id_brand,
		);
		
		
		
		$args = array(
		'post_type' => 'product',
		'posts_per_page' => 20
		);
		
		$args['tax_query'] = $tax_query;
		
		//ob_start();
		loop_products($args, $anima = false);
		//$contents = ob_get_contents(); 
		
		$data['count'] = $count;
		//$data['contents'] = $contents;
		
		//echo json_encode($data);
		die;
	}
	add_action( 'wp_ajax_nopriv_get_brand_products', 'get_brand_products' );
add_action( 'wp_ajax_get_brand_products', 'get_brand_products' );