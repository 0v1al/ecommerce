<?php
	require_once "../../components/connection.php";

	$sql = "SELECT * FROM products WHERE product_cart='1' AND product_cart_deleted='0'; ";
	$res = $conn->query($sql);
	$res->setFetchMode(PDO::FETCH_ASSOC);
	
	if ($res->rowCount() > 0) {
		$product_total_sum = 0;
		while ($row = $res->fetch()) {
			$product_total_price = $row["product_total_price"];
			$product_total_sum += $product_total_price;
		}
		echo json_encode(array("msg"=>$product_total_sum));
	} else {
		echo json_encode(array("msg"=>"No products found!"));
	}


	$conn = null;
 ?>