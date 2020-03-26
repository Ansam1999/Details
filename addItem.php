<?php
session_start();
require "header.php";
?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <form style="background-color:RGBA( 154, 76, 161,0.6) ;padding-left:50px;padding-top:50px;border:1px solid purple ;border-radius=20px;height:400px;width: 430px;margin-top: 50px; margin-left: 100px; margin-bottom: 150px" action="newItem.php"method="post" enctype="multipart/form-data">
            <div> <span style="font-size: 25px;margin-left: 80px"><b>Add new Item</b> </span></div>
            <br>
            <br>
<div style="height:0px;overflow:hidden">

    <input type="file" id="fileInput" name="fileInput" />
</div>
            <span style="margin-left: 20px;font-size: 15px;width: 150px;"><b> Add Image</b></span>
<button type="button" onclick="chooseFile();"name="file">choose file</button>
<br>
            <br>
<script>
    function chooseFile() {
        $("#fileInput").click();
    }
</script>
            <span style="margin-left: 20px;font-size: 15px;width: 150px;" ><b> Price</b></span>
<input type="text" style="width: 60px;height: 28px;border: 1px solid;  border-radius: 6%"name="price">
<br>
            <br>

            <div class="dropdown">
                <span style="margin-left: 20px;font-size: 15px;width: 150px;"><b> Category</b></span>
          <!--      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </button>-->
                <!--
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <p><b> Dress</b></p>
                    <button class="dropdown-item" type="button" name="casual">Casual Dress</button>
                    <button class="dropdown-item" type="button" name="wedding">Wedding Dress</button>
                    <button class="dropdown-item" type="button" name="formal">Formal Dress</button>
                    <p><b> Jeans</b></p>
                    <button class="dropdown-item" type="button" name="jeans">Jeans</button>
                    <p><b> Shoes</b></p>
                    <button class="dropdown-item" type="button"name="shoes">Shoes</button>
                    <p><b> Bags</b></p>
                    <button class="dropdown-item" type="button"name="bags">Bags</button>
                    <p><b> Shirts</b></p>
                    <button class="dropdown-item" type="button" name="shirts">Shirts</button>
                </div>
                -->

                <select name="category" id="category" style="height: 30px">
                    <p><b> Dress</b></p>
                    <option value="Casual">Casual Dress</option>
                    <option value="Wedding">Wedding Dress</option>
                    <option value="Formal">Formal Dress</option>
                    <option value="Hijab">Hijab Dress</option>
                    <option value=""></option>

                    <p><b> Tops</b></p>
                    <option value="Casual Top">Casual Top</option>
                    <option value="Evening Top">Evening Top</option>
                    <option value="Off Shoulder ">Off Shoulder Top</option>
                    <option value=""></option>
                    <p><b> Jeans</b></p>
                    <option value="Jeans">Jeans</option>
                    <option value=""></option>
                    <p><b> Shoes</b></p>

                    <option value="Sport">Sport</option>
                    <option value="Bridal Shoes">Bridal Shoes</option>
                    <option value="High Heels "> High Heels</option>
                    <option value=""></option>
                    <p><b> Bags</b></p>
                   
                    <option value="School Bag">School Bag</option>
                    <option value="Luxury Bag">Luxury Bag</option>
                    <option value="Gym Bag "> Gym Bag</option>
                    <option value=""></option>

                    <option value="Jewelry "> Jewelry</option>

                </select>
            </div>
            <br>
           <br>
            <button class="btn btn-primary" type="submit" style="margin-left:100px;background-color: RGB(120, 32, 128);  ">Add Item</button>
        </form>
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

</body>
</html>

<?php
require "footer.php";
?>

