<?php require '../../components/header.php' ?>

<head>
    <link rel="stylesheet" type="text/css" href="wishlist.css">
</head>

<div class="jumbo-wraper jumbotron jumbotron-fluid position-relative">
  <div class="container text-center">
    <p class="lead">HOME WISHLIST</p>
    <h1 class="display-5 font-weight-bolder">WISHLIST</h1> 
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
            <script src="./wishlist.js"></script>
        </tbody>
    </table>
</div>

<?php require '../../components/footer.php' ?>