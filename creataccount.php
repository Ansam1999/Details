<?php
session_start();
//
//$con=mysqli_connect('localhost',"","");
//mysqli_select_db($con,'http://localhost/phpmyadmin/db_structure.php?server=1&db=userregistration');
//mysqli_select_db("http://localhost/phpmyadmin/db_structure.php?server=1&db=userregistration");
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
    $connect->rollback();
    echo "Error: " . $e->getMessage();}
//}
//if(isset($_POST['sign'])){
$name=$_POST['user'];
$password=$_POST["pass"];
$rpassword=$_POST['r-pass'];
$gender=$_POST['gender'];
$country_name=$_POST['country'];
$city=$_POST['city'];
$street=$_POST['address'];
$zip=$_POST['zip'];
$phone=$_POST['phone'];
$phone1=$_POST['phone1'];
////
////$s="select* from http://localhost/phpmyadmin/sql.php?server=1&db=userregistration&table=usertable&pos=0 where username='$name'  ";
////
////$result=mysqli_query($con,$s);
////
////$num=mysqli_num_rows($result);
if(empty($name) || empty($password) || empty($rpassword)|| empty($country_name)|| empty($city) || empty($street)|| empty($zip)|| empty($phone)|| empty($phone1))
{
    echo "<script> alert('Please Fill All The Blank Spaces')
window.location.href='dcreate.php'</script>";

    exit();
}
elseif (!preg_match("/^[a-zA-Z0-9]*$/",$name))
{
    header("location:dcreate.php?error:invalidusername&zip=".$zip);
    exit();

}
elseif ($password !== $rpassword)
{
    header("location:dcreate.php?error:passwordcheck&user=".$name);
    exit();

}
else {
    $sql = "SELECT name FROM usertable WHERE name =?";
    $stmt = $connect->prepare($sql);
    $stmt->execute([$name]);
    $reselt = $stmt->rowCount();
    if ($reselt > 0) {
        header("location:dcreate.php?error:usertaken&zip=" . $zip);
        exit();

    } else {

        $reg = " insert into usertable ( name ,password,gender,country,city,street,ZIP,phone) values (?,?,?,?,?,?,?,?)";
        $stmt = $connect->prepare($reg);
        $hashpass = password_hash($password, PASSWORD_DEFAULT);


        $stmt->execute([$name, $hashpass, $gender, $country_name, $city, $street, $zip, $phone . $phone1]);
        header("location:home.php?login=success");
        exit();
    }
}
//
//
//
//
//
//}


//echo "$name ... $pass";

///*




//if($num==1){
//    echo "username already taken";
//}else{



//    mysqli_query($con,$reg);
//    echo"registration successful ";
//}


//
//$var1=$_POST['username'];
//$var2=$_POST['password'];
//
//
//
//$sql="INSERT INTO `usertable` (`name`, `password`) VALUES (?,?)";
//$stmt=$connect->prepare($sql);
//$connect->beginTransaction();
//$stmt->execute([$var1,$var2]);
//$connect->commit();





//

