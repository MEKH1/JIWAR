<?php
session_start();

if (isset($_POST['submit'])) {
  require 'connection-db.php';
  
  $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
      $folder = "../images/" . $filename;
    move_uploaded_file($tempname, $folder);

  
if (empty($_POST['value']) && empty($_POST['type']) && empty($_POST['offer/request']) && empty($_POST['buy/rent']))
   {header('Location: ../screens/add-product.php?empty');}
  $image = $folder;
  $productname = $_POST['productname'];
  $price = $_POST['price'];
  $details = $_POST['details'];
  $category = $_POST['category'];
  $value = $_POST['value'];
  $type = $_POST['type'];
  $offer_request = $_POST['offer_request'];
  $buy_rent = $_POST['buy_rent'];
  date_default_timezone_set('Asia/Amman');
  $date = date('Y-m-d', time());
  $userposter = $_SESSION['userId'];

    $st = $conn -> prepare('insert into products values(?,?,?,?,?,?,?,?,?,?,?,?)');
    $st->bind_param("isissssssiis",$_POST['id'],$productname,$price,$details,$type,$value,$offer_request,$buy_rent,$date,$category,$userposter,$image);
    $st->execute();
    

    
    header('Location: ../screens/main-page.php'); 

}else { header('Location: ../screens/register.php?alredyexists'); }?>