<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileInput"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileInput"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileInput"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileInput"]["tmp_name"], $target_file)) {
        header("location:addItem.php");
        echo "The file ". basename( $_FILES["fileInput"]["name"]). " has been uploaded.";


        $dsn = 'mysql:host=localhost;dbname=userregistration'; //Data Source Name
        $user = 'root';
        $pass = '';
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        );


        try {
            $connect = new PDO($dsn, $user, $pass, $options);


            // set the PDO error mode to exception
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        // header("location:home.php?$_POST[cart]");
        //<!-- cart section end -->




$price= $_POST["price"];
//$category=$_POST[""]
$value = $_POST['category'];



                $reg = " insert into `Items` (img,price,category) values (?,?,?)";
                $stmt = $connect->prepare($reg);

                $stmt->execute([$target_file, $price,$value]);
            header("location:addItem.php?Added=success");

            exit();






            }



     else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>