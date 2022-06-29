<?php 
$titlePage = "index";
include "../includes/header-inc.php"; 
include "../includes/connection-db.php";
include "../includes/adminlogin-inc.php";
?>
<div class="container addcenter loginform mt-5 pb-5">
    <h1 class="admin_icon d-flex justify-content-center"> 
        <i  class="bi bi-person-workspace"></i>
    </h1>
    <h2 class="pt-2">Adminstration Login Page</h2>
    <p  class=>We Care About Our Customers  </p>
    <form action="#" method="POST">

        <div class="fd loginforminput">
            <label style="padding-right:24.5rem;" for="text">Email</label>
            <i class="bi bi-at lead"></i>
            <input class="form-control-plaintext" type="text" name="email" id="email">
        </div>


        <h6 class="text-danger"> <?php checkUser_pass(); ?></h6>

        <div class="fd loginforminput"><label style="padding-right:22.7rem;" for="password">Password</label>
            <i class="bi bi-key-fill lead"></i>
            <input class="form-control-plaintext" type="password" name="password" id="password">
        </div>
       
        <button class="btn btn-success" name="login">Login Admin</button>
        
    </form>
</div>
<div class="container sidelogo"><img width="200xp" src="../images/Final-logo.png" alt=""></div>


<?php include "../includes/footer-inc.php" ?>