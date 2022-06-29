<?php


function user_details($details) {    
  
include "../includes/connection-db.php";
$sql = "SELECT * FROM users Where User_id='" . $_SESSION["userId"] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo $row[$details];

};

function product_details($type) { 
  include "../includes/connection-db.php";
  if(isset($_GET['cardid']))
  {

    $sql = "SELECT * FROM products 
            INNER JOIN users
            ON users.User_id= products.user_post
            where product_id='".$_GET['cardid']."' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);    
     echo $row[$type];

  }

    
  
}



function product_categories($type) {   

  include "../includes/connection-db.php";

  $sql = "SELECT *
  FROM categories
  INNER JOIN products 
  ON categories.category_id = products.category;
  ";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);  
      echo $row[$type];
  

} 




function alt_img(){
  include "../includes/connection-db.php";

$check_image = "SELECT image FROM users WHERE User_id ='" . $_SESSION["userId"] . "' ";
$result1 = mysqli_query($conn, $check_image);
$row1 = mysqli_fetch_assoc($result1);

if(empty($row1['image'])){
  echo "../images/img_avatar.png";


}
else
{
  echo $row1['image'];

}

}

?>
