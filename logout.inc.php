<?php
session_start();
if(isset($_SESSION['name'])) {

    session_destroy();
echo "<script>location.href='home.php'</script>";
}

?>

