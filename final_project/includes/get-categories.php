<?php
require 'connection-db.php';
$query = "SELECT * FROM `categories`";

// for method 1

$result1 = mysqli_query($conn, $query);


?>