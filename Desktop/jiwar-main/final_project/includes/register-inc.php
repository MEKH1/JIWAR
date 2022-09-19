<?php

function checkUser_pass(){
if (!isset($_POST['submit'])){   }
elseif(empty($_POST['gender'])){ echo "Select A Gender";}
elseif($isValid = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ echo "Enter A Valid Email";}
elseif ($_POST['phoneNumber']!=10){echo "enter a valid phone number";}
else{
    
      
     
    
  require 'connection-db.php';
  
if ($filename=="") {
  $filename='img_avatar.png';
}else {
  $filename = $_FILES["uploadfile"]["name"];
 
}
$tempname = $_FILES["uploadfile"]["tmp_name"];    
$folder = "../images/" . $filename;
move_uploaded_file($tempname, $folder);
  



  
  $image = $folder;
  $userName = $_POST['fullName'];
  $nickName = $_POST['nickName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phoneNumber = $_POST['phoneNumber'];
  $dateOfBirth = $_POST['dateOfBirth'];
  $gender = $_POST['gender'];
  $location = $_POST['location'];
  $bio = $_POST['bio'];
  $rating = 0;
  $id=$_POST['id'];
 
  $errors = array(); 

  
  $st = $conn -> prepare('SELECT * FROM users WHERE email=? LIMIT 1');
  $st->bind_param("s",$email);
  $st->execute();
  $rs= $st->get_result();
  if ($rs->num_rows == 0) {
      $passwordEncrypt = md5($password);
      
    $st = $conn -> prepare('insert into users values(?,?,?,?,?,?,?,?,?,?,?,?)');
    $st->bind_param("isssissssssi",$id,$userName,$nickName,$bio,$phoneNumber,$email,$image,$gender,$location,$dateOfBirth,$passwordEncrypt,$rating);
    $st->execute();
    
  
    
    header('Location: ../screens/login.php'); }
else { echo "input error";}
}
}
error_reporting(0);
?>