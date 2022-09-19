<?php
  include "../includes/connection-db.php";
  include "../components/dropdown-menu.php";

?>
<div class="container col">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 g-lg-3">
        <?php
            $url = $_SERVER['REQUEST_URI'];


                if(isset($_GET['cat_id'])){ 
    
                        $cat_id=$_GET['cat_id'];
                        $sql = "SELECT * FROM users INNER JOIN products ON users.User_id = products.user_post
                                 WHERE category= '$cat_id' ";
                         $result=mysqli_query($conn,$sql);
                
           
            }
                else {
                    if (!empty($_POST['search'])) {
                
                        // $search = mysqli_real_escape_string($conn,$_POST['search']);     
                        
                        $sql = "SELECT * FROM users 
                                INNER JOIN products ON users.User_id = products.user_post
                                WHERE Product_name 
                                LIKE '%".$_POST['search']."%' ";
                        $result=mysqli_query($conn,$sql);
                        }

                        elseif($url == '/jiwar/final_project/screens/Favscreen.php'){

                            $sql = "SELECT * FROM favourite  
                                    INNER JOIN products 
                                    ON products.product_id = favourite.product_foreign
                                    INNER JOIN users
                                    ON users.User_id =  favourite.user_foreign
                                    WHERE user_foreign= '" . $_SESSION["userId"] . "' ";
                            $result=mysqli_query($conn,$sql);

                        }
                        elseif(isset($_GET['userid']))
                        {

                            $sql="SELECT * from products 
                                  INNER JOIN users
                                  ON users.User_id =  products.user_post
                                  WHERE User_id = '" .$_GET['userid']. "' ";
                            $result=mysqli_query($conn,$sql);



                    }

                        
                        elseif($url =='/jiwar/final_project/screens/user-profile.php'){

                            $sql="SELECT * from products 
                                 INNER JOIN users
                                  ON users.User_id =  products.user_post
                                  WHERE User_id = '" . $_SESSION["userId"] . "' 
                        
                            ";
                            $result=mysqli_query($conn,$sql);


                        }
                        else {
                        
                            $sql = "SELECT * FROM users INNER JOIN products ON users.User_id = products.user_post";
                            $result=mysqli_query($conn,$sql);
                        
                        }  
                }

            while($row= mysqli_fetch_assoc($result)){
        ?>
        <div class="col">
            <div class="card_layout card mt-4 mx-4 mb-4">
                <div class="d-inline d-flex justify-content-around">


                    <a href="../screens/other-usersprofile.php?userid=<?php echo $row['User_id'] ?>"
                        class=' btn-floating mt-2 fw-normal fs-6 font-weight-bold btn-sm text-dark offer_title '
                        style="    display: inherit;;">


                        <img src='../images/<?php echo $row['image'] ?>' alt="NAN" class="avatar">
                        <!-- user profile image -->
                        <div class="mx-2 mt-2">
                            <h6 class="username_card text-dark"><?php echo $row['Nickname']?></h6>
                            <h6 class="userlocation_card"><?php echo $row['location']?></h6>
                        </div>
                    </a>
                    <?php

                        $uri = $_SERVER['REQUEST_URI'];
                    if($uri == '/jiwar/final_project/screens/user-profile.php' ) {
                    
                        Dropdown1($row['product_id']);
                    } else {
                        Dropdown2($row['product_id']);
                    } 
                    ?>

                </div>


                <div class='d-flex justify-content-start ms-3 my-1'>
                    <a href="../screens/product-details.php?cardid=<?php echo $row['product_id'] ?>"
                        class='    font-weight-bold  text-dark offer_title'>
                        <?php echo $row['Product_name']?>

                </div>
                <div class="container image_oncard my-1">
                    <img width="50px" src='../images/<?php echo $row['product_image']?>' class='card-img-top' height:
                        9rem; alt="Product Image Not Found">
                    <!-- product image -->
                </div>
                <div>

                    <div class='container text-container'>
                        <?php echo $row['description']?>
                    </div>

                    </a>
                </div>



                <div class="d-flex justify-content-between px-3 pe-3">
                    <p class="card-title text-Dark me-auto fw-bold">
                        <?php echo $row['price'];
                            echo " JOD"; 
                        ?>
                    </p>

                    <p class="px-3 card-title  text-muted">
                        <?php echo $row['date']?>
                    </p>

                    <?php
                    $sqlFav = "SELECT * FROM favourite
           WHERE user_foreign = '" .$_SESSION['userId'] . "' 
           AND product_foreign = '". $row['product_id']."' ";
           $resultFav = mysqli_query($conn, $sqlFav);
           
           if(mysqli_num_rows($resultFav)=== 1){
            echo "<a class='fav_btn' href='../includes/fav-inc.php?cardid={$row['product_id']}&user_session={$_SESSION['userId']}'><i class='bi bi-heart-fill text-danger  '></i></a> ";

            }
            if(mysqli_num_rows($resultFav)!== 1){
                echo "<a class='fav_btn' href='../includes/fav-inc.php?cardid={$row['product_id']}&user_session={$_SESSION['userId']}'><i class='bi bi-heart text-dark '></i></a> ";
            }
            ?>

                </div>


            </div>
        </div>
        <?php } ?>
    </div>
</div>