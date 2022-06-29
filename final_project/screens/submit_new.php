<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];

  $sql = "UPDATE users SET  password='$pass' WHERE email='$email'";
  $result = mysqli_query($conn, $sql);

}
?>