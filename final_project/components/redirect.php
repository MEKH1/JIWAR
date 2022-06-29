
<?php 

if(!isset($_SESSION["userId"]))
{

    echo "<meta http-equiv='refresh' content='0;URL=../screens/login.php'>";
    die;


}

?>