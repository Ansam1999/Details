<?php
session_start();
require "header.php";
?>

<div class="page-top-info">
    <div class="container">
        <h4>Tops</h4>

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
                <button type="button" class="btn btn-secondary" style="width: 180px;background-color: purple;height: 50px;margin-left: 220px"><a href="casualTops.php"style="color: white">Casual </a></button>
                <button type="button" class="btn btn-secondary"style="width: 180px;background-color: purple;height: 50px"> <a href="eveningTops.php"style="color: white">Evening</a> </button>
                <button type="button" class="btn btn-secondary"style="width: 180px;background-color: purple;height: 50px"><a href="offshoulder.php"style="color: white">Off Shoulder </a></button>

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



            $sql = "select * from Items  where category = 'Casual Top' or category='Evening Top' or category='OffShoulder Top' ";
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

                         <input type=\"submit\" value=\"ADD TO CART\" style=\"height60px;border-radius: 10%;margin-right: 120px;margin-top:80px;background-color: rgba(172, 57, 172,0.7)\" class=\"flaticon-bag\" class=\"add-card\" name=\"d1\"/>


                            <!--</form>
                                <form method=\"post\" action=\"wish.php\">
                                    <input type=\"submit\" value=\"Add to Wish List\" name=\"ld1\" style=\"height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)\" class=\"flaticon-bag\" />
                                </form>-->
                            </div>
                        </div>
                        <div class=\"pi-text\">
                            <h6 class=\"shop-item-price\" style='margin-right:150px '>$price$</h6>
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

       <!--     <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t2.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="29" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t1.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="30" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t3.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="31" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t4.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="32" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t5.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="33" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t6.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="34" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t7.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="35" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t8.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="36" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t9.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="37" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t10.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="38" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t11.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="39" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
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
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t13.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="41" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t14.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="42" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t15.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="43" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t16.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="44" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t17.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="45" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t18.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="46" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t19.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="47" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/t20.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="48" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$15,00</h6>
                        <p>Shirt</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-sm-6" calss ="new arrival">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/n1.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="49" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>

                    </div>
                    <div class="pi-text">
                        <h6>$20,00</h6>
                        <p>Shirt</p>
                        <span class="new">New</span>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/n2.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="50" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$25,00</h6>
                        <p>Shirt</p>
                        <span class="new">New</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/n3.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="51" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$20,00</h6>
                        <p>Shirt</p>
                        <span class="new">New</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/n4.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="52" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$30,00</h6>
                        <p>Shirt</p>
                        <span class="new">New</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/n5.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="53" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$25,00</h6>
                        <p>Shirt</p>
                        <span class="new">New</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/n6.jpg" alt="">
                        <div class="pi-links">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="54" >

                                <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                            </form>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Shirt</p>
                        <span class="new">New</span>
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
