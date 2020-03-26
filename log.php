<?php
session_start();
require "header.php";

?>



<div  style=" height:100%;
     width: 100%;
   background-image: url(img/bg.jpg )  ; background-size: cover;" >

    <form action="login.inc.php"method="post" style="position :absolute;width:450px; height :500px;background-color: rgba(204, 51, 255,0.3); margin-left: 300px; margin-top: 200px;">
        <img src="img/dl.png"style="border-radius: 25%; margin-left: 35% ;margin-top: 15px"/>
<br>
        <br>
        <br>
           <span style=" font-weight:bold;font-size:30px;margin-left: 25px;color: RGB(188, 101, 199)" > Username</span>
        <input type ="text" name ="username" placeholder="Enter Your UserName"style="border-radius: 8%;height: 50px"/>
        <br>
        <br>
        <br>
      <span style ="font-weight:bold;font-size: 30px;margin-left: 25px;color: RGB(190, 84, 204)"> Password</span>
        <input type="password" name="password" placeholder= "Enter Your Password" style="margin-left: 10px;border-radius: 8%;height: 50px"/>
<br>
        <br>
        <br>

        <input type ="submit" name ="potato" value="Log In"  class="btn-login"style="margin-left: 15px;background-color:RGB(188, 101, 199);border-radius: 10%;width: 100px;height: 40px; text-decoration-color: white;margin-left: 165px;font-size: large"/>

            <br>

        <br>


        <a href =""style="margin-left: 25px;position: absolute;">Forget Password?</a>

        <a href ="dcreate.php"style="margin-left: 250px;position: absolute;">Don't have an account?</a>
      </form>

    </div>



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


