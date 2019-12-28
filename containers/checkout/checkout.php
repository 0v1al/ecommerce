<?php require '../../components/header.php' ?>

<head>
    <link rel="stylesheet" type="text/css" href="checkout.css">
</head>

<div class="jumbo-wraper jumbotron jumbotron-fluid position-relative">
  <div class="container text-center">
    <p class="lead">HOME CHECKOUT</p>
    <h1 class="display-5 font-weight-bolder">CHECKOUT</h1> 
  </div>
</div>

<div class="container place_order">
    <div class="row">
        <div class="col-md-7">
            <h3 class="mb-5">Billing Details</h3>
            <form class="checkout_form">
                <div class="input_group d-flex justify-content-between align-items-center">
                    <div class="form-group w-50 mr-4">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group w-50">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label>State/Country</label>
                    <div class="select_wrapper">
                        <select class="form-control">
                            <option>Roumania</option>
                            <option>Germany</option>
                            <option>France</option>
                            <option>China</option>
                        </select>
                    </div>
                </div> 
                <div class="input_group d-flex justify-content-between w-100 align-items-center">
                    <div class="form-group w-50 mr-4">
                        <label>Street Address</label>
                        <input type="text" class="form-control" placeholder="House number and street name">
                    </div>
                    <div class="form-group w-50 align-self-end">
                        <input type="text" class="form-control" placeholder="Apartament">
                    </div>
                </div>
                <div class="input_group d-flex justify-content-between w-100">
                    <div class="form-group w-50 mr-4">
                        <label>Town/City</label>
                        <input type="text" class="form-control" placeholder="City">
                    </div>
                    <div class="form-group w-50">
                        <label>Postalcode</label>
                        <input type="text" class="form-control" placeholder="Postalcode">
                    </div>
                </div>
                <div class="input_group d-flex justify-content-between w-100">
                    <div class="form-group w-50 mr-4">
                        <label>Phone</label>
                        <input type="texts" class="form-control" placeholder="Phone">
                    </div>
                    <div class="form-group w-50">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Email address">
                    </div>
                </div>
                <div class="form-check my-4 text-muted">
                    <input class="form-check-input" type="radio" value="" id="defaultCheck1">
                    <label class="form-check-label ml-2 mr-5 text-dark font-weight-bolder check_text" for="defaultCheck1">
                         Direct Bank Tranfer
                    </label>
                    <input class="form-check-input" type="radio" value="" id="defaultCheck1">
                    <label class="form-check-label ml-2 text-dark font-weight-bolder check_text" for="defaultCheck1">
                         Direct Bank Tranfer
                    </label>
                </div>
            </form>
        </div>
        <div class="col-md-5">
            <div class="checkout container shadow-sm w-100 p-4">
                <h4 class="mb-4 text-left border-bottom w-50 pb-3 text-nowrap mr-auto text-uppercase">Cart Totals</h4>
                <div class="checkout_item text-muted mb-1 mt-3">
                    <p>Subtotal</p>
                    <p class="subtotal_price">0$</p>
                </div>
                <div class="checkout_item text-muted mb-1">
                    <p>Delivery</p>
                    <p class="delivery_price">10$</p>
                </div>
                <div class="checkout_item text-muted mb-1">
                    <p>Discount</p>
                    <p class="discount_price">15$</p>
                </div>
                <div class="total checkout_item text-muted mb-1 pt-4 border-top">
                    <p class="text-uppercase">Total</p>
                    <p class="text-dark font-weight-bolder total_price">0$</p>
                </div>
            </div>
            <div class="checkout container shadow-sm w-100 p-4 place_order">
                <h4 class="mb-4 text-left border-bottom w-50 pb-3 text-nowrap mr-auto text-uppercase">Payment Method</h4>
                <div class="form-check mb-4 text-muted">
                    <input class="form-check-input" type="radio" value="" id="defaultCheck1">
                    <label class="form-check-label ml-2" for="defaultCheck1">
                         Direct Bank Tranfer
                    </label>
                </div>
                <div class="form-check mb-4 text-muted">
                    <input class="form-check-input" type="radio" value="" id="defaultCheck1">
                    <label class="form-check-label ml-2" for="defaultCheck1">
                         Check Payment
                    </label>
                </div>
                <div class="form-check mb-4 text-muted">
                    <input class="form-check-input" type="radio" value="" id="defaultCheck1">
                    <label class="form-check-label ml-2" for="defaultCheck1">
                        Paypal
                    </label>
                </div>
                <div class="form-check mb-4 text-muted">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label ml-2" for="defaultCheck1">
                         I have read and accept the terms and conditions
                    </label>
                </div>
                <button class="btn btn_order mt-3 py-2">Place an Order</button>
            </div>
        </div>
    </div>
</div>

<script src="./checkout_order.js"></script>

<?php require '../../components/footer.php' ?>