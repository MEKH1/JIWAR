
<?php

    include "../includes/connection-db.php";

    $sqlCheck = "SELECT * FROM favourite WHERE user_foreign = '" . $_GET['user_session'] . "' AND product_foreign = '". $_GET['cardid']."' LIMIT 1";
    $resultCheck = mysqli_query($conn, $sqlCheck);

    if(mysqli_num_rows($resultCheck)!== 1){

        $sql = "insert INTO favourite (user_foreign	, product_foreign) VALUES ('" . $_GET['user_session'] . "' , '". $_GET['cardid']."') ";
        $result = mysqli_query($conn, $sql); 
        // echo "<meta http-equiv='refresh' content='0;URL=../screens/main-page.php'>";

        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }elseif(mysqli_num_rows($resultCheck)=== 1){
        $sqlDelete = "DELETE FROM favourite WHERE user_foreign = '" . $_GET['user_session'] . "' AND product_foreign = '". $_GET['cardid']."' LIMIT 1";
        if (!(mysqli_query($conn,$sqlDelete))){
            echo "Error deleting record: " . mysqli_error($conn);
        }else{
            // echo "<meta http-equiv='refresh' content='0;URL=../screens/main-page.php'>";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
        }
    }
?>