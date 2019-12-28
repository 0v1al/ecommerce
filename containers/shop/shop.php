<?php require '../../components/header.php' ?>

<head>
    <link rel="stylesheet" type="text/css" href="shop.css">
</head>

<div class="jumbo-wraper jumbotron jumbotron-fluid position-relative">
  <div class="container text-center">
    <p class="lead">HOME PRODUCTS</p>
    <h1 class="display-5 font-weight-bolder">PRODUCTS</h1> 
  </div>
</div>

  
<section id="shop">
  <div class="container">
    <div class="container mb-5 d-flex justify-content-center align-items-center">
      <div class="row w-75">
        <div class="col-md-1"></div>
        <div class="col-md-2 product-filter rounded text-center active">
          <a href="#" class="ac all" data-product-type="all">All</a>
        </div>
        <div class="col-md-2 product-filter text-center rounded">
          <a href="#" class="vegetables" data-product-type='vegetables'>Vegetables</a>
        </div>
        <div class="col-md-2 product-filter text-center rounded">
          <a href="#" class="fruits" data-product-type="fruits">Fruits</a>
        </div>
        <div class="col-md-2 product-filter text-center rounded">
          <a href="#" class="juice" data-product-type="juice">Juice</a>
        </div>
        <div class="col-md-2 product-filter text-center rounded">
          <a href="#" class="dried" data-product-type="dried">Dried</a>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>

    <!-- // ?shop products    -->
    <div class="container-fluid products_load"></div>

    <div class="pag container-fluid">
      <nav aria-label="Page navigation example" class="shadow-none">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link p-3" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link p-3 active" href="#">1</a></li>
          <li class="page-item"><a class="page-link p-3 " href="#">2</a></li>
          <li class="page-item"><a class="page-link p-3" href="#">3</a></li>
          <li class="page-item"><a class="page-link p-3" href="#">4</a></li>
          <li class="page-item"><a class="page-link p-3" href="#">5</a></li>
          <li class="page-item">
            <a class="page-link p-3" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<script src="./shop.js"></script> 

<?php require '../../components/footer.php' ?>