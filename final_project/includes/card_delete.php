
<?php

 include "../includes/connection-db.php";
 
    $sql = "DELETE FROM products WHERE product_id = '". $_GET['cardid'] ."' ";

 
    $result = mysqli_query($conn, $sql);
 

    header("Location: ../screens/user-profile.php");
    exit;

?>
