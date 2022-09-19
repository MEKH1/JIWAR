<?php
include_once "../includes/connection-db.php";

if($_GET['key'] && $_GET['reset'])
{
    $sql = "SELECT email, password
    FROM users WHERE email='$email' and password='$pass";
        echo $row[$type];
        $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)==1)
  {
    ?>
    <form method="post" action="../screens/submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
?>