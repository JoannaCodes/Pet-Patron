<?php
	session_start();
 
	//check if product is already in the cart
	if(!in_array($_GET['id'], $_SESSION['cart'])){
		array_push($_SESSION['cart'], $_GET['id']);
		$_SESSION['message'] = 'Product added to cart';
		$_SESSION['color'] = 'success';
	}
	else{
		$_SESSION['message'] = 'Product already in cart';
		$_SESSION['color'] = 'warning';
	}

	$type = key($_GET);
	$key = $_GET[$type];
 
	header('location: ../product.php?product-id='.$key);
?>