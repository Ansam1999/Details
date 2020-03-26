<?php
session_start();
require "header.php";

?>

<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Dress</h4>

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
                <button type="button" class="btn btn-secondary" style="width: 180px;background-color: purple;height: 50px;margin-left: 220px"><a href="casualDress.php" style="color: white">Casual </a></button>
                <button type="button" class="btn btn-secondary"style="width: 180px;background-color: purple;height: 50px"> <a href="weddingDress.php"style="color: white">Wedding</a> </button>
                <button type="button" class="btn btn-secondary"style="width: 180px;background-color: purple;height: 50px"><a href="formalDress.php"style="color: white">Formal </a></button>
                <button type="button" class="btn btn-secondary"style="width: 180px;background-color: purple;height: 50px"><a href="hijabDress.php"style="color: white">Hijab </a></button>
               <!-- <button type="button" class="btn btn-secondary"style="width: 150px;background-color: purple;height: 50px">new</button> -->
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



                $sql = "select * from Items where category = 'Casual ' or category='Formal' or category='Hijab' or category ='Wedding'  ";
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

                <!--
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">

                                        <div class="pi-pic">

                                            <img src="./img/d1.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links" >
                                             <a href="#" id="1" onclick="addCart(this)" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>

                                            <form method="post" action="cart.php">
                                                <input type="hidden" name="id" value="1" >

                                         <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>


                                           </form>
                                                <form method="post" action="wish.php">
                                                    <input type="submit" value="Add to Wish List" name="ld1" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" />
                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$30,00</h6>
                                            <p class="shop-item-title"> Dress</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic" >
                                            <img src="./img/d2.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="2" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$100,00</h6>
                                            <p class="shop-item-title">Dress</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic" >
                                            <img src="./img/d3.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="3" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$100,00</h6>
                                            <p class="shop-item-title">Dress </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="./img/d4.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="4" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$150,00</h6>
                                            <p class="shop-item-title">Dress</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item" >
                                        <div class="pi-pic">
                                            <img src="./img/d5.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="5" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$35,00</h6>
                                            <p>Dress</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="./img/d17.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="6" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$35,00</h6>
                                            <p>Dress </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="./img/d6.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="7" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$150,00</h6>
                                            <p>Dress</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="./img/d7.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="8" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$65,00</h6>
                                            <p>Dress</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="./img/d8.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                < <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="9" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$60,00</h6>
                                            <p>Dress </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <div class="tag-new">new</div>
                                            <img src="./img/d9.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="10" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$40,00</h6>
                                            <p class="shop-item-title"> Dress</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="./img/d10.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="11" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$30,00</h6>
                                            <p>Dress </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="./img/d11.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="12" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>

                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$50,00</h6>
                                            <p>Dress </p>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="./img/d12.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="13" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$55,00</h6>
                                            <p>Dress </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic" >
                                            <img src="./img/d13.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="14" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$35,00</h6>
                                            <p>Dress </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="./img/d14.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="15" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6>$35,00</h6>
                                            <p>Dress </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="./img/d15.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="16" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$40,00</h6>
                                            <p>Dress </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="./img/d16.jpg" class="shop-item-image" alt="">
                                            <div class="pi-links">
                                                <form action="cart.php" method="post">
                                                    <input type="hidden" name="id" value="17" >

                                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6 class="shop-item-price">$35,00</h6>
                                            <p>Dress </p>
                                        </div>
                                    </div>
                                </div>
                -->
            </div>
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
<script src="store.js"></script>

</body>
</html>

<?php
require "footer.php";
?>

