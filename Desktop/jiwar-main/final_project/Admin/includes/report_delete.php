
<?php

include "../includes/connection-db.php";

   $sql = "DELETE FROM report WHERE report_id = '". $_GET['reportid'] ."' ";


   $result = mysqli_query($conn, $sql);

   header('Location: ' . $_SERVER['HTTP_REFERER']);
   exit;

?>
