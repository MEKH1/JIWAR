<?php 

include "../includes/header-inc.php";
include "../components/nav.php"; 
include "../includes/connection-db.php";
?>

<?php


   $sql = "Select *  FROM products WHERE product_id = '". $_GET['cardid'] ."' ";


   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);

?>
<form action="" method="POST">
    <div class="row g-0">
        <div class="container">
            <div class="mb-1 col-4">
                <label class="form-label mx-3 my-1">Product Name</label>
                <input type="text" name="prod_namenew" class="form-control  mx-3"
                    value="<?php echo $row['Product_name']?>">
            </div>
        </div>

        <div class="container">
            <div class="mb-1 col-4">
                <label for="" class="form-label mx-3 my-1">Description</label>
                <input type="text" name="description_new" class="form-control  mx-3"
                    value="<?php echo $row['description'] ?>">
            </div>
        </div>
        <div class="container">
            <div class="mb-1 col-4">
                <label for="inputlg" class="form-label mx-3 my-1">Price</label>
                <input type="text" name="price_new" class="form-control  mx-3" value="<?php echo $row['price'] ?>">
            </div>
        </div>

    </div>

    <div class="container-btn ">

        <div class="button-effect ">
            <h2> </h2>

            <button type="submit" name="updatecard" class="my-3 effect effect-5 btn-danger"
                style="background-color: #336751;">
                Save Changes</button>
        </div>

    </div>


</form>





<?php
if(isset($_POST['updatecard']))
{


    $prod_namenew = $_POST['prod_namenew'];
    $description_new = $_POST['description_new'];
    $price_new=$_POST['price_new'];


    
    $sql = "UPDATE products SET Product_name='$prod_namenew', description ='$description_new', price = '$price_new' WHERE product_id='". $_GET['cardid'] ."' ";
    $result = mysqli_query($conn, $sql);
    echo "<meta http-equiv='refresh' content='0;URL=../screens/user-profile.php'>";




}

?>







<?php include "../components/footer.php";?>