<?php
	require_once "../../components/connection.php";

	$show_checkout = 0;

	$sql = "SELECT * FROM products";
	$res =$conn->query($sql)->fetchAll();
	foreach($res as $row) {
		$product_cart = $row["product_cart"];
		if ($product_cart == 1) 
			$show_checkout = 1;
	}

	echo json_encode(array("msg"=>$show_checkout));

	$conn = null;
 ?>