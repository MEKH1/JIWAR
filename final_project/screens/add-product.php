<?php 
$titlePage = "register";
include "../includes/header-inc.php"; 
include "../components/redirect.php";
include "../components/nav.php"; 
require "../includes/get-categories.php"
?>

<div class="container add-product-color">

    <form action="../includes/add-product-inc.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-12">
                <div class="container m-5">
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
                    <div class="col-lg-10 mt-2">
                        <label class="form-label" for="productname">Product Name<i
                                class="bi bi-clipboard ms-2"></i></label><br>
                        <input class="form-control" required type="text" id="productname" name="productname">
                    </div>
                    <div class="col-lg-2  mt-2">
                        <label class=" form-label" for="Price">Price <i class="bi bi-cash ms-2"></i></label>
                        <div class="POC" data-placeholder="JD">
                            <input class="form-control  " required type=" text" id="Price" name="price">

                        </div>
                    </div>

                    <div class="col-lg-6 mt-2">
                        <label for="details" calss="form-label ">Product Details <i
                                class="bi bi-card-text ms-2"></i></label>
                        <textarea name="details" id="details" class="form-control   mt-2" cols="30" rows="7"></textarea>

                    </div>
                    <div class="col-lg-6 mt-2">
                        <label for="category" class="form-label ">Category <i class="bi bi-grid ms-2"></i></label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" required name="category"
                            placeholder="Type to search...">
                        <datalist id="datalistOptions">

                            <?php while($row1 = mysqli_fetch_array($result1)):;?>

                            <?php echo"<option value='$row1[0]'>$row1[1] </option> ";?>

                            <?php endwhile;?>
                        </datalist>
                        <div class=" mx-2 mt-2 ">

                            <div class="form-check form-check-inline col-3 ">
                                <input class="form-check-input  " type="radio" name="value" id="inlineRadio1"
                                    value=" paid ">
                                <label class="form-check-label " for="inlineRadio1">Paid </label>
                            </div>
                            <div class="form-check form-check-inline col-3">
                                <input class="form-check-input " type="radio" name="value" id="inlineRadio2"
                                    value="free">
                                <label class="form-check-label " for="inlineRadio2">Free </label>
                            </div><br>
                            <div class="form-check form-check-inline col-3">
                                <input class="form-check-input  " type="radio" name="type" id="inlineRadio3"
                                    value=" product ">
                                <label class="form-check-label " for="inlineRadio3">Product </label>
                            </div>
                            <div class="form-check form-check-inline col-3">
                                <input class="form-check-input " type="radio" name="type" id="inlineRadio4"
                                    value="service">
                                <label class="form-check-label " for="inlineRadio4">Service </label>
                            </div><br>
                            <div class="form-check form-check-inline col-3">
                                <input class="form-check-input  " type="radio" name="offer_request" id="inlineRadio5"
                                    value=" offer ">
                                <label class="form-check-label " for="inlineRadio5">Offer</label>
                            </div>
                            <div class="form-check form-check-inline col-3">
                                <input class="form-check-input  " type="radio" name="offer_request" id="inlineRadio6"
                                    value="request">
                                <label class="form-check-label " for="inlineRadio6">Request</label>
                            </div><br>
                            <div class="form-check form-check-inline col-3">
                                <input class="form-check-input  " type="radio" name="buy_rent" id="inlineRadio7"
                                    value=" buy_sell ">
                                <label class="form-check-label " for="inlineRadio7">Buy/Sell </label>
                            </div>
                            <div class="form-check form-check-inline col-3">
                                <input class="form-check-input " type="radio" name="buy_rent" id="inlineRadio8"
                                    value="rent">
                                <label class="form-check-label " for="inlineRadio8">Rent </label>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <button type="submit" name="submit" class="registeration_btn  btn-reg registeration_btn">
                    Add
                </button>
            </div>

        </div>
    </form>
</div>

<?php 

include "../includes/footer-inc.php" ?>