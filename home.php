<?php
session_start();
require "header.php";
?>
<main>
<!-- Hero section -->
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white">
                        <span>New Arrivals</span>
                        <h2>Denim Jackets</h2>
                        <p>"LIFE'S TOO SHORT TO WEAR BORING CLOTHES"</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="img/bg-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white">
                        <span>New Arrivals</span>
                        <h2>Denim Jackets</h2>
                        <p>"LIFE'S TOO SHORT TO WEAR BORING CLOTHES"</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="slide-num-holder" id="snh-1"></div>
    </div>
</section>
<!-- Hero section end -->



<!-- Features section -->
<section class="features-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="img/icons/1.png" alt="#">
                    </div>
                    <h2>Fast Secure Payments</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="img/icons/2.png" alt="#">
                    </div>
                    <h2>Premium Products</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="img/icons/3.png" alt="#">
                    </div>
                    <h2>Free & fast Delivery</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features section end -->


<!-- letest product section -->
<section class="top-letest-product-section">
    <div class="container">
        <div class="section-title">
            <h2>LATEST PRODUCTS</h2>
        </div>
        <div class="product-slider owl-carousel">
            <div class="product-item">
                <div class="pi-pic">
                    <img src="./img/j1.jpg" alt="">
                    <div class="pi-links">
                        <form action="cart.php" method="post">
                            <input type="hidden" name="id" value="94" >

                            <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                        </form>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$35,00</h6>
                    <p>Jeans </p>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <div class="tag-new">New</div>
                    <img src="./img/s9.jpg" alt="">
                    <div class="pi-links">
                        <form action="cart.php" method="post">
                            <input type="hidden" name="id" value="63" >

                            <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                        </form>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$15,00</h6>
                    <p>Shose</p>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <img src="./img/s22.jpg" alt="">
                    <div class="pi-links">
                        <form action="cart.php" method="post">
                            <input type="hidden" name="id" value="55" >

                            <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                        </form>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$15,00</h6>
                    <p>Shose </p>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <img src="./img/w11.jpg" alt="">
                    <div class="pi-links">
                        <form action="cart.php" method="post">
                            <input type="hidden" name="id" value="86" >

                            <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                        </form>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$15,00</h6>
                    <p>Jewelry </p>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <img src="./img/t12.jpg" alt="">
                    <div class="pi-links">
                        <form action="cart.php" method="post">
                            <input type="hidden" name="id" value="40" >

                            <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                        </form>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$15,00</h6>
                    <p>Shirts </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- letest product section end -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>


</main>
<?php
require "footer.php";
?>






