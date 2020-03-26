<?php
session_start();
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
if(isset($_POST['placeorder']))
{
    $username=$_SESSION['name'];
    $billing=$_POST['pm'];
    $dilivary=$_POST['shipping'];
    $payment=$_POST['paying'];
    if($billing=="reg")
    {
        $sql="SELECT country,city,street,ZIP,phone FROM usertable WHERE name='$username' ";
        $stmt=$connect->prepare($sql);
        $stmt->execute([]);
        $trueResult= $stmt->fetch(PDO::FETCH_ASSOC);
        $country_name=$trueResult['country'];
        $zip=$trueResult['ZIP'];
        $phone=$trueResult['phone'];
        $address=$trueResult['city'].$trueResult['street'];
        $reg=" insert into checkout ( name ,country,address,zip,phone,dilivary,payment) values (?,?,?,?,?,?,?)";
        $stmt=$connect->prepare($reg);
        $stmt->execute([$username,$country_name,$address,$zip,$phone,$dilivary,$payment]);
        $d="DELETE FROM `carttbl` WHERE username='$username'";
        $st=$connect->prepare($d);
        $st->execute();
        header("location:pay.php?pay=success");
        exit();
    }
    else if($billing="diff")
        {$add1=$_POST['address1'];
        $add2=$_POST['address2'];
        $country=$_POST['country'];
        $zip=$_POST['zip'];
        $phone=$_POST['phone'];
            if($add1.empty("") or $add2.empty("") or $country.empty("") or $zip.empty("") or $phone.empty("")){
             echo "<script>
location.href='checkout.php'
alert('Please Fill The Blank Spaces');

</script> ";

        }
            else {
                $address1=$_POST['address1'];
                $address2=$_POST['address2'];
                $address= $address1. $address2;
                $country=$_POST['country'];
                $zip=$_POST['zip'];
                $phone=$_POST['phone'];
                $reg=" insert into checkout ( name ,country,address,zip,phone,dilivary,payment) values (?,?,?,?,?,?,?)";
                $stmt=$connect->prepare($reg);
                $stmt->execute([$username,$country,$address,$zip,$phone,$dilivary,$payment]);
                $d="DELETE FROM `carttbl` WHERE username='$username'";
                $st=$connect->prepare($d);
                $st->execute();
                header("location:pay.php?pay=success");
                exit();

            }




        }


}

