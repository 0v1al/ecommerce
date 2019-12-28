<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/99c8254f42.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../css/navfooter/navfooter.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.1/gsap.min.js"></script>
    <title>Vegefoods</title>
</head>

<body>
    <!-- //?start navbar scrolling -->
    <nav class="navbar navbar-expand-lg navbar-fixed-top w-100 navbar-dark nav-scroll">
        <a class="navbar-brand" href="#">VEGETFODDS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdownScroll"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdownScroll">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../shop/shop.php">Shop</a>
                        <a class="dropdown-item" href="../wishlist/wishlist.php">Whilist</a>
                        <a class="dropdown-item" href="../single_product/single_product.php">Single Product</a>
                        <a class="dropdown-item" href="../cart/cart.php">Cart</a>
                        <a class="dropdown-item" href="../checkout/checkout.php">Checkout</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item shop-icon">
                    <a class="nav-link shop-icon-link" style="color: #fff !important" href="#"><i class="fas fa-shopping-cart"></i>[0]</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- //?end navbar on scrolling -->

    <!-- //?start top-bar/contact information -->
    <ul class="nav top-bar">
        <li class="nav-item">
            <span class="nav-link mr-5" href="#"><i class="fas fa-phone-alt mr-2"></i>+ 1235 2355 98</span>
        </li>
        <li class="nav-item">
            <span class="nav-link mr-5" href="#"><i class="fas fa-paper-plane mr-2"></i>youremail@email.com</span>
        </li>
        <li class="nav-item">
            <span class="nav-link" href="#"> 3-5 Business days delivery & Free Returns </span>
        </li>
    </ul>
    <!-- //?end of top-bar -->

    <!-- //? start navbar/navigation links -->
    <nav class="navbar navbar-expand-lg navbar-fixed-top w-100 navbar-dark">
        <a class="navbar-brand" href="#">VEGETFODDS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../shop/shop.php">Shop</a>
                        <a class="dropdown-item" href="../wishlist/wishlist.php">Whilist</a>
                        <a class="dropdown-item" href="../single_product/single_product.php">Single Product</a>
                        <a class="dropdown-item" href="../cart/cart.php">Cart</a>
                        <a class="dropdown-item" href="../checkout/checkout.php">Checkout</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item shop_cart_icon_header position-relative">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                    <div class="shop_cart_icon_header shop_cart_icon_header_content shadow">
                        <p class="text-uppercase font-weight-bold products_in_cart text-nowrap mb-3">Products in cart</p>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- //?end of navbar -->
    <script>
    $(function() {
        $(window).scroll(function() {
            let scroll = $(window).scrollTop();
            if (scroll > 500) {
                $('.nav-scroll').addClass('displayNav');
            } else {
                $('.nav-scroll').removeClass('displayNav');
            }
        });

        let sliding = false;
        $(".shop_cart_icon_header").mouseenter(function() {
            if (!sliding) {
                $(".shop_cart_icon_header_content").fadeIn();
                sliding = true;
            }
        });
        $(".shop_cart_icon_header").mouseleave(function() {
            if (sliding) {
                $(".shop_cart_icon_header_content").fadeOut();
                sliding = false;
            }
        });
        
        function load_shop_cart_icon_products() {
            $.ajax({
                type: "post",
                dataType: "json",
                url: "../../components/load_shop_cart_icon_products.php"
            }).done(response => {
                let html_resposne = response.msg;
                let cart_empty = response.cart_empty
                if (cart_empty == 0) {
                    $(".shop_cart_icon_header_content").append(html_resposne);
                } else {
                    $(".shop_cart_icon_header_content").append(html_resposne);
                }
            }).fail(xhr => {
                console.log("Error: " + xhr.status + ", " + xhr.statusText);
            });
        }
        load_shop_cart_icon_products();
    });
    </script>