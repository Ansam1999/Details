

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Details Online</title>
    <meta charset="UTF-8">
    <meta name="description" content=" Details Online">
    <meta name="keywords" content="Details,Online,shoping">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/dlogo12.png" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/slicknav.min.css"/>
    <link rel="stylesheet" href="css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="myFun.js" type="text/javascript"></script>
<script src="store.js" type="text/javascript" async></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="./index.html" class="site-logo">
                        <img src="img/dlogo2.png" alt="" height="50px">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form class="header-search-form" action="search.php" method="post">

                        <input  type="text" name="sch" placeholder="Search on Details ....">
                        <button name="search" onclick="myFun()"><i class="flaticon-search"></i></button>

                    </form>



                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        <div class="up-item">
                            <i class="flaticon-profile"></i>

                            <?php



                            //                            session_start();

                            if(isset($_SESSION["name"])){
                                echo" <span style='font-size: x-large;text-decoration-color: purple'>".
                                    $_SESSION["name"]."
                                     </span>";
                               echo' 
                                    <br>
                                   <a  href="logout.inc.php">
                                  <span class="glyphicon glyphicon-log-out"></span>
                                    </a>
                                   <span style="font-size: large"> Log Out</span>';

                            }
                            else
                                {
                                   echo' <a href="log.php" name="login">Sign In</a>  Or <a href="dcreate.php">Create Account</a>';
                                }
                            ?>

                        </div>
                        <?php
                        if(isset($_SESSION["name"])){
                     echo'  <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                               
                            </div>
                            <a href="cart.php">Shopping Cart</a>
                        </div>';}
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                <li ><a href="http://localhost/Details/home.php">Home</a></li>
                <li><a href="dress.php">Dress</a>
                    <ul class='sub-menu' >

                        <li ><a href = 'casualDress.php' > Casual Dress </a ></li >
                        <li ><a href = 'weddingDress.php' > Wedding Dress </a ></li >
                        <li><a href="formalDress.php">Formal Dress </a> </li>
                        <li><a href="hijabDress.php">Hijab Dress </a> </li>

                    </ul >
                </li>
                <li><a href="shirts.php">Tops</a>
                <ul class='sub-menu' >

                    <li ><a href = 'casualTops.php' > Casual Tops </a ></li >
                    <li ><a href = 'eveningTops.php' > Evening Tops </a ></li >
                    <li><a href="offshoulder.php">Off Shoulder Tops</a> </li>


                </ul ></li>
                <li><a href="bags.php">Bags</a>
                    <ul class='sub-menu' >

                        <li ><a href = 'schoolBag.php' > School Bags </a ></li >
                        <li ><a href = 'luxuryBag.php' > Luxury Bags </a ></li >
                        <li><a href="gymBag.php">Gym Bags</a> </li>


                    </ul >
                </li>

                <li><a href="jeans.php">Jeans</a></li>
                <li><a href="jewelry.php">Jewelry
                        <span class="new">New</span>
                    </a></li>
                <li><a href="shoes.php">Shoes</a>
                    <ul class='sub-menu' >

                        <li ><a href = 'sport.php' > Sport </a ></li >
                        <li ><a href = 'bridalShoes.php' > Bridal Shoes </a ></li >
                        <li><a href="highHeels.php">High Heels</a> </li>


                    </ul >
                </li >
                <?php
                 if(isset($_SESSION["name"])) {


                echo" <li ><a href ='#'>Pages</a >
                      <ul class='sub-menu' >

                       <li ><a href = 'cart.php' > Cart Page </a ></li >
                     <li ><a href = 'checkout.php' > Checkout Page </a ></li >
                     
                      </ul >
                 </li > ";
                 }
                 if(isset($_SESSION["name"])){
                     if($_SESSION["name"]=='Admin'){
                       echo"  <li> <a href='addItem.php'> New Item</a>'</li>";
                     }

                 }
                 ?>
                <?php
               // if(isset($_SESSION["name"])) {
                //    echo "  <li ><a href='#'>Pages</a>
                 //   <ul class='sub-menu'>";


                   // echo "<li><a href='./cart.php'>Cart Page</a></li>";
                    //echo " <li><a href='./checkout.php'>Checkout Page</a></li>";

                    //echo "</ul>";
                    //echo " </li>";

             //   }
                ?>



            </ul>
        </div>
    </nav>
</header>






<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>


