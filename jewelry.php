
<?php
session_start();
require "header.php";
?>

<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Jewelry</h4>

    </div>
</div>
<!-- Page info end -->


<!-- Category section -->
<section class="category-section spad">
    <div class="container">
        <div class="row">

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



            $sql = "select * from Items where category='Jewelry'  ";
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
                $img = $res["img"];
                $price = $res["price"];
                $category = $res["category"];
                echo "
          <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-item\">

                        <div class=\"pi-pic\">

                            <img src=\"$img\" class=\"shop-item-image\" style='width: 230px;height:420px ' alt=\"\">
                            <div class=\"pi-links\" >
                              <!--  <a href=\"#\" id=\"1\" onclick=\"addCart(this)\" class=\"add-card\"><i class=\"flaticon-bag\"></i><span>ADD TO CART</span></a>
                                <a href=\"#\" class=\"wishlist-btn\"><i class=\"flaticon-heart\"></i></a> -->

                            <form method=\"post\" action=\"cart.php\">
                                <input type=\"hidden\" name=\"id\" value=\"1\" >

                         <input type=\"submit\" value=\"ADD TO CART\" style=\"margin-right: 120px;height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)\" class=\"flaticon-bag\" class=\"add-card\" name=\"d1\"/>


                            <!--</form>
                                <form method=\"post\" action=\"wish.php\">
                                    <input type=\"submit\" value=\"Add to Wish List\" name=\"ld1\" style=\"height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)\" class=\"flaticon-bag\" />
                                </form>-->
                            </div>
                        </div>
                        <div class=\"pi-text\">
                            <h6 class=\"shop-item-price\"style='margin-right: 130px'>$price$</h6>
                            <p class=\"shop-item-title\"> $category</p>
                        </div>
                    </div>
                </div>
         
         ";


            }
            echo "    </ul>
                      ";


            require "footer.php";

            exit();
            ?>
          <!--
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w1.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="76" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w2.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="77" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w3.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="78" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w4.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="79" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w5.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="80" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w6.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="81" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w7.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="82" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w8.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="83" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w9.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="84" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w10.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="85" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
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
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w12.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="87" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w13.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="88" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w14.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="89" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w15.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="90" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w16.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="91" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w17.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="92" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/w18.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="93" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Jewelry</p>
                    </div>
                </div>
            </div>-->






        </div>
    </div>
</section>
<!-- Category section end -->


   <!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>

<?php
require "footer.php";

?>
