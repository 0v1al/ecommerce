<?php
    require '../../components/connection.php';

    $product_id = $_POST['product_id'];
    $sql = "UPDATE products SET product_wishlist='0', product_deleted='1' WHERE product_id='$product_id';";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo json_encode(array('msg'=>"Record updated"));
    } else {
        echo json_encode(array('msg'=>"Record wasn t updated"));
    }

    $conn = null;
?>