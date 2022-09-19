<?php

function checkUser_pass(){
    include "../includes/connection-db.php";

if (isset($_POST["Login"]))
{   $e_mail=$_POST['email'];
    $password=$_POST['password'];
    $passwordencrypt=md5($password);

    $sql="SELECT * FROM users  where email='$e_mail' AND password='$passwordencrypt' limit 1";
   

    // var_dump($sql);  
    $result = mysqli_query($conn, $sql);



    $user= mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result)=== 1)
    {   $_SESSION["userId"]  =$user['User_id'];

        header('Location:../screens/main-page.php');
        exit;
        

    }
    if (mysqli_num_rows($result)!== 1)
{

    echo "Email or Password is incorrect";  
}
    


}
}
?>