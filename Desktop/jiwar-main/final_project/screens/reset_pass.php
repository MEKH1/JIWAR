
    
    <?php 
$titlePage = "Reset Password";
include "../includes/header-inc.php"; ?>
    
    <form method="post" action="../includes/send_link.php">
      <p>Enter Email Address To Send Password Link</p>
      <input type="text" name="email">
      <input type="submit" name="submit_email">
    </form>



    <?php include "../includes/footer-inc.php" ?>