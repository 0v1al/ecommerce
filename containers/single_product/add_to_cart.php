<?php
	require '../../components/connection.php';

	if (isset($_POST["single_product_id"])) 
		$single_product_id = strip_tags($_POST["single_product_id"]);

	$sql = "SELECT * FROM products WHERE product_id='$single_product_id'; ";
	$res = $conn->query($sql);
	$res->setFetchMode(PDO::FETCH_ASSOC);
	
	if ($row = $res->fetch()) {
		$product_cart = $row["product_cart"];
		$product_cart_deleted = $row["product_cart_deleted"];
		if ($product_cart == 1 and $product_cart_deleted == 0) {
			echo json_encode(array("msg"=>"The product was already added to cart!", "added"=>0)); 
		} else {
			$sql = "UPDATE products SET product_cart='1', product_cart_deleted='0' WHERE product_id='$single_product_id'; ";
			$stmt = $conn->prepare($sql);
			$stmt->execute();

			if ($stmt->rowCount() > 0) 
				echo json_encode(array("msg"=>"Record updated successfully!", "added"=>1));
		}
	}

	$conn = null;
 ?>