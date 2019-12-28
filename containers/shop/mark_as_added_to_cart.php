<?php
    require '../../components/connection.php';
    
    $product_id = $_POST['product_id'];
   
    $sql_sel = "SELECT * FROM products WHERE product_id='$product_id';";
    $res = $conn->prepare($sql_sel);
    $res->execute();
    $fetch_arr = $res->fetch(PDO::FETCH_ASSOC);
    $deleted_cart_val = $cart_val = null;
    
    if ($fetch_arr['product_cart'] == 0 && $fetch_arr['product_cart_deleted'] == 1) {
        $cart_val = 1;
        $deleted_cart_val = 0;
    } 
    if ($fetch_arr['product_cart'] == 1 && $fetch_arr['product_cart_deleted'] == 0) {
        $cart_val = 0;
        $deleted_cart_val = 1;
    }

    // $deleted_val = ($wishlist_val == 1) ? 0 : 1;

    $sql = "UPDATE products SET product_cart='$cart_val', product_cart_deleted='$deleted_cart_val' WHERE product_id='$product_id';";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        echo json_encode(array('msg'=>$cart_val));
    } else {
        echo json_encode(array('msg'=>"Record wasn t updated"));
    }
    
    $conn = null;
?>