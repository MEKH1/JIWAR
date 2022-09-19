
<?php 


if (isset($_POST["update"]))
{
  include "../includes/connection-db.php";

    $nickname_new = $_POST['nickname_new'];
    $location_new = $_POST['location_new'];
    $new_bio=$_POST['new_bio'];


    
    $sql = "UPDATE users SET Nickname='$nickname_new', location='$location_new', Bio='$new_bio' WHERE User_id='" . $_SESSION["userId"] . "' ";
    $result = mysqli_query($conn, $sql);

    edit_image();
}


if( !empty($_POST["old_password"]) && !empty($_POST["new_password"]) && isset($_POST["update"])   )
{
  Reset_pass();

}



function reset_pass(){
  include "../includes/connection-db.php";
  $old_pass     = md5($_POST['old_password']);
  $new_pass     = md5($_POST['new_password']);
  $userid1=$_SESSION["userId"];
  $sql = "SELECT password FROM users WHERE User_id=$userid1";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if($old_pass === $row ['password'] ) {
    $sql = "UPDATE users SET password='$new_pass ' WHERE User_id='" . $_SESSION["userId"] . "' ";
    $result = mysqli_query($conn, $sql);  

  } 

    else {

      echo'old password not correct';

  }

}


function edit_image()
  {
    include "../includes/connection-db.php";
    $file_name = $_FILES['file1']['name'];
    $file_tmp = $_FILES['file1']['tmp_name'];
    $filepath = "../images/" . $_FILES["file1"]["name"];
  
    $file_size =$_FILES['file1']['size'];
    $file_tmp =$_FILES['file1']['tmp_name'];
    $fileExt = explode('.',$file_name);
    $fileActualExt= strtolower(end($fileExt));
    $extensions= array("jpeg","jpg","png");

    if(move_uploaded_file($file_tmp,"../images/".$file_name)) 
    {
   
    $sql = "UPDATE users SET image='$filepath' WHERE User_id='" . $_SESSION["userId"] . "' ";

    $result = mysqli_query($conn, $sql);

    } 

  }
  
  
    
?> 





