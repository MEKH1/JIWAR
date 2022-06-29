<?php


function user_details($details) {    
include "../includes/connection-db.php";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
echo $row[$details];
}
} else {
  echo "0 results";
}


}

function product_details($type) {    
    include "../includes/connection-db.php";
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
    echo $row[$type];
    }
    } else {
      echo "0 results";
    }
  
    

    
}   





?>