<?php
session_start();
require "header.php";
?>

<main>

    <div class="row">
        <div class="col-lg-12 col-sm-12">
    <div style=" background-color:  #800080;width: 100%;height: 1600px;margin: 0;">
        <form action="creataccount.php" method="post" style="border: 1px solid ; margin-bottom:100px;margin-top: 100px;margin-left:200px;height: 960px;width:600px ;background-color: white;position: absolute;border-radius: 15px;padding: 30px" >
       <!--     <img src="img/dl1.png"style="border-radius: 25%; margin-left: 35% ;margin-top: 5px"/>-->
         <div ><span style="font-size: 27px;margin-left: 100px"><b> Create Your Account</b></span></div>
            <br>
            <br>
            <span style="margin-left: 20px;font-size: 20px;width: 150px;"><b>Username</b> </span>
            <input type="text" name="user" placeholder="Username.." style="width: 220px;height: 50px;border: 1px solid;  border-radius: 7%">
            <br>
            <br>
            <br>
            <span style="margin-left: 20px;font-size: 20px ;width: 150px;"> <b>Password</b> </span>
            <input type="password" placeholder="Password.." name="pass" style="width: 220px;height: 50px;border: 1px solid; border-radius: 7%">
            <br>
            <br>
            <br>
            <span style="margin-left: 20px;font-size: 20px;width: 30px;"> <b>Repeat Password</b> </span>
            <input type="password" placeholder=" Repeat Password.." name="r-pass"style="width: 220px;height: 50px;border: 1px solid; border-radius: 7%">
            <br>
            <br>
            <br>
            <span  style="margin-left: 20px;font-size: 20px;width: 30px;"> <b>Gender</b></span>
            <input type="radio" name="gender" style="font-size: 28px;" value="male" size="60px"> <span style="font-size: 20px" >Male</span>
            <input type="radio" name="gender"style="font-size: 28px" value="female" size="60px"><span style="font-size: 20px" >Female</span>
            <br>
            <br>
            <br>
            <span style="margin-left: 20px;font-size: 20px;width: 30px;"> <b>Country </b></span>
            <select  style="width: 220px;height: 50px;border: 1px solid; border-radius: 7%;font-size: 20px" name="country">

                <option name="1" >Algeria</option>
                <option name="2"> Argentina</option>
                <option name="3"> Australia</option>
                <option name="4">  Bahrain </option>
                <option name="5"> Brazil  </option>
                <option name="6">  India </option>
                <option name="7">  Iran </option>
                <option name="8"> Iraq  </option>
                <option name="9">  Italy </option>
                <option name="10"> Japan   </option>
                <option name="11">  Jordan </option>
                <option name="12">  Morocco </option>
                <option name="13">    Pakistan  </option>
                <option name="14">   Palestine   </option>
                <option name="15">   Poland   </option>     <option> Qatar    </option>
                <option name="16">    Russia  </option>
                <option name="17">   Saudi Arabia   </option>




            </select>
            <br>
            <br>
            <br>
            <span style="margin-left: 20px;font-size: 20px;width: 30px;" > <b>City</b></span>
            <input type=" text" placeholder="Your city.." name="city" style="width: 220px;height: 50px;border: 1px solid; border-radius: 7%">
            <br>
            <br>
            <br>
            <span style="margin-left: 20px;font-size: 20px;width: 30px;"> <b>Street's Address</b></span>
            <input type="text " placeholder="Your address.." name="address" style="width:400px;height: 50px;width: 350px; border: 1px solid;border-radius: 7%">

            <br>
            <br>
            <br>
            <span style="margin-left: 20px;font-size: 20px;width: 30px;"> <b>ZIP Code</b></span>
            <input type="text"  placeholder="Your ZIP" name="zip" style="width: 220px;height: 50px;border: 1px solid; border-radius: 7%">
            <br>
            <br>
            <br>
            <span style="margin-left: 20px;font-size: 20px;width: 30px;"> <b>Phone Number </b></span>
            <select style="width: 80px;height: 50px;border: 1px solid; border-radius: 7%;font-size: 20px" name="phone">
                <option> 977  </option>
                <option>   978</option>
                <option> 979  </option>
                <option>  980 </option>
                <option>  981 </option>
                <option>  982 </option>
                <option>  983 </option>
                <option>  984 </option>
                <option> 985  </option>
                <option> 986  </option>


            </select>
            <input type="Phone"   name="phone1" placeholder="98480*****"style="width: 220px;height: 50px;border: 1px solid; border-radius: 7%;font-size: 20px">
            <br>
            <br>
            <br>
            <button class="btn btn-primary" type="submit" style="margin-left:170px;background-color:   #800080;  box-shadow: -50px 20px 10px (0,0,0,0.5)">Create Your Account</button>

        </form>
        <img src="img/log.png" style="margin-left: 850px; margin-top: 130px; width: 700px">
    </div>

        </div>
    </div>
    </div>




    <!--====== Javascripts & Jquery ======-->
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
