<?php
    require '../../components/connection.php';

    $html_response = '';
    $sql = "SELECT * FROM products;";

    if ($conn->query($sql)) {
        $i = 0;
        foreach($conn->query($sql) as $row) {
                $image = '../../' . $row['product_image'];
                $name = $row['product_name'];
                $price = $row['product_single_price'];
                $id = $row['product_id'];   
                $wishlist_val = $row['product_wishlist'];
                $wishlist_deleted = $row['product_deleted'];
                $product_cart = $row["product_cart"];
                $product_cart_deleted = $row["product_cart_deleted"];
                $heart_color_class = $shop_color_cart = '';
                // $heart_color_class = ($wishlist_val == 0) ? ' ' : 'red';
                
                if ($product_cart == 0 &&  $product_cart_deleted == 1) {
                    $shop_color_class = 'white';
                } 
                if ($product_cart == 1 && $product_cart_deleted == 0) {
                    $shop_color_class = 'red';
                }

                if ($wishlist_val == 0 &&  $wishlist_deleted == 1) {
                    $heart_color_class = 'white';
                } 
                if ($wishlist_val == 1 && $wishlist_deleted == 0) {
                    $heart_color_class = 'red';
                }
                $i++;
                if (($i - 1) % 4 === 0) {
                    $html_response .= "<div class='row mb-4'>";
                }
                $html_response .= "
                    <div class='col-md-3'>
                        <div class='product' data-id='$id'>
                            <img src='$image' alt=''>
                            <div class='product-desc text-center'>
                                <h7>$name</h7>
                                <div class='text-center'>
                                    <p><del>$120.00</del></p>
                                    <p class='price ml-2'>$80.00</p>
                                </div>
                            </div>
                            <div class='product-icons'>
                                <a href='../single_product/single_product.php?product_id=$id'><i class='fas fa-bars'></i></a>
                                <a href='#' class='shop_cart'><i class='fas fa-shopping-cart shop_cart_icon ${shop_color_class}'></i></a>
                                <a href='#' class='wishlist_product'><i class='fas fa-heart heart_icon $heart_color_class'></i></a>
                            </div>
                        </div>
                    </div>
                ";
                if ($i % 4 === 0) {
                    $html_response .= "</div>";
                }
        }
        echo json_encode(array('html_response'=>$html_response));
    } else {
        echo json_encode(array('html_response'=>"Eroare"));
        echo "Error at adding an record: " . $sql . "<br>" . $conn->error;
    }

    $conn = null;
?>
