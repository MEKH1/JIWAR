<?php require '../includes/connection-db.php';?>

<div class="container col">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 g-lg-3">

        <?php          
            $sql = "SELECT * FROM categories";
                    
            $result=mysqli_query($conn,$sql);

        
        while($row= mysqli_fetch_assoc($result)){
?>
        <div class="col">
            <div class="col category-img-con">
                <!-- the variable of the label gose here -->
                <img src="../images/<?php echo $row['image'] ?>" alt="" width="270" height="150" class="category-img">
                <!-- the variable of the image goes here -->
                <?php
           echo  "<a href='../screens/main-page.php?cat_id= {$row['category_id']}'> <div class=' overlay'> {$row['label']}</div></a>";

        //    echo"<a style='color:white;      text-decoration: none;
        //    margin-top:8.6px;' href='home.php?id_relation= {$rows['id']}'
        //    value='$cat_name '> $cat_name  &nbsp &nbsp;
        //    </a>    "
     ?>
            </div>
        </div>

        <?php
        }
        ?>
    </div>
</div>

<!-- the final two are the closing tags for the sidenav -->
</div>

</div>