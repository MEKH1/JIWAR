<?php 
$titlePage = "users page";
include "../includes/header-inc.php";
include "../components/redirect-admin.php";
include "../includes/connection-db.php";
include "../components/sidebar.php";
?>


<table class="table caption-top">
  <h1 class="text-danger  ">List of Reported Posts </h1>
  <thead>
    <tr>
      <th scope="col">User Email</th>
      <th scope="col">Product Name</th>
      <th scope="col">Report Reason</th>
      <th scope="col">Delete Post</th>
      <th scope="col">Remove Report</th>
      <th scope="col">Show User Profile</th>

    </tr>
  </thead>
  <tbody>
    <?php     $sql = "SELECT * FROM users 
                      INNER JOIN products ON users.User_id = products.user_post
                      INNER JOIN report ON products.product_id = report.product";
              $result=mysqli_query($conn,$sql);
              while($row= mysqli_fetch_assoc($result)){
?>
  <tr>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['Product_name']?></td>
    <td><?php echo $row['report_description']?></td>
    <td>  
<?php             echo "<a class='fav_btn' href='../includes/post_delete.php?cardid={$row['product_id']}'><button type='submit' name='Showuser' class='btn  btn-danger text-light'>
          Delete Post
      </button></a> 
     " ?>
   </td>
   <td>  
<?php             echo "<a class='fav_btn' href='../includes/report_delete.php?reportid={$row['report_id']}'><button type='submit' name='Showuser' class='btn  btn-warning text-light'>
          Remove Report
      </button></a> 
     " ?>
   </td>
      <td>  
<?php             echo "<a class='fav_btn' href='../screens/user-profile.php?userid={$row['User_id']}'><button type='submit' name='Showuser' class='btn  btn-success text-light'>
          Show Profile
      </button></a> 
     " ?>
   </td>
    </tr>

<?php } ?>

  </tbody>
</table>

<!-- SIDE BAR CLOSING    -->



<!-- <?php include "../includes/footer-inc.php"; ?> -->