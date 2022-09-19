<?php
  include "../includes/connection-db.php";

?>
<div class="container col">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 g-lg-3">
        <?php
            $url = $_SERVER['REQUEST_URI'];


                if(isset($_GET['userid'])){ 
    
                        $cat_id=$_GET['userid'];
                        $sql = "SELECT * FROM users INNER JOIN products ON users.User_id = products.user_post
                                 WHERE user_post= '".$_GET['userid']."' ";
                         $result=mysqli_query($conn,$sql);
                
           
            }
         
            

            while($row= mysqli_fetch_assoc($result)){
        ?>
        <div class="col">
            <div class="card_layout card mt-4 mx-4 mb-4">
                <div class="d-flex justify-content-around">


                    <a class="d-flex justify-content-between profile_pic" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        <img src='../images/<?php echo $row['image'] ?>' alt="User Profile Image Not Found"
                            class="avatar me-2">
                        <!-- user profile image -->
                        <div class="me-5 mt-2">
                            <h6 class="username_card text-dark"><?php echo $row['Nickname']?></h6>
                            <h6 class="userlocation_card"><?php echo $row['location']?></h6>
                        </div>
                    </a>
                    <!-- Report Button  -->

                    <?php
                    $sqlreport = "SELECT * FROM report
                                  INNER JOIN  products
                                  on report.product = products.product_id 
                                  WHERE  product = '".$row['product_id']."' ";


           $resultreport = mysqli_query($conn, $sqlreport);
           
           if(mysqli_num_rows($resultreport)=== 1){
            echo "<a class='report_btn' href=''><i class='bi bi-flag-fill '></i></a> ";

            }
            if(mysqli_num_rows($resultreport)!== 1){
                echo "<a class='report_btn' href=''><i class='bi bi-flag '></i></a> ";
            }
            ?>

                </div>
                <div class="container image_oncard">
                    <img width="50px" src='../../images/<?php echo $row['product_image']?>' class="card-img-top" height:
                        9rem; alt="Product Image Not Found">
                    <!-- product image -->
                </div>
                <div>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn-floating btn-sm text-dark offer_title">
                            <?php echo $row['Product_name']?>
                        </a>
                        <a href="#" class="btn-floating btn-sm text-dark ">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                    <div class="container text-container">
                        <?php echo $row['description']?>
                    </div>
                </div>
                <div class="d-flex justify-content-between px-3 pe-3">
                    <p class="card-title text-muted">
                        <?php echo $row['price'];
                            echo " JOD"; 
                        ?>
                    </p>
                    <p class="card-title text-muted">
                        <?php 
                            echo " Status: ";
                            echo $row['offer/request'];
                            echo ", ";
                            echo $row['buy/rent'];
                        ?>
                    </p>
                    <p class="card-title text-muted">
                        <?php echo $row['date']?>
                    </p>



                </div>



            </div>
        </div>
        <?php } ?>
    </div>
</div>