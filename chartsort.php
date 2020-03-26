<?php
/*

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
    echo "Error: " . $e->getMessage();
}

if(isset($_POST['d1'])) {

    $_url="./img/d1.jpg";
    $_price=60;
    $_pname="dress";
    $reg = " insert into chart ( url,pname,price) values (?,?,?)";
    $stmt = $connect->prepare($reg);
    $stmt->execute([ $_url,$_price,$_pname]);
    header("location:dress.php?addchart=success");
    exit();
}

*/

