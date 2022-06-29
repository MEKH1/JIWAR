<?php 
$titlePage = "users page";
include "../includes/header-inc.php";
include "../components/redirect-admin.php";
include "../includes/connection-db.php";
// include "../components/nav.php"; 
include "../components/sidebar.php";
?>


<table class="table caption-top">
  <h1 class="text-success">List of Users</h1>
  <thead>
    <tr>
      <th scope="col">UserID</th>
      <th scope="col">User Full Name</th>
      <th scope="col">User NickName</th>
      <th scope="col">User Email</th>
      <th scope="col">Show User Profile</th>
    </tr>
  </thead>
  <tbody>
    <?php $sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
while($row= mysqli_fetch_assoc($result)){
?>
  <tr>
      <th scope="row"> <?php echo $row['User_id']?> </th>
      <td><?php echo $row['Full_name']?></td>
      <td><?php echo $row['Nickname']?></td>
      <td><?php echo $row['email']?></td>
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



<?php include "../includes/footer-inc.php"; ?>