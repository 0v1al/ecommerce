<?php
    require '../../components/connection.php';

    $product_type = $_POST['product_type'];
    $html_response = '';
    $sql = "SELECT * FROM products WHERE product_type='$product_type';";

    if ($conn->query($sql)) {
        $i = 0;
        foreach($conn->query($sql) as $row) {
                $image = '../../' . $row['product_image'];
                $name = $row['product_name'];
                $price = $row['product_single_price'];
                $id = $row['product_id'];
                $wishlist_val = $row['product_wishlist'];
                $heart_color_class = ($wishlist_val == 0) ? ' ' : 'red';
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
                                    <a href='#'><i class='fas fa-shopping-cart'></i></a>
                                    <a href='#' class='wishlist'><i class='fas fa-heart heart_icon $heart_color_class'></i></a>
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
