<?php
session_start();
require "header.php";
?>




<div class="page-top-info">
    <div class="container">
        <h4>Shoes</h4>

    </div>
</div>
<!-- Page info end -->


<!-- Category section -->

<section class="category-section spad">
    <div class="container">
        <div class="row">
            <script>
                getSelectedRow=add(click){
                    db.transaction(add(click){
                        click.executeSql("")

                    })

                }

            </script>

            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary" style="width: 180px;background-color: purple;height: 50px;margin-left: 300px"><a href="sport.php"style="color: white">Sport</a></button>
                <button type="button" class="btn btn-secondary"style="width: 180px;background-color: purple;height: 50px"> <a href="bridalShoes.php"style="color: white">Bridal Shoes</a> </button>
                <button type="button" class="btn btn-secondary"style="width: 180px;background-color: purple;height: 50px"><a href="highHeels.php"style="color: white">High Heels  </a></button>

            </div>


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



            $sql = "select * from Items where category='Sport' or category='Bridal Shoes' or category='High Heels' ";
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
                            <h6 class=\"shop-item-price\"style='margin-right: 145px'>$price$</h6>
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

        <!--    <div class="col-lg-4 col-sm-6">
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
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s2.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="56" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s3.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="57" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s4.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="58" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$20,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s5.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="59" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$25,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s6.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="60" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s7.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="61" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s8.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="62" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
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
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s10.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="64" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$30,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s11.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="65" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$20,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s12.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="66" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s13.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="67" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s14.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="68" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s15.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="69" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s16.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="70" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$25,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s17.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="71" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s18.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="72" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s19.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="73" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s21.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="74" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$30,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/s25.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="75" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Shoes</p>
                    </div>
                </div>
            </div>
-->





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
