<?php 
$titlePage = "user profile";
include "../includes/header-inc.php";
include "../components/redirect.php";
require '../includes/connection-db.php';
include "../includes/edit-inc.php";
include "../components/nav.php";
?>

<section>
    <?php
        $sql1 = "SELECT * FROM users Where User_id='" . $_GET["userid"] . "'";
        $result = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($result);
        
    
        
       

?>


    <div class="container">

        <div class="row d-flex justify-content-evenly p-5">
            <div class="col col-lg-4">
                <img class="user_image" src="../images/<?php echo $row['image']; ?>" alt="">
            </div>
            <div class="d-flex flex-column bd-highlight mb-3 col col-lg-8">
                <div class="p-2 bd-highlight">
                    <div class="d-flex justify-content-evenly mb-3">
                        <h4 class="text-center"><?php      echo $row['Full_name'];  ?></h4>

                    </div>

                    <div class="p-2 bd-highlight">
                        <div class="d-flex justify-content-evenly">
                            <p class="px-3 pe-3 text-muted"> <?php    echo $row['location'];  ?> </p>
                            <p class="px-3 pe-3 text-muted"> <?php    echo $row['date_of_birth'];  ?> </p>
                            <p class="px-3 pe-3 text-muted"> <?php    echo $row['gender'];  ?> </p>

                        </div>
                    </div>

                    <div class="p-2 bd-highlight">
                        <p class="text-center"><?php    echo $row['Bio'];   ?></p>
                    </div>

                </div>
            </div>

        </div>

    </div>



    </div>
    </div>
    </div>


</section>





<section>

    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <hr class="horizental_line">
        </div>
        <div class="d-flex justify-content-center">

            <div class="d-flex bd-highlight">
                <div class="bd-highlight"><a href="#" class="btn-floating btn-sm  icon_user_profile"><i
                            class="fal fa-grip-horizontal profile_icon"></i>
                    </a></div>
                <a href="" class="pe-5  icontxt_user_profile">Posts</a>
            </div>



        </div>

</section>


<section class="container mt-2">

    <?php include "../components/product-card.php";?>

</section>


<?php include "../components/footer.php"; ?>

<?php include "../includes/footer-inc.php"; ?>