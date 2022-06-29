<?php 
$titlePage = "index";
include "../includes/header-inc.php"; 
include "../includes/connection-db.php";
include "../includes/login-inc.php";
?>
<img src="../images/wall3.jpg" id="bg" alt="">


<div class="container add-product-color addcenter maxlog ">

    <form action="#" method="POST">

        <div class="row">
            <div class="col-sm-12 mt-5">
                <div class="container m-5 ms-0">
                    <h1>Login</h1>
                    <h2>To Your Account</h2>
                    <p>Don't Have An Account? <a href="register.php">Register</a></p>
                </div>
            </div>
            <div class="col-lg-10">
                <label class="form-label" for="email">Email <i class="bi bi-at"></i></label><br>
                <input class="form-control" required type="email" id="email" name="email">
            </div>
            <div class="col-lg-10">
                <label class="form-label" for="password">Password <i class="bi bi-key-fill"></i></label>
                <input class="form-control" required type="password" id="password" name="password">
            </div>
            <h6 class="text-danger"> <?php checkUser_pass(); ?></h6>
            <a href="../screens/reset_pass.php">Forgot Password?</a>

            <div class="container-btn ">

                <div class="button-effect">
                    <h2> </h2>

                    <button type="submit" name="Login" class="effect effect-5"> Login</button>
                </div>

            </div>


        </div>
    </form>
</div>
<!-- <div class="container addcenter loginform mt-5">
    <h2 class="pt-5">Login To Your Account</h2>
    <p class=>Dont Have An Account? <a href="../screens/register.php">Register</a></p>






    <form action="#" method="POST">

        <div class="fd loginforminput">
            <label style="padding-right:24.5rem;" for="email">Email</label>
            <i class="bi bi-at lead"></i>
            <input class="form-control-plaintext" type="email" name="email" id="email">
        </div>



        <div class="fd loginforminput"><label style="padding-right:22.7rem;" for="password">Password</label>
            <i class="bi bi-key-fill lead"></i>
            <input class="form-control-plaintext" type="password" name="password" id="password">
        </div>

        <h6 class="text-danger"> <?php checkUser_pass(); ?></h6>
        <a href="../screens/reset_pass.php">Forgot Password?</a>
        <input class="btn btn-secondary btn-add loginforminput ms-0" type="submit" name="Login">
        <p class="text-center">OR LOGIN WITH </p>
        <p class="text-center pb-4"><i class="m-4 lead bi bi-google"></i><i class=" lead bi bi-facebook"></i>
        </p>


    </form>
</div>
<div class="container sidelogo"><img width="200xp" src="../images/Final-logo.png" alt=""></div> -->


<?php include "../includes/footer-inc.php" ?>