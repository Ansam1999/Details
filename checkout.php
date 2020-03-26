<?php
session_start();
require "header.php";
?>
    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>Your cart</h4>
        </div>
    </div>
    <!-- Page info end -->


    <!-- checkout section  -->
    <section class="checkout-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1">
                    <form method="post" action="order.php" class="checkout-form">
                        <div class="cf-title">Billing Address</div>
                        <div class="row">
                            <div class="col-md-7">
                                <p>*Billing Information</p>
                            </div>
                            <div class="col-md-5">
                                <div class="cf-radio-btns address-rb">
                                    <div class="cfr-item">
                                        <input type="radio" name="pm" value="reg" id="one">
                                        <label for="one">Use my regular address</label>
                                    </div>
                                    <div class="cfr-item">
                                        <input type="radio" name="pm" value="diff" id="two">
                                        <label for="two">Use a different address</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row address-inputs">
                            <div class="col-md-12">
                                <input type="text" name="address1" placeholder="Address">
                                <input type="text" name="address2" placeholder="Address line 2">
                                <input type="text" name="country" placeholder="Country">
                            </div>
                            <div class="col-md-6">
                                <input type="text"name="zip" placeholder="Zip code">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" placeholder="Phone no.">
                            </div>
                        </div>
                        <div class="cf-title">Delievery Info</div>
                        <div class="row shipping-btns">
                            <div class="col-6">
                                <h4>Standard</h4>
                            </div>
                            <div class="col-6">
                                <div class="cf-radio-btns">
                                    <div class="cfr-item">
                                        <input type="radio" name="shipping" value="free" id="ship-1">
                                        <label for="ship-1">Free</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h4>Next day delievery  </h4>
                            </div>
                            <div class="col-6">
                                <div class="cf-radio-btns">
                                    <div class="cfr-item">
                                        <input type="radio" value="pay" name="shipping" id="ship-2">
                                        <label for="ship-2">$3.45</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cf-title">Payment</div>
                        <ul class="payment-list">
                            <li> <input type="radio" name="paying" value="paypal" id="pay1">
                                <label for="pay1">Paypal</label><a href="#"><img src="img/paypal.png" alt=""></a></li>
                            <li><input type="radio" name="paying" value="credit card" id="pay2">
                                <label for="pay2">Credit / Debit card</label><a href="#"><img src="img/mastercart.png" alt=""></a></li>
                            <li><input type="radio" name="paying" value="pay when get the backage" id="pay2">
                                <label for="pay2">Pay when you get the package</label></li>
                        </ul>
                        <input type="submit" value="Place Order" class="site-btn submit-order-btn" name="placeorder" >

                    </form>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="checkout-cart">
                        <h3>Your Cart</h3>
                        <ul class="product-list">


                                <?php
                                $dsn='mysql:host=localhost;dbname=userregistration'; //Data Source Name
                                $user='root';
                                $pass='';
                                $options=array(
                                    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'
                                );


                                try{
                                    $connect=new PDO($dsn,$user,$pass,$options);



                                    // set the PDO error mode to exception
                                    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                                } catch(PDOException $e) {
                                    echo "Error: " . $e->getMessage();
                                }
                                if(isset($_SESSION['name'])) {

                                    $username = $_SESSION['name'];


                                    $sql = "select * from carttbl,category where username='$username'  AND (carttbl.id=category.id)";
                                    $stmt = $connect->prepare($sql);
                                    //                                 $result=array();
                                    //                               if(  $stmt->execute()){
                                    //                                   while( $res =$stmt->fetchAll(PDO::FETCH_ASSOC)){
                                    //                                       $result[]=$res;
                                    //                                   }
                                    //                               }
                                    $stmt->execute([]);
                                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($result as $res) {
                                        $url = $res["url"];
                                        $title = $res["title"];
                                        $price = $res["price"];
                                        echo " 
                                <li>
                                <div class='pl-thumb'><img src='$url' ></div>
                                <h6>$title</h6>
                                <p>$$price</p>
                                </li>
                                ";
                                    }
                                }
                                echo "    </ul>
                      ";
exit();
                                ?>
                            <script>



                                function updateCartTotal() {
                                    <?php

                                    $dsn = 'mysql:host=localhost;dbname=userregistration'; //Data Source Name
                                    $user = 'root';
                                    $pass = '';
                                    $options = array(
                                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                                    );


                                    try {
                                        $connect = new PDO($dsn, $user, $pass, $options);


                                        // set the PDO error mode to exception
                                        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    } catch (PDOException $e) {
                                        echo "Error: " . $e->getMessage();
                                    }
                                    $s=$connect->prepare(" select SUM(price) from carttbl,category where username='$username'  AND (carttbl.id=category.id)") ;
                                    $s->execute();
                                   echo" <script>document.getElementsByClassName('cart-total-price')[0].innerText='$'+$s</script>";
                                    ?>



                                }



                                }
                            </script>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- checkout section end -->



<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>
<?php
require "footer.php";
?>

