<!-- Navbar -->

<nav class=" navbar navbar-expand-lg navbar-light nav_main">
    <div class="container-fluid justify-content-start">
        <a class="navbar-brand text-white logo_name ms-5" href="../screens/main-page.php"><img
                src="../images/final_logo.png" width="60px" alt="">
            JIWAR
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <div class="nav-item input-group search-bar">
                <div class="form-outline">
                    <form action="" method="Post">
                        <label for="search"><i class="text-white bi bi-search"></i></label>
                        <input type="text" class="search-click" name="search" id="search"
                            placeholder="search here..." />
                    </form>
                </div>

            </div>

            <ul class=" navbar-nav me-auto mb-2 mb-lg-0 ">



                <li class="nav-item width-m ">

                    <a class="nav-color  pt-0 pb-0" id="user" aria-current="page" href="../screens/main-page.php">
                        <div class=" icon1 icon1-fill"><i class="fa fa-home"></i>
                        </div>
                        <center><span class=" position-relative goup"> <?php echo $lang['home'] ?></span>
                        </center>
                    </a>
                </li>
                <li class="nav-item width-m">
                    <a class="nav-color pt-0 pb-0" aria-current="page" href="../screens/categories.php">
                        <div class=" icon1 icon1-enter">
                            <i class=" fs-2 ps-1  bi bi-tags-fill"></i>
                        </div>
                        <center><span class=" position-relative goup"><?php echo $lang['category'] ?></span>
                        </center>


                    </a>
                </li>
                <li class="nav-item width-m">
                    <a class="nav-color pt-0 pb-0" aria-current="page" href="../screens/add-product.php">
                        <div class="  icon1 icon1-expand"><i class="fs-2 bi bi-plus"></i>
                        </div>
                        <center><span class=" position-relative goup"><?php echo $lang['addpost'] ?></span></center>
                    </a>
                </li>
                <li class="nav-item width-m">
                    <a class=" nav-color pt-0 pb-0" aria-current="page" href="../screens/Favscreen.php">
                        <div class=" icon1 icon1-collapse"><i class="fs-2 bi bi-heart-fill"></i>
                        </div>
                        <center><span class=" position-relative goup"><?php echo $lang['favorite'] ?></span>
                        </center>
                    </a>
                </li>
                <li class="nav-item width-m">

                    <a class="nav-color  " aria-current="page" href="?lang=ar">
                        <div class=" icon1 icon1-rotate"> <i class="ms-2 fs-2 bi  bi-translate"></i>
                        </div>
                    </a>
                    <center><span class=" position-relative goup ">
                            <a class="text-white" href=" ?lang=en">en </a>
                            | <a class="text-white" href="?lang=ar">عر</a></span></center>


                </li>

            </ul>
            <div class=" justify-content-end">
                <ul class="nav-item dropdown mb-0">
                    <a class="nav-link  profile_pic p-0" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?php include "../components/avatar.php";  ?>
                    </a>

                    <ul class="drop_menu dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" id="profile_user"
                                href="../screens/user-profile.php"><?php echo $lang['profile'] ?></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../screens/Favscreen.php"><?php echo $lang['favorite'] ?></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../includes/logout-inc.php"><?php echo $lang['logout'] ?></a>
                        </li>
                    </ul>
                    </ui>
            </div>

        </div>
    </div>
</nav>