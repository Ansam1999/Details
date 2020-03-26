
<script>
function myFun() {


    <?php
    session_start();
    if (isset($_POST["search"])) {
        if ($_POST["sch"] == "dress") {
            header("Location:dress.php");
exit();
        }
        elseif ($_POST["sch"]=="Dress"){
            header("Location:dress.php");
            exit();
        }
        elseif ($_POST["sch"]=="Dresses"){
            header("Location:dress.php");
            exit();
        }
        elseif ($_POST["sch"]=="dresses"){
            header("Location:dress.php");
            exit();
        }
        elseif ($_POST["sch"]=="Jeans"){
            header("Location:jeans.php");
            exit();
        }
        elseif ($_POST["sch"]=="jeans"){
            header("Location:jeans.php");
            exit();
        }
        elseif ($_POST["sch"]=="shirt"){
            header("Location:shirts.php");
            exit();
        }
        elseif ($_POST["sch"]=="shirts"){
            header("Location:shirts.php");
            exit();
        }
        elseif ($_POST["sch"]=="Shirt"){
            header("Location:shirts.php");
            exit();
        }
        elseif ($_POST["sch"]=="Shirts"){
            header("Location:shirts.php");
            exit();
        }
        elseif ($_POST["sch"]=="shoes"){
            header("Location:shoes.php");
            exit();
        }
        elseif ($_POST["sch"]=="Shoes"){
            header("Location:shoes.php");
            exit();
        }
        elseif ($_POST["sch"]=="bag"){
            header("Location:bags.php");
            exit();
        }
        elseif ($_POST["sch"]=="bags"){
            header("Location:bags.php");
            exit();
        }
        elseif ($_POST["sch"]=="Bag"){
            header("Location:bags.php");
            exit();
        }
        elseif ($_POST["sch"]=="Bags"){
            header("Location:bags.php");
            exit();
        }
        elseif ($_POST["sch"]=="jewelry"){
            header("Location:jewelry.php");
            exit();
        }
        elseif ($_POST["sch"]=="Jewelry"){
            header("Location:jewelry.php");
            exit();
        }
        elseif ($_POST["sch"]=="accessories"){
            header("Location:jewelry.php");
            exit();
        }
        else{
            header("Location:noresults.php");
            exit();
        }

    }

    ?>
}

