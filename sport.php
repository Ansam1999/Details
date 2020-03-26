<?php
session_start();
require "header.php";

?>

<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Sport</h4>

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



                $sql = "select * from Items where category='Sport'  ";
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

                         <input type=\"submit\" value=\"ADD TO CART\" style=\"margin-right: 130px;height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)\" class=\"flaticon-bag\" class=\"add-card\" name=\"d1\"/>


                            <!--</form>
                                <form method=\"post\" action=\"wish.php\">
                                    <input type=\"submit\" value=\"Add to Wish List\" name=\"ld1\" style=\"height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)\" class=\"flaticon-bag\" />
                                </form>-->
                            </div>
                        </div>
                        <div class=\"pi-text\">
                            <h6 class=\"shop-item-price\" style='margin-right: 145px'>$price$</h6>
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

