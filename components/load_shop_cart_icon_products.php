<?php 
	require_once "../components/connection.php";

	$html_response = '';
	
	$sql = "SELECT * FROM products WHERE product_cart='1' AND product_cart_deleted='0'; ";
	$res = $conn->query($sql);
	$res->setFetchMode(PDO::FETCH_ASSOC);

	if ($res->rowCount() > 0) {
		while ($row = $res->fetch()) {
			$product_name = $row["product_name"];
			$product_single_price = $row["product_single_price"];
			$product_image = "../.." . $row["product_image"];

			$html_response .= "
            <div class='product_cart_icon my-0'>
            	<img src='${product_image}' class='m-0' style='height: 70px; width: 70px;'/>
              <p class='product_title text-nowrap align-self-center my-0 mx-2'>${product_name}</p>
              <p class='product_price text-nowrap align-self-center my-0 mr-3'>${product_single_price}$</p>
            </div>
			"; 
		}
		echo json_encode(array("msg"=>$html_response, "cart_empty"=>0));
	} else {
		$html_response = "<p class='cart_empty text-dark text-center font-weight-bold text-nowrap text-uppercase mb-0'>the cart is empty</p>";
		echo json_encode(array("msg"=>$html_response, "cart_empty"=>1));
	}
	
	$conn = null;
?>