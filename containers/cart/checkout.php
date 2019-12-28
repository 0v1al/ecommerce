<?php
	require_once "../../components/connection.php";

	$products_total_sum = 0;

	$sql = "SELECT * FROM products WHERE product_cart='1' AND product_cart_deleted='0'; ";
	$res = $conn->query($sql);
	$res->setFetchMode(PDO::FETCH_ASSOC);

	while ($row = $res->fetch()) {
		$product_total_price = $row["product_total_price"];
		$products_total_sum += $product_total_price;
	}

	echo json_encode(array("msg"=>$products_total_sum));

	$conn = null;
 ?>