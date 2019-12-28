<?php
    require '../../components/connection.php';

    $html_response = '';
    $sql = "SELECT * FROM products WHERE product_wishlist='1' AND product_deleted='0';";
    if ($conn->query($sql)) {
        foreach($conn->query($sql) as $row) {
            $product_name = $row['product_name'];
            $product_image = "../../" . $row['product_image'];
            $product_quantity = $row['product_quantity'];
            $product_single_price = $row['product_single_price'];
            $product_total_price = $product_single_price * $product_quantity;
            $product_description = $row['product_desc'];
            $product_id = $row['product_id'];
            $html_response .= "
                <tr class='position-relative'>
                    <td class='delete_btn' data-id='$product_id'>X</td>
                    <td class='align-middle'>
                        <div class='d-flex align-items-center text-center ml-4'>
                            <img src=$product_image class='img-fluid mr-5 myimg' style='height:100px;width:100px;'/>
                            <span class='text-dark text-center w-50'>
                                <p class='m-0'>$product_name</p>
                                <p class='m-0 product_description'>$product_description</p>
                            </span> 
                        </div>
                    </td>
                    <td class='align-middle text-center'>$product_single_price</td>
                    <td class='align-middle text-center position-relative' data-id='$product_id'>
                        <input type='text' class='quantity form-control w-50 mx-auto' value=$product_quantity />
                        <span class='error'></span>
                    </td>
                    <td class='align-middle text-center'>$product_total_price</td>
                </tr>
            ";
        }
    }
    echo json_encode(array('html_response'=>$html_response));

    $conn = null;
?>