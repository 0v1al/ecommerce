<?php
	require '../../components/connection.php';

  	$product_quantity = $_POST['product_quantity'];
  	$product_id = $_POST['product_id'];
	$ok = 1;

  	$sql = "SELECT product_single_price FROM products WHERE product_id='$product_id'; ";
  	$stmt = $conn->prepare($sql);
  	$stmt->execute();
  	$fetch_array = $stmt->fetch(PDO::FETCH_ASSOC);
  	$old_product_price = $fetch_array['product_single_price'];
  	$new_product_price = $old_product_price * $product_quantity; 

	if ($product_quantity > 100) {
		$ok = 0;
		echo json_encode(array('msg'=>"The quantity is to much!", 'ok'=>$ok, 'error'=>'The quantity is to much!'));
	} else {

		$sql = "UPDATE products SET product_total_price='$new_product_price', product_quantity='$product_quantity' WHERE product_id='$product_id'; ";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		if ($stmt->rowCount() > 0) {
			echo json_encode(array('msg'=>$new_product_price, 'ok'=>$ok));
		} else {
			$ok = 2;
			echo json_encode(array('msg'=>"Record wasn t updated", 'ok'=>$ok));
		}
	}

	$conn = null;
?>