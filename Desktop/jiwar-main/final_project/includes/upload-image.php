<?php

  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
      $folder = "../images/" . $filename;
    move_uploaded_file($tempname, $folder);

echo "<img class='user_image' src='../images/$filename' alt=''>";
  
        // Get all the submitted data from the form
        // $sql = "INSERT INTO users (filename) VALUES ('$filename')";
  
        // // Execute query
        // mysqli_query($conn, $sql);
          
      //   // Now let's move the uploaded image into the folder: image
      //   if (move_uploaded_file($tempname, $folder))  {
      //       $msg = "Image uploaded successfully";
      //   }else{
      //       $msg = "Failed to upload image";
      // }
  }
  // $result = mysqli_query($conn, "SELECT * FROM users");
?>