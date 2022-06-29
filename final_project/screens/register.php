<?php 
$titlePage = "register";
include "../includes/header-inc.php";
include "../includes/register-inc.php";
 ?>
<img src="../images/wall3.jpg" id="bg" alt="">
<div class="container add-product-color">

    <form action="" method="post" enctype="multipart/form-data">

        <div class="row">
            <div class="col-sm-12">
                <div class="container m-5">
                    <h1>Register</h1>
                    <h2>Create New Account</h2>
                    <p>Already Have An Account? <a href="login.php">Login</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div id="wrapper">
                    <img class="user_image" id="output_image" />
                    <div class="input-group">
                        <input name="uploadfile" type="file" class="form-control" accept="image/*" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                            onchange="preview_image(event)">
                    </div>
                </div>


            </div>




            <div class=" col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <label class="form-label" for="first_name">First Name <i
                                class="bi bi-person-fill"></i></label><br>
                        <input class="form-control" required type="text" id="first_name" name="fullName">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="nickname">Nickname <i class="bi bi-person-fill"></i></label>
                        <input class="form-control" required type="text" id="nickName" name="nickName">
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="email">Email <i class="bi bi-at"></i></label><br>
                        <input class="form-control" required type="email" id="email" name="email">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="password">Password <i class="bi bi-key-fill"></i></label>
                        <input class="form-control" required type="password" id="password" name="password">
                    </div>
                    <div class="col-lg-6">
                        <label for="phone" class="form-label ">Phone Number <i class="bi bi-telephone-fill"></i></label>
                        <input class=" form-control " required type="number" name="phoneNumber" id="phone">
                    </div>
                    <div class="col-lg-6">
                        <label for="Dateofbirthday" class="form-label ">Date of Birthday </label>
                        <input id="Dateofbirthday" class=" form-control " required type="date" name="dateOfBirth">

                    </div>

                    <div class="col-lg-6">

                        <label for="bio" calss="form-label ">Account Bio<i class="bi bi-card-text ms-2"></i></label>
                        <textarea name="bio" id="bio" class="form-control   mt-2" cols="30" rows="7"></textarea>


                    </div>
                    <div class="col-lg-6">
                        <div class="col  mt-2 ">
                            <div class="  ">
                                <label class="form-label">Gender</label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input  " type="radio" name="gender" id="inlineRadio1"
                                    value=" male ">
                                <label class="form-check-label " for="inlineRadio1">Male <i
                                        class="bi bi-gender-male reg_icon_gender"></i></label>

                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input " type="radio" name="gender" id="inlineRadio2"
                                    value="female">
                                <label class="form-check-label " for="inlineRadio2">Female <i
                                        class="bi bi-gender-female reg_icon_gender"></i></label>

                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">

                            <label for="location" class="form-label ">Location <i
                                    class="bi bi-geo-alt-fill "></i></label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" required
                                name="location" placeholder="Type to search...">
                            <datalist id="datalistOptions">
                                <option value="Amman ">
                                <option value="Zarqa">
                                <option value="Mafraq">
                                <option value="Irbid">
                                <option value="Ajloun">
                            </datalist>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div>
                        <label class="form-lable">
                            Please read and confirm the following rules
                        </label>

                        <div class=" mt-1 ">
                            <input class="form-check-input" required type="checkbox" value="first" id="flexCheckDefault"
                                name="termsFirst">
                            <label class="form-check-label " for="flexCheckDefault">
                                I am fully responsible for my safty and the validity of any transaction.

                            </label>
                        </div>
                        <div class=" mt-1 ">
                            <input class="form-check-input " required type="checkbox" value="second"
                                id="flexCheckChecked" name="termsSecond">
                            <label class="form-check-label " for="flexCheckChecked">
                                I Am Over 16 Years Old.
                            </label>
                        </div>

                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-center mt-3">
                <div class="container-btn ">

                    <div class="button-effect">
                        <h5 class="text-danger"> <?php checkUser_pass(); ?></h5>

                        <button type="submit" name="submit" class="effect effect-5"> Register</button>
                    </div>

                </div>
            </div>

        </div>
    </form>
</div>



<?php include "../includes/footer-inc.php" ?>