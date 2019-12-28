<!-- //?start footer -->
<footer class=" container-fluid page-footer font-small indigo py-5">
    <a href="#" class="up"><i class="fas fa-chevron-up bounce-bottom"></i></a>
    <div class="container-fluid text-center text-md-left mt-5">
        <div class="row">
            <div class="col-md-3 mx-auto">
                <h5 class="text-uppercase mb-3">Vegefoods</h5>
                <span>Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia.</span>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto">
                <h5 class="text-uppercase mb-3">Menu</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Journal</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto help">
                <h5 class="text-uppercase mb-3">Help</h5>
                <div class="row">
                    <div class="col-md-8">
                        <ul class="list-unstyled">
                            <li><a href="#">Shipping Information</a></li>
                            <li><a href="#">Returns & Exchange</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-unstyled">
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto">
                <h5 class="text-uppercase mb-3">Have a Questions?</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt mr-2"></i><span href="#">203 Fake St. Mountain View, San
                            Francisco,
                            California, USA</span></li>
                    <li><i class="fas fa-phone-alt mr-2"></i><span href="#">+2 392 3929 210</span></li>
                    <li><i class="fas fa-envelope mr-2"></i><span href="#">info@yourdomain.com</span></li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none">
        </div>
        <div class="social">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="footer-copyright text-center py-3 mt-3">
            <span href="#">Copyright ©2019 All rights reserved | This template is made with by 0v1al</span>
        </div>
    </div>
</footer>
<!-- //?end footer -->
<script>

function footerAlign() {
    $('footer').css('height', 'auto');
    let footerHeight = $('footer').outerHeight();
    $('body').css('padding-bottom', footerHeight);
    $('footer').css('height', footerHeight);
}

$(function() {
    footerAlign();
});

$(window).resize(function() {
    footerAlign();
});

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>

</html>