<?php
session_start();
require "header.php";
?>


<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Jeans</h4>

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



            $sql = "select * from Items where category='Jeans' ";
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
     <!--       <h3 calss="r"> Jeans </h3>
            <div class="col-lg-4 col-sm-6">
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
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j2.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="95" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j3.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="96" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j4.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="97" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$30,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j5.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="98" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$40,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j6.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="99" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j7.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="100" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j8.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="101" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j9.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="102" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j10.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="103" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$20,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j11.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="104" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$25,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j12.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="105" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$55,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j19.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="106" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$30,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j15.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="107" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j16.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="108" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j17.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="109" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$40,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/j18.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="110" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Jeans</p>
                    </div>
                </div>
            </div>
        </div>
    </div>-->






    </div>
    </div>
</section>
<!-- Category section end -->


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

