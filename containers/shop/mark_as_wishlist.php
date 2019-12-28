<?php
    require '../../components/connection.php';
    
    $product_id = $_POST['product_id'];
   
    $sql_sel = "SELECT * FROM products WHERE product_id='$product_id';";
    $res = $conn->prepare($sql_sel);
    $res->execute();
    $fetch_arr = $res->fetch(PDO::FETCH_ASSOC);
    $deleted_val = $wishlist_val = null;
    
    if ($fetch_arr['product_wishlist'] == 0 && $fetch_arr['product_deleted'] == 1) {
        $wishlist_val = 1;
        $deleted_val = 0;
    } 
    if ($fetch_arr['product_wishlist'] == 1 && $fetch_arr['product_deleted'] == 0) {
        $wishlist_val = 0;
        $deleted_val = 1;
    }

    // $deleted_val = ($wishlist_val == 1) ? 0 : 1;

    $sql = "UPDATE products SET product_wishlist='$wishlist_val', product_deleted='$deleted_val' WHERE product_id='$product_id';";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        echo json_encode(array('msg'=>$wishlist_val));
    } else {
        echo json_encode(array('msg'=>"Record wasn t updated"));
    }
    
    $conn = null;
?>