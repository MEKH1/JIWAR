
<?php

function checkUser_pass(){
    include "../includes/connection-db.php";

if (isset($_POST["login"]))
{   $e_mail=$_POST['email'];
    $password=$_POST['password'];
    // $passwordencrypt=md5($password);

    $sql="SELECT * FROM admin  where admin_name='$e_mail' AND admin_password='$password' limit 1";
   

    // var_dump($sql);  
    $result = mysqli_query($conn, $sql);



    $admin= mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result)=== 1)
    {   $_SESSION["admin"]  =$admin['admin_id'];

        header('Location:../screens/Users_home.php');

    }
    if (mysqli_num_rows($result)!== 1)
{

    echo "Email or Password is incorrect";  
}
    


}
}
?>