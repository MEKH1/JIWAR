
<?php

 include "../includes/connection-db.php";
 
    $sql = "DELETE FROM products WHERE product_id = '". $_GET['cardid'] ."' ";

 
    $result = mysqli_query($conn, $sql);
 
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;

?>
