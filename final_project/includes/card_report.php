<?php 

include "../includes/header-inc.php";
include "../components/nav.php"; 
include "../includes/connection-db.php";
?>
<form action="" method="POST">
    <div class="row g-0">
        <div class="mb-3 col-4">
            <label class="form-label m-3">Report Reason</label>
            <textarea name="Reason_report" id="Reason_report" class="form-control  mx-3" cols="10" rows="7"></textarea>
        </div>
    </div>



    <div class="container-btn ">

        <div class="button-effect ">
            <h2> </h2>

            <button type="submit" name="report_btn" class=" effect effect-5 btn-danger"
                style="background-color: Crimson;">
                Report</button>
        </div>

    </div>


</form>





<?php
if(isset($_POST['report_btn']))
{


    $report_reason = $_POST['Reason_report'];
 
    
    $sql = "insert INTO report (report_description, product) VALUES ('$report_reason', '". $_GET['cardid']."') ";
    $result = mysqli_query($conn, $sql);
    echo "<meta http-equiv='refresh' content='0;URL=../screens/main-page.php'>";




}

?>







<?php include "../components/footer.php";?>