<?php 
	require "../../components/connection.php";

	$product_id = $product_quantity = null;
	$product_single_price = $product_total_price = null;
	$available = 0;

	if (isset($_POST["product_id"]) && isset($_POST["product_quantity"])) {
		$product_id = strip_tags($_POST["product_id"]);
		$product_id = stripslashes($product_id);
		$product_quantity = strip_tags($_POST["product_quantity"]);
		$product_quantity = stripslashes($product_quantity);
	}

	$sql = "SELECT * FROM products WHERE product_id='$product_id'; ";
	$res = $conn->query($sql);
	$res->setFetchMode(PDO::FETCH_ASSOC);

	if ($row = $res->fetch()) {
		$product_available = $row["product_available"];
		$product_single_price = $row["product_single_price"];
		$product_total_price = $product_single_price * $product_quantity;
	} else {
			echo json_encode(array("msg"=>"The item was not found!"));
	}

	if ($product_available < $product_quantity) {
		$available = 1;
		echo json_encode(array("msg"=>"The record couldn t be updated!", "available"=>$available));
		exit;
	}

	$sql = "UPDATE products SET product_total_price='$product_total_price', product_quantity='$product_quantity' WHERE product_id='$product_id'; ";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	if ($stmt->rowCount() > 0) {
		echo json_encode(array("msg"=>"The record was successfully updated!", "available"=>$available));
	} else {
		echo json_encode(array("msg"=>"The record couldn t be updated!", "available"=>$available));
	}

	$conn = null;
?>