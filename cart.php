<?php
session_start();

require "header.php";





?>
<script src="store.js" xmlns="http://www.w3.org/1999/html"> </script>
    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>Your cart</h4>

        </div>
    </div>
    <!-- Page info end -->

    <section class='cart-section spad'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8'>
                    <div class='cart-table'>
                        <h3>Your Cart</h3>
                        <div class='cart-table-warp'>

                            <table >
                                <thead>
                                <tr>
                                    <th class='product-th'>Product</th>
                                   <!-- <th class='quy-th'>Quantity</th>-->

                                    <th class='total-th'>Price</th>
                                </tr>
                                </thead>


                                <tbody class='cart-items'>


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
                               // header("location:home.php?$_POST[cart]");
  //<!-- cart section end -->


                                if(isset($_SESSION["name"])) {
                                    echo "<script>console.log('hey')</script>";


                                    $username = $_SESSION["name"];
                                    // $sql="SELECT `id`,`username` FROM `carttbl` WHERE id=?,username =?";
                                    //  $stmt=$connect->prepare($sql);
                                    //$stmt->execute([$id,$username]);
                                    // $reselt =$stmt->rowCount();
                                    //   $trueResult= $stmt->fetch(PDO::FETCH_ASSOC);
                                    //   $idd=$trueResult["id"];
                                    // $name=$trueResult["username"];

                                    if(isset($_POST["id"]) || true){


                                        $id = $_POST["id"];
                                        $chick="select * from carttbl";
                                        $s = $connect->prepare($chick);
                                        $s->execute([]);
                                        $results = $s->fetchAll(PDO::FETCH_ASSOC);




                                        //Do foreach here
                                      /* foreach ($results as $res) {

                                            if ($username == $res['username'] && $id = $res['id']) {
                                                $quant = $res['quantity'];
                                                //Update tablname set value where bla bla bla
                                                $t = "update carttbl set `quantity`=$quant+1 WHERE username='$username'  AND id='$id'";
                                                $s = $connect->prepare($t);
                                                $s->execute([]);

                                            } else {*/

                                               $reg = " insert into `carttbl` (username,id) values (?,?)";
                                                $stmt = $connect->prepare($reg);

                                               $stmt->execute([ $username,$id]);
                                               echo "  <script>      updateCartTotal()</script>";

                                            //  header("location:cart.php?addToCart=success");
                                            // header("location:dress.php?$id=id");



                                    $sql = "select * from carttbl,category where username='$username'  AND (carttbl.id=category.id)";
                                    $stmt = $connect->prepare($sql);

                                    $stmt->execute([$id,$username]);
                                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($result as $res) {
                                        $url = $res["url"];
                                        $title = $res["title"];
                                        $price = $res["price"];
                                        //$qun=$res["quantity"];

                                        echo "<tr class=\"cart-item\" >
                                    <td class=\"product-col\" >
                                    <img src=' $url'  />


                                          <div class='pc-title' >
                                            <h4 >$title</h4 >
                                         <p > $$price </p >
                                        </div >
                                         </td >
                                       <td class='quy-col' >
                                       <!-- <div  >
                                       
                                        <div  name ='quan' class='quantity' >  
                                                                           <div class='pro-qty' >-->
                                       <!-- <input type = 'text' class='quan'  name='quantity' style='disabled'  value ='1' >-->
                                    <!-- 
                                            </div >-->
                                           </div >
                                    </td >

                                         <td class='total-col' ><h4 class='cart-price'> $$price </h4 ></td >
                                        
                                         </tr >
                                         
                                         "
                                        ;}




                                //exit();


                                }}
                               ?>

                                </tbody>
                            </table>
                        </div>



                    </div>
                </div>

/*


   <!-- function updateCartTotal() {


   //     $dsn = 'mysql:host=localhost;dbname=userregistration'; //Data Source Name
     //   $user = 'root';
       // $pass = '';
        //$options = array(
          //  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        //);


        //try {
          //  $connect = new PDO($dsn, $user, $pass, $options);


            // set the PDO error mode to exception
            //$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // } catch (PDOException $e) {
         //   echo "Error: " . $e->getMessage();
        //}
      // $s=$connect->prepare(" select SUM(price) from carttbl,category where username='$username'  AND (carttbl.id=category.id)") ;
      //  $s->execute();




        total=Math.round(total*100)/100;

        document.getElementsByClassName('cart-total-price')[0].innerText='$'+total;

    }
-->



                <div class="col-lg-4 card-right" style="margin-top: 70px">

                    <a href="checkout.php" class="site-btn">Proceed to checkout</a>
                    <a href="" class="site-btn sb-dark"  onClick="javascript:history.go(-1)" >Continue shopping</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cart section end -->

    <!-- Related product section -->
    <section class="related-product-section">
        <div class="container">
            <div class="section-title text-uppercase">
                <h2>Continue Shopping</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <div class="tag-new">New</div>
                            <img src="./img/d13.jpg" alt="" height="350" width="550">
                            <div class="pi-links">
                                <form action="cart.php" method="post">
                                    <input type="hidden" name="id" value="14" >

                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                </form>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p> Dress</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/b6.jpg" alt="" height="350" width="550">
                            <div class="pi-links">
                                <form action="cart.php" method="post">
                                    <input type="hidden" name="id" value="21" >

                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                </form>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Bag </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/s6.jpg" alt="" height="350" width="550">
                            <div class="pi-links">
                                <form action="cart.php" method="post">
                                    <input type="hidden" name="id" value="60" >

                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                </form>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>shose </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/t14.jpg" alt="" height="350" width="550">
                            <div class="pi-links">
                                <form action="cart.php" method="post">
                                    <input type="hidden" name="id" value="42" >

                                    <input type="submit" value="ADD TO CART" style="height60px;border-radius: 10%;background-color: rgba(172, 57, 172,0.7)" class="flaticon-bag" class="add-card" name="d1"/>

                                </form>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>T-shirt </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related product section end -->
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