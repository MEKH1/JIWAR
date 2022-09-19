<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

include_once "../includes/connection-db.php";
include_once "../screens/reset_pass.php";


if(isset($_POST['submit_email']) && $_POST['email'])
{
  
$email=$_POST['email'];
    $sql = "SELECT email, password
    FROM users WHERE email='$email'";

        
        $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)==1)
  {
    while($row=mysqli_fetch_array($result))
    {
      $email=$row['email'];
      $pass=md5($row['password']);
    }
    $link="<a href='www.samplewebsite.com/reset.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
    
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "jiwar.services@gmail.com";
    // GMAIL password
    $mail->Password = "Jiwar.Family@#";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = 465;
    $mail->From='jiwar.services@gmail.com';
    $mail->FromName='Jiwar';
    $mail->AddAddress($email);
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$pass.'';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }	
}
?>