<?php
    require '../../components/connection.php';

    if (isset($_GET['product_id'])) {
        $product_id = $_GET['product_id'];
    } else {
        $product_id = 1;
    }
    
    $sql = "SELECT * FROM products WHERE product_id='$product_id'; ";
    $res = $conn->query($sql);
    $res->setFetchMode(PDO::FETCH_ASSOC);

    if ($row = $res->fetch()) {
        $product_name = $row['product_name'];
        $product_id = $row['product_id'];
        $product_single_price = $row['product_single_price'];
        $product_desc = $row['product_desc']; 
        $product_image = $row['product_image'];
        $product_quantity = $row['product_quantity'];
        $product_available = $row['product_available'];

        echo "
            <div id='single_product' class='container' data-id='$product_id'>
                <div class='row'>
                    <div class='col-md-6'>
                        <img src='../../${product_image}' class='image img-fluid' />
                    </div>
                    <div class='col-md-6'>
                        <div class='product_info'>
                            <h2 class='title'>${product_name}</h2>
                            <p class='mt-3 text-muted'><span class='font-weight-bold text-dark'>500</span> Sold</p>
                            <h2 class='price mt-5'>${product_single_price}$</h2>
                            <p class='desc mt-4'>${product_desc}</p>
                            <div class='d-flex align-items-center'>
                                <button class='btn btn-minus'>-</button>
                                <input type='text' class='form-control text-center w-25 quantity_control input_value' value='$product_quantity'/>
                                <button class='btn btn-plus'>+</button>
                            </div>
                            <div class='d-flex align-items-center'> 
                                <p class='mt-3 text-dark font-weight-bold'>${product_available} <span class='text-muted font-weight-normal'>available</span>
                                </p>
                                <span class='error text-danger ml-3'>
                                    Unavailable Quantity
                                </span>
                            </div>
                            <div class='d-flex position-relative pb-5'>
                                <button class='btn add_to_cart mt-4'>Add to Cart</button>
                                <span class='info'>The product was added to cart!</span>
                                <span class='add_cart_error text-danger'>The product is already added to cart!
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
    
    $conn = null;
?>