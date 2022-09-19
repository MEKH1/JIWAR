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
    if (isset($_POST['save'])) {
        $uID = $conn->real_escape_string($_POST['uID']);
        $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
        $ratedIndex++;

        if (!$uID) {
            $conn->query("INSERT INTO stars (rateIndex) VALUES ('$ratedIndex')");
            $sql = $conn->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
            $uData = $sql->fetch_assoc();
            $uID = $uData['id'];
        } else
            $conn->query("UPDATE stars SET rateIndex='$ratedIndex' WHERE id='$uID'");

        exit(json_encode(array('id' => $uID)));
    }

    $sql = $conn->query("SELECT id FROM stars");
    $numR = $sql->num_rows;

    $sql = $conn->query("SELECT SUM(rateIndex) AS total FROM stars");
    $rData = $sql->fetch_array();
    $total = $rData['total'];

    $avg = $total / $numR;
?>
    <div class="container">

        <div class="row d-flex justify-content-evenly p-5">
            <div class="col col-lg-4">
                <img class="user_image" src="<?php alt_img() ?>" alt="">
            </div>
            <div class="d-flex flex-column bd-highlight mb-3 col col-lg-8">
                <div class="p-2 bd-highlight">
                    <div class="d-flex justify-content-evenly mb-3">
                        <h4 class="text-center"><?php   user_details("Full_name");  ?></h4>

                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#Edit_pops">
                            <?php echo $lang['editprofile'] ?>
                        </button>
                    </div>

                    <div class="p-2 bd-highlight">
                        <div class="d-flex justify-content-evenly">
                            <p class="px-3 pe-3 text-muted"> <?php   user_details("location");  ?> </p>
                            <p class="px-3 pe-3 text-muted"> <?php   user_details("date_of_birth");  ?> </p>
                            <p class="px-3 pe-3 text-muted"> <?php   user_details("gender");  ?> </p>
                            <div align="center">
                                <i class=" fa fa-star " data-index=" 0"></i>
                                <i class="fa fa-star " data-index="1"></i>
                                <i class="fa fa-star " data-index="2"></i>
                                <i class="fa fa-star " data-index="3"></i>
                                <i class="fa fa-star " data-index="4"></i>

                                <?php echo round($avg,2) ?>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 bd-highlight">
                        <p class="text-center"><?php   user_details("Bio");  ?></p>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="Edit_pops" tabindex="-1" aria-labelledby="Edit_popsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Edit_popsLabel"><?php echo $lang['edityourinformation'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="" method="POST" enctype="multipart/form-data">


                        <div class="mb-3">
                            <label class="form-label">
                                <h6 class="text-center text-muted"><?php echo $lang['edityourprofilepicture'] ?></h6>
                            </label>
                            <input type="file" name="file1" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label class="form-label"><?php echo $lang['nickname'] ?></label>
                            <input type="text" name="nickname_new" class="form-control"
                                value="<?php user_details("Nickname");?>">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label me-3"><?php echo $lang['location'] ?></label>
                            <input type="text" name="location_new" class="form-control"
                                value="<?php user_details("location"); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="inputlg" class="form-label me-3"><?php echo $lang['bio'] ?></label>
                            <textarea class="form-control" cols="35" rows="12" name="new_bio" id="para1">
                                        <?php user_details("Bio");?>
                                        </textarea><br>

                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label me-3"><?php echo $lang['oldpassword'] ?></label>
                            <input class="form-control" type="password" name="old_password">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label me-3"><?php echo $lang['yournewpassword'] ?></label>
                            <input class="form-control" type="password" name="new_password">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal"><?php echo $lang['close'] ?></button>
                            <button type="submit" name="update"
                                class="btn pop_btn"><?php echo $lang['savechanges'] ?></button>
                        </div>

                    </form>




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
                <a href="" class="pe-5  icontxt_user_profile"><?php echo $lang['posts'] ?></a>
            </div>

            <div class="d-flex bd-highlight">
                <div class="bd-highlight"><a href="../screens/add-product.php"
                        class="btn-floating btn-sm icon_user_profile"><i class="fas fa-plus profile_icon"></i></a></div>
                <a href="../screens/add-product.php"
                    class="pe-5 icontxt_user_profile"><?php echo $lang['addpost'] ?></a>
            </div>

            <div class="d-flex bd-highlight ">
                <div class="bd-highlight"><a href="../screens/Favscreen.php"
                        class="btn-floating btn-sm icon_user_profile"><i class="far fa-heart profile_icon"></i></a>
                </div>
                <a href="../screens/Favscreen.php" class="icontxt_user_profile"><?php echo $lang['favorite'] ?></a>

            </div>


        </div>

</section>


<section class="container mt-2">

    <?php include "../components/product-card.php"?>

</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
var ratedIndex = -1,
    uID = 0;

$(document).ready(function() {
    resetStarColors();

    if (localStorage.getItem('ratedIndex') != null) {
        setStars(parseInt(localStorage.getItem('ratedIndex')));
        uID = uID;
    }

    $('.fa-star').on('click', function() {
        ratedIndex = parseInt($(this).data('index'));
        localStorage.setItem('ratedIndex', ratedIndex);
        saveToTheDB();
    });

    $('.fa-star').mouseover(function() {
        resetStarColors();
        var currentIndex = parseInt($(this).data('index'));
        setStars(currentIndex);
    });

    $('.fa-star').mouseleave(function() {
        resetStarColors();

        if (ratedIndex != -1)
            setStars(ratedIndex);
    });
});

function saveToTheDB() {
    $.ajax({
        url: "user-profile.php",
        method: "POST",
        dataType: 'json',
        data: {
            save: 1,
            uID: uID,
            ratedIndex: ratedIndex
        },
        success: function(r) {
            uID = $_SESSION["userId"];
            localStorage.setItem('uID', uID);
        }
    });
}

function setStars(max) {
    for (var i = 0; i <= max; i++)
        $('.fa-star:eq(' + i + ')').css('color', 'gold');
}

function resetStarColors() {
    $('.fa-star').css('color', 'grey');
}
</script>
<?php include "../components/footer.php" ?>
<?php include "../includes/footer-inc.php" ?>