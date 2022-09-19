<?php 
$titlePage = "product name";
include "../includes/header-inc.php"; 
include "../components/redirect.php";
include "../components/nav.php";
  include "../includes/connection-db.php";


?>

<div class="container">
    <div class="container pt-5 pb-5">

        <div class="row">
            <div class="col-lg-6">

                <img src='../images/<?php echo product_details('image'); ?>' alt="NAN" class="avatar ">
                <div class=" d-inline">


                    <?php product_details('Nickname'); ?><br>


                    <i class=" d-inline bi bi-geo-alt-fill"></i><?php product_details('location'); ?>
                </div>

                <div>
                    <img class="pdimg" src="../images/<?php product_details('product_image'); ?>" alt="">
                </div>
            </div>
            <div class=" col-lg-6 ">
                <p><?php product_details('type(product/service)');  ?> - <?php product_categories('label'); ?></p>

                <h4><?php product_details('Product_name'); ?></h4>
                <?php
                    $sqlFav = "SELECT * FROM favourite
           WHERE user_foreign = '" .$_SESSION['userId'] . "' 
           AND product_foreign = '".$_GET['cardid']."' ";
           $resultFav = mysqli_query($conn, $sqlFav);
           if(mysqli_num_rows($resultFav)=== 1){
            echo "<a class='fav_btn' href='../includes/fav-inc.php?cardid={$_GET['cardid']}&user_session={$_SESSION['userId']}'><i class='bi bi-heart-fill text-danger  '></i></a> ";

            }
            if(mysqli_num_rows($resultFav)!== 1){
                echo "<a class='fav_btn' href='../includes/fav-inc.php?cardid={$_GET['cardid']}&user_session={$_SESSION['userId']}'><i class='bi bi-heart '></i></a> ";
            }
            ?>



                <p class="pt-5">price <?php product_details('price'); ?> JD</p>
                <p class="pt-4"><?php product_details('description'); ?>
                </p>
                <button type="button" class="btn btn-success contact "><i class="bi bi-telephone"></i>Contact The
                    Seller
                    <?php product_details('phone_number'); ?> </button>
            </div>

        </div>
    </div>
</div>

<?php 
include "../components/footer.php";
include "../includes/footer-inc.php"; ?>