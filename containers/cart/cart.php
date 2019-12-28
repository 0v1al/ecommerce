<?php require '../../components/header.php' ?>

<head>
    <link rel="stylesheet" type="text/css" href="cart.css">
</head>

<div class="jumbo-wraper jumbotron jumbotron-fluid position-relative">
  <div class="container text-center">
    <p class="lead">HOME CART</p>
    <h1 class="display-5 font-weight-bolder">CART</h1> 
  </div>
</div>
<div class="container wishlist-products">
    <table class="table">
        <thead class="">
            <tr>
                <th scope="col"></th>
                <th scope="col" class="pl-5">Product List</th>
                <th scope="col " class='text-center'>Price</th>
                <th scope="col" class="text-center">Quantity</th>
                <th scope="col" class='text-center'>Total</th>
            </tr>
        </thead>
        <tbody class="table_content">
 
        </tbody>
    </table>
</div>


<div class="checkout container shadow-sm w-100 p-5">
    <h2 class="mb-5 text-left border-bottom w-25 text-nowrap mr-auto text-uppercase">Cart Totals</h2>
    <div class="checkout_item text-muted mb-3 mt-3">
        <p>Subtotal</p>
        <p class="subtotal_price">0$</p>
    </div>
    <div class="checkout_item text-muted mb-3">
        <p>Delivery</p>
        <p class="delivery_price">10$</p>
    </div>
    <div class="checkout_item text-muted mb-3">
        <p>Discount</p>
        <p class="discount_price">15$</p>
    </div>
    <div class="total checkout_item text-muted mb-3 pt-4 border-top">
        <p class="text-uppercase">Total</p>
        <p class="text-dark font-weight-bolder total_price"></p>
    </div>
    <button class="btn checkout_btn w-25 mr-auto text-uppercase font-weight-bolder">Checkout</button>
</div>

<script src="./cart.js"></script>

<?php require '../../components/footer.php' ?>