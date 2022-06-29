<?php 
$titlePage = "user profile";
include "../includes/header-inc.php";
include "../components/redirect-admin.php";
include "../components/sidebar.php";
include "../includes/connection-db.php";
?>


<section>
    <?php $id= $_GET['userid'];
$sql = "SELECT * FROM users WHERE User_id= '$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

 ?>
    <div class="container">

        <div class="row d-flex justify-content-evenly p-5">
            <div class="col col-lg-4">
                <img class="user_image" src="../images/<?php echo $row['image'] ?>" alt="">
            </div>
            <div class="d-flex flex-column bd-highlight mb-3 col col-lg-8">
                <div class="p-2 bd-highlight">
                    <div class="d-flex justify-content-evenly mb-3">
                        <h4 class="text-center"><?php   echo $row["Full_name"];  ?></h4>

                        <form method="POST">
                            <button type="submit" name="Delete" class="btn btn-danger">
                                Delete Profile
                            </button>

                        </form>
                    </div>

                    <div class="p-2 bd-highlight">
                        <div class="d-flex justify-content-evenly">
                            <p class="px-3 pe-3 text-muted"> <?php   echo $row["location"];  ?> </p>
                            <p class="px-3 pe-3 text-muted"> <?php   echo $row["email"];  ?> </p>
                            <p class="px-3 pe-3 text-muted"> <?php  echo $row["phone_number"];    ?> </p>
                        </div>
                    </div>

                    <div class="p-2 bd-highlight">
                        <p class="text-center"><?php   echo $row["Bio"];  ?></p>
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
        <div class="d-flex justify-content-start ms-5 ps-5">

            <div class="d-flex bd-highlight">
                <div class="bd-highlight"><a href="#" class="btn-floating btn-sm  icon_user_profile"><i
                            class="fal fa-grip-horizontal profile_icon"></i>
                    </a></div>
                <a href="" class="pe-5  icontxt_user_profile">Posts</a>
            </div>



        </div>

</section>


<section class="container mt-2">

    <?php include "../components/product-card.php"?>

</section>


<?php 

if(isset($_POST['Delete'])){


    $sql = "DELETE FROM users WHERE User_id = '$id' ";

 
    $result = mysqli_query($conn, $sql);
 

    echo "<meta http-equiv='refresh' content='0;URL=../screens/Users_home.php'>";

}



?>

<?php include "../includes/footer-inc.php" ?>