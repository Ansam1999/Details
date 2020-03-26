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
    $connect->rollback();
    echo "Error: " . $e->getMessage();
}
if(isset($_POST['potato'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username) || empty($password)){
        header("location: log.html?error=emptyfields&$username&$password");
        exit();
    }
    else{
        $sql="SELECT * FROM usertable WHERE name=? ";
        $stmt=$connect->prepare($sql);
        $stmt->execute([$username]);
        $reselt =$stmt->rowCount(); //This is row count broo
        $trueResult= $stmt->fetch(PDO::FETCH_ASSOC);
        $potato=$trueResult["password"];

        if($reselt >0){
          $pwdcheck=password_verify($password,$trueResult['password']);

          if($pwdcheck==false){
              header("Location: log.php?error=wrongpwd?p1=$password&p2=$pwdcheck&p3=$potato");
              exit();
          }
          else if($pwdcheck==true){
              session_start();
              $_SESSION["name"] = $trueResult['name'];

              header("Location: home.php?login:success");
              exit();

          }
          else{
              header("Location: log.php?error=wrongpwd");
              exit();
          }
        }
        else{
            header("Location: log.php?error=nopuser");
            exit();
        }
        }

}
else{
    header("Location:log.php");
    exit();
}